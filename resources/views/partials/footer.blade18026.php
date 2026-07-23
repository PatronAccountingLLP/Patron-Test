    <style>body{margin:0;padding:0;background:#f0f0f0;}  .trust-badge-stat{font-size:2rem;}
  .trust-badge-label{font-size:.9rem;}
  .footer-logo-img{height:60px;max-width:180px;}
  .footer-main-container{padding-top:64px;padding-bottom:24px;}
}
</style>
<script>
(function () {
    function initOfficeTabs() {
        var buttons = document.querySelectorAll('.office-tab-btn');
        if (!buttons.length) return;
        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var footer = this.closest('footer') || document;
                footer.querySelectorAll('.office-tab-btn').forEach(function (b) {
                    b.classList.remove('active');
                    b.setAttribute('aria-selected', 'false');
                });
                footer.querySelectorAll('.office-tab-pane').forEach(function (p) {
                    p.classList.remove('active');
                });
                this.classList.add('active');
                this.setAttribute('aria-selected', 'true');
                var target = document.getElementById('tab-' + this.getAttribute('data-tab'));
                if (target) target.classList.add('active');
            });
        });
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initOfficeTabs);
    } else {
        initOfficeTabs();
    }
})();
</script>

</head>
<body>

<link rel="alternate" hreflang="en-in" href="/" />

