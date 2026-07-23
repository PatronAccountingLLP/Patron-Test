<style>
/* Sticky Header Styles */
.navbar {
    transition: all 0.3s ease;
}

.navbar.sticky {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1030;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    animation: slideDown 0.3s ease-out;
}


.navbar-nav .nav-link {
            font-size: 13px !important;
        }



@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Add padding to body when header becomes sticky to prevent content jump */
body.header-sticky-active {
    padding-top: 100px;
}

.logo-img {
    height: 55px;
    width: auto;
    margin-right: 10px;
    max-width: 200px;
    transition: height 0.3s ease;
}

.navbar.sticky .logo-img {
    height: 55px;
}

/* Search Bar Styles */
.search-wrapper {
    position: relative;
    width: 170px;
    margin-left: 20px;
}

.search-input {
    width: 100%;
    padding: 8px 10px 8px 10px;
    border: 1px solid #e5e7eb;
    border-radius: 25px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.search-input:focus {
    outline: none;
    border-color: #F26522;
    box-shadow: 0 0 0 3px rgba(242, 101, 34, 0.1);
}

.search-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6b7280;
    font-size: 16px;
}

.voice-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #F26522;
    font-size: 18px;
    cursor: pointer;
}

.search-suggestions {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    margin-top: 5px;
    max-height: 400px;
    overflow-y: auto;
    display: none;
    z-index: 1000;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.search-suggestions.show {
    display: block;
}

.suggestion-item {
    padding: 12px 15px;
    cursor: pointer;
    border-bottom: 1px solid #f3f4f6;
    transition: background-color 0.2s ease;
    text-decoration: none;
    color: inherit;
}

.suggestion-item:last-child {
    border-bottom: none;
}

.suggestion-item:hover {
    background-color: #f9fafb;
    text-decoration: none;
}

.suggestion-title {
    font-weight: 600;
    color: #1f2937;
    font-size: 14px;
    margin-bottom: 4px;
}

.suggestion-excerpt {
    font-size: 12px;
    color: #6b7280;
    line-height: 1.4;
}

.no-results {
    padding: 20px;
    text-align: center;
    color: #6b7280;
    font-size: 14px;
}

.search-spinner {
    display: none;
    position: absolute;
    right: 45px;
    top: 50%;
    transform: translateY(-50%);
}

.search-spinner.show {
    display: block;
}

/* Navbar Nav Styles */
.navbar-nav.ms-auto {
    margin: auto !important;
}

/* Mobile Responsive - Navbar */
@media (max-width: 991px) {
    .navbar {
        position: relative;
        z-index: 99999 !important;
    }
    
    .navbar-nav.ms-auto {
        background: #fff;
        z-index: 99999;
        position: relative;
        padding: 15px 0;
    }
    
    .navbar-collapse {
        background: #f8f9fa;
        padding: 15px;
        margin: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99999;
    }
    
    .navbar-nav .nav-item {
        margin: 5px 0;
    }
    
    .navbar-nav .nav-link {
        padding: 5px 10px;
        background: #fff;
        border-radius: 5px;
        margin-bottom: 5px;
    }
    
     
        
    
    .search-wrapper {
        margin: 15px 0;
        max-width: 100%;
    }
    
    .navbar {
        min-height: auto !important;
        height: auto !important;
    }
    
    .services-header {
        margin-bottom: 150px;
        display: flex;
        flex-direction: column;
        padding: 0 15px;
    }
}

/* Mega Menu Styles */
.megamenu-parent { position: static; }
.megamenu-toggle { 
    display: inline-block; 
    padding: 10px 18px; 
    border-radius: 8px; 
    background: transparent; 
    color: #1f2937; 
    font-weight:600;
    position: relative;
}
/* Orange dropdown arrow for mega menu */
.megamenu-toggle::after {
    content: '';
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 8px;
    vertical-align: middle;
    border-top: 5px solid #F26522;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
}
.megamenu-panel {
    position: absolute;
    left: 0;
    right: 0;
    top: 100%;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    padding: 22px;
    display: none;
    z-index: 1050;
    margin: 0 auto;
    max-width: 1140px;
    margin-top: 0;
}
.megamenu-panel::before {
    content: '';
    position: absolute;
    top: -10px;
    left: 0;
    right: 0;
    height: 10px;
    background: transparent;
}
.megamenu-panel.show { display: block; }
.megamenu-inner { display: flex; gap: 20px; align-items:flex-start; }
.megamenu-left {
    width: 325px;
    border-right: 1px solid #f1f1f1;
    padding-right: 18px;
}
.megamenu-left .menu-item {
    background: #fff;
    padding: 12px 14px;
    border-radius: 8px;
    margin-bottom: 10px;
    cursor: pointer;
    font-weight:600;
    border-bottom: 1px solid #E4E5EA;
}
.megamenu-left .menu-item.active {
    background: #ff7a2a;
    border: 1px solid #ff7a2a;
    color: #fff;
    font-weight:700;
    box-shadow: 0 2px 6px rgba(242,101,34,0.06);
}
.megamenu-left .menu-item .arrow { float: right; width:24px; height:24px; display:inline-flex; align-items:center; justify-content:center; }
.megamenu-left .menu-item .arrow img { width: 20px; height: 20px; }
.megamenu-left .menu-item.active .arrow img { filter: brightness(0) invert(1); }
.megamenu-right { flex:1; padding-left:18px; }
.megamenu-right strong { margin-top:0; color:#1f2937; font-weight:700; }
.megamenu-cols { display:flex; gap:40px; }
.megamenu-col { min-width:200px; }
.megamenu-col a { display:block; padding:6px 0; color:#374151; text-decoration:none; }
.megamenu-col a:hover { color:#ff6633; }

@media (max-width: 1199px) {
    .megamenu-panel { width: calc(100vw - 40px); left: 20px; }
    .megamenu-inner { flex-direction:column; }
    .megamenu-left { border-right: none; width:100%; padding-right:0; }
}

/* Mobile Mega Menu Styles */
@media (max-width: 991px) {
    .megamenu-parent {
        position: relative;
    }
    
    .megamenu-toggle {
        width: 100%;
        text-align: left;
        display: block;
        padding: 12px 15px;
        background: #fff;
        border-radius: 5px;
        margin-bottom: 5px;
        font-weight: 600;
    }
    
    .megamenu-toggle::after {
        float: right;
        margin-top: 3px;
    }
    
    .megamenu-panel {
        position: static;
        width: 100%;
        max-width: 100%;
        margin: 0;
        padding: 0;
        box-shadow: none;
        border-radius: 0;
        background: transparent;
        display: none;
    }
    
    .megamenu-parent:hover .megamenu-panel,
    .megamenu-parent:focus-within .megamenu-panel {
        display: none;
    }
    
    .megamenu-panel.mobile-show {
        display: block !important;
        max-height: 70vh;
        overflow-y: auto;
    }
    
    .megamenu-inner {
        flex-direction: column;
        gap: 0;
    }
    
    .megamenu-left {
        width: 100%;
        border-right: none;
        padding: 0;
        margin-bottom: 0;
        max-height: 60vh;
        overflow-y: auto;
    }
    
    .megamenu-left .menu-item {
        background: #f8f9fa;
        padding: 10px 15px;
        margin-bottom: 2px;
        border-radius: 5px;
        border: none;
        font-size: 14px;
    }
    
    .megamenu-left .menu-item.active {
        background: #F26522;
        color: white;
    }
    
    .megamenu-left .menu-item .arrow {
        width: 20px;
        height: 20px;
    }
    
    .megamenu-right {
        width: 100%;
        padding: 15px 0 0 0;
        display: none;
    }
    
    .megamenu-right.mobile-show {
        display: block;
    }
    
    .megamenu-right strong {
        font-size: 16px;
        margin-bottom: 10px;
        padding: 0 15px;
    }
    
    .megamenu-cols {
        flex-direction: column;
        gap: 0;
    }
    
    .megamenu-col {
        min-width: 100%;
        padding: 0 15px;
    }
    
    .megamenu-col a {
        padding: 8px 10px;
        display: block;
        background: #fff;
        margin-bottom: 2px;
        border-radius: 5px;
        font-size: 13px;
        color: #374151;
    }
    
    .megamenu-col a:hover {
        background: #f8f9fa;
        color: #F26522;
    }
}

</style>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white" style="height: 100px; min-height: 100px;">
    <div class="container">
       <a class="navbar-brand d-flex align-items-center" href="{{ route('frontend.index') }}">
                <img src="{{ asset('images/site-logo.svg') }}" alt="SequelZone Logo" class="logo-img">
           
</a>

        <!-- Mobile Contact Icons (shown only on mobile between logo and hamburger) -->
        <div class="d-flex align-items-center ms-2 contact-icons-mobile d-lg-none">
            <a href="tel:+919459456700" class="contact-icon-link" style="text-decoration: none;">
                <div class="contact-icon-wrapper" style="width: 36px; height: 36px; background: #fff4f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                     <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                </div>
            </a>

            <a href="mailto:sales@patronaccounting.com" class="contact-icon-link ms-2" style="text-decoration: none;">
                <div class="contact-icon-wrapper" style="width: 36px; height: 36px; background: #fff4f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
            </a>

            <a href="https://wa.me/919459456700" target="_blank" class="contact-icon-link ms-2" style="text-decoration: none;">
                <div class="contact-icon-wrapper" style="width: 36px; height: 36px; background: #25d366; border-radius: 10px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                    <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp Icon" width="20" height="20">
                </div>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Accounting & Payroll Mega Menu -->
                <li class="nav-item megamenu-parent">
                    <a href="#" class="nav-link megamenu-toggle" onclick="return false;">Accounting & Payroll</a>
                    <div class="megamenu-panel">
                        <div class="megamenu-inner">
                            <div class="megamenu-left" role="menu">
                                <div class="menu-item active" data-menu="accounting">Accounting Services <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="payroll">Payroll Services <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                            </div>
                            <div class="megamenu-right">
                                <strong id="accounting-megamenu-title" style="display:block;margin-top:0;color:#1f2937;font-weight:700;font-size:1.25rem;margin-bottom:1rem;">Accounting Services</strong>
                                <div class="megamenu-cols" id="accounting-megamenu-content">
                                    <!-- Content populated by JS -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Registration Mega Menu -->
                <li class="nav-item megamenu-parent">
                    <a href="#" class="nav-link megamenu-toggle" onclick="return false;">Registration</a>
                    <div class="megamenu-panel">
                        <div class="megamenu-inner">
                            <div class="megamenu-left" role="menu">
                                <div class="menu-item active" data-menu="business">Business Registration <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="government">Government Registration <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="trademark">Trademark Registration <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="copyright">Copyright and Patents <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="fssai">FSSAI <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                            </div>
                            <div class="megamenu-right">
                                @php 
                                $domain = config('app.url');
                                @endphp
                                <strong id="megamenu-title" style="display:block;margin-top:0;color:#1f2937;font-weight:700;font-size:1.25rem;margin-bottom:1rem;">Business Registration</strong>
                                <div class="megamenu-cols" id="megamenu-content">
                                    <!-- Content populated by JS -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Returns and Notices Mega Menu -->
                <li class="nav-item megamenu-parent">
                    <a href="#" class="nav-link megamenu-toggle" onclick="return false;">Returns & Notices</a>
                    <div class="megamenu-panel">
                        <div class="megamenu-inner">
                            <div class="megamenu-left" role="menu">
                                <div class="menu-item active" data-menu="income-tax-returns">Income tax Returns <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="compliance-returns">Compliance Returns <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="income-tax-notices">Income tax Notices <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                            </div>
                            <div class="megamenu-right">
                                @php 
                                $domain = config('app.url');
                                @endphp
                                <strong id="returns-megamenu-title" style="display:block;margin-top:0;color:#1f2937;font-weight:700;font-size:1.25rem;margin-bottom:1rem;">Income tax Returns</strong>
                                <div class="megamenu-cols" id="returns-megamenu-content">
                                    <!-- Content populated by JS -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Secretarial Mega Menu -->
                <li class="nav-item megamenu-parent">
                    <a href="#" class="nav-link megamenu-toggle" onclick="return false;">Secretarial</a>
                    <div class="megamenu-panel">
                        <div class="megamenu-inner">
                            <div class="megamenu-left" role="menu">
                                <div class="menu-item" data-menu="Secretarial">Secretarial (ROC Compliance) <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                            </div>
                            <div class="megamenu-right" style="width: 100%; padding-left: 0;">
                                @php 
                                $domain = config('app.url');
                                @endphp
                                <div class="megamenu-cols">
                                    <div class="megamenu-col">
                                        <a href="{{ $domain }}appointment-of-auditor">Appointment Of Auditor</a>
                                        <a href="{{ $domain }}appointment-of-director">Appointment of Director</a>
                                        <a href="{{ $domain }}appointment-of-company-director">Appointment of Company Director</a>
                                        <a href="{{ $domain }}change-in-object-clause">Change in Object Clause</a>
                                        <a href="{{ $domain }}change-in-authorised-capital">Change In Authorised Capital</a>
                                        <a href="{{ $domain }}change-in-authorized-capital-of-a-company">Change In Authorized Capital of a Company</a>
                                        <a href="{{ $domain }}change-in-name-of-company">Change In Name Of Company</a>
                                        <a href="{{ $domain }}change-in-registered-office">Change in Registered Office</a>
                                        <a href="{{ $domain }}removal-of-director">Removal of Director</a>
                                        <a href="{{ $domain }}director-kyc">Director KYC</a>
                                        <a href="{{ $domain }}resignation-of-director">Resignation of Director</a>
                                        <a href="{{ $domain }}change-of-auditor">Change Of Auditor</a>
                                        <a href="{{ $domain }}issue-of-shares">Issue of shares</a>
                                    </div>
                                    <div class="megamenu-col">
                                        <a href="{{ $domain }}transfer-of-shares">Transfer of Share</a>
                                        <a href="{{ $domain }}company-closure">Company Closure</a>
                                        <a href="{{ $domain }}fdi-compliance">FDI Compliance</a>
                                        <a href="{{ $domain }}llp-name-change">LLP Name change</a>
                                        <a href="{{ $domain }}llp-partner-change">LLP Partner change</a>
                                        <a href="{{ $domain }}llp-contribution-change">LLP Contribution change</a>
                                        <a href="{{ $domain }}llp-agreement-change">LLP Agreement change</a>
                                        <a href="{{ $domain }}pvt-llp-compliance">Compliance for LLP (Limited Liability Partnership)</a>
                                        <a href="{{ $domain }}private-limited-company-compliance">Compliance for Private Limited Companies</a>
                                        <a href="{{ $domain }}legal-drafting">Legal Drafting Service</a>
                                        <a href="{{ $domain }}convert-llp-to-private-limited-company">LLP to Private Limited Conversion</a>
                                        <a href="{{ $domain }}convert-partnership-to-pvt-ltd-company">Partnership to Private Limited Conversion</a>
                                        <a href="{{ $domain }}convert-partnership-to-llp">Partnership to LLP</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item megamenu-parent">
                    <a href="#" class="nav-link megamenu-toggle" onclick="return false;">More</a>
                    <div class="megamenu-panel">
                        <div class="megamenu-inner">
                            <div class="megamenu-left" role="menu">
                                <div class="menu-item active" data-menu="audit">Audit <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="certificates">Certificates <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="calculators">Calculators & Tools <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                                <div class="menu-item" data-menu="other-services">Other Services <span class="arrow"><img src="{{ asset('images/chevron_right_black.svg') }}" alt="Arrow" /></span></div>
                            </div>
                            <div class="megamenu-right" style="width: 100%; padding-left: 0;">
                                @php 
                                $domain = config('app.url');
                                @endphp
                                <strong id="more-megamenu-title" style="display:block;margin-top:0;color:#1f2937;font-weight:700;font-size:1.25rem;margin-bottom:1rem;">Audit</strong>
                                <div class="megamenu-cols" id="more-megamenu-content">
                                    <!-- Content populated by JS -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Contact Icons (desktop, visible on lg and up) -->
            <div class="d-none d-lg-flex align-items-center ms-3 contact-icons-inline">
                <!-- Phone Icon -->
                <a href="tel:+919459456700" class="contact-icon-link" style="text-decoration: none;">
                    <div class="contact-icon-wrapper" style="width: 35px; height: 35px; background: #fff4f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    </div>
                </a>

                <!-- Email Icon -->
                <a href="mailto:sales@patronaccounting.com" class="contact-icon-link ms-2" style="text-decoration: none;">
                    <div class="contact-icon-wrapper" style="width: 35px; height: 35px; background: #fff4f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    </div>
                </a>

                <!-- WhatsApp Icon -->
                <a href="https://wa.me/919459456700" target="_blank" class="contact-icon-link ms-2" style="text-decoration: none;">
                    <div class="contact-icon-wrapper" style="width: 35px; height: 35px; background: #25d366; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                        <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp Icon" width="20" height="20">
                    </div>
                </a>
            </div>

            <!-- Search Bar -->
            <div class="search-wrapper">
                <i class="bi bi-search search-icon"></i>
                <input type="text" 
                       class="search-input" 
                       id="searchInput" 
                       placeholder="Search for service"
                       autocomplete="off">
                <div class="search-spinner" id="searchSpinner">
                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="search-suggestions" id="searchSuggestions"></div>
            </div>
            
            <ul class="navbar-nav">
                @auth
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">
                            @if(Auth::user()->profile_image)
                                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" 
                                     alt="{{ Auth::user()->name }}" 
                                     class="rounded-circle" 
                                     style="width: 32px; height: 32px; object-fit: cover;">
                            @else
                                <i class="bi bi-person-circle fs-4"></i>
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <li class="nav-item d-none">
                        <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item d-none">
                        <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<style>
/* Contact Icons Inline Styles */
.contact-icons-inline .contact-icon-wrapper:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    background-color: red;
}

.contact-icon-wrapper:hove{backgroud-color: #ff6b35;}
.contact-icon-wrapper svg {color: #ff6b35;}
.contact-icons-inline .contact-icon-link:hover {
    text-decoration: none;
}

/* Mobile contact icons (same hover/spacing) */
.contact-icons-mobile .contact-icon-wrapper:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.contact-icons-mobile .contact-icon-link:hover {
    text-decoration: none;
}

body.header-sticky-active {
    padding-top: 100px;
}

/* Two Column Dropdown Menu */
.dropdown-menu-two-columns {
    min-width: 600px;
    padding: 10px;
}

.dropdown-menu-two-columns .row {
    display: flex;
}

.dropdown-menu-two-columns .col-6 {
    padding: 0 10px;
}

.dropdown-menu-two-columns .dropdown-item {
    white-space: normal;
    padding: 8px 12px;
    font-size: 14px;
}

.dropdown-menu-two-columns .dropdown-item:hover {
    background-color: #f8f9fa;
    color: #F26522;
}

@media (max-width: 991px) {
    .dropdown-menu-two-columns {
        min-width: 100%;
    }
    
    .dropdown-menu-two-columns .row {
        flex-direction: column;
    }
    
    .dropdown-menu-two-columns .col-6 {
        width: 100%;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle functionality
    function isMobile() {
        return window.innerWidth <= 991;
    }

    // Click-based mega menu toggle for desktop and mobile
    const megaMenuToggles = document.querySelectorAll('.megamenu-toggle');
    megaMenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const panel = this.nextElementSibling;
            const isOpen = panel.classList.contains('show') || panel.classList.contains('mobile-show');
            
            // Close all mega menus
            document.querySelectorAll('.megamenu-panel').forEach(p => {
                p.classList.remove('show', 'mobile-show');
            });
            document.querySelectorAll('.megamenu-right').forEach(r => {
                r.classList.remove('mobile-show');
            });
            
            // Toggle current menu
            if (!isOpen) {
                if (isMobile()) {
                    panel.classList.add('mobile-show');
                } else {
                    panel.classList.add('show');
                }
            }
            
            return false;
        });
    });
    
    // Close mega menus when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.megamenu-parent')) {
            document.querySelectorAll('.megamenu-panel').forEach(p => {
                p.classList.remove('show', 'mobile-show');
            });
            document.querySelectorAll('.megamenu-right').forEach(r => {
                r.classList.remove('mobile-show');
            });
        }
    });

    const domain = '{{ config("app.url") }}';

    // ========================================
    // Accounting & Payroll Mega menu content data
    // ========================================
    const accountingMegaMenuData = {
        accounting: {
            title: 'Accounting Services',
            columns: [
                [
                    { text: 'Accounting Services (Overview)', url: `${domain}accounting-services` },
                    { text: 'Tally Accounting', url: `${domain}tally-accounting` },
                    { text: 'QuickBooks Accounting', url: `${domain}quickbooks-accounting` },
                    { text: 'Xero Accounting', url: `${domain}xero-accounting` },
                    { text: 'Odoo Accounting', url: `${domain}odoo-accounting` },
                    { text: 'Zoho Books Accounting', url: `${domain}zoho-books-accounting` }
                ],
                [
                    { text: 'Ecommerce', url: `${domain}accounting-services-for-e-commerce-industry` },
                    { text: 'Service Sector', url: `${domain}accounting-services-for-the-service-sector-industry` },
                    { text: 'Trading (Wholesale/Retail)', url: `${domain}accounting-services-for-trading-industry` },
                    { text: 'Healthcare', url: '#' },
                    { text: 'Construction & Real Estate', url: `${domain}construction-and-real-estate-accounting-services` }
                ],
                [
                    { text: 'IT/Software', url: `${domain}it-sector-accounting-services` },
                    { text: 'Hospitality (Hotels/Restaurants)', url: `${domain}hospitality-sector-accounting-services` },
                    { text: 'Non-Profit / NGO', url: `${domain}ngo-and-non-profit-accounting-services` },
                    { text: 'Logistics & Transport', url: `${domain}travel-and-logistics-accounting-services` },
                    { text: 'Education (Schools/Colleges)', url: `${domain}accounting-services-for-education-industry` }
                ]
            ]
        },
        payroll: {
            title: 'Payroll Services',
            columns: [
                [
                    { text: 'Payroll Services (Overview)', url: `${domain}payroll-services` },
                    { text: 'Payroll Processing & Management', url: `${domain}payroll-processing-and-management-services` },
                    { text: 'ESOPs Management & Compliance', url: `${domain}esop-management-and-compliance-services` },
                    { text: 'Actuarial Valuation', url: `${domain}actuarial-valuation-services-for-employee-benefits` },
                    { text: 'Security Agencies', url: `${domain}payroll-services-for-security-agencies` },
                    { text: 'Ecommerce', url: `${domain}e-commerce-sector-payroll-processing-services` }
                ],
                [
                    { text: 'Construction & Real Estate', url: `${domain}payroll-services-for-construction-real-estate-industry` },
                    { text: 'IT/Software', url: `${domain}payroll-services-for-it-and-software-industry` },
                    { text: 'Hospitality (Hotels/Restaurants)', url: `${domain}payroll-services-for-the-hospitality-industry` },
                    { text: 'Healthcare', url: `${domain}payroll-processing-for-the-healthcare-industry` },
                    { text: 'Service Sector', url: `${domain}payroll-services-for-service-sector-businesses` },
                    { text: 'Trading', url: `${domain}payroll-services-for-trading-industry` }
                ],
                [
                    { text: 'Non-Profit / NGO', url: `${domain}payroll-services-for-ngonon-profit-industry` },
                    { text: 'Logistics & Transport', url: `${domain}payroll-services-for-travel-and-logistics-industry` },
                    { text: 'Education (Schools/Colleges)', url: `${domain}payroll-processing-services-for-education-industry` }
                ]
            ]
        }
    };

    // ========================================
    // Registration Mega menu content data
    // ========================================
    const megaMenuData = {
        business: {
            title: 'Business Registration',
            columns: [
                [
                    { text: 'Private Limited Company Registration', url: `${domain}private-limited-company-registration` },
                    { text: 'Partnership Firm Registration', url: `${domain}partnership-firm-registration` },
                    { text: 'LLP Registration', url: `${domain}llp-incorporation` },
                    { text: 'OPC Registration', url: `${domain}one-person-company-registration` },
                    { text: 'Proprietorship Registration', url: `${domain}proprietorship-registration` },
                    { text: 'Section 8 Company Registration', url: `${domain}section8-company-registration` },
                    { text: 'Society Registration', url: `${domain}society-registration` },
                    { text: 'Nidhi Company Registration', url: `${domain}nidhi-company-registration` }
                ],
                [
                    { text: 'NGO Registration', url: `${domain}ngo-registration` },
                    { text: 'Public Limited Company Registration', url: `${domain}public-company-registration` },
                    { text: 'Producer Company Registration', url: `${domain}producer-company-registration` },
                    { text: 'IRDA-IMF Business Registration', url: `${domain}irda-imf-business-registration` },
                    { text: 'Digital Signature Certificate (DSC)', url: `${domain}dsc-registration` },
                    { text: 'Company Registration in USA', url: '#' },
                    { text: 'US Bank Account from India', url: `${domain}us-bank-account-opening` },
                    { text: 'Company Registration in UAE', url: '#' }
                ]
            ]
        },
        government: {
            title: 'Government Registration',
            columns: [
                [
                    { text: 'GST Registration', url: `${domain}gst-registration` },
                    { text: 'ShopAct Registration', url: `${domain}shop-act-registration` },
                    { text: 'ESIC Registration', url: `${domain}esic-registration` },
                    { text: 'Provident Fund (PF) Registration', url: `${domain}pf-registration` },
                    { text: 'Import Export Code (IEC) Registration', url: `${domain}iec-registration` },
                    { text: 'IEC Renewal', url: `${domain}iec-renewal` },
                    { text: 'Udyam Registration', url: `${domain}udyam-registration` },
                    { text: 'AD Code Registration', url: `${domain}ad-code-registration` }
                ],
                [
                    { text: 'Startup Registration', url: `${domain}startup-registration` },
                    { text: 'PAN Registration', url: `${domain}pan-registration` },
                    { text: 'TAN Registration', url: `${domain}tan-registration` },
                    { text: 'FCRA Registration', url: `${domain}fcra-registration` },
                    { text: '80G Registration', url: `${domain}registration-for-12a-80g-certificate` },
                    { text: '12A Registration', url: `${domain}registration-for-12a-80g-certificate` },
                    { text: 'Drug License', url: `${domain}drug-license` },
                    { text: 'Posh Compliance Service', url: `${domain}posh-compliance-services` },
                    { text: 'ISO Registration', url: `${domain}iso-registration-certification-services` },
                    { text: 'DUNS Number Service', url: `${domain}duns-number-service` }
                ]
            ]
        },
        trademark: {
            title: 'Trademark',
            columns: [
                [
                    { text: 'Trademark Registration', url: `${domain}trademark-registration` },
                    { text: 'Trademark Renewal', url: `${domain}trademark-renewal` },
                    { text: 'Trademark Renewal in India', url: `${domain}trademark-renewal-in-india` },
                    { text: 'Trademark Notice Reply', url: `${domain}trademark-notice` },
                    { text: 'Trademark Hearing', url: `${domain}trademark-hearing` },
                    { text: 'Trademark Opposition', url: `${domain}trademark-opposition` }
                ],
                [
                    { text: 'Trademark Infringement', url: '#' },
                    { text: 'Trademark Formality Check Fail', url: `${domain}trademark-formality-check-fail` },
                    { text: 'Trademark Assignment', url: `${domain}trademark-assignment` },
                    { text: 'Trademark Rectification', url: `${domain}trademark-rectification` },
                    { text: 'Trademark Search Report', url: `${domain}trademark-search-report` }
                ]
            ]
        },
        copyright: {
            title: 'Copyright and Patents',
            columns: [
                [
                    { text: 'Copyright Registration', url: `${domain}copyright-registration` },
                    { text: 'Logo Copyright Registration', url: `${domain}logo-copyright-registration` },
                    { text: 'Brand Copyright Registration', url: '#' },
                    { text: 'Copyright for Literary Work', url: '#' },
                    { text: 'Copyright for Dramatic Work', url: '#' }
                ],
                [
                    { text: 'Copyright for Musical Work', url: '#' },
                    { text: 'Copyright for Artistic Work', url: '#' },
                    { text: 'Copyright for Cinematographic Film', url: '#' },
                    { text: 'Copyright for Sound Recording', url: '#' },
                    { text: 'Copyright for Broadcast', url: '#' }
                ],
                [
                    { text: 'Copyright Objection', url: `${domain}copyright-objection` },
                    { text: 'Copyright Assignment', url: `${domain}copyright-assignment` },
                    { text: 'Copyright Disclaimer', url: `${domain}copyright-disclaimer` },
                    { text: 'Patent Registration', url: '#' }
                ]
            ]
        },
        fssai: {
            title: 'FSSAI',
            columns: [
                [
                    { text: 'FSSAI Registration', url: `${domain}fssai-registration` },
                    { text: 'FSSAI Central License', url: `${domain}fssai-central-license` }
                ],
                [
                    { text: 'FSSAI State License', url: `${domain}fssai-state-license` },
                    { text: 'FSSAI Renewal', url: `${domain}fssai-renewal` }
                ]
            ]
        }
    };

    // ========================================
    // Returns and Notices Mega menu content data
    // ========================================
    const returnsMegaMenuData = {
        'income-tax-returns': {
            title: 'Income tax Returns',
            columns: [
                [
                    { text: 'Income Tax Return (ITR) Filing', url: `${domain}income-tax-return` },
                    { text: 'Income Tax Notice', url: `${domain}income-tax-notice` },
                    { text: 'ITR for Salary', url: `${domain}itr-filing-for-salary` },
                    { text: 'ITR for Property Sale', url: `${domain}itr-for-property-sale` },
                    { text: 'ITR for Professionals / Freelancers', url: `${domain}itr-filing-for-freelancers-professionals` },
                    { text: 'ITR for Crypto Traders', url: `${domain}itr-for-crypto-traders` },
                    { text: 'ITR for Companies', url: `${domain}itr-for-companies` }
                ],
                [
                    { text: 'ITR for Capital Gains', url: `${domain}itr-for-capital-gains` },
                    { text: 'ITR for Influencers', url: `${domain}itr-for-influencers` },
                    { text: 'ITR for Business', url: `${domain}itr-for-business` },
                    { text: 'ITR for F&O Traders', url: `${domain}itr-for-fando-traders` },
                    { text: 'Tax Planning', url: '#' }
                ]
            ]
        },
        'compliance-returns': {
            title: 'Compliance Returns',
            columns: [
                [
                    { text: 'GST Returns', url: `${domain}gst-returns` },
                    { text: 'GST Notice', url: `${domain}gst-notice` },
                    { text: 'TDS Returns', url: `${domain}tds-return` },
                    { text: 'TDS Return Filing (24Q / Form 16)', url: `${domain}tds-return-filing` },
                    { text: 'ESIC Returns', url: `${domain}esic-return` },
                    { text: 'ESIC Calculation & Compliance', url: `${domain}esic-calculation-and-compliance-services` },
                    { text: 'Provident Fund (PF) Returns', url: `${domain}pf-return` },
                    { text: 'PT Returns', url: `${domain}pt-return` }
                ],
                [
                    { text: 'FLA Returns', url: `${domain}fla-returns` },
                    { text: 'FSSAI Returns', url: `${domain}fssai-returns` },
                    { text: 'ROC Notice', url: `${domain}registrar-of-companies` },
                    { text: 'GST Returns for E-commerce Operator', url: `${domain}gst-returns-for-e-commerce-operator` },
                    { text: 'GST Returns for Restaurants', url: `${domain}gst-returns-for-restaurants-food-businesses` },
                    { text: 'GST Returns for Freelancers', url: `${domain}gst-return-filing-for-freelancers` },
                    { text: 'GST Returns for OIDAR', url: `${domain}gst-returns-for-oidar` },
                    { text: 'GST Returns for SEZ', url: `${domain}gst-returns-for-sez` }
                ],
                [
                    { text: 'GST Refund', url: '#' },
                    { text: 'GST Annual Returns (9 / 9C)', url: '#' },
                    { text: 'Gratuity Calculations & Compliance', url: `${domain}gratuity-calculation-and-compliance-services` }
                ]
            ]
        },
        'income-tax-notices': {
            title: 'Income tax Notices',
            columns: [
                [
                    { text: 'IT Notice under Section 142(1)', url: `${domain}income-tax-notices-under-section-142-1` },
                    { text: 'IT Notice under Section 143(3)', url: `${domain}income-tax-notices-under-section-143-3` },
                    { text: 'IT Notice under Section 148', url: `${domain}income-tax-notices-under-section-148` }
                ],
                [
                    { text: 'IT Notice under Section 147', url: `${domain}income-tax-notices-under-section-147` },
                    { text: 'Notice for Defective Return', url: `${domain}income-tax-notice-for-defective-return` },
                    { text: 'IT Demand under Section 156', url: `${domain}income-tax-demand-under-section-156` }
                ]
            ]
        }
    };

    // ========================================
    // More Mega menu content data
    // ========================================
    const moreMegaMenuData = {
        audit: {
            title: 'Audit',
            columns: [
                [
                    { text: 'Statutory Audit Service', url: `${domain}statutory-audit` },
                    { text: 'Tax Audit Service', url: `${domain}tax-audit` },
                    { text: 'GST Audit Service', url: `${domain}gst-audit` },
                    { text: 'Secretarial Audit Service', url: `${domain}secretarial-audit` },
                    { text: 'Internal Audit Service', url: `${domain}internal-audit` },
                    { text: 'Stock Audit', url: `${domain}stock-audit` }
                ]
            ]
        },
        certificates: {
            title: 'Certificates',
            columns: [
                [
                    { text: 'Net Worth Certificate', url: `${domain}net-worth-certificate` },
                    { text: 'Net Worth Certificate for Visa', url: `${domain}net-worth-certificate-for-visa` },
                    { text: 'Net Worth Certificate for Joint Owners', url: `${domain}net-worth-certificate-for-joint-owners-in-india` },
                    { text: 'Net Worth Certificate for Sole Proprietorship', url: `${domain}net-worth-certificate-sole-proprietorship` },
                    { text: 'Net Worth Certificate for Partnership Firms', url: `${domain}net-worth-certificate-for-partnership-firms` },
                    { text: 'Double Currency Networth Format', url: `${domain}double-currency-networth-format` }
                ],
                [
                    { text: 'Turnover Certificate', url: `${domain}turnover-certificate` },
                    { text: 'Turnover Certificate for Tender', url: `${domain}turnover-certificate-for-tender` },
                    { text: 'Turnover Certificate for Current Account', url: `${domain}turnover-certificate-for-current-account` },
                    { text: 'MSDS Certificate Services', url: `${domain}msds-certificate-services` }
                ]
            ]
        },
        calculators: {
            title: 'Calculators & Tools',
            columns: [
                [
                    { text: 'PF Calculator', url: `${domain}pf-calculator` },
                    { text: 'Professional Tax (PT) Calculator', url: `${domain}professional-tax-pt-inr-calculator-compliance-services` }
                ]
            ]
        },
        'other-services': {
            title: 'Other Services',
            columns: [
                [
                    { text: 'Contact Us', url: `${domain}contact-page` }
                ]
            ]
        }
    };

    // ========================================
    // Handle Accounting & Payroll mega menu
    // ========================================
    const accountingMenuItems = document.querySelectorAll('.megamenu-parent:first-child .megamenu-left .menu-item');
    const accountingTitleElement = document.getElementById('accounting-megamenu-title');
    const accountingContentElement = document.getElementById('accounting-megamenu-content');

    // Initialize with first item's content
    if (accountingMegaMenuData['accounting']) {
        updateAccountingMegaMenuContent(accountingMegaMenuData['accounting']);
    }

    accountingMenuItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (!isMobile()) {
                const menuKey = this.getAttribute('data-menu');
                accountingMenuItems.forEach(mi => mi.classList.remove('active'));
                this.classList.add('active');
                if (accountingMegaMenuData[menuKey]) {
                    updateAccountingMegaMenuContent(accountingMegaMenuData[menuKey]);
                }
            }
        });
        
        item.addEventListener('click', function(e) {
            if (isMobile()) {
                e.preventDefault();
                const menuKey = this.getAttribute('data-menu');
                const rightPanel = this.closest('.megamenu-inner').querySelector('.megamenu-right');
                accountingMenuItems.forEach(mi => mi.classList.remove('active'));
                this.classList.add('active');
                if (accountingMegaMenuData[menuKey]) {
                    updateAccountingMegaMenuContent(accountingMegaMenuData[menuKey]);
                }
                rightPanel.classList.add('mobile-show');
            }
        });
    });

    function updateAccountingMegaMenuContent(data) {
        accountingTitleElement.textContent = data.title;
        accountingContentElement.innerHTML = '';
        data.columns.forEach(columnLinks => {
            const col = document.createElement('div');
            col.className = 'megamenu-col';
            columnLinks.forEach(linkData => {
                const link = document.createElement('a');
                link.href = linkData.url || '#';
                link.textContent = linkData.text || linkData;
                col.appendChild(link);
            });
            accountingContentElement.appendChild(col);
        });
    }

    // ========================================
    // Handle Registration mega menu
    // ========================================
    const menuItems = document.querySelectorAll('.megamenu-parent:nth-child(2) .megamenu-left .menu-item');
    const titleElement = document.getElementById('megamenu-title');
    const contentElement = document.getElementById('megamenu-content');

    // Initialize with first item's content
    if (megaMenuData['business']) {
        updateMegaMenuContent(megaMenuData['business']);
    }

    menuItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (!isMobile()) {
                const menuKey = this.getAttribute('data-menu');
                menuItems.forEach(mi => mi.classList.remove('active'));
                this.classList.add('active');
                if (megaMenuData[menuKey]) {
                    updateMegaMenuContent(megaMenuData[menuKey]);
                }
            }
        });
        
        item.addEventListener('click', function(e) {
            if (isMobile()) {
                e.preventDefault();
                const menuKey = this.getAttribute('data-menu');
                const rightPanel = this.closest('.megamenu-inner').querySelector('.megamenu-right');
                menuItems.forEach(mi => mi.classList.remove('active'));
                this.classList.add('active');
                if (megaMenuData[menuKey]) {
                    updateMegaMenuContent(megaMenuData[menuKey]);
                }
                rightPanel.classList.add('mobile-show');
            }
        });
    });

    function updateMegaMenuContent(data) {
        titleElement.textContent = data.title;
        contentElement.innerHTML = '';
        data.columns.forEach(columnLinks => {
            const col = document.createElement('div');
            col.className = 'megamenu-col';
            columnLinks.forEach(linkData => {
                const link = document.createElement('a');
                link.href = linkData.url || '#';
                link.textContent = linkData.text || linkData;
                col.appendChild(link);
            });
            contentElement.appendChild(col);
        });
    }

    // ========================================
    // Handle Returns and Notices mega menu
    // ========================================
    const returnsMenuItems = document.querySelectorAll('.megamenu-parent:nth-child(3) .megamenu-left .menu-item');
    const returnsTitleElement = document.getElementById('returns-megamenu-title');
    const returnsContentElement = document.getElementById('returns-megamenu-content');

    // Initialize with first item's content
    if (returnsMegaMenuData['income-tax-returns']) {
        updateReturnsMegaMenuContent(returnsMegaMenuData['income-tax-returns']);
    }

    returnsMenuItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (!isMobile()) {
                const menuKey = this.getAttribute('data-menu');
                returnsMenuItems.forEach(mi => mi.classList.remove('active'));
                this.classList.add('active');
                if (returnsMegaMenuData[menuKey]) {
                    updateReturnsMegaMenuContent(returnsMegaMenuData[menuKey]);
                }
            }
        });
        
        item.addEventListener('click', function(e) {
            if (isMobile()) {
                e.preventDefault();
                const menuKey = this.getAttribute('data-menu');
                const rightPanel = this.closest('.megamenu-inner').querySelector('.megamenu-right');
                returnsMenuItems.forEach(mi => mi.classList.remove('active'));
                this.classList.add('active');
                if (returnsMegaMenuData[menuKey]) {
                    updateReturnsMegaMenuContent(returnsMegaMenuData[menuKey]);
                }
                rightPanel.classList.add('mobile-show');
            }
        });
    });

    function updateReturnsMegaMenuContent(data) {
        returnsTitleElement.textContent = data.title;
        returnsContentElement.innerHTML = '';
        data.columns.forEach(columnLinks => {
            const col = document.createElement('div');
            col.className = 'megamenu-col';
            columnLinks.forEach(linkData => {
                const link = document.createElement('a');
                link.href = linkData.url || '#';
                link.textContent = linkData.text || linkData;
                col.appendChild(link);
            });
            returnsContentElement.appendChild(col);
        });
    }

    // ========================================
    // Handle More mega menu
    // ========================================
    const moreMenuItems = document.querySelectorAll('.megamenu-parent:nth-child(5) .megamenu-left .menu-item');
    const moreTitleElement = document.getElementById('more-megamenu-title');
    const moreContentElement = document.getElementById('more-megamenu-content');

    // Initialize with first item's content
    if (moreMegaMenuData['audit']) {
        updateMoreMegaMenuContent(moreMegaMenuData['audit']);
    }

    moreMenuItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (!isMobile()) {
                const menuKey = this.getAttribute('data-menu');
                moreMenuItems.forEach(mi => mi.classList.remove('active'));
                this.classList.add('active');
                if (moreMegaMenuData[menuKey]) {
                    updateMoreMegaMenuContent(moreMegaMenuData[menuKey]);
                }
            }
        });
        
        item.addEventListener('click', function(e) {
            if (isMobile()) {
                e.preventDefault();
                const menuKey = this.getAttribute('data-menu');
                const rightPanel = this.closest('.megamenu-inner').querySelector('.megamenu-right');
                moreMenuItems.forEach(mi => mi.classList.remove('active'));
                this.classList.add('active');
                if (moreMegaMenuData[menuKey]) {
                    updateMoreMegaMenuContent(moreMegaMenuData[menuKey]);
                }
                rightPanel.classList.add('mobile-show');
            }
        });
    });

    function updateMoreMegaMenuContent(data) {
        moreTitleElement.textContent = data.title;
        moreContentElement.innerHTML = '';
        data.columns.forEach(columnLinks => {
            const col = document.createElement('div');
            col.className = 'megamenu-col';
            columnLinks.forEach(linkData => {
                const link = document.createElement('a');
                link.href = linkData.url || '#';
                link.textContent = linkData.text || linkData;
                col.appendChild(link);
            });
            moreContentElement.appendChild(col);
        });
    }

    // ========================================
    // Generic mobile handler for Secretarial etc.
    // ========================================
    const allLeftMenuItems = document.querySelectorAll('.megamenu-left .menu-item');
    allLeftMenuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if (isMobile()) {
                e.preventDefault();
                const siblings = this.parentElement ? this.parentElement.querySelectorAll('.menu-item') : [];
                siblings.forEach(s => s.classList.remove('active'));
                this.classList.add('active');
                const inner = this.closest('.megamenu-inner');
                if (!inner) return;
                const rightPanel = inner.querySelector('.megamenu-right');
                const panel = this.closest('.megamenu-panel');
                if (panel && !panel.classList.contains('mobile-show')) {
                    panel.classList.add('mobile-show');
                }
                if (rightPanel) {
                    rightPanel.classList.add('mobile-show');
                }
            }
        });
    });

    // ========================================
    // Sticky Header Functionality
    // ========================================
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    const scrollThreshold = 100;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > scrollThreshold) {
            navbar.classList.add('sticky');
            document.body.classList.add('header-sticky-active');
        } else {
            navbar.classList.remove('sticky');
            document.body.classList.remove('header-sticky-active');
        }
        
        lastScrollTop = scrollTop;
    });
});
</script>