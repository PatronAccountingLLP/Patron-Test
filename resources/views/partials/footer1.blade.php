<!-- Footer -->
<footer class="py-5 footer-background">
    <!-- WhatsApp Subscription Banner -->
<section class="whatsapp-subscription-banner">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-lg-3 col-md-12 mb-3 mb-lg-0">
                <h3 class="whatsapp-heading">Get Compliance Due Date Updates on WhatsApp.</h3>
            </div>
            <div class="col-lg-9 col-md-12">
                <form class="whatsapp-subscribe-form" id="whatsappSubscribeForm">
                    <div class="input-group">
                        <span class="input-group-text country-code">
                            <img src="{{ asset('images/india.png') }}" alt="India" class="flag-icon">
                            <span>+91</span>
                        </span>
                        <input type="tel" class="form-control phone-input" placeholder="Your Mobile no." maxlength="10" pattern="[0-9]{10}" required>
                        <button type="submit" class="btn btn-subscribe">
                            <img src="{{ asset('images/whatsapp.svg') }}" alt="WhatsApp" style="width: 20px; height: 20px;">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <div class="container">
        <div class="row">
            @php 
            $domain = config('app.url');
            @endphp
            <!-- Useful Links Section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h4 class="text-dark mb-3 fw-semibold"  style="color: #F26522 !important; font-size: 1rem;">Useful Links</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/privacy-policy" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Privacy Policy</a></li>
                    <li class="mb-2"><a href="/contact-page" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Contact us</a></li>
                    <li class="mb-2"><a href="{{ route('frontend.aboutusnew') }}" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">About Us</a></li>
                    <li class="mb-2"><a href="/terms-and-conditions" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Terms & Conditions</a></li>
                    <li class="mb-2"><a href="/cancellation-and-refund" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Cancellation & Refund</a></li>
                    <li class="mb-2"><a href="/refer-and-earn" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Refer & Earn</a></li>
                    <li class="mb-2"><a href="/career" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Career</a></li>
                    {{-- <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Partner with us</a></li> --}}
                    <li class="mb-2"><a href="/meet-our-founder" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Meet our Founder</a></li>
                    <li class="mb-2"><a href="{{ route('frontend.posts.index') }}" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Guides & Resources</a></li>
                    <li class="mb-2"><a href="/tools" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Free Online Tools</a></li>
                    <li class="mb-2"><a href="/disclaimer" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Disclaimer</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Cookie Policy</a></li>
                </ul>
            </div>

            <!-- Industries Section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h4 class="text-dark mb-3 fw-semibold"  style="color: #F26522 !important; font-size: 1rem;">Industries</h4>
                   <ul class="list-unstyled">
                    <li class="mb-2"><a href="/accounting-services" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Accounting & Bookkeeping</a></li>
                    <li class="mb-2"><a href="/payroll-services" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Payroll Services</a></li>
                    <li class="mb-2"><a href="/internal-audit" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Internal Audit</a></li>
                    <li class="mb-2"><a href="/income-tax-return" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Income Tax Filing</a></li>
                    <li class="mb-2"><a href="/gst-registration" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">GST Registration</a></li>
                    <li class="mb-2"><a href="/company-registration" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Company Registration</a></li>
                    <li class="mb-2"><a href="/trademark-registration" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Trademark Registration</a></li>
                    <li class="mb-2"><a href="/llp-incorporation" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">LLP Registration</a></li>
                    <li class="mb-2"><a href="/one-person-company-registration" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">OPC Registration</a></li>
                    <li class="mb-2"><a href="/gst-return-filing" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">GST Return Filing</a></li>
                    <li class="mb-2"><a href="/startup-registration-in-india" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">Startup Registration</a></li>
                    <li class="mb-2"><a href="/fssai-registration" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">FSSAI Registration</a></li>
                    <li class="mb-2"><a href="/iec-registration" class="text-muted text-decoration-none hover-primary" style="font-size: 0.9rem;">IEC Registration</a></li>
                </ul>
                
                
                <!-- Payment Methods -->
                 <div class="payment-methods-section mt-4">
                    <p class="text-muted mb-2" style="font-size: 0.75rem; opacity: 0.7;"><i class="bi bi-shield-lock-fill" style="color: #28a745; margin-right: 4px;"></i>100% Secure Payments</p>
                    <div class="payment-logos">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='30'%3E%3Crect width='60' height='30' rx='4' fill='%23fff'/%3E%3Ctext x='50%25' y='55%25' text-anchor='middle' font-size='12' font-weight='bold' fill='%23333' font-family='Arial'%3EUPI%3C/text%3E%3C/svg%3E" alt="UPI" class="payment-logo">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='70' height='30'%3E%3Crect width='70' height='30' rx='4' fill='%23fff'/%3E%3Ctext x='50%25' y='55%25' text-anchor='middle' font-size='10' font-weight='bold' fill='%235f259f' font-family='Arial'%3EPhonePe%3C/text%3E%3C/svg%3E" alt="PhonePe" class="payment-logo">
                    </div>
                    <div class="payment-logos mt-2">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='30'%3E%3Crect width='60' height='30' rx='4' fill='%23fff'/%3E%3Ctext x='50%25' y='55%25' text-anchor='middle' font-size='10' font-weight='bold' fill='%230072BC' font-family='Arial'%3ERuPay%3C/text%3E%3C/svg%3E" alt="RuPay" class="payment-logo">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='30'%3E%3Crect width='60' height='30' rx='4' fill='%23fff'/%3E%3Ccircle cx='23' cy='15' r='10' fill='%23EB001B' opacity='0.8'/%3E%3Ccircle cx='37' cy='15' r='10' fill='%23F79E1B' opacity='0.8'/%3E%3C/svg%3E" alt="Mastercard" class="payment-logo">
                    </div>
                </div>
            </div>


            <!-- Company Info Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <!-- Call us on Section -->
                <h4 class="text-dark mb-3 fw-semibold" style="color: #F26522 !important; font-size: 1rem;">Call us on</h4>