<!-- TRUST BADGE BAND -->
<section class="trust-badge-band" aria-label="Trust Indicators">
    <div class="trust-badges-wrapper">
        <div class="trust-badge-card"><i class="bi bi-people-fill trust-badge-icon"></i><div class="trust-badge-stat">10,000+</div><div class="trust-badge-label">Happy Clients</div><p class="trust-badge-desc">Helping businesses stay compliant and stress-free.</p></div>
        <div class="trust-badge-card"><i class="bi bi-award-fill trust-badge-icon"></i><div class="trust-badge-stat">15+</div><div class="trust-badge-label">Years Experience</div><p class="trust-badge-desc">Deep expertise in GST, Income Tax, ROC & business compliance.</p></div>
        <div class="trust-badge-card"><i class="bi bi-file-earmark-check-fill trust-badge-icon"></i><div class="trust-badge-stat">50,000+</div><div class="trust-badge-label">Documents Filed</div><p class="trust-badge-desc">Returns, registrations, and filings handled accurately.</p></div>
        <div class="trust-badge-card"><i class="bi bi-star-fill trust-badge-icon"></i><div class="trust-badge-stat">4.9★</div><div class="trust-badge-label">Client Rating</div><p class="trust-badge-desc">Trusted by entrepreneurs, startups, and growing businesses.</p></div>
        <div class="trust-badge-card"><i class="bi bi-patch-check-fill trust-badge-icon"></i><div class="trust-badge-stat">ISO</div><div class="trust-badge-label">Certified</div><p class="trust-badge-desc">Professional standards and documented processes.</p></div>
        <div class="trust-badge-card"><i class="bi bi-shield-lock-fill trust-badge-icon"></i><div class="trust-badge-stat">SSL</div><div class="trust-badge-label">Secure</div><p class="trust-badge-desc">Your financial and business data is fully protected.</p></div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer-background">

    <!-- WhatsApp Subscription Banner -->
    <section class="whatsapp-subscription-banner" aria-label="WhatsApp Updates">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-lg-3 col-md-12 mb-3 mb-lg-0">
                    <h3 class="whatsapp-heading">Get Compliance Due Date Updates on WhatsApp.</h3>
                </div>
                <div class="col-lg-9 col-md-12">
                    <form class="whatsapp-subscribe-form" id="whatsappSubscribeForm">
                        <div class="input-group">
                            <span class="input-group-text country-code">
                                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/40px-Flag_of_India.svg.png" alt="India" class="flag-icon">
                                <span>+91</span>
                            </span>
                            <input type="tel" class="form-control phone-input" placeholder="Your Mobile no." maxlength="10" pattern="[0-9]{10}" inputmode="numeric" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>
                            <button type="submit" class="btn btn-subscribe">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#25D366" viewBox="0 0 16 16"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/></svg>
                                Subscribe
                            </button>
                        </div>
                        <p class="text-center mt-2 mb-0" style="font-size:0.7rem;color:rgba(255,255,255,0.5);">By subscribing, you agree to our <a href="/privacy-policy" style="color:rgba(255,255,255,0.7);text-decoration:underline;">Privacy Policy</a>.</p>
                        <p class="text-center mt-1 mb-0" style="font-size:0.7rem;color:rgba(255,255,255,0.4);">Outside India? <a href="https://wa.me/919459456700" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.65);text-decoration:underline;">WhatsApp us directly ↗</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Footer Grid -->
    <div class="container footer-main-container">
        <div class="row g-4">

            <!-- COL 1: Organisation -->
            <div class="col-lg-3 col-md-6 col-12 order-1 order-lg-1">
                <nav aria-label="Organisation">
                    <a href="/" class="footer-logo-wrap" aria-label="Patron Accounting Home">
                        <img src="data:image/png;base64,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" alt="Patron Accounting LLP" class="footer-logo-img">
                    </a>
                    <h4 class="footer-heading" style="margin-top:16px;">Organisation</h4>
                    <p class="footer-org-desc">GST, Income Tax, Payroll &amp; Company Registration — multi-disciplinary led compliance services for startups and SMEs across India, powered by Zoho Books.</p>
                    <div class="footer-contact-row">
                        <i class="bi bi-telephone-fill footer-contact-icon"></i>
                        <a href="tel:+919459456700" class="footer-contact-link">+91 945 945 6700</a>
                    </div>
                    <div class="footer-contact-hours">Mon – Fri 9am – 7pm &nbsp;|&nbsp; Sat 9am – 3pm</div>
                    <div class="footer-contact-row mt-2">
                        <i class="bi bi-envelope-fill footer-contact-icon"></i>
                        <a href="mailto:sales@patronaccounting.com" class="footer-contact-link">sales@patronaccounting.com</a>
                    </div>
                    <a href="https://www.google.com/search?q=Patron+Accounting+LLP" target="_blank" rel="noopener noreferrer" class="google-review-pill" aria-label="View Google Reviews">
                        <svg width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        <span class="google-pill-stars">★★★★★</span>
                        <span class="google-pill-text">4.9 on Google avg</span>
                        <span class="google-pill-count">· 4 offices · 500+ reviews</span>
                    </a>
                    <div class="mt-2 mb-3">
                        <div class="footer-section-label">Follow us on</div>
                        <div class="social-icons-row">
                            <a href="https://www.facebook.com/share/1BqqRYkpJX/" target="_blank" rel="noopener noreferrer" class="social-icon-link" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/patronaccounting/" target="_blank" rel="noopener noreferrer" class="social-icon-link" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://in.linkedin.com/company/patron-accounting-llp" target="_blank" rel="noopener noreferrer" class="social-icon-link" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="https://www.youtube.com/@patronaccountingllp7130" target="_blank" rel="noopener noreferrer" class="social-icon-link" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                            <a href="https://x.com/LlpPatron" target="_blank" rel="noopener noreferrer" class="social-icon-link" aria-label="X / Twitter"><i class="bi bi-twitter-x"></i></a>
                        </div>
                    </div>
                    <div class="payment-section">
                        <div class="footer-section-label"><i class="bi bi-shield-lock-fill" style="color:#28a745;margin-right:4px;font-size:0.7rem;"></i>100% Secure Payments</div>
                        <div class="payment-logos-row">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='44' height='24'%3E%3Crect width='44' height='24' rx='4' fill='%23fff'/%3E%3Ctext x='50%25' y='56%25' text-anchor='middle' font-size='10' font-weight='bold' fill='%23333' font-family='Arial'%3EUPI%3C/text%3E%3C/svg%3E" alt="UPI" class="payment-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='56' height='24'%3E%3Crect width='56' height='24' rx='4' fill='%23fff'/%3E%3Ctext x='50%25' y='56%25' text-anchor='middle' font-size='8' font-weight='bold' fill='%235f259f' font-family='Arial'%3EPhonePe%3C/text%3E%3C/svg%3E" alt="PhonePe" class="payment-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='24'%3E%3Crect width='48' height='24' rx='4' fill='%23fff'/%3E%3Ctext x='50%25' y='56%25' text-anchor='middle' font-size='8' font-weight='bold' fill='%230072BC' font-family='Arial'%3ERuPay%3C/text%3E%3C/svg%3E" alt="RuPay" class="payment-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='24'%3E%3Crect width='40' height='24' rx='4' fill='%23fff'/%3E%3Ccircle cx='15' cy='12' r='9' fill='%23EB001B' opacity='0.85'/%3E%3Ccircle cx='25' cy='12' r='9' fill='%23F79E1B' opacity='0.85'/%3E%3C/svg%3E" alt="Mastercard" class="payment-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='44' height='24'%3E%3Crect width='44' height='24' rx='4' fill='%231A1F71'/%3E%3Ctext x='50%25' y='56%25' text-anchor='middle' font-size='9' font-weight='bold' fill='%23ffffff' font-family='Arial'%3EVISA%3C/text%3E%3C/svg%3E" alt="Visa" class="payment-logo">
                        </div>
                    </div>
                </nav>
            </div>

            <!-- COL 2: Popular Services -->
            <div class="col-lg-2 col-md-6 col-12 order-3 order-lg-2">
                <nav aria-label="Popular Services">
                    <h4 class="footer-heading">Popular Services</h4>
                    <div class="footer-service-group-label">GSTAT &amp; Litigation</div>
                    <ul class="list-unstyled footer-links-list mb-2">
                        <li><a href="/gstat-appeal-filing" class="footer-link">GSTAT Appeal Filing</a></li>
                        <li><a href="/gstat-principal-bench-representation" class="footer-link">GSTAT Principal Bench</a></li>
                        <li><a href="/gstat-state-bench-representation" class="footer-link">GSTAT State Bench</a></li>
                        <li><a href="/gst-notice/" class="footer-link">GST Notice Reply</a></li>
                        <li><a href="/income-tax-notice/" class="footer-link">Income Tax Notice Reply</a></li>
                    </ul>
                    <div class="footer-service-group-label">Services</div>
                    <ul class="list-unstyled footer-links-list">
                        <li><a href="/zoho-books-accounting" class="footer-link">Zoho Books Accounting</a></li>
                        <li><a href="/gst-registration" class="footer-link">GST Registration</a></li>
                        <li><a href="/gst-returns" class="footer-link">GST Return Filing</a></li>
                        <li><a href="/income-tax-return" class="footer-link">Income Tax Filing</a></li>
                        <li><a href="/private-limited-company-registration" class="footer-link">Company Registration</a></li>
                        <li><a href="/llp-incorporation" class="footer-link">LLP Registration</a></li>
                        <li><a href="/trademark-registration" class="footer-link">Trademark Registration</a></li>
                        <li><a href="/payroll-processing-and-management-services" class="footer-link">Payroll Services &amp; EOR</a></li>
                        <li><a href="/internal-audit" class="footer-link">Internal Audit</a></li>
                    </ul>
                </nav>
            </div>

            <!-- COL 3: Popular Industries -->
            <div class="col-lg-2 col-md-6 col-12 order-4 order-lg-3">
                <nav aria-label="Popular Industries">
                    <h4 class="footer-heading">Popular Industries</h4>
                    <ul class="list-unstyled footer-links-list">
                        <li><a href="/gstat-appeal-ecommerce" class="footer-link">E-commerce</a></li>
                        <li><a href="/gstat-appeal-it-software" class="footer-link">IT / Software</a></li>
                        <li><a href="/gstat-appeal-real-estate" class="footer-link">Construction &amp; Real Estate</a></li>
                        <li><a href="/gstat-appeal-healthcare" class="footer-link">Healthcare</a></li>
                        <li><a href="/gstat-appeal-restaurants" class="footer-link">Hospitality &amp; Restaurants</a></li>
                        <li><a href="/gstat-appeal-exporters" class="footer-link">Exporters</a></li>
                        <li><a href="/gstat-appeal-manufacturers" class="footer-link">Manufacturers</a></li>
                        <li><a href="/gstat-appeal-importers" class="footer-link">Importers</a></li>
                        <li><a href="/gstat-appeal-startups" class="footer-link">Startups</a></li>
                        <li><a href="/gstat-appeal-education" class="footer-link">Education</a></li>
                    </ul>
                    <p class="footer-industry-note">Links to industry-specific GSTAT dispute services</p>
                </nav>
            </div>

            <!-- COL 4: Useful Links -->
            <div class="col-lg-2 col-md-6 col-12 order-5 order-lg-4">
                <nav aria-label="Useful Links">
                    <h4 class="footer-heading">Useful Links</h4>
                    <ul class="list-unstyled footer-links-list">
                        <li><a href="/about-us" class="footer-link">About Us</a></li>
                        <li><a href="/meet-our-founder" class="footer-link footer-link-highlight">Meet Our Founder <i class="bi bi-arrow-up-right" style="font-size:0.6rem;"></i></a></li>
                        <li><a href="/career" class="footer-link">Career</a></li>
                        <li><a href="/refer-and-earn" class="footer-link footer-link-highlight">Refer &amp; Earn <i class="bi bi-arrow-up-right" style="font-size:0.6rem;"></i></a></li>
                        <li><a href="/partner-with-us" class="footer-link footer-link-highlight">Partner With Us <i class="bi bi-arrow-up-right" style="font-size:0.6rem;"></i></a></li>
                        <li><a href="/blog" class="footer-link">Guides &amp; Resources</a></li>
                        <li><a href="/tools" class="footer-link footer-link-highlight">Free Online Tools <i class="bi bi-arrow-up-right" style="font-size:0.6rem;"></i></a></li>
                        <li><a href="/compliance-calendar" class="footer-link footer-link-highlight" style="white-space:nowrap;font-size:0.78rem;">India Compliance Calendar <i class="bi bi-arrow-up-right" style="font-size:0.6rem;vertical-align:middle;"></i></a></li>
                    </ul>
                </nav>
            </div>

            <!-- COL 5: Our Offices -->
            <div class="col-lg-3 col-md-6 col-12 order-2 order-lg-5">
                <h4 class="footer-heading">Our Offices</h4>
                <div class="office-tabs" role="tablist" aria-label="Office Locations">
                    <div class="office-tab-buttons">
                        <button class="office-tab-btn active" data-tab="pune" type="button" data-bs-toggle="false" role="tab" aria-selected="true" aria-controls="tab-pune">Pune (HQ)</button>
                        <button class="office-tab-btn" data-tab="mumbai" type="button" data-bs-toggle="false" role="tab" aria-selected="false" aria-controls="tab-mumbai">Mumbai</button>
                        <button class="office-tab-btn" data-tab="delhi" type="button" data-bs-toggle="false" role="tab" aria-selected="false" aria-controls="tab-delhi">Delhi</button>
                        <button class="office-tab-btn" data-tab="gurugram" type="button" data-bs-toggle="false" role="tab" aria-selected="false" aria-controls="tab-gurugram">Gurugram</button>
                    </div>
                    <div class="office-tab-pane active" id="tab-pune" role="tabpanel">
                        <address style="font-style:normal;"><div class="office-address-row"><i class="bi bi-geo-alt-fill office-icon"></i><span class="office-address-text">RTC Silver, B4-708, Sai Satyam Park, Wagholi, Pune, Maharashtra – 412207</span></div></address>
                        <div class="office-meta-row"><i class="bi bi-clock office-icon-sm"></i> Mon–Fri 9am–7pm &nbsp;·&nbsp; Sat 9am–3pm</div>
                        <div class="office-meta-row"><i class="bi bi-star-fill office-icon-sm" style="color:#fbbc04;"></i> 4.7 &nbsp;·&nbsp; 198 reviews</div>
                        <a href="https://maps.google.com/?q=Patron+Accounting+LLP+RTC+Silver+Wagholi+Pune" target="_blank" rel="noopener noreferrer" class="office-maps-btn">View on Google Maps <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                    <div class="office-tab-pane" id="tab-mumbai" role="tabpanel">
                        <address style="font-style:normal;"><div class="office-address-row"><i class="bi bi-geo-alt-fill office-icon"></i><span class="office-address-text">104, 1st Floor, Rajshila Building, 597, Jagannath Shankar Seth Rd, Marine Lines, Mumbai – 400002</span></div></address>
                        <div class="office-meta-row"><i class="bi bi-clock office-icon-sm"></i> Mon–Sat 9am–5pm</div>
                        <div class="office-meta-row"><i class="bi bi-star-fill office-icon-sm" style="color:#fbbc04;"></i> 4.6 &nbsp;·&nbsp; 24 reviews</div>
                        <a href="https://maps.google.com/?q=Patron+Accounting+LLP+Rajshila+Building+Marine+Lines+Mumbai" target="_blank" rel="noopener noreferrer" class="office-maps-btn">View on Google Maps <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                    <div class="office-tab-pane" id="tab-delhi" role="tabpanel">
                        <address style="font-style:normal;"><div class="office-address-row"><i class="bi bi-geo-alt-fill office-icon"></i><span class="office-address-text">3rd Floor, B-6/154-155, Sector 5, Rohini, Delhi – 110085</span></div></address>
                        <div class="office-meta-row"><i class="bi bi-clock office-icon-sm"></i> Open 24 / 7</div>
                        <div class="office-meta-row"><i class="bi bi-star-fill office-icon-sm" style="color:#fbbc04;"></i> 4.9 &nbsp;·&nbsp; 44 reviews</div>
                        <a href="https://maps.google.com/?q=Patron+Accounting+LLP+Rohini+Sector+5+Delhi" target="_blank" rel="noopener noreferrer" class="office-maps-btn">View on Google Maps <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                    <div class="office-tab-pane" id="tab-gurugram" role="tabpanel">
                        <address style="font-style:normal;"><div class="office-address-row"><i class="bi bi-geo-alt-fill office-icon"></i><span class="office-address-text">Pioneer Urban Square, B109, Golf Course Ext Rd, Sector 62, Gurugram, Haryana – 122098</span></div></address>
                        <div class="office-meta-row"><i class="bi bi-clock office-icon-sm"></i> Mon–Sun 9am–7pm</div>
                        <div class="office-meta-row"><i class="bi bi-star-fill office-icon-sm" style="color:#fbbc04;"></i> 4.9 &nbsp;·&nbsp; 180 reviews</div>
                        <a href="https://maps.google.com/?q=Patron+Accounting+LLP+Pioneer+Urban+Square+Sector+62+Gurugram" target="_blank" rel="noopener noreferrer" class="office-maps-btn">View on Google Maps <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>

        </div><!-- /row -->

        <!-- Serving Cities -->
        <div class="row mt-2">
            <div class="col-12 text-center">
                <p class="serving-cities-text">Serving clients in Pune · Mumbai · Delhi · Gurugram · Bangalore · Hyderabad · Chennai & across India</p>
            </div>
        </div>

    </div><!-- /container -->

    <!-- Orange Secondary Strip -->
    <div class="footer-orange-strip">
        <div class="footer-orange-strip-inner">
            <a href="/privacy-policy" class="strip-link">Privacy Policy</a>
            <span class="strip-dot">·</span>
            <a href="/terms-and-conditions" class="strip-link">Terms &amp; Conditions</a>
            <span class="strip-dot">·</span>
            <a href="/cancellation-and-refund" class="strip-link">Cancellation &amp; Refund</a>
            <span class="strip-dot">·</span>
            <a href="/contact-page" class="strip-link">Contact Us</a>
            <span class="strip-dot">·</span>
            <a href="/sitemap.xml" class="strip-link">Sitemap</a>
            <span class="strip-dot">·</span>
            <a href="/disclaimer" class="strip-link">Disclaimer</a>
            <span class="strip-dot">·</span>
            <a href="/cookie-policy" class="strip-link">Cookie Policy</a>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom-bar">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-lg-6 col-12 mb-2 mb-lg-0">
                    <div class="copyright-text">© 2026 Patron Accounting LLP. All Rights Reserved.</div>
                </div>
                <div class="col-lg-6 col-12 text-lg-end">
                    <div class="d-flex gap-2 justify-content-lg-end justify-content-start flex-wrap">
                        <span class="credential-pill"><i class="bi bi-check-circle-fill" style="color:#28a745;font-size:0.6rem;"></i> MCA Registered</span>
                        <span class="credential-pill"><i class="bi bi-check-circle-fill" style="color:#28a745;font-size:0.6rem;"></i> Est. 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp Float -->
    <a href="https://wa.me/919459456700?text=Hi, I would like to know more about your services" target="_blank" rel="noopener noreferrer" class="whatsapp-float-btn wa-link wa-floating" aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" viewBox="0 0 16 16"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/></svg>
        <span class="whatsapp-tooltip">Chat with us</span>
    </a>