<!-- Contact Info -->
                <div class="mt-4">
                    <div class="">
                        <strong class="text-white" style="font-size: 1.2rem;"><a href="tel:+919459456700" style="text-decoration: none; color: #Fff !important;">+91 945 945 6700</a></strong>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted" style="color: #F26522 !important;">Mon - Fri, 9am - 7pm | Sat, 9am - 3pm</small>
                    </div>
                    
                    <h4 class="fw-semibold mb-2 mt-4" style="color: #F26522 !important; font-size: 1rem;">Write us on</h4>
                    <div class="mb-4">
                        <a href="mailto:sales@patronaccounting.com" class="footer-email-link">
                            sales@patronaccounting.com
                        </a>
                    </div>
                </div>
                <div class="mt-3 mb-4">
                    <a href="https://www.google.com/search?q=Patron+Accounting+LLP+Pune" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.08); padding: 8px 14px; border-radius: 8px;">
                            <span style="color: #fbbc04; font-size: 1rem;">★★★★★</span>
                            <span style="color: #ffffff; font-size: 0.8rem; font-weight: 500;">Rated 4.9 on Google</span>
                            <span style="color: rgba(255,255,255,0.5); font-size: 0.75rem;">(400+ reviews)</span>
                        </div>
                    </a>
                </div>
                <!-- Follow us on -->
                <div class="mt-4">
                    <h4 class="text-dark fw-semibold" style="color: #F26522 !important; font-size: 1rem;">Follow us on</h4>
                    <hr class="my-2" style="border:unset !important; width:78px; opacity: unset !important; height: 3px; background-color: #F26522;">
                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/share/1BqqRYkpJX/" target="_blank" rel="noopener noreferrer" class="text-muted fs-5 hover-primary" aria-label="Follow us on Facebook">
                            <i class="bi bi-facebook" style="font-size: 22px; color: #ffffff;"></i>
                        </a>
                        <a href="https://www.instagram.com/patronaccounting/" class="text-muted fs-5 hover-primary">
                            <img src="{{ asset('images/insta.png') }}" alt="Instagram Icon" style="width: 22px; height: 22px;">
                        </a>
    
                        <a href="https://in.linkedin.com/company/patron-accounting-llp" target="_blank" rel="noopener noreferrer" class="text-muted fs-5 hover-primary" aria-label="Follow us on LinkedIn">
                            <img src="{{ asset('images/link.svg') }}" alt="LinkedIn Icon" style="width: 22px; height: 22px;">
                        </a>
                        <a href="https://www.youtube.com/@patronaccountingllp7130" target="_blank" rel="noopener noreferrer" class="text-muted fs-5 hover-primary" aria-label="Subscribe on YouTube">
                            <i class="bi bi-youtube" style="font-size: 22px; color: #ffffff;"></i>
                        </a>
                        <a href="https://x.com/LlpPatron" target="_blank" rel="noopener noreferrer" class="text-muted fs-5 hover-primary" aria-label="Follow us on X">
                            <i class="bi bi-twitter-x" style="font-size: 20px; color: #ffffff;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h4 class="text-dark mb-3 fw-semibold"  style="color: #F26522 !important; font-size: 1rem;">Contact us</h4>
                
               <!-- Address 1 - Pune HQ -->
                <address class="mb-3" style="font-style: normal;">
                    <a href="https://maps.google.com/?q=Patron+Accounting+LLP+RTC+Silver+Wagholi+Pune" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <div class="d-flex align-items-start mb-2">
                        <i class="bi bi-geo-alt-fill text-warning me-2 mt-1"></i>
                        <div>
                            <small class="footer-address-content">
                                <strong>RTC Silver, B4-708, Sai Satyam Park, Wagholi, Pune, Maharashtra-412207</strong>
                            </small>
                        </div>
                    </div>
                    </a>
                </address>
                
                <!-- Address 2 - Mumbai -->
                <address class="mb-3" style="font-style: normal;">
                    <a href="https://maps.google.com/?q=Patron+Accounting+LLP+Rajshila+Building+Marine+Lines+Mumbai" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <div class="d-flex align-items-start mb-2">
                        <i class="bi bi-geo-alt-fill text-warning me-2 mt-1"></i>
                        <div>
                            <small class="footer-address-content">
                                <strong>104, 1st Floor, Rajshila Building, 597, Jagannath Shankar Seth Rd, Marine Lines, Mumbai, Maharashtra-400002</strong>
                            </small>
                        </div>
                    </div>
                    </a>
                </address>
                
                <!-- Address 3 - Delhi -->
                <address class="mb-3" style="font-style: normal;">
                    <a href="https://maps.google.com/?q=Patron+Accounting+LLP+Rohini+Sector+5+Delhi" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <div class="d-flex align-items-start mb-2">
                        <i class="bi bi-geo-alt-fill text-warning me-2 mt-1"></i>
                        <div>
                            <small class="footer-address-content">
                                <strong>3rd Floor, B-6/154-155, Sector 5, Rohini, Delhi-110085</strong>
                            </small>
                        </div>
                    </div>
                    </a>
                </address>

                <!-- Address 4 - Gurugram -->
                <address class="mb-4" style="font-style: normal;">
                    <a href="https://maps.google.com/?q=Patron+Accounting+LLP+Pioneer+Urban+Square+Sector+62+Gurugram" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <div class="d-flex align-items-start mb-2">
                        <i class="bi bi-geo-alt-fill text-warning me-2 mt-1"></i>
                        <div>
                            <small class="footer-address-content">
                                <strong>Pioneer Urban Square, B109, Golf Course Ext Rd, Sector 62, Gurugram, Haryana-122098</strong>
                            </small>
                        </div>
                    </div>
                    </a>
                </address>
            </div>
        </div>

        <!-- Serving Cities Line -->
        <div class="row mt-2 mb-3">
            <div class="col-12 text-center">
                <p style="color: rgba(255,255,255,0.4); font-size: 0.78rem; margin-bottom: 0;">Serving clients in Pune, Mumbai, Delhi, Gurugram, Bangalore, Hyderabad, Chennai & across India</p>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="row align-items-center mt-4 pt-4" style="border-top: 1px solid rgba(255,255,255,0.08);">
            <div class="col-md-7 col-12 text-start">
                <small style="color: #c5c2c2; font-size: 0.8rem;">© 2026 Patron Accounting LLP. All Rights Reserved.</small>
                <br>
                <small style="color: rgba(255,255,255,0.4); font-size: 0.7rem;">ICAI Registered | Registered with MCA | Est. 2019</small>
            </div>
            <div class="col-md-5 col-12 text-md-end text-start mt-2 mt-md-0">
                <a href="/privacy-policy" style="color: #c5c2c2; font-size: 0.75rem; text-decoration: none; margin-right: 12px;">Privacy Policy</a>
                <a href="/terms-and-conditions" style="color: #c5c2c2; font-size: 0.75rem; text-decoration: none; margin-right: 12px;">Terms</a>
                <a href="/sitemap.xml" style="color: #c5c2c2; font-size: 0.75rem; text-decoration: none;">Sitemap</a>
            </div>
        </div>
    </div>
    <!-- WhatsApp Floating Button -->
<a href="https://wa.me/919459456700?text=Hi, I would like to know more about your services" 
   target="_blank" 
   class="whatsapp-float-btn" 
   aria-label="Chat on WhatsApp">
    <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp" />
    <span class="whatsapp-tooltip">Chat with us</span>
</a>
</footer>

<style>
    /* WhatsApp Subscription Banner Styles */
    .whatsapp-subscription-banner {
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        padding: 40px 0;
        position: relative;
    }
    
    .whatsapp-subscription-banner .container {
        position: relative;
        z-index: 2;
    }
    
    .whatsapp-heading {
        color: #ffffff;
        font-size: 2rem;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
        max-width: 361px;
    }
    
    .whatsapp-subscribe-form {
        max-width: 895px;
        margin-left: auto;
    }
    
    .whatsapp-subscribe-form .input-group {
        background: white;
        border-radius: 50px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    .whatsapp-subscribe-form .country-code {
        background: white;
        border: none;
        padding: 0 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        border-right: 2px solid #CDCDCD;
    }
    
    .flag-icon {
        width: 54px;
        height: 35px;
        object-fit: cover;
        border-radius: 2px;
    }
    
    .whatsapp-subscribe-form .country-code span {
        color: #61666D;
        font-weight: 400;
        width: 54px;
        height: 42px;
        align-items: center;
        display: flex;
        text-align: center;
        justify-content: center;
        border: 1px solid #CDCDCD;
        border-radius: 8px;
   }
    
    .whatsapp-subscribe-form .phone-input {
        border: none;
        padding: 15px 20px;
        font-size: 1rem;
        flex: 1;
    }
    
    .whatsapp-subscribe-form .phone-input:focus {
        box-shadow: none;
        outline: none;
    }
    
    .whatsapp-subscribe-form .btn-subscribe {
        background: #F26522;
        color: white;
        border: none;
        padding: 15px 35px;
        font-weight: 600;
        border-radius: 50px;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        white-space: nowrap;
    }
    
    .whatsapp-subscribe-form .btn-subscribe:hover {
        background: #d94d0f;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(242, 101, 34, 0.4);
    }
    
    .whatsapp-subscribe-form .btn-subscribe i {
        font-size: 1.2rem;
    }
    
    @media (max-width: 991px) {
        .whatsapp-heading {
            font-size: 1.5rem;
            text-align: center;
        }
        
        .whatsapp-subscribe-form {
            margin: 0 auto;
        }
    }
    
    @media (max-width: 768px) {
        .whatsapp-subscription-banner {
            padding: 30px 0;
        }
        
        .whatsapp-heading {
            font-size: 1.5rem;
            text-align: center;
            max-width: 100%;
        }
        
        .whatsapp-subscribe-form {
            margin: 0 auto;
        }
        
        .whatsapp-subscribe-form .input-group {
            flex-wrap: nowrap;
        }
        
        .whatsapp-subscribe-form .country-code {
            padding: 0 10px;
        }
        
        .flag-icon {
            width: 40px;
            height: 26px;
        }
        
        .whatsapp-subscribe-form .country-code span {
            width: 45px;
            height: 36px;
            font-size: 0.9rem;
        }
        
        .whatsapp-subscribe-form .phone-input {
            padding: 12px 15px;
            font-size: 0.95rem;
        }
        
        .whatsapp-subscribe-form .btn-subscribe {
            padding: 12px 25px;
            font-size: 0.9rem;
        }
    }
    
    @media (max-width: 576px) {
        .whatsapp-subscription-banner {
            padding: 25px 0;
        }
        
        .whatsapp-heading {
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .whatsapp-subscribe-form {
            max-width: 100%;
        }
        
        .whatsapp-subscribe-form .input-group {
            flex-wrap: wrap;
            border-radius: 12px;
        }
        
        .whatsapp-subscribe-form .country-code {
            flex: 0 0 auto;
            padding: 10px 12px;
            border-right: 2px solid #CDCDCD;
            border-radius: 12px 0 0 0;
        }
        
        .flag-icon {
            width: 35px;
            height: 23px;
        }
        
        .whatsapp-subscribe-form .country-code span {
            width: 40px;
            height: 32px;
            font-size: 0.85rem;
        }
        
        .whatsapp-subscribe-form .phone-input {
            flex: 1 1 auto;
            min-width: 0;
            padding: 10px 12px;
            font-size: 0.9rem;
            border-radius: 0 12px 0 0;
        }
        
        .whatsapp-subscribe-form .btn-subscribe {
            flex: 1 1 100%;
            border-radius: 0 0 12px 12px;
            justify-content: center;
            padding: 12px 20px;
            font-size: 0.9rem;
            margin-top: 0;
            border-top: 1px solid #f0f0f0;
        }
        
        .whatsapp-subscribe-form .btn-subscribe img {
            width: 18px !important;
            height: 18px !important;
        }
    }
    
    @media (max-width: 375px) {
        .whatsapp-heading {
            font-size: 1.1rem;
        }
        
        .whatsapp-subscribe-form .country-code {
            padding: 8px 10px;
        }
        
        .flag-icon {
            width: 30px;
            height: 20px;
        }
        
        .whatsapp-subscribe-form .country-code span {
            width: 35px;
            height: 28px;
            font-size: 0.8rem;
        }
        
        .whatsapp-subscribe-form .phone-input {
            padding: 8px 10px;
            font-size: 0.85rem;
        }
        
        .whatsapp-subscribe-form .btn-subscribe {
            padding: 10px 15px;
            font-size: 0.85rem;
        }
    }
    
    /* WhatsApp Floating Button Styles */
.whatsapp-float-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
    z-index: 1000;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    text-decoration: none;
    animation: pulse 2s infinite;
}

.whatsapp-float-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 30px rgba(37, 211, 102, 0.6);
    animation: none;
}