</footer>

<!-- Back to Top -->
<div id="backToTop" class="back-to-top-btn" role="button" aria-label="Back to top" tabindex="0"><i class="bi bi-arrow-up"></i></div>

<style>
:root{--orange:#F26522;--orange-dark:#d94d0f;--orange-glow:rgba(242,101,34,0.15);--footer-bg:#0d1421;--badge-bg:#1a1a1a;--border-soft:rgba(255,255,255,0.08);--text-muted-f:rgba(255,255,255,0.50);--text-link-f:rgba(255,255,255,0.65);}
.trust-badge-band{background:var(--badge-bg);border-bottom:1px solid rgba(255,255,255,0.05);overflow:hidden;}
.trust-badges-wrapper{display:flex;overflow-x:auto;scroll-snap-type:x mandatory;-webkit-overflow-scrolling:touch;scrollbar-width:none;}
.trust-badges-wrapper::-webkit-scrollbar{display:none;}
.trust-badge-card{flex:1 0 0%;min-width:140px;border-top:2px solid var(--orange);padding:10px 14px 8px;scroll-snap-align:start;transition:transform .28s ease,background .28s ease,box-shadow .28s ease;position:relative;border-right:1px solid rgba(255,255,255,0.05);cursor:default;}
.trust-badge-card:last-child{border-right:none;}
.trust-badge-card:hover{background:rgba(242,101,34,0.06);transform:translateY(-3px);box-shadow:0 6px 20px rgba(242,101,34,0.12);z-index:1;}
.trust-badge-icon{display:block;font-size:.85rem;color:var(--orange);margin-bottom:4px;opacity:.9;}
.trust-badge-stat{font-size:1.1rem;font-weight:700;color:var(--orange);line-height:1.1;margin-bottom:3px;letter-spacing:-.3px;}
.trust-badge-label{font-size:.72rem;font-weight:600;color:#fff;margin-bottom:3px;line-height:1.3;}
.trust-badge-desc{font-size:.65rem;color:var(--text-muted-f);line-height:1.45;margin:0;}
.footer-background{
    background-color:var(--footer-bg);
    background-image:
        linear-gradient(160deg,rgba(14,22,44,0.85) 0%,rgba(8,13,26,0.95) 100%),
        radial-gradient(ellipse at 0% 0%,rgba(242,101,34,0.10) 0%,transparent 50%),
        radial-gradient(ellipse at 100% 100%,rgba(30,48,88,0.4) 0%,transparent 55%),
        radial-gradient(circle,rgba(255,255,255,0.035) 1px,transparent 1px);
    background-size: cover, 28px 28px;
    background-position: top left, top left;
    position: relative;
    overflow: hidden;
    color: var(--text-link-f);
}
.footer-main-container{padding-top:52px;padding-bottom:48px;position:relative;z-index:1;}
.footer-orange-strip{position:relative;z-index:1;}
.footer-bottom-bar{position:relative;z-index:1;}
.footer-heading{color:var(--orange);font-size:.82rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;margin-bottom:1.1rem;padding-bottom:8px;border-bottom:2px solid rgba(242,101,34,0.25);display:inline-block;width:100%;}
.footer-logo-wrap{display:inline-block;margin-bottom:4px;}
.footer-logo-img{height:54px;width:auto;max-width:160px;object-fit:contain;object-position:left center;display:block;}
.footer-org-desc{font-size:.82rem;color:var(--text-muted-f);line-height:1.65;margin-bottom:16px;}
.footer-contact-row{display:flex;align-items:center;gap:8px;margin-bottom:4px;}
.footer-contact-icon{color:var(--orange);font-size:.8rem;flex-shrink:0;}
.footer-contact-link{color:#fff;text-decoration:none;font-size:.92rem;font-weight:600;transition:color .2s;}
.footer-contact-link:hover{color:var(--orange);}
.footer-contact-hours{font-size:.72rem;color:var(--text-muted-f);margin-left:22px;margin-bottom:8px;}
.footer-section-label{font-size:.7rem;font-weight:600;color:var(--text-muted-f);text-transform:uppercase;letter-spacing:.6px;margin-bottom:8px;}
.google-review-pill{display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.1);padding:8px 12px;border-radius:8px;text-decoration:none;margin-top:10px;margin-bottom:16px;transition:background .2s;flex-wrap:wrap;}
.google-review-pill:hover{background:rgba(255,255,255,0.11);}
.google-pill-stars{color:#fbbc04;font-size:.78rem;}
.google-pill-text{color:#fff;font-size:.76rem;font-weight:600;}
.google-pill-count{color:var(--text-muted-f);font-size:.72rem;}
.social-icons-row{display:flex;gap:5px;align-items:center;flex-wrap:wrap;}
.social-icon-link{color:rgba(255,255,255,0.6);font-size:17px;display:flex;align-items:center;justify-content:center;width:38px;height:38px;min-width:44px;min-height:44px;border-radius:8px;background:rgba(255,255,255,0.05);transition:color .2s,background .2s,transform .2s;text-decoration:none;}
.social-icon-link:hover{color:var(--orange);background:var(--orange-glow);transform:translateY(-2px);}
.payment-section{margin-top:14px;}
.payment-logos-row{display:flex;gap:6px;flex-wrap:wrap;align-items:center;}
.payment-logo{height:24px;width:auto;opacity:.65;border-radius:4px;transition:opacity .2s;}
.payment-logo:hover{opacity:1;}
.footer-service-group-label{font-size:.68rem;font-weight:600;color:rgba(255,255,255,0.3);text-transform:uppercase;letter-spacing:.7px;margin-bottom:6px;margin-top:4px;}
.footer-links-list{margin:0;padding:0;}
.footer-links-list li{margin-bottom:7px;}
.footer-link{color:var(--text-link-f);text-decoration:none;font-size:.845rem;line-height:1.4;transition:color .2s,padding-left .2s;display:inline-block;}
.footer-link:hover{color:var(--orange);padding-left:4px;}
.footer-link-highlight{color:var(--orange)!important;font-weight:600;display:inline-flex!important;align-items:center;gap:3px;}
.footer-link-highlight:hover{opacity:.85;padding-left:0!important;}
.footer-industry-note{font-size:.68rem;color:rgba(255,255,255,0.25);margin-top:10px;margin-bottom:0;line-height:1.4;font-style:italic;}
.office-tab-buttons{display:flex;gap:4px;flex-wrap:wrap;margin-bottom:16px;}
.office-tab-btn{background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.08);color:rgba(255,255,255,0.55);padding:5px 11px;font-size:.73rem;font-weight:500;border-radius:5px;cursor:pointer;transition:all .2s;line-height:1.4;}
.office-tab-btn:hover:not(.active){background:var(--orange-glow);color:var(--orange);border-color:rgba(242,101,34,0.3);}
.office-tab-btn.active{background:var(--orange);border-color:var(--orange);color:#fff;font-weight:600;}
.office-tab-pane{display:none;}
.office-tab-pane.active{display:block;animation:fadeInTab .25s ease;}
@keyframes fadeInTab{from{opacity:0;transform:translateY(4px)}to{opacity:1;transform:translateY(0)}}
.office-address-row{display:flex;align-items:flex-start;gap:8px;margin-bottom:10px;}
.office-icon{color:var(--orange);font-size:.85rem;flex-shrink:0;margin-top:2px;}
.office-address-text{font-size:.8rem;color:rgba(255,255,255,0.7);line-height:1.6;}
.office-meta-row{display:flex;align-items:center;gap:6px;font-size:.75rem;color:var(--text-muted-f);margin-bottom:5px;}
.office-icon-sm{font-size:.7rem;flex-shrink:0;}
.office-maps-btn{display:inline-flex;align-items:center;gap:5px;font-size:.73rem;font-weight:600;color:var(--orange);text-decoration:none;border:1px solid rgba(242,101,34,0.35);padding:5px 12px;border-radius:5px;margin-top:10px;transition:all .2s;}
.office-maps-btn:hover{background:var(--orange);color:#fff;border-color:var(--orange);}
.serving-cities-text{font-size:.75rem;color:rgba(255,255,255,0.28);margin:0;letter-spacing:.2px;padding:10px 0;}
.footer-orange-strip{background:var(--orange);position:relative;}
.footer-orange-strip-inner{display:flex;align-items:center;justify-content:center;gap:10px;padding:9px 24px;overflow-x:auto;white-space:nowrap;flex-wrap:nowrap;scrollbar-width:none;-webkit-mask-image:linear-gradient(to right,black 85%,transparent 100%);mask-image:linear-gradient(to right,black 85%,transparent 100%);}
.footer-orange-strip-inner::-webkit-scrollbar{display:none;}
.strip-link{color:#fff;font-size:11.5px;font-weight:500;text-decoration:none;flex-shrink:0;transition:opacity .2s;}
.strip-link:hover{opacity:.8;color:#fff;text-decoration:underline;}
.strip-dot{color:rgba(255,255,255,0.45);font-size:10px;flex-shrink:0;}
.footer-bottom-bar{background:var(--footer-bg);border-top:1px solid var(--border-soft);}
.copyright-text{font-size:.8rem;color:rgba(255,255,255,0.5);}
.credential-pill{display:inline-flex;align-items:center;gap:5px;font-size:.69rem;font-weight:500;color:rgba(255,255,255,0.4);border:1px solid rgba(255,255,255,0.12);padding:3px 9px;border-radius:20px;white-space:nowrap;}
.whatsapp-subscription-banner{background:linear-gradient(135deg,#0f172a 0%,#1a2744 100%);border-bottom:1px solid rgba(255,255,255,0.06);}
.whatsapp-heading{color:#fff;font-size:1.35rem;font-weight:700;margin:0;line-height:1.3;max-width:340px;}
.whatsapp-subscribe-form{max-width:860px;margin-left:auto;}
.whatsapp-subscribe-form .input-group{background:white;border-radius:50px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.2);}
.whatsapp-subscribe-form .country-code{background:white;border:none;padding:0 10px;display:flex;align-items:center;gap:6px;border-right:2px solid #CDCDCD;}
.flag-icon{width:36px;height:22px;object-fit:cover;border-radius:2px;}
.whatsapp-subscribe-form .country-code span{color:#61666D;font-weight:500;width:40px;height:32px;align-items:center;display:flex;text-align:center;justify-content:center;border:1px solid #CDCDCD;border-radius:8px;font-size:.85rem;}
.whatsapp-subscribe-form .phone-input{border:none;padding:10px 14px;font-size:.9rem;flex:1;}
.whatsapp-subscribe-form .phone-input:focus{box-shadow:none;outline:none;}
.whatsapp-subscribe-form .btn-subscribe{background:var(--orange);color:white;border:none;padding:10px 24px;font-weight:600;border-radius:50px;display:flex;align-items:center;gap:8px;transition:all .3s;white-space:nowrap;font-size:.9rem;}
.whatsapp-subscribe-form .btn-subscribe:hover{background:var(--orange-dark);transform:translateY(-2px);box-shadow:0 4px 14px rgba(242,101,34,0.45);}
.whatsapp-float-btn{position:fixed;bottom:80px;right:24px;width:58px;height:58px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 20px rgba(37,211,102,0.4);z-index:1000;text-decoration:none;transition:transform .3s,box-shadow .3s;}
.whatsapp-float-btn:hover{transform:scale(1.08);box-shadow:0 6px 24px rgba(37,211,102,0.55);}
.whatsapp-tooltip{position:absolute;right:70px;top:50%;transform:translateY(-50%);background:#333;color:white;padding:5px 10px;border-radius:6px;font-size:.75rem;white-space:nowrap;opacity:0;transition:opacity .2s;pointer-events:none;}
.whatsapp-float-btn:hover .whatsapp-tooltip{opacity:1;}
.back-to-top-btn{position:fixed;bottom:30px;left:24px;width:46px;height:46px;background:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;opacity:0;visibility:hidden;transform:translateY(16px);transition:all .35s cubic-bezier(.25,.8,.25,1);box-shadow:0 4px 16px rgba(0,0,0,0.15);z-index:1000;border:1px solid rgba(242,101,34,0.2);}
.back-to-top-btn.show{opacity:1;visibility:visible;transform:translateY(0);}
.back-to-top-btn:hover{border-color:var(--orange);box-shadow:0 6px 20px rgba(242,101,34,0.2);}
.back-to-top-btn i{color:var(--orange);font-size:16px;transition:transform .2s;}
.back-to-top-btn:hover i{transform:translateY(-2px);}
/* ── 1200px Large Desktop ── */
@media(max-width:1199px){
  .trust-badge-card{min-width:155px;padding:14px 14px 12px;}
  .trust-badge-stat{font-size:1.3rem;}
}
/* ── 992–1199px Small Desktop / Large Tablet ── */
@media(max-width:991px){
  .whatsapp-heading{font-size:1.35rem;text-align:center;max-width:100%;}
  .whatsapp-subscribe-form{margin:0 auto;}
  .trust-badge-card{min-width:145px;padding:12px 12px 10px;}
  .trust-badge-stat{font-size:1.2rem;}
  .trust-badge-desc{font-size:.65rem;}
  .footer-orange-strip-inner{justify-content:flex-start;}
  /* Fix column order on tablet — ensure Organisation comes first */
  .order-1{order:1!important;}
  .order-2{order:2!important;}
  .order-3{order:3!important;}
  .order-4{order:4!important;}
  .order-5{order:5!important;}
}
/* ── 768px Tablet Portrait ── */
@media(max-width:768px){
  .whatsapp-heading{font-size:1.2rem;}
  /* Subtle top border on each stacked footer column */
  .footer-main-container .row > [class*="col-"]{
    border-top:1px solid rgba(255,255,255,0.07);
    padding-top:22px;
    margin-top:4px;
  }
  /* First column (Organisation) — no top border, no extra padding */
  .footer-main-container .row > [class*="col-"].order-1{
    border-top:none;
    padding-top:0;
    margin-top:0;
  }
  .trust-badge-card{min-width:135px;padding:11px 11px 9px;}
  .trust-badge-stat{font-size:1.1rem;}
  .footer-bottom-bar .row{text-align:center;}
  .footer-bottom-bar .col-lg-6{text-align:center!important;}
  .footer-bottom-bar .d-flex{justify-content:center!important;}
  .back-to-top-btn{bottom:20px;left:16px;width:38px;height:38px;}
  .whatsapp-float-btn{bottom:70px;right:16px;width:50px;height:50px;}
  /* Payment logos wrap gracefully */
  .payment-logos-row{gap:5px;}
  .payment-logo{height:20px;}
  /* Orange strip scrollable on tablet */
  .footer-orange-strip-inner{gap:8px;padding:8px 16px;}
  .strip-link{font-size:11px;}
}
/* ── 576px Mobile ── */
@media(max-width:576px){
  .whatsapp-heading{font-size:1.1rem;}
  .whatsapp-subscribe-form .input-group{flex-wrap:wrap;border-radius:14px;}
  .whatsapp-subscribe-form .phone-input{border-radius:0 14px 0 0;}
  .whatsapp-subscribe-form .country-code{border-radius:14px 0 0 0;padding:0 10px;}
  .whatsapp-subscribe-form .btn-subscribe{flex:1 1 100%;border-radius:0 0 14px 14px;justify-content:center;border-top:1px solid #f0f0f0;}
  .trust-badge-card{min-width:128px;padding:10px 10px 8px;}
  .trust-badge-stat{font-size:1rem;}
  .trust-badge-desc{display:none;}
  /* Office tabs — 2 per row on narrow mobile */
  .office-tab-buttons{display:grid;grid-template-columns:1fr 1fr;gap:4px;}
  .office-tab-btn{text-align:center;}
  /* Payment logos — wrap to 2 rows */
  .payment-logos-row{flex-wrap:wrap;gap:4px;}
  .payment-logo{height:18px;}
  /* Orange strip — left-align and allow scroll */
  .footer-orange-strip-inner{justify-content:flex-start;gap:7px;padding:8px 12px;}
  .strip-link{font-size:10.5px;}
  .strip-dot{font-size:9px;}
  /* Stacked columns spacing on mobile */
  .footer-main-container .row > [class*="col-"]{padding-top:20px;}
  .footer-main-container .row > [class*="col-"].order-1{padding-top:0;}
  /* Float buttons — no overlap */
  .whatsapp-float-btn{bottom:68px;right:14px;width:46px;height:46px;}
  .back-to-top-btn{bottom:18px;left:14px;width:36px;height:36px;}
  .back-to-top-btn i{font-size:14px;}
  /* Bottom bar */
  .footer-bottom{text-align:center;}
  .footer-bottom .col-lg-4{text-align:center!important;}
  .copyright-text{font-size:.75rem;}
}
/* ── 480px Mid mobile (Pixel, Samsung M) ── */
@media(max-width:480px){
  .footer-logo-img{height:44px;max-width:140px;}
  .whatsapp-heading{font-size:1rem;}
  .footer-main-container{padding-top:36px;}
  .office-tab-btn{font-size:.72rem;padding:5px 8px;}
}
/* ── 375px Small Mobile (iPhone SE, Galaxy A series) ── */
@media(max-width:375px){
  .google-review-pill{flex-wrap:wrap;gap:4px;padding:6px 8px;}
  .google-pill-count{display:none;}
  .footer-logo-img{height:46px;}
  .footer-contact-link{font-size:.85rem;}
  .whatsapp-heading{font-size:1rem;}
  .trust-badge-card{min-width:120px;padding:9px 9px 7px;}
  .trust-badge-stat{font-size:.95rem;}
  .trust-badge-label{font-size:.72rem;}
  .footer-org-desc{font-size:.78rem;}
  .footer-link{font-size:.8rem;}
  .strip-link{font-size:10px;}
  .office-tab-btn{font-size:.68rem;padding:4px 8px;}
}
/* ── 320px Ultra-small (Galaxy A03, old Androids) ── */
@media(max-width:320px){
  .trust-badge-card{min-width:105px;padding:8px 8px 6px;}
  .trust-badge-stat{font-size:.88rem;}
  .footer-logo-img{height:36px;max-width:120px;}
  .footer-main-container{padding-top:28px;padding-bottom:28px;}
  .office-tab-buttons{grid-template-columns:1fr 1fr;}
  .office-tab-btn{font-size:.62rem;padding:4px 6px;}
  .footer-link{font-size:.78rem;}
  .strip-link{font-size:9.5px;}
  .footer-contact-link{font-size:.85rem;}
  .google-review-pill{padding:6px 8px;gap:4px;}
  .google-pill-text{font-size:.7rem;}
}
/* ── 1400px+ Large desktop (1440p, 4K scaled) ── */
@media(min-width:1400px){
  .trust-badge-card{min-width:210px;padding:32px 26px 28px;}
  .trust-badge-stat{font-size:2rem;}
  .trust-badge-label{font-size:.9rem;}
  .footer-logo-img{height:60px;max-width:180px;}
  .footer-main-container{padding-top:64px;padding-bottom:24px;}
}
</style>

{{-- Office Tab Script — self-initialising, works regardless of DOMContentLoaded state --}}
<script>
(function () {
    function initOfficeTabs() {
        var buttons = document.querySelectorAll('.office-tab-btn');
        if (!buttons.length) return;
        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                // Scope to this footer to avoid conflicts with other tab components
                var footer = this.closest('footer') || document;
                footer.querySelectorAll('.office-tab-btn').forEach(function (b) {
                    b.classList.remove('active');
                    b.setAttribute('aria-selected', 'false');
                });
                footer.querySelectorAll('.office-tab-pane').forEach(function (p) {
                    p.classList.remove('active');
                });
                this.classList.add('active');
                this.setAttribute('aria-selected', 'true');
                var target = document.getElementById('tab-' + this.getAttribute('data-tab'));
                if (target) target.classList.add('active');
            });
        });
    }
    // Works whether DOM is already ready or not
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initOfficeTabs);
    } else {
        initOfficeTabs();
    }
})();
</script>


{{-- ============================================================
     JAVASCRIPT
     ============================================================ --}}
<script>
(function () {

    function showN(t, m) {
        var ex = document.querySelector('.wa-n');
        if (ex) ex.remove();
        var n = document.createElement('div');
        n.className = 'wa-n';
        n.innerHTML = '<div style="display:flex;align-items:center;gap:10px;"><i class="bi bi-' + (t === 'success' ? 'check-circle-fill' : 'exclamation-circle-fill') + '" style="font-size:18px;"></i><span>' + m + '</span></div>';
        n.style.cssText = 'position:fixed;top:20px;right:20px;z-index:9999;background:' + (t === 'success' ? '#10b981' : '#ef4444') + ';color:white;padding:14px 20px;border-radius:12px;box-shadow:0 8px 30px rgba(0,0,0,0.2);font-size:13px;max-width:360px;animation:slideIn .3s ease-out;';
        document.body.appendChild(n);
        if (!document.querySelector('#wa-a')) {
            var s = document.createElement('style');
            s.id = 'wa-a';
            s.textContent = '@keyframes slideIn{from{transform:translateX(360px);opacity:0}to{transform:translateX(0);opacity:1}}@keyframes slideOut{from{transform:translateX(0);opacity:1}to{transform:translateX(360px);opacity:0}}';
            document.head.appendChild(s);
        }
        setTimeout(function () { n.style.animation = 'slideOut .3s ease-out'; setTimeout(function () { n.remove(); }, 300); }, 5000);
    }

    function initFooter() {

        /* WhatsApp subscribe form */
        var form = document.getElementById('whatsappSubscribeForm');
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                var pi = form.querySelector('.phone-input');
                var pn = pi.value.trim();
                if (pn.length !== 10 || !/^[0-9]{10}$/.test(pn)) {
                    pi.style.borderColor = '#dc3545';
                    showN('error', 'Please enter a valid 10-digit mobile number');
                    return;
                }
                var msg   = encodeURIComponent('Hi, Interested in Compliance Due dates on WhatsApp');
                var waUrl = 'https://wa.me/919459456700?text=' + msg;
                var csrf  = document.querySelector('meta[name="csrf-token"]');
                pi.value = '';
                pi.style.borderColor = '#28a745';
                showN('success', 'Redirecting to WhatsApp… Just hit Send to subscribe!');
                window.open(waUrl, '_blank');
            });
        }

        /* Back to top */
        var btn = document.getElementById('backToTop');
        if (btn) {
            window.addEventListener('scroll', function () {
                btn.classList.toggle('show', window.pageYOffset > 300);
            });
            btn.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });
            btn.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    }

    /* Works whether DOM is already ready or still loading */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFooter);
    } else {
        initFooter();
    }

})();
</script>