.whatsapp-float-btn img {
    width: 35px;
    height: 35px;
    /* filter: brightness(0) invert(1); */
}

.whatsapp-tooltip {
    position: absolute;
    right: 75px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.85);
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    pointer-events: none;
}

.whatsapp-tooltip::after {
    content: '';
    position: absolute;
    right: -6px;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 6px solid rgba(0, 0, 0, 0.85);
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
}

.whatsapp-float-btn:hover .whatsapp-tooltip {
    opacity: 1;
    visibility: visible;
    right: 80px;
}

@keyframes pulse {
    0%, 100% {
        box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
    }
    50% {
        box-shadow: 0 4px 30px rgba(37, 211, 102, 0.7);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .whatsapp-float-btn {
        bottom: 20px;
        right: 20px;
        width: 55px;
        height: 55px;
    }
    
    .whatsapp-float-btn img {
        width: 30px;
        height: 30px;
    }
    
    .whatsapp-tooltip {
        font-size: 12px;
        padding: 6px 12px;
    }
}
    .hover-primary:hover {
        color: #0d6efd !important;
        transition: color 0.3s ease;
    }
    
    footer {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    
    footer h4 {
        color: #F26522 !important;
        font-weight: 600;
        font-size: 1rem;
    }
    
    footer .text-muted {
        color: #ffffff !important;
    }
    
    footer .text-dark {
        color: #ffffff !important;
    }
    
    @media (max-width: 768px) {
        footer .col-lg-4, 
        footer .col-lg-2 {
            margin-bottom: 2rem;
        }
        
        footer .d-flex.gap-3 {
            justify-content: center;
        }
        
        footer .text-md-end {
            text-align: center !important;
        }
    }
    
    @media (max-width: 576px) {
        footer {
            padding: 2rem 0 !important;
        }

        .whatsapp-float-btn{
            display: none;
        }
        
        footer .container {
            padding: 0 1rem;
        }
        
        footer h4 {
            font-size: 0.95rem;
        }
        
        footer .d-flex.flex-wrap {
            justify-content: center;
            gap: 1rem !important;
        }
        
        footer small {
            font-size: 0.8rem;
        }
    }
    
    /* Logo gradient styling */
    footer .btn-gradient {
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        border: none;
    }
    
    /* Footer background styling */
    .footer-background {
        background-color: #021429cc;
        background-image: url('{{ asset('images/footer-bg.jpg') }}');
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
    }
    
    .footer-email-link {
        font-family: 'DM Sans', sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 14px;
        line-height: 150%;
        letter-spacing: 0%;
        text-decoration: underline;
        text-decoration-style: solid;
        text-decoration-offset: 0%;
        text-decoration-thickness: 0%;
        color: #ffffff;
    }
    
    .footer-email-link:hover {
        color: #F26522;
        text-decoration: underline;
    }
    
    .footer-address-content {
        font-family: 'DM Sans', sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 14px;
        line-height: 150%;
        letter-spacing: 0%;
        color: #ffffff;
        text-decoration: none;
        text-decoration-style: solid;
    }
    
    /* Payment Methods Section */
    .payment-methods-section {
        margin-top: 20px;
    }
    
    .btn-whatsapp-update {
        background: #F26522;
        color: white;
        border: none;
        padding: 10px 25px;
        font-weight: 600;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        text-decoration: none;
        font-size: 12px;
    }
    
    .btn-whatsapp-update:hover {
        background: #d94d0f;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(242, 101, 34, 0.4);
    }
    
    .btn-whatsapp-update i {
        font-size: 1.1rem;
    }
    
    .payment-logos {
        display: flex;
        gap: 15px;
        align-items: center;
    }

</style>
<script>
// WhatsApp Subscription Form Handler
document.addEventListener('DOMContentLoaded', function() {
    const whatsappForm = document.getElementById('whatsappSubscribeForm');
    
    if (whatsappForm) {
        const phoneInput = whatsappForm.querySelector('.phone-input');
        const submitBtn = whatsappForm.querySelector('.btn-subscribe');
        const btnText = submitBtn.textContent;
        
        // Allow only numbers in phone input
        phoneInput.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
            // Remove error styling if user starts typing
            this.style.borderColor = '';
        });
        
        whatsappForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const phoneNumber = phoneInput.value.trim();
            
            // Validate phone number
            if (phoneNumber.length !== 10 || !/^\d{10}$/.test(phoneNumber)) {
                phoneInput.style.borderColor = '#dc3545';
                showNotification('error', 'Please enter a valid 10-digit mobile number');
                return;
            }
            
            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Subscribing...';
            
            // Prepare form data
            const formData = new FormData();
            formData.append('whatsapp_number', phoneNumber);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]')?.content || '');
            
            // Send request to backend API
            fetch('/api/whatsapp-subscription', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Reset form
                    phoneInput.value = '';
                    phoneInput.style.borderColor = '#28a745';
                    
                    // Show success message
                    showNotification('success', data.message || 'Successfully subscribed! Check your WhatsApp for confirmation.');
                } else {
                    throw new Error(data.message || 'Subscription failed. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                phoneInput.style.borderColor = '#dc3545';
                showNotification('error', error.message || 'An error occurred. Please try again later.');
            })
            .finally(() => {
                // Reset button state
                submitBtn.disabled = false;
                submitBtn.innerHTML = btnText;
            });
        });
    }
    
    // Notification function
    function showNotification(type, message) {
        // Remove existing notifications
        const existingNotif = document.querySelector('.whatsapp-notification');
        if (existingNotif) {
            existingNotif.remove();
        }
        
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `whatsapp-notification ${type === 'success' ? 'success' : 'error'}`;
        notification.innerHTML = `
            <div class="notification-content">
                <i class="bi bi-${type === 'success' ? 'check-circle-fill' : 'exclamation-circle-fill'}"></i>
                <span>${message}</span>
            </div>
        `;
        
        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            background: ${type === 'success' ? '#10b981' : '#ef4444'};
            color: white;
            padding: 16px 24px;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.3s ease-out;
            font-size: 14px;
            max-width: 400px;
        `;
        
        // Add to body
        document.body.appendChild(notification);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease-out';
            setTimeout(() => notification.remove(), 300);
        }, 5000);
    }
    
    // Add animation styles
    if (!document.querySelector('#whatsapp-notification-styles')) {
        const style = document.createElement('style');
        style.id = 'whatsapp-notification-styles';
        style.textContent = `
            @keyframes slideIn {
                from {
                    transform: translateX(400px);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            @keyframes slideOut {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(400px);
                    opacity: 0;
                }
            }
            .whatsapp-notification .notification-content {
                display: flex;
                align-items: center;
                gap: 12px;
            }
            .whatsapp-notification i {
                font-size: 20px;
            }
        `;
        document.head.appendChild(style);
    }
});
</script>

<!-- Back to Top Button -->
<div id="backToTop" class="back-to-top-btn">
    <img src="{{ asset('images/up-arrow.png') }}" width="20" height="20" alt="Back to Top" />
</div>

<style>
/* Back to Top Button Styles */
.back-to-top-btn {
    position: fixed;
    bottom: 30px;
    left: 30px;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #ffffffff 0%, #ffffffff 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    box-shadow: 0 4px 20px rgba(233, 181, 139, 0.3);
    z-index: 1000;
}

.back-to-top-btn.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.back-to-top-btn:hover {
    border: 1px solid #F26522;
}

.back-to-top-btn i {
    color: white;
    font-size: 18px;
    transition: transform 0.3s ease;
}

.back-to-top-btn:hover i {
    transform: translateY(-2px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .back-to-top-btn {
        bottom: 20px;
        left: 20px;
        width: 45px;
        height: 45px;
    }
    
    .back-to-top-btn i {
        font-size: 16px;
    }
}

/* Animation for scroll progress indicator */
.back-to-top-btn::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: conic-gradient(transparent, #fff);
    border-radius: 50%;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.back-to-top-btn:hover::before {
    opacity: 0.3;
}
</style>

<script>
// Back to Top Functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('backToTop');
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });
    
    // Smooth scroll to top when clicked
    backToTopBtn.addEventListener('click', function() {
        // Add click animation
        this.style.transform = 'scale(0.95)';
        setTimeout(() => {
            this.style.transform = '';
        }, 150);
        
        // Smooth scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        
        // Alternative smooth scroll for older browsers
        if (!window.scroll || !window.scrollTo) {
            smoothScrollToTop();
        }
    });
    
    // Fallback smooth scroll function for older browsers
    function smoothScrollToTop() {
        const currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
        if (currentScroll > 0) {
            window.requestAnimationFrame(smoothScrollToTop);
            window.scrollTo(0, currentScroll - (currentScroll / 8));
        }
    }
});
</script>