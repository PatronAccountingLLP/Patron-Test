@extends('layouts.app')

@section('title', 'Patron Accounting - Your Premier Accounting Partner')

@push('styles')
<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

.benefit-paragraph {
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 18px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #F26522 !important;
}

.report-component-card {
    background-color: #F9F6EE !important;
}

.report-component-card h5 {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 22px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #14365F !important;

}
.stars-rating i {
    color: #FFC107;
    font-size: 16px;
}

.google-logo {
    display: flex;
    align-items: center;
}

.benefit-paragraph span {
    font-weight: 700;
}

.stock-audit-procedure-heading {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 48px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #14365F;
}

.stock-audit-procedure-paragraph {
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 22px;
    line-height: 40px;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #587485;
    max-width: 800px;
}

.stock-audit-checklist-heading {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 43px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #14365F;
}

.stock-audit-fee-heading {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 34px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #14365F;
}

.patron-service-heading {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700 !important;
    font-style: normal;
    font-size: 22px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #14365F !important;
}

.registration-heading {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 24px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #14365F !important;
}

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

.explore-services-btn {
    width: 305px;
    height: 43px;
    opacity: 1;
    gap: 10px;
    border-radius: 100px;
    /* padding: 10px 141px; */
    background-color: #F26522 !important;
    border: none !important;
    color: white !important;
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 18px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.explore-services-btn:hover {
    background-color: #e55722 !important;
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(242, 101, 34, 0.3);
    text-decoration: none;
}

.action-btn-youtube {
    background-color: transparent;
    border: none;
    color: #14365F;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    font-style: normal;
    font-size: 16px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    text-decoration: underline;
    text-decoration-style: solid;
    text-decoration-offset: 0%;
    text-decoration-thickness: 0%;
    text-decoration-skip-ink: auto;
    opacity: 1;
    display: inline-block;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.action-btn-youtube a,
.action-btn-youtube a:visited,
.action-btn-document a,
.action-btn-document a:visited {
    color: #14365F !important;
    text-decoration: underline;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    font-size: 16px;
    line-height: 100%;
    transition: all 0.3s ease;
}

.action-btn-youtube:hover a,
.action-btn-youtube a:hover {
    color: #dc3545 !important;
    text-decoration: underline;
}


.action-btn-document {
    background-color: transparent;
    border: none;
    color: #14365F;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    font-style: normal;
    font-size: 16px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    text-decoration: underline;
    text-decoration-style: solid;
    text-decoration-offset: 0%;
    text-decoration-thickness: 0%;
    text-decoration-skip-ink: auto;
    opacity: 1;
    display: inline-block;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.action-btn-document:hover a,
.action-btn-document a:hover {
    color: #6c757d !important;
    text-decoration: underline;
}

.custom-dot-circle {
    width: 11px;
    height: 11px;
    background-color: #14365F;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.custom-dot-circle::before {
    content: '';
    width: 8px;
    height: 8px;
    background-color: #14365F;
    border-radius: 50%;
}

/* Screenshot testimonial card styles */
.screenshot-testimonial-card {
    background: white;
    /* width: 305px;
    height: 306px; */
    border-radius: 12px;
    overflow: hidden;
    /* box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 0 auto;
}

.screenshot-testimonial-card:hover {
    transform: translateY(-5px);
    /* box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15); */
}

.profile-image-section {
    position: relative;
    width: 100%;
    height: 197px;
    overflow: hidden;
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.star-rating-badge {
    position: absolute;
    bottom: 15px;
    left: 15px;
    background: rgba(255, 255, 255, 0.95);
    padding: 8px 12px;
    border-radius: 25px;
    display: flex;
    gap: 2px;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.star-rating-badge i {
    color: #FFC107;
    font-size: 14px;
}

.testimonial-content {
    padding: 20px;
}

.client-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.company-logo-badge {
    padding: 2px;
    /* background: linear-gradient(135deg, #007bff, #0056b3); */
    border: 1px solid #F4F4F4;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 16px;
    font-family: 'DM Sans', sans-serif;
    flex-shrink: 0;
}

.client-details {
    flex-grow: 1;
}

.client-name {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 18px;
    color: #2c3e50;
    margin: 0 0 4px 0;
    line-height: 1.2;
}

.client-position {
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #6c757d;
    margin: 0;
    line-height: 1.3;
}

/* Testimonial Quote Card Styles matching screenshot */
.testimonial-quote-card {
    background: white;
    /* width: 305px;
    height: 306px; */
    border-radius: 12px;
    padding: 25px;
    /* box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin: 0 auto;
}

.testimonial-quote-card:hover {
    transform: translateY(-5px);
    /* box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15); */
}

.quote-content {
    flex-grow: 1;
    margin-bottom: 20px;
}

.testimonial-text {
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    font-size: 14px;
    line-height: 1.6;
    color: #495057;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.testimonial-footer {
    display: flex;
    padding-top: 20px;
    border-top: 1px solid #f1f3f4;
    flex-direction: column;
}

.client-info-quote {
    display: flex;
    align-items: center;
    gap: 12px;
}

.client-avatar-quote {
    /* width: 40px;
    height: 40px; */
    padding: 2px;
    /* background: #28a745; */
    color: white;
    border-radius: 50%;
    border: 1px solid #F4F4F4;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    font-size: 14px;
    flex-shrink: 0;
}

.client-details-quote {
    flex-grow: 1;
}

.client-name-quote {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 16px;
    color: #2c3e50;
    margin: 0 0 2px 0;
    line-height: 1.2;
}

.client-position-quote {
    font-family: 'DM Sans', sans-serif;
    font-weight: 400;
    font-size: 13px;
    color: #6c757d;
    margin: 0;
    line-height: 1.3;
}

.rating-section {
    display: flex;
    align-items: center;
    gap: 12px;
    justify-content: space-between;
    margin-top: 8px;
}

.stars-rating {
    display: flex;
    gap: 2px;
}

.google-logo {
    display: flex;
    align-items: center;
}

/* Testimonial Slider Styles */
.testimonial-slider-container {
    position: relative;
    max-width: 100%;
    margin: 0 auto;
}

.testimonial-slick-slider {
    width: 100%;
}

.testimonial-slide {
    padding: 0 15px;
    outline: none;
}

/* Slick Slider Custom Styles */
.testimonial-slick-slider .slick-dots {
    bottom: -50px;
    text-align: center;
}

.testimonial-slick-slider .slick-dots li {
    margin: 0 5px;
}

.testimonial-slick-slider .slick-dots li button:before {
    font-size: 12px;
    color: #dee2e6;
    opacity: 1;
}

.testimonial-slick-slider .slick-dots li.slick-active button:before {
    color: #F26522;
    transform: scale(1.2);
}

/* Remove padding from testimonial slider columns */
.testimonial-slider-container .col-lg-3.col-md-6 {
    padding-left: 10px;
    padding-right: 10px;
}

/* Navigation Buttons - Removed */

/* Responsive Adjustments */
@media (max-width: 576px) {
    .testimonial-indicators {
        margin-top: 20px;
    }

    .testimonial-slide {
        padding: 0 10px;
    }
}

.hero-section {
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    min-height: 70vh;
    position: relative;
    overflow: hidden;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.02)" points="0,0 1000,300 1000,1000 0,700"/></svg>');
    background-size: cover;
}

.service-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    height: 100%;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.service-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #ff6600, #ff8533);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: white;
    font-size: 1.5rem;
}

.stats-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.stat-item {
    text-align: center;
    padding: 2rem 1rem;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: bold;
    color: #ff6600;
    display: block;
}

.cta-section {
    background: linear-gradient(135deg, #ff6600 0%, #ff8533 100%);
}

.btn-outline-orange {
    border: 2px solid #ff6600;
    color: #ff6600;
    background: transparent;
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-outline-orange:hover {
    background: #ff6600;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(255, 102, 0, 0.3);
}

.btn-orange {
    background: #ff6600;
    border: 2px solid #ff6600;
    color: white;
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-orange:hover {
    background: #e55a00;
    border-color: #e55a00;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(255, 102, 0, 0.3);
}

.section-title {
    position: relative;
    display: inline-block;
    margin-bottom: 3rem;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: #ff6600;
    border-radius: 2px;
}

.post-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 15px;
    overflow: hidden;
}

.post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.post-image {
    height: 220px;
    object-fit: cover;
    width: 100%;
}

@media (max-width: 768px) {
    .hero-section {
        min-height: 50vh;
    }

    .stat-number {
        font-size: 2rem;
    }

    /* Action buttons responsive styles */
    .action-btn-youtube,
    .action-btn-document {
        font-size: 14px;
    }

    .action-btn-youtube a,
    .action-btn-document a {
        font-size: 14px;
    }
}

@media (max-width: 576px) {

    /* Mobile specific styles for action buttons */
    .action-btn-youtube,
    .action-btn-document {
        font-size: 13px;
        display: block;
        width: 100%;
        text-align: left;
    }

    .action-btn-youtube a,
    .action-btn-document a {
        font-size: 13px;
        display: block;
        width: 100%;
    }

    /* Ensure buttons stack properly on mobile */
    .registration-submit-btn {
        width: 100% !important;
        max-width: 422px;
        margin: 0 auto;
    }

    .explore-services-btn {
        width: 100% !important;
        max-width: 305px;
        margin: 0 auto;
    }
}

/* Tab Navigation Styles */
.tab-button {
    background-color: transparent;
    border: 1px solid #dee2e6;
    color: #6c757d;
    padding: 8px 16px;
    border-radius: 25px;
    transition: all 0.3s ease;
    cursor: pointer;
    margin: 2px;
    text-decoration: none;
}

.tab-button:hover {
    color: #F26522 !important;
    text-decoration: none;
    border-color: #F26522;
    background-color: transparent;
}

.tab-button.active {
    background-color: #F26522 !important;
    color: white !important;
    border-color: #F26522;
    text-decoration: none;
}

.tab-button.active:hover {
    background-color: #e55722 !important;
    color: white !important;
    text-decoration: none;
}

/* Tab Content Styles */
.tab-content-container {
    margin-top: 2rem;
    text-align: left;
}

.tab-content-container .row {
    text-align: left;
}

.tab-content {
    display: none;
    animation: fadeIn 0.3s ease-in-out;
}

.tab-content.active {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive adjustments for tabs */
@media (max-width: 768px) {
    .tab-button {
        font-size: 14px !important;
        padding: 6px 12px;
        margin: 1px;
    }
}

@media (max-width: 576px) {
    .tab-button {
        font-size: 12px !important;
        padding: 5px 10px;
        margin: 1px;
    }
}

/* WhatsApp Switch Styling */
.whatsapp-switch {
    background-color: #15365F !important;
    border-color: #15365F !important;
    width: 3rem !important;
    height: 1.5rem !important;
}

.whatsapp-switch:checked {
    background-color: #15365F !important;
    border-color: #15365F !important;
}

.whatsapp-switch:focus {
    border-color: #15365F !important;
    box-shadow: 0 0 0 0.25rem rgba(21, 54, 95, 0.25) !important;
}

/* Registration Form Input Focus */
.registration-form-input:focus {
    border-color: #F26522 !important;
    box-shadow: 0 0 0 0.2rem rgba(242, 101, 34, 0.15) !important;
}

/* Button Hover Effect */
.btn:hover {
    background-color: #e55722 !important;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(242, 101, 34, 0.3) !important;
}
</style>
@endpush

@section('content')
<!-- Success/Error Messages -->
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 0; border-radius: 0;">
    <div class="container">
        <div class="d-flex align-items-center">
            <i class="bi bi-check-circle-fill me-3 text-success" style="font-size: 1.5rem;"></i>
            <div class="flex-grow-1">
                <strong>Success!</strong> {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

@if(session('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin: 0; border-radius: 0;">
    <div class="container">
        <div class="d-flex align-items-center">
            <i class="bi bi-exclamation-triangle-fill me-3 text-warning" style="font-size: 1.5rem;"></i>
            <div class="flex-grow-1">
                <strong>Notice:</strong> {{ session('error') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 0; border-radius: 0;">
    <div class="container">
        <div class="d-flex align-items-start">
            <i class="bi bi-exclamation-circle-fill me-3 text-danger" style="font-size: 1.5rem; margin-top: 2px;"></i>
            <div class="flex-grow-1">
                <strong>Please correct the following errors:</strong>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

<!-- Private Limited Company Registration Section -->
<section class="py-5 bg-light" style="background-color: #FFFFFF;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="pe-lg-5">
                    <h2 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Private Limited Company registration in India -Starting @ ₹999
                    </h2>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="me-3">
                                <div class="custom-dot-circle"></div>
                            </div>
                            <div>
                                <p class="mb-0 text-dark benefit-paragraph">Expert assistance & filing in just 2
                                    days</strong> for
                                    your growing business. <span>T & C</span> apply.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <div class="me-3">
                                <div class="custom-dot-circle"></div>
                            </div>
                            <div>
                                <p class="mb-0 text-dark benefit-paragraph">
                                    Affordable, transparent pricing starting at
                                    ₹999 + Govt. fee with no hidden charges.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="me-3">
                                <div class="custom-dot-circle"></div>
                            </div>
                            <div>
                                <p class="mb-0 text-dark benefit-paragraph">Complete compliance handling &
                                    post-incorporation & banking support.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <a href="#services" class="explore-services-btn me-3 mb-2">
                            Explore our services
                        </a>
                    </div>

                    <div class="d-flex flex-column flex-sm-row flex-wrap gap-3 gap-sm-2 align-items-start">
                        <!-- YouTube Section -->
                        <div class="d-flex align-items-center gap-2 mb-2 mb-sm-0">
                            <img src="{{ asset('images/youtube-168-svgrepo-com-1.png') }}" alt="Play Icon"
                                class="flex-shrink-0" style="width: 20px; height: 20px;">
                            <div class="action-btn-youtube">
                                <a href="#" class="text-decoration-none">
                                    Know about PVT in 60 seconds.
                                </a>
                            </div>
                        </div>

                        <!-- Document Section -->
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ asset('images/document-text-svgrepo-com-1.png') }}" alt="Document Icon"
                                class="flex-shrink-0" style="width: 20px; height: 20px;">
                            <div class="action-btn-document">
                                <a href="#" class="text-decoration-none">
                                    View Sample document
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card shadow-lg border-0" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <h4 class="registration-heading mb-4">Register your Pvt. Ltd Company with us.</h4>

                        <form action="{{ route('frontend.company-registration') }}" method="POST"
                            class="registration-form">
                            @csrf
                            <!-- Name Field -->
                            <div class="mb-3">
                                <input type="text"
                                    class="form-control form-control-lg registration-form-input @error('name') is-invalid @enderror"
                                    name="name" placeholder="Your Name" value="{{ old('name') }}" required
                                    style="border-radius: 10px; border: 1px solid #ddd; padding: 15px;">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <input type="email"
                                    class="form-control form-control-lg registration-form-input @error('email') is-invalid @enderror"
                                    name="email" placeholder="Your Email id." value="{{ old('email') }}" required
                                    style="border-radius: 10px; border: 1px solid #ddd; padding: 15px;">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Mobile Field with India Flag -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text d-flex align-items-center gap-2" style="border-radius: 10px 0 0 10px; border: 1px solid #ddd; background: white; padding: 15px 12px;">
                                        <img src="{{ asset('images/india.png') }}" alt="India Flag" style="width: 53px; height: 36px;">
                                        <span style="display: flex; align-items: center; justify-content: center; font-weight: 500; color: #333; font-size: 22px; border: 1px solid #CDCDCD; border-radius: 8px; width: 54px; height: 42px;">+91</span>
                                    </span>
                                    <input type="tel"
                                        class="form-control form-control-lg registration-form-input @error('mobile') is-invalid @enderror"
                                        name="mobile" placeholder="Your Mobile no." value="{{ old('mobile') }}" required
                                        style="border-radius: 0 10px 10px 0; border: 1px solid #ddd; border-left: none; padding: 15px;">
                                    @error('mobile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- City/Pincode Field -->
                            <div class="mb-3">
                                <input type="text"
                                    class="form-control form-control-lg registration-form-input @error('location') is-invalid @enderror"
                                    name="location" placeholder="City/Pincode" value="{{ old('location') }}" required
                                    style="border-radius: 10px; border: 1px solid #ddd; padding: 15px;">
                                @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- WhatsApp Updates Toggle -->
                           <div class="mb-4 d-flex align-items-center">
                                    <span style="font-size: 16px; font-weight: 500; color: #61666D;">Get updates on</span>
                                    <img src="http://127.0.0.1:8000/images/whatsapp.svg" alt="WhatsApp" class="mx-2" style="width: 22px; height: 22px;">
                                    <span style="font-size: 16px; font-weight: 500; color: #61666D;">WhatsApp</span>
                                    <div class="form-check form-switch mx-2">
                                        <input class="form-check-input whatsapp-switch" type="checkbox" id="whatsappUpdates" name="whatsapp_updates" checked="">
                                        <label class="form-check-label" for="whatsappUpdates"></label>
                                    </div>
                                </div>

                            <button type="submit" class="btn w-100" style="background-color: #F26522; color: white; font-family: 'DM Sans', sans-serif; font-weight: 600; font-size: 16px; padding: 15px; border-radius: 10px; border: none; transition: all 0.3s ease;">
                                Get started now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Real Stories from Real People Section -->
<section class="py-5" style="background-color: #F3F1EF;">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="fw-bold text-dark mb-3" style="font-size: 2.2rem;">Real Stories from Real People</h2>
                <p class="text-muted mb-0" style="font-size: 1.1rem;">Hear how teams across industries use patron to
                    save time, cut costs, & stay in control.</p>
            </div>
        </div>

        <!-- Testimonial Slider Container -->
        <div class="testimonial-slider-container position-relative">
            <!-- Slick Slider -->
            <div class="testimonial-slick-slider">

                <!-- Slide 1 - Shows 4 boxes (2 profile + 2 quote) -->
                <div class="testimonial-slide">
                    <div class="row g-5">
                        <!-- Profile Card 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="screenshot-testimonial-card">
                                <div class="profile-image-section">
                                    <img src="{{ asset('images/rectangle.png') }}"
                                        class="profile-image" alt="Bill Jacobson">
                                    <div class="star-rating-badge">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="client-info">
                                        <div class="company-logo-badge">
                                            <img src="{{ asset('images/image1.png') }}" alt="Company Logo"
                                                style="width: 42px; height: 42px; object-fit: contain;">
                                        </div>
                                        <div class="client-details">
                                            <h6 class="client-name">Bill Jacobson</h6>
                                            <p class="client-position">VP-Business</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="screenshot-testimonial-card">
                                <div class="profile-image-section">
                                    <img src="{{ asset('images/rectangle3567.png') }}" class="profile-image"
                                        alt="Sarah Johnson">
                                    <div class="star-rating-badge">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="client-info">
                                        <div class="company-logo-badge">
                                            <img src="{{ asset('images/image1.png') }}" alt="Company Logo"
                                                style="width: 42px; height: 42px; object-fit: contain;">
                                        </div>
                                        <div class="client-details">
                                            <h6 class="client-name">Sarah Johnson</h6>
                                            <p class="client-position">Business Owner</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quote Card 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="testimonial-quote-card">
                                <div class="quote-content">
                                    <p class="testimonial-text">
                                        Patron Accounting LLP's helped me to get the required documents within 4hrs of
                                        request to get the GST registration documents. I highly appreciate their express
                                        services.
                                    </p>
                                </div>
                                <div class="testimonial-footer">
                                    <div class="client-info-quote">
                                        <div class="client-avatar-quote"><img src="{{ asset('images/image.png') }}" alt="Client Avatar" style="width: 42px; height: 42px; border-radius: 50%;"></div>
                                        <div class="client-details-quote">
                                            <h6 class="client-name-quote">Rex J Raj</h6>
                                            <p class="client-position-quote">Client</p>
                                        </div>
                                    </div>
                                    <div class="rating-section">
                                        <div class="stars-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="google-logo"><img src="{{ asset('images/google.png') }}" alt="Google Logo" style="width: 26px; height: 26px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quote Card 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="testimonial-quote-card">
                                <div class="quote-content">
                                    <p class="testimonial-text">
                                        For FSSAI registration, Patron Accounting LLP proved to be an excellent choice.
                                        They guided me through requirements and documentation, ensuring compliance.
                                    </p>
                                </div>
                                <div class="testimonial-footer">
                                    <div class="client-info-quote">
                                        <div class="client-avatar-quote">
                                            <img src="{{ asset('images/image.png') }}" alt="Client Avatar" style="width: 42px; height: 42px; border-radius: 50%;">
                                        </div>
                                        <div class="client-details-quote">
                                            <h6 class="client-name-quote">Tasikkaaa</h6>
                                            <p class="client-position-quote">Client</p>
                                        </div>
                                    </div>
                                    <div class="rating-section">
                                        <div class="stars-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="google-logo"><img src="{{ asset('images/google.png') }}" alt="Google Logo" style="width: 26px; height: 26px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 - Shows next 4 boxes -->
                <div class="testimonial-slide">
                    <div class="row g-5">
                        <!-- Profile Card 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="screenshot-testimonial-card">
                                <div class="profile-image-section">
                                    <img src="{{ asset('images/rectangle3567.png') }}"
                                        class="profile-image" alt="Michael Chen">
                                    <div class="star-rating-badge">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="client-info">
                                        <div class="company-logo-badge"
                                            >
                                            <img src="{{ asset('images/image1.png') }}" alt="Company Logo"
                                                style="width: 42px; height: 42px; object-fit: contain;">
                                        </div>
                                        <div class="client-details">
                                            <h6 class="client-name">Michael Chen</h6>
                                            <p class="client-position">Startup Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="screenshot-testimonial-card">
                                <div class="profile-image-section">
                                    <img src="{{ asset('images/rectangle.png') }}"
                                        class="profile-image" alt="Emma Wilson">
                                    <div class="star-rating-badge">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="client-info">
                                        <div class="company-logo-badge"
                                            >
                                            <img src="{{ asset('images/image1.png') }}" alt="Company Logo"
                                                style="width: 42px; height: 42px; object-fit: contain;">
                                        </div>
                                        <div class="client-details">
                                            <h6 class="client-name">Emma Wilson</h6>
                                            <p class="client-position">CEO, TechStart</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quote Card 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="testimonial-quote-card">
                                <div class="quote-content">
                                    <p class="testimonial-text">
                                        Outstanding service for company incorporation! The team handled all
                                        documentation efficiently and kept me informed throughout the process.
                                    </p>
                                </div>
                                <div class="testimonial-footer">
                                    <div class="client-info-quote">
                                        <div class="client-avatar-quote">
                                            <img src="{{ asset('images/image.png') }}" alt="Client Avatar" style="width: 42px; height: 42px; border-radius: 50%;">
                                        </div>
                                        <div class="client-details-quote">
                                            <h6 class="client-name-quote">Michael Chen</h6>
                                            <p class="client-position-quote">Entrepreneur</p>
                                        </div>
                                    </div>
                                    <div class="rating-section">
                                        <div class="stars-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="google-logo"><img src="{{ asset('images/google.png') }}" alt="Google Logo" style="width: 26px; height: 26px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quote Card 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="testimonial-quote-card">
                                <div class="quote-content">
                                    <p class="testimonial-text">
                                        Professional team with deep knowledge of compliance requirements. They made our
                                        trademark registration process smooth and hassle-free.
                                    </p>
                                </div>
                                <div class="testimonial-footer">
                                    <div class="client-info-quote">
                                        <div class="client-avatar-quote">
                                            <img src="{{ asset('images/image.png') }}" alt="Client Avatar" style="width: 42px; height: 42px; border-radius: 50%;">
                                        </div>
                                        <div class="client-details-quote">
                                            <h6 class="client-name-quote">Emma Wilson</h6>
                                            <p class="client-position-quote">Business Leader</p>
                                        </div>
                                    </div>
                                    <div class="rating-section">
                                        <div class="stars-rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="google-logo"><img src="{{ asset('images/google.png') }}" alt="Google Logo" style="width: 26px; height: 26px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery (required for Slick) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.testimonial-slick-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 6000,
            arrows: false,
            fade: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplaySpeed: 4000
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplaySpeed: 4000,
                        dots: true
                    }
                }
            ]
        });
    });

    // Tab functionality
    $(document).ready(function() {
        $('.tab-button').on('click', function() {
            // Remove active class from all buttons and content
            $('.tab-button').removeClass('active');
            $('.tab-content').removeClass('active');

            // Add active class to clicked button
            $(this).addClass('active');

            // Get the target tab content
            var targetTab = $(this).data('tab');
            $('#' + targetTab + '-content').addClass('active');
        });
    });
    </script>
    </div>
</section>

<!-- Real Stories from Real People Section -->
<section class="bg-light">
    <div class="container">
        <div class="text-center mb-5 pt-4">
            <h2 class="fw-bold text-dark mb-3"
                style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: normal; font-size: 40px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #444444 !important;">
                All Accounting Feature in one tool
            </h2>

            <!-- Tab Navigation Pills with Working Functionality -->
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4 mb-4 pt-4">
                <button class="tab-button active" data-tab="services"
                    style="font-family: 'DM Sans', sans-serif; font-weight: 500; font-style: normal; font-size: 16px; line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
                    Stock Audit Consulting Services in India
                </button>
                <button class="tab-button" data-tab="what-is"
                    style="font-family: 'DM Sans', sans-serif; font-weight: 500; font-style: normal; font-size: 16px; line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
                    What is Stock Audit
                </button>
                <button class="tab-button" data-tab="applicability"
                    style="font-family: 'DM Sans', sans-serif; font-weight: 500; font-style: normal; font-size: 16px; line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
                    Stock Audit Applicability & Limit
                </button>
                <button class="tab-button" data-tab="report-format"
                    style="font-family: 'DM Sans', sans-serif; font-weight: 500; font-style: normal; font-size: 16px; line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
                    Stock Audit Report Format
                </button>
                <button class="tab-button" data-tab="procedure"
                    style="font-family: 'DM Sans', sans-serif; font-weight: 500; font-style: normal; font-size: 16px; line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
                    Stock Audit Procedure
                </button>
                <button class="tab-button" data-tab="checklist"
                    style="font-family: 'DM Sans', sans-serif; font-weight: 500; font-style: normal; font-size: 16px; line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
                    Stock Audit Checklist
                </button>
                <button class="tab-button" data-tab="fees"
                    style="font-family: 'DM Sans', sans-serif; font-weight: 500; font-style: normal; font-size: 16px; line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
                    Stock Audit Fees
                </button>
            </div>

            <!-- Tab Content Container -->
            <div class="tab-content-container">
                <!-- Services Tab Content -->
                <div class="tab-content active" id="services-content">
                    <!-- Content Area matching screenshot layout -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="pe-lg-4">
                                <h3 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    Stock Audit Consulting Services in India
                                </h3>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    Stock Audit in India is an independent verification of a company's inventory,
                                    conducted to
                                    ensure that physical
                                    stock matches book records. Governed by accounting and compliance standards under
                                    the Companies
                                    Act, 2013,
                                    and guidelines from the <strong style="color: #2c5aa0;">Reserve Bank of India
                                        (RBI)</strong>
                                    (particularly in the case of bank borrower audits), stock audit
                                    has become essential for businesses across industries.
                                </p>

                                <h4 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    What is a Stock Audit?
                                </h4>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    A stock audit is a vital process that ensures the accuracy and reliability of an
                                    organization's
                                    inventory records by
                                    comparing them with the actual physical stock. It plays a crucial role in
                                    safeguarding assets,
                                    maintaining
                                    transparency, and supporting sound financial management.
                                </p>

                                <p class="text-muted" style="line-height: 1.7; font-size: 1rem;">
                                    The audit covers all types of inventory, including raw materials, work-in-progress,
                                    and finished
                                    goods. Its primary
                                    objective is to identify and address discrepancies that may arise due to pilferage,
                                    damage,
                                    misplacement,
                                    recording errors, or product expiry. By reconciling physical stock with the stock
                                    recorded in
                                    the books of accounts,
                                    businesses can exercise better control over inventory and minimize operational
                                    losses.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- What is Stock Audit Tab Content -->
                <div class="tab-content" id="what-is-content">
                    <!-- Content Area matching screenshot layout -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="pe-lg-4">
                                <h3 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    Stock Audit Consulting Services in India
                                </h3>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    Stock Audit in India is an independent verification of a company's inventory,
                                    conducted to
                                    ensure that physical
                                    stock matches book records. Governed by accounting and compliance standards under
                                    the Companies
                                    Act, 2013,
                                    and guidelines from the <strong style="color: #2c5aa0;">Reserve Bank of India
                                        (RBI)</strong>
                                    (particularly in the case of bank borrower audits), stock audit
                                    has become essential for businesses across industries.
                                </p>

                                <h4 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    What is a Stock Audit?
                                </h4>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    A stock audit is a vital process that ensures the accuracy and reliability of an
                                    organization's
                                    inventory records by
                                    comparing them with the actual physical stock. It plays a crucial role in
                                    safeguarding assets,
                                    maintaining
                                    transparency, and supporting sound financial management.
                                </p>

                                <p class="text-muted" style="line-height: 1.7; font-size: 1rem;">
                                    The audit covers all types of inventory, including raw materials, work-in-progress,
                                    and finished
                                    goods. Its primary
                                    objective is to identify and address discrepancies that may arise due to pilferage,
                                    damage,
                                    misplacement,
                                    recording errors, or product expiry. By reconciling physical stock with the stock
                                    recorded in
                                    the books of accounts,
                                    businesses can exercise better control over inventory and minimize operational
                                    losses.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Applicability Tab Content -->
                <div class="tab-content" id="applicability-content">
                    <!-- Content Area matching screenshot layout -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="pe-lg-4">
                                <h3 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    Stock Audit Consulting Services in India
                                </h3>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    Stock Audit in India is an independent verification of a company's inventory,
                                    conducted to
                                    ensure that physical
                                    stock matches book records. Governed by accounting and compliance standards under
                                    the Companies
                                    Act, 2013,
                                    and guidelines from the <strong style="color: #2c5aa0;">Reserve Bank of India
                                        (RBI)</strong>
                                    (particularly in the case of bank borrower audits), stock audit
                                    has become essential for businesses across industries.
                                </p>

                                <h4 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    What is a Stock Audit?
                                </h4>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    A stock audit is a vital process that ensures the accuracy and reliability of an
                                    organization's
                                    inventory records by
                                    comparing them with the actual physical stock. It plays a crucial role in
                                    safeguarding assets,
                                    maintaining
                                    transparency, and supporting sound financial management.
                                </p>

                                <p class="text-muted" style="line-height: 1.7; font-size: 1rem;">
                                    The audit covers all types of inventory, including raw materials, work-in-progress,
                                    and finished
                                    goods. Its primary
                                    objective is to identify and address discrepancies that may arise due to pilferage,
                                    damage,
                                    misplacement,
                                    recording errors, or product expiry. By reconciling physical stock with the stock
                                    recorded in
                                    the books of accounts,
                                    businesses can exercise better control over inventory and minimize operational
                                    losses.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Report Format Tab Content -->
                <div class="tab-content" id="report-format-content">
                    <!-- Content Area matching screenshot layout -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="pe-lg-4">
                                <h3 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    Stock Audit Consulting Services in India
                                </h3>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    Stock Audit in India is an independent verification of a company's inventory,
                                    conducted to
                                    ensure that physical
                                    stock matches book records. Governed by accounting and compliance standards under
                                    the Companies
                                    Act, 2013,
                                    and guidelines from the <strong style="color: #2c5aa0;">Reserve Bank of India
                                        (RBI)</strong>
                                    (particularly in the case of bank borrower audits), stock audit
                                    has become essential for businesses across industries.
                                </p>

                                <h4 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    What is a Stock Audit?
                                </h4>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    A stock audit is a vital process that ensures the accuracy and reliability of an
                                    organization's
                                    inventory records by
                                    comparing them with the actual physical stock. It plays a crucial role in
                                    safeguarding assets,
                                    maintaining
                                    transparency, and supporting sound financial management.
                                </p>

                                <p class="text-muted" style="line-height: 1.7; font-size: 1rem;">
                                    The audit covers all types of inventory, including raw materials, work-in-progress,
                                    and finished
                                    goods. Its primary
                                    objective is to identify and address discrepancies that may arise due to pilferage,
                                    damage,
                                    misplacement,
                                    recording errors, or product expiry. By reconciling physical stock with the stock
                                    recorded in
                                    the books of accounts,
                                    businesses can exercise better control over inventory and minimize operational
                                    losses.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Procedure Tab Content -->
                <div class="tab-content" id="procedure-content">
                    <!-- Content Area matching screenshot layout -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="pe-lg-4">
                                <h3 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    Stock Audit Consulting Services in India
                                </h3>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    Stock Audit in India is an independent verification of a company's inventory,
                                    conducted to
                                    ensure that physical
                                    stock matches book records. Governed by accounting and compliance standards under
                                    the Companies
                                    Act, 2013,
                                    and guidelines from the <strong style="color: #2c5aa0;">Reserve Bank of India
                                        (RBI)</strong>
                                    (particularly in the case of bank borrower audits), stock audit
                                    has become essential for businesses across industries.
                                </p>

                                <h4 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    What is a Stock Audit?
                                </h4>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    A stock audit is a vital process that ensures the accuracy and reliability of an
                                    organization's
                                    inventory records by
                                    comparing them with the actual physical stock. It plays a crucial role in
                                    safeguarding assets,
                                    maintaining
                                    transparency, and supporting sound financial management.
                                </p>

                                <p class="text-muted" style="line-height: 1.7; font-size: 1rem;">
                                    The audit covers all types of inventory, including raw materials, work-in-progress,
                                    and finished
                                    goods. Its primary
                                    objective is to identify and address discrepancies that may arise due to pilferage,
                                    damage,
                                    misplacement,
                                    recording errors, or product expiry. By reconciling physical stock with the stock
                                    recorded in
                                    the books of accounts,
                                    businesses can exercise better control over inventory and minimize operational
                                    losses.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Checklist Tab Content -->
                <div class="tab-content" id="checklist-content">
                    <!-- Content Area matching screenshot layout -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="pe-lg-4">
                                <h3 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    Stock Audit Consulting Services in India
                                </h3>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    Stock Audit in India is an independent verification of a company's inventory,
                                    conducted to
                                    ensure that physical
                                    stock matches book records. Governed by accounting and compliance standards under
                                    the Companies
                                    Act, 2013,
                                    and guidelines from the <strong style="color: #2c5aa0;">Reserve Bank of India
                                        (RBI)</strong>
                                    (particularly in the case of bank borrower audits), stock audit
                                    has become essential for businesses across industries.
                                </p>

                                <h4 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    What is a Stock Audit?
                                </h4>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    A stock audit is a vital process that ensures the accuracy and reliability of an
                                    organization's
                                    inventory records by
                                    comparing them with the actual physical stock. It plays a crucial role in
                                    safeguarding assets,
                                    maintaining
                                    transparency, and supporting sound financial management.
                                </p>

                                <p class="text-muted" style="line-height: 1.7; font-size: 1rem;">
                                    The audit covers all types of inventory, including raw materials, work-in-progress,
                                    and finished
                                    goods. Its primary
                                    objective is to identify and address discrepancies that may arise due to pilferage,
                                    damage,
                                    misplacement,
                                    recording errors, or product expiry. By reconciling physical stock with the stock
                                    recorded in
                                    the books of accounts,
                                    businesses can exercise better control over inventory and minimize operational
                                    losses.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Fees Tab Content -->
                <div class="tab-content" id="fees-content">
                    <!-- Content Area matching screenshot layout -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="pe-lg-4">
                                <h3 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    Stock Audit Consulting Services in India
                                </h3>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    Stock Audit in India is an independent verification of a company's inventory,
                                    conducted to
                                    ensure that physical
                                    stock matches book records. Governed by accounting and compliance standards under
                                    the Companies
                                    Act, 2013,
                                    and guidelines from the <strong style="color: #2c5aa0;">Reserve Bank of India
                                        (RBI)</strong>
                                    (particularly in the case of bank borrower audits), stock audit
                                    has become essential for businesses across industries.
                                </p>

                                <h4 class="fw-bold mb-3"
                                    style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                    What is a Stock Audit?
                                </h4>

                                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 1rem;">
                                    A stock audit is a vital process that ensures the accuracy and reliability of an
                                    organization's
                                    inventory records by
                                    comparing them with the actual physical stock. It plays a crucial role in
                                    safeguarding assets,
                                    maintaining
                                    transparency, and supporting sound financial management.
                                </p>

                                <p class="text-muted" style="line-height: 1.7; font-size: 1rem;">
                                    The audit covers all types of inventory, including raw materials, work-in-progress,
                                    and finished
                                    goods. Its primary
                                    objective is to identify and address discrepancies that may arise due to pilferage,
                                    damage,
                                    misplacement,
                                    recording errors, or product expiry. By reconciling physical stock with the stock
                                    recorded in
                                    the books of accounts,
                                    businesses can exercise better control over inventory and minimize operational
                                    losses.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Content Section -->
<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img src="{{ asset('images/section3.png') }}" alt="Professional Accounting Services"
                    class="img-fluid section-image" style="max-width: 100%; height: auto; border-radius: 15px;">
            </div>
        </div>
    </div>
</section>

<!-- Professional Content Section -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="content-wrapper">
                    <!-- Opening Paragraph -->
                    <p class="text-muted mb-5" style="line-height: 1.8; font-size: 1.05rem; text-align: justify;">
                        In addition to operational benefits, audits are essential for statutory compliance and are
                        frequently mandated by
                        banks and financial institutions as part of credit evaluations, since accurate stock valuation
                        is central to loan
                        assessments. Conducted periodically, audits not only strengthen internal controls and reduce the
                        risk of fraud but
                        also provide reliable insights for planning, forecasting, and decision-making, thereby enhancing
                        organizational
                        accountability and financial credibility.
                    </p>

                    <!-- Main Heading -->
                    <h2 class="fw-bold mb-4" style="color: #2c5aa0; font-size: 2rem; line-height: 1.3;">
                        Stock Audit Applicability & Limit
                    </h2>

                    <!-- Content Paragraphs -->
                    <p class="text-muted mb-4" style="line-height: 1.8; font-size: 1.05rem; text-align: justify;">
                        The applicability and limits define when businesses should undertake inventory verification and
                        the thresholds that
                        make such audits mandatory. These measures safeguard financial stability, ensure compliance, and
                        strengthen
                        inventory control.
                    </p>

                    <p class="text-muted mb-4" style="line-height: 1.8; font-size: 1.05rem; text-align: justify;">
                        Audits are essential for businesses and manufacturing units with high-value or fast-moving
                        inventory, where even
                        small discrepancies can have a significant financial impact. Borrowers from banks and financial
                        institutions are also
                        subject to audits, as the <strong style="color: #2c5aa0;">Reserve Bank of India (RBI)</strong>
                        mandates periodic stock verification for credit facilities
                        exceeding prescribed limits. Listed companies must conduct audits as part of corporate
                        governance, ensuring
                        transparency and reliability in reporting.
                    </p>

                    <p class="text-muted mb-5" style="line-height: 1.8; font-size: 1.05rem; text-align: justify;">
                        Regarding limits, audits for bank borrowers are generally required when credit exposure exceeds
                        ₹5 crore, though
                        thresholds may vary by bank or RBI directives. For manufacturing and retail businesses, periodic
                        audits are
                        considered best practice to maintain accuracy, efficiency, and long-term reliability.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stock Audit Services Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- Services Grid -->
                <div class="row g-4">
                    <!-- Service 1: Opening & Closing Stock Verification -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item-card bg-white rounded-3 p-4 h-100 text-center shadow-sm border">
                            <div class="service-icon-wrapper mb-3">
                                <div class="service-icon-pro  bg-opacity-10 rounded-circle p-3 d-inline-flex">
                                    <img src="{{ asset('images/finance_mode.png') }}"
                                        alt="Professional Accounting Services" class="img-fluid section-image"
                                        style="max-width: 100%; height: auto; border-radius: 15px;">
                                </div>
                            </div>
                            <h5 class="fw-bold text-dark mb-3"
                                style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 22px; line-height: 100%; letter-spacing: 0%; text-align: center; vertical-align: middle; color: #14365F !important;">
                                Opening & Closing Stock Verification
                            </h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Confirming that recorded balances match the actual stock.
                            </p>
                        </div>
                    </div>

                    <!-- Service 2: Inventory Movement Analysis -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item-card bg-white rounded-3 p-4 h-100 text-center shadow-sm border">
                            <div class="service-icon-wrapper mb-3">
                                <div class="service-icon-pro bg-opacity-10 rounded-circle p-3 d-inline-flex">
                                    <img src="{{ asset('images/inventory.png') }}"
                                        alt="Professional Accounting Services" class="img-fluid section-image"
                                        style="max-width: 100%; height: auto; border-radius: 15px;">
                                </div>
                            </div>
                            <h5 class="fw-bold text-dark mb-3"
                                style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 22px; line-height: 100%; letter-spacing: 0%; text-align: center; vertical-align: middle; color: #14365F !important;">
                                Inventory Movement Analysis
                            </h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Reviewing purchases, consumption, and sales to ensure proper accounting treatment.
                            </p>
                        </div>
                    </div>

                    <!-- Service 3: Ageing of Inventory -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item-card bg-white rounded-3 p-4 h-100 text-center shadow-sm border">
                            <div class="service-icon-wrapper mb-3">
                                <div class="service-icon-pro bg-opacity-10 rounded-circle p-3 d-inline-flex">
                                    <img src="{{ asset('images/calendar_clock.png') }}"
                                        alt="Professional Accounting Services" class="img-fluid section-image"
                                        style="max-width: 100%; height: auto; border-radius: 15px;">
                                </div>
                            </div>
                            <h5 class="fw-bold text-dark mb-3"
                                style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 22px; line-height: 100%; letter-spacing: 0%; text-align: center; vertical-align: middle; color: #14365F !important;">
                                Ageing of Inventory
                            </h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Identifying slow-moving, expired, or obsolete stock requiring adjustments or write-offs.
                            </p>
                        </div>
                    </div>

                    <!-- Service 4: Fixed Asset Tagging and Reconciliation -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item-card bg-white rounded-3 p-4 h-100 text-center shadow-sm border">
                            <div class="service-icon-wrapper mb-3">
                                <div class="service-icon-pro  bg-opacity-10 rounded-circle p-3 d-inline-flex">
                                    <img src="{{ asset('images/folder_match.png') }}"
                                        alt="Professional Accounting Services" class="img-fluid section-image"
                                        style="max-width: 100%; height: auto; border-radius: 15px;">
                                </div>
                            </div>
                            <h5 class="fw-bold text-dark mb-3"
                                style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 22px; line-height: 100%; letter-spacing: 0%; text-align: center; vertical-align: middle; color: #14365F !important;">
                                Fixed Asset Tagging and Reconciliation
                            </h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Ensuring assets are properly identified, recorded, and matched with the fixed asset
                                register.
                            </p>
                        </div>
                    </div>

                    <!-- Service 5: Valuation Method Verification -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item-card bg-white rounded-3 p-4 h-100 text-center shadow-sm border">
                            <div class="service-icon-wrapper mb-3">
                                <div class="service-icon-pro bg-opacity-10 rounded-circle p-3 d-inline-flex">
                                    <img src="{{ asset('images/money_range.png') }}"
                                        alt="Professional Accounting Services" class="img-fluid section-image"
                                        style="max-width: 100%; height: auto; border-radius: 15px;">
                                </div>
                            </div>
                            <h5 class="fw-bold text-dark mb-3"
                                style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 22px; line-height: 100%; letter-spacing: 0%; text-align: center; vertical-align: middle; color: #14365F !important;">
                                Valuation Method Verification
                            </h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Checking whether methods such as FIFO, LIFO, or Weighted Average are applied
                                consistently and in compliance with accounting standards.
                            </p>
                        </div>
                    </div>

                    <!-- Service 6: Compliance with Bank/Loan Covenants -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item-card bg-white rounded-3 p-4 h-100 text-center shadow-sm border">
                            <div class="service-icon-wrapper mb-3">
                                <div class="service-icon-pro bg-opacity-10 rounded-circle p-3 d-inline-flex">
                                    <img src="{{ asset('images/vector.png') }}" alt="Professional Accounting Services"
                                        class="img-fluid section-image"
                                        style="max-width: 100%; height: auto; border-radius: 15px;">
                                </div>
                            </div>
                            <h5 class="fw-bold text-dark mb-3"
                                style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 22px; line-height: 100%; letter-spacing: 0%; text-align: center; vertical-align: middle; color: #14365F !important;">
                                Compliance with Bank/Loan Covenants
                            </h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Confirming adherence to conditions imposed by banks or financial institutions for credit
                                facilities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Important Note -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="alert alert-light py-3 px-4" style="border-radius: 12px; border: 1px solid #000;">
                            <div class="d-flex align-items-start">
                                <div>
                                    <strong
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important;">Please
                                        Note:</strong>
                                    <span
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #587485 !important;"
                                        class="text-muted ms-2">
                                        Such reports not only enhance internal control but also provide valuable
                                        insights for decision-making,
                                        financial reporting, and stakeholder assurance.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stock Audit Report Format Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 bg-dark py-4 rounded-4">
                <!-- Dark Header Section -->
                <div class="report-format-header text-white rounded-4 p-5 text-center mb-5">
                    <h2 class="fw-bold mb-3" style="font-size: 2.2rem;">Stock Audit Report Format</h2>
                    <p class="mb-4 opacity-75" style="font-size: 1.1rem; line-height: 1.6;">
                        A report is presented in a structured format to provide clarity, transparency, and actionable
                        insights for
                        management, lenders, and stakeholders. A typical report includes the following sections:
                    </p>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#contact" class="btn btn-lg rounded-pill px-4 py-2"
                            style="min-width: 246px; background-color: #F26522; color: #fff; border: none;">
                            Explore more
                        </a>
                        <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-4 py-2"
                            style="min-width: 246px;">
                            Get in touch
                        </a>
                    </div>
                </div>

                <!-- Report Components Grid -->
                <div class="row g-4">
                    <!-- Component 1: Executive Summary -->
                    <div class="col-lg-4 col-md-6">
                        <div class="report-component-card rounded-4 p-4 h-100">
                            <div class="component-icon mb-3">
                                <img src="{{ asset('images/summarize.png') }}" alt="Professional Accounting Services"
                                    class="img-fluid section-image"
                                    style="max-width: 100%; height: auto; border-radius: 15px;">
                            </div>
                            <h5 class="fw-bold text-dark mb-3" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">Executive Summary</h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Concise overview of the audit, highlighting key findings, discrepancies, and overall
                                inventory status.
                            </p>
                        </div>
                    </div>

                    <!-- Component 2: Scope of Audit -->
                    <div class="col-lg-4 col-md-6">
                        <div class="report-component-card bg-light rounded-4 p-4 h-100">
                            <div class="component-icon mb-3">
                                <img src="{{ asset('images/policy.png') }}" alt="Professional Accounting Services"
                                    class="img-fluid section-image"
                                    style="max-width: 100%; height: auto; border-radius: 15px;">
                            </div>
                            <h5 class="fw-bold text-dark mb-3" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">Scope of Audit</h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Defines coverage of the audit, reporting period, business units, and inventory types
                                verified.
                            </p>
                        </div>
                    </div>

                    <!-- Component 3: Methodology -->
                    <div class="col-lg-4 col-md-6">
                        <div class="report-component-card bg-light rounded-4 p-4 h-100">
                            <div class="component-icon mb-3">
                                <img src="{{ asset('images/tactic.png') }}" alt="Professional Accounting Services"
                                    class="img-fluid section-image"
                                    style="max-width: 100%; height: auto; border-radius: 15px;">
                            </div>
                            <h5 class="fw-bold text-dark mb-3" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">Methodology</h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Explains audit procedures used, such as physical verification, sampling, reconciliation,
                                and valuation checks.
                            </p>
                        </div>
                    </div>

                    <!-- Component 4: Observations -->
                    <div class="col-lg-4 col-md-6">
                        <div class="report-component-card bg-light rounded-4 p-4 h-100">
                            <div class="component-icon mb-3">
                                <img src="{{ asset('images/monitoring.png') }}" alt="Professional Accounting Services"
                                    class="img-fluid section-image"
                                    style="max-width: 100%; height: auto; border-radius: 15px;">
                            </div>
                            <h5 class="fw-bold text-dark mb-3" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">Observations</h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Details significant issues, including mismatches between book and physical stock,
                                shrinkage, obsolete
                                or expired goods, and procedural lapses.
                            </p>
                        </div>
                    </div>

                    <!-- Component 5: Recommendations -->
                    <div class="col-lg-4 col-md-6">
                        <div class="report-component-card bg-light rounded-4 p-4 h-100">
                            <div class="component-icon mb-3">
                                <img src="{{ asset('images/recommend.png') }}" alt="Professional Accounting Services"
                                    class="img-fluid section-image"
                                    style="max-width: 100%; height: auto; border-radius: 15px;">
                            </div>
                            <h5 class="fw-bold text-dark mb-3" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">Recommendations</h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Suggests corrective and preventive measures to strengthen stock management, improve
                                accuracy,
                                and reduce risks.
                            </p>
                        </div>
                    </div>

                    <!-- Component 6: Annexures -->
                    <div class="col-lg-4 col-md-6">
                        <div class="report-component-card bg-light rounded-4 p-4 h-100">
                            <div class="component-icon mb-3">
                                <img src="{{ asset('images/book.png') }}" alt="Professional Accounting Services"
                                    class="img-fluid section-image"
                                    style="max-width: 100%; height: auto; border-radius: 15px;">
                            </div>
                            <h5 class="fw-bold text-dark mb-3" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">Annexures</h5>
                            <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                Includes supporting documents like detailed stock registers, reconciliation statements,
                                valuation workings, and ageing analysis.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Important Note -->
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="alert alert-light py-3 px-4" style="border-radius: 12px; border: 1px solid #000;">
                <div class="d-flex align-items-start">
                    <div>
                        <strong
                            style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important;">Please
                            Note:</strong>
                        <span
                            style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #587485 !important;"
                            class="text-muted ms-2">
                            Such reports not only enhance internal control but also provide valuable
                            insights for decision-making,
                            financial reporting, and stakeholder assurance.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stock Audit Procedure Section -->
<section class="py-5" style="background-color: #F7F5F2;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-start mb-5">
                    <h2 class="fw-bold mb-3 stock-audit-procedure-heading">Stock Audit Procedure</h2>
                    <p class="lead mb-4 stock-audit-procedure-paragraph">
                        The procedure is a systematic process designed to verify the accuracy of inventory records
                        and
                        ensure effective control
                        over stock management. It helps organizations detect discrepancies, strengthen compliance,
                        and
                        provide assurance to
                        stakeholders regarding the reliability of their inventory. The process is generally carried
                        out
                        in the following structured steps.
                    </p>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-start gap-3 mb-5">
                        <a href="#contact" class="btn btn-orange rounded-pill px-4 py-2">
                            Explore more
                        </a>
                        <a href="#contact" class="btn btn-outline-secondary rounded-pill px-4 py-2">Get in touch
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Procedure Steps -->
        <div class="row g-4">
            <!-- Step 1: Audit Planning -->
            <div class="col-lg-12">
                <div class="row align-items-center"
                    style="border-radius:24px; border: 2px solid #E4E5EA; padding: 20px;">
                    <div class="col-lg-6">
                        <div class="procedure-step-card p-4 h-100">
                            <div class="d-flex flex-column align-items-start gap-4">
                                <div class="step-indicator">
                                    <div class="step-number">
                                        <button class="btn rounded-pill"
                                            style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: normal; font-size: 20px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important; background: rgba(242, 101, 34, 0.54) !important; border: none; min-width: 124px; height: 40px;">STEP
                                            1</button>
                                    </div>
                                </div>
                                <div class="step-content flex-grow-1">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <h4 class="fw-bold text-dark mb-0"
                                            style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                            Audit Planning</h4>
                                    </div>
                                    <p class="text-muted mb-3" style="line-height: 1.6;">
                                        Define the scope, objectives, and timelines of the audit. Gain an understanding
                                        of
                                        the
                                        client's business model inventory systems,
                                        and internal controls, and gather preliminary information on stock locations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Physical Verification of Inventory -->
                    <div class="col-lg-6">
                        <img src="{{ asset('images/Audit Planning 1.png') }}" alt="Professional Accounting Services"
                            class="img-fluid section-image" style="max-width: 100%; height: auto; border-radius: 15px;">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row align-items-center"
                    style="border-radius:24px; border: 2px solid #E4E5EA; padding: 20px;">
                    <!-- Step 2: Physical Verification of Inventory -->
                    <div class="col-lg-6">
                        <img src="{{ asset('images/Physical Verification of Inventory.png') }}"
                            alt="Professional Accounting Services" class="img-fluid section-image"
                            style="max-width: 100%; height: auto; border-radius: 15px;">
                    </div>
                    <div class="col-lg-6">
                        <div class="procedure-step-card p-4 h-100">
                            <div class="d-flex flex-column align-items-start gap-4">
                                <div class="step-indicator">
                                    <div class="step-number">
                                        <button class="btn rounded-pill"
                                            style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: normal; font-size: 20px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important; background: rgba(242, 101, 34, 0.54) !important; border: none; min-width: 124px; height: 40px;">STEP
                                            2</button>
                                    </div>
                                </div>
                                <div class="step-content flex-grow-1">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <h4 class="fw-bold text-dark mb-0"
                                            style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                            Physical Verification of Inventory</h4>
                                    </div>
                                    <p class="text-muted mb-3" style="line-height: 1.6;">
                                        Conduct site visits to warehouses, factories, or retail outlets. Count, tag, and
                                        document inventory items, and identify damaged, obsolete, or slow-moving stock.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-12">
                <div class="row align-items-center"
                    style="border-radius:24px; border: 2px solid #E4E5EA; padding: 20px;">
                    <div class="col-lg-6">
                        <div class="procedure-step-card p-4 h-100">
                            <div class="d-flex flex-column align-items-start gap-4">
                                <div class="step-indicator">
                                    <div class="step-number">
                                        <button class="btn rounded-pill"
                                            style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: normal; font-size: 20px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important; background: rgba(242, 101, 34, 0.54) !important; border: none; min-width: 124px; height: 40px;">STEP
                                            3</button>
                                    </div>
                                </div>
                                <div class="step-content flex-grow-1">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <h4 class="fw-bold text-dark mb-0"
                                            style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                            Reconciliation with Book Records</h4>
                                    </div>
                                    <p class="text-muted mb-3" style="line-height: 1.6;">
                                        Compare physical counts with book inventory, highlight shortages, surpluses, and
                                        mismatches, and investigate deviations arising from theft, errors,
                                        stock-in-transit, or misposting.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Physical Verification of Inventory -->
                    <div class="col-lg-6">
                        <img src="{{ asset('images/Reconciliation with Book Records.png') }}"
                            alt="Professional Accounting Services" class="img-fluid section-image"
                            style="max-width: 100%; height: auto; border-radius: 15px;">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row align-items-center"
                    style="border-radius:24px; border: 2px solid #E4E5EA; padding: 20px;">
                    <!-- Step 2: Physical Verification of Inventory -->
                    <div class="col-lg-6">
                        <img src="{{ asset('images/Reporting and Advice.png') }}" alt="Professional Accounting Services"
                            class="img-fluid section-image" style="max-width: 100%; height: auto; border-radius: 15px;">
                    </div>
                    <div class="col-lg-6">
                        <div class="procedure-step-card p-4 h-100">
                            <div class="d-flex flex-column align-items-start gap-4">
                                <div class="step-indicator">
                                    <div class="step-number">
                                        <button class="btn rounded-pill"
                                            style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: normal; font-size: 20px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important; background: rgba(242, 101, 34, 0.54) !important; border: none; min-width: 124px; height: 40px;">STEP
                                            4</button>
                                    </div>
                                </div>
                                <div class="step-content flex-grow-1">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <h4 class="fw-bold text-dark mb-0"
                                            style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                            Reporting and Recommendations</h4>
                                    </div>
                                    <p class="text-muted mb-3" style="line-height: 1.6;">
                                        Prepare a detailed report of findings and discrepancies, recommend corrective
                                        and preventive measures, and submit the report to management, auditors, or banks
                                        along with suggestions for follow-up audits or control improvements.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stock Audit Checklist Section -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-12">
                <div class="text-start mb-5">
                    <h2 class="fw-bold mb-4 stock-audit-checklist-heading">Stock Audit Checklist</h2>
                    <p class="text-muted lead mb-0" style="max-width: 700px; line-height: 1.7;">
                        An effective audit requires careful preparation and the availability of relevant records.
                        The
                        following documents and
                        information are generally required to ensure accuracy and completeness of the audit process:
                    </p>
                </div>

                <!-- Checklist Items -->
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="checklist-items"
                            style="list-style: none; padding: 0; margin: 0; columns: 1; column-gap: 30px;">
                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        Updated <span class="fw-semibold" style="color: #ff6600;">stock ledger</span>
                                        and valuation reports.
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        List of <span class="fw-semibold"
                                            style="color: #ff6600;">warehouses/factories</span> with layout plans.
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        <span class="fw-semibold" style="color: #ff6600;">Purchase and sales
                                            records</span> (invoices, GRNs, delivery challans).
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        <span class="fw-semibold" style="color: #ff6600;">Bank sanction letters/loan
                                            documents</span> (for borrower audits).
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        <span class="fw-semibold" style="color: #ff6600;">Fixed assets register</span>
                                        and supporting details.
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        Access to <span class="fw-semibold" style="color: #ff6600;">ERP/inventory
                                            management system</span>.
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        <span class="fw-semibold" style="color: #ff6600;">Stock movement records</span>
                                        – transfers, stock-in-transit, returns.
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        <span class="fw-semibold" style="color: #ff6600;">Valuation methodology</span>
                                        (FIFO, LIFO, Weighted Average).
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        List of <span class="fw-semibold" style="color: #ff6600;">obsolete/damaged
                                            stock</span> with disposal policy.
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start py-2 gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        <span class="fw-semibold" style="color: #ff6600;">Insurance policies</span> for
                                        inventory and assets.
                                    </p>
                                </div>
                            </li>

                            <li class="checklist-item d-flex align-items-start gap-3" style="break-inside: avoid;">
                                <div class="checklist-icon">
                                    <img src="{{ asset('images/vector-check.png') }}" alt="Checklist Icon"
                                        style="width: 27px; height: 27px; margin-top: 4px;">
                                </div>
                                <div class="checklist-content">
                                    <p class="mb-0" style="line-height: 1.6;">
                                        <span class="fw-semibold" style="color: #ff6600;">Management declarations</span>
                                        on stock and asset ownership.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- Important Note -->
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="alert alert-light py-3 px-4" style="border-radius: 12px; border: 1px solid #000;">
                <div class="d-flex align-items-start">
                    <div>
                        <strong
                            style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important;">Please
                            Note:</strong>
                        <span
                            style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #587485 !important;"
                            class="text-muted ms-2">
                            Having these documents in place ensures that the audit is conducted smoothly, reduces the
                            risk of errors or omissions, and provides auditors with the necessary clarity to deliver
                            accurate and reliable findings.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Challenges & Solutions Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.2rem; color: #2c3e50;">Challenges & Solutions</h2>
                    <p class="text-muted lead mb-0" style="max-width: 700px; margin: 0 auto; line-height: 1.7;">
                        Stock audits often face operational and management challenges that require targeted
                        solutions
                        for accurate and
                        efficient outcomes.
                    </p>
                </div>

                <!-- Challenges & Solutions Grid -->
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="challenge-solution-table bg-white rounded-4 p-5 shadow-sm">
                            <div class="row g-0">
                                <!-- Left Column - Common Challenges -->
                                <div class="col-md-6 border-end border-light">
                                    <div class="challenges-column pe-4">
                                        <h4 class="fw-bold text-dark mb-4 pb-5" style="font-size: 1.5rem; color: #2c3e50;">Common Challenge</h4>
                                        
                                        <!-- Challenge 1 -->
                                        <div class="challenge-item mb-4 pb-4 border-bottom border-light">
                                            <p class="text-dark mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                                Discrepancies between physical and recorded stock
                                            </p>
                                        </div>
                                        
                                        <!-- Challenge 2 -->
                                        <div class="challenge-item mb-4 pb-4 border-bottom border-light">
                                            <p class="text-dark mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                                Difficulty in auditing multi-location or multi-SKU inventory
                                            </p>
                                        </div>
                                        
                                        <!-- Challenge 3 -->
                                        <div class="challenge-item mb-4 pb-4 border-bottom border-light">
                                            <p class="text-dark mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                                Slow or delayed reporting of stock data.
                                            </p>
                                        </div>
                                        
                                        <!-- Challenge 4 -->
                                        <div class="challenge-item">
                                            <p class="text-dark mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                                Obsolete, expired, or damaged inventory is going unnoticed
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Right Column - Patron Accounting Solutions -->
                                <div class="col-md-6">
                                    <div class="solutions-column ps-4">
                                        <h4 class="fw-bold text-dark mb-4 pb-5" style="font-size: 1.5rem; color: #2c3e50;">Patron Accounting Solution</h4>
                                        
                                        <!-- Solution 1 -->
                                        <div class="solution-item mb-4 pb-4 border-bottom border-light">
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="solution-icon mt-1" style="width: 12px; height: 12px; background: #F26522; transform: rotate(45deg); flex-shrink: 0;"></div>
                                                <p class="text-dark mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                                    Implement advanced reconciliation software and conduct detailed variance analysis.
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <!-- Solution 2 -->
                                        <div class="solution-item mb-4 pb-4 border-bottom border-light">
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="solution-icon mt-1" style="width: 12px; height: 12px; background: #F26522; transform: rotate(45deg); flex-shrink: 0;"></div>
                                                <p class="text-dark mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                                    Engage auditors skilled in ERP systems and centralized inventory management.
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <!-- Solution 3 -->
                                        <div class="solution-item mb-4 pb-4 border-bottom border-light">
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="solution-icon mt-1" style="width: 12px; height: 12px; background: #F26522; transform: rotate(45deg); flex-shrink: 0;"></div>
                                                <p class="text-dark mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                                    Establish structured audit schedules with real-time reporting tools.
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <!-- Solution 4 -->
                                        <div class="solution-item">
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="solution-icon mt-1" style="width: 12px; height: 12px; background: #F26522; transform: rotate(45deg); flex-shrink: 0;"></div>
                                                <p class="text-dark mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                                    Maintain periodic ageing analysis and automated alerts for stock nearing expiry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Note -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="alert alert-light py-3 px-4" style="border-radius: 12px; border: 1px solid #000;">
                            <div class="d-flex align-items-start">
                                <div>
                                    <strong
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important;">Please
                                        Note:</strong>
                                    <span
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #587485 !important;"
                                        class="text-muted ms-2">
                                        Addressing these challenges systematically ensures precise inventory records, minimizes losses, and strengthens overall operational control.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stock Audit Fee in India Section -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-4 stock-audit-fee-heading">Stock Audit Fee in India
                    </h2>
                    <p class="text-muted lead mb-0" style="max-width: 600px; margin: 0 auto; line-height: 1.7;">
                        Fees vary based on business size, number of locations, and scope. Below is an indicative fee
                        structure.
                    </p>
                </div>

                <!-- Fee Structure Table -->
                <div class="fee-structure-card bg-white rounded-4 p-5" style="border: 1px solid #E4E5EA;">
                    <div class="row g-0">
                        <!-- Left Column - Fee Components -->
                        <div class="col-md-6 border-end border-light">
                            <div class="fee-components-column pe-4">
                                <h4 class="fw-bold text-dark text-center mb-4 pb-5" style="font-size: 1.5rem; color: #2c3e50;">Fee Component</h4>
                                
                                <!-- Fee Item 1 -->
                                <div class="fee-item mb-4 pb-4 border-bottom border-light">
                                    <p class="text-dark text-center mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                        Professional Charges (per audit cycle)
                                    </p>
                                </div>
                                
                                <!-- Fee Item 2 -->
                                <div class="fee-item mb-4 pb-4 border-bottom border-light">
                                    <p class="text-dark text-center mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                        Travel & Out-of-Pocket Expenses
                                    </p>
                                </div>
                                
                                <!-- Fee Item 3 -->
                                <div class="fee-item mb-4 pb-4 border-bottom border-light">
                                    <p class="text-dark text-center mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                        Government/Compliance Fees
                                    </p>
                                </div>
                                
                                <!-- Fee Item 4 -->
                                <div class="fee-item">
                                    <p class="text-dark text-center mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 700;">
                                        Total Estimated Range
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right Column - Costs -->
                        <div class="col-md-6">
                            <div class="costs-column ps-4">
                                <h4 class="fw-bold text-dark text-center mb-4 pb-5" style="font-size: 1.5rem; color: #2c3e50;">Cost (Approx.)</h4>
                                
                                <!-- Cost 1 -->
                                <div class="cost-item mb-4 pb-4 border-bottom border-light text-end">
                                    <p class="text-dark text-center mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 600;">
                                        ₹30,000 – ₹75,000
                                    </p>
                                </div>
                                
                                <!-- Cost 2 -->
                                <div class="cost-item mb-4 pb-4 border-bottom border-light text-end">
                                    <p class="text-dark text-center mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 600;">
                                        ₹5,000 – ₹20,000
                                    </p>
                                </div>
                                
                                <!-- Cost 3 -->
                                <div class="cost-item mb-4 pb-4 border-bottom border-light text-end">
                                    <p class="text-dark text-center mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 600;">
                                        As applicable
                                    </p>
                                </div>
                                
                                <!-- Total Cost -->
                                <div class="cost-item text-end">
                                    <p class="text-dark text-center mb-0" style="line-height: 1.6; font-size: 1rem; font-weight: 700;">
                                        ₹35,000 – ₹95,000
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Note -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="alert alert-light py-3 px-4" style="border-radius: 12px; border: 1px solid #000;">
                            <div class="d-flex align-items-start">
                                <div>
                                    <strong
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important;">Please
                                        Note:</strong>
                                    <span
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #587485 !important;"
                                        class="text-muted ms-2">
                                        Actual fees depend on audit complexity and industry requirements.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Time Taken & Benefits Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- Time Taken for Stock Audit -->
                <div class="mb-5">
                    <div class="text-start mb-4">
                        <h2 class="fw-bold mb-4" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">Time Taken for Stock
                            Audit
                        </h2>
                    </div>

                    <div class="time-content-card bg-white">
                        <p class="text-muted mb-0" style="line-height: 1.8; font-size: 1rem;">
                            The duration of an audit depends on the scale and complexity of operations. In India, it
                            typically takes <strong>7-15 working days</strong>,
                            influenced by factors such as the number of stock locations, accessibility and accuracy
                            of
                            ERP or inventory data, complexity of reconciliation,
                            and scope of fixed asset verification. For large manufacturing units, multi-warehouse
                            operations, or businesses with extensive inventory,
                            the process may extend to <strong>4-6 weeks</strong> to ensure thorough verification and
                            accurate reporting. Proper planning, data readiness,
                            and a systematic approach help optimize timelines while maintaining the accuracy and
                            reliability of inventory records.
                        </p>
                    </div>
                </div>

                <!-- Benefits of Stock Audit -->
                <div>
                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-4" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">Benefits of Stock Audit
                        </h2>
                        <p class="text-muted lead mb-4" style="line-height: 1.7;">
                            A stock audit provides organizations with a comprehensive evaluation of their inventory,
                            enabling accurate tracking,
                            accountability, and informed decision-making. Key benefits include:
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="text-center mb-5">
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="#contact" class="btn btn-orange rounded-pill px-4 py-2">
                                Explore more
                            </a>
                            <a href="#contact" class="btn btn-outline-secondary rounded-pill px-4 py-2">
                                Get in touch
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <img src="{{ asset('images/section4.png') }}" alt="Professional Accounting Services"
                            class="img-fluid section-image" style="max-width: 100%; height: auto; border-radius: 15px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Stock Audit Benefits Section -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <!-- Benefits Grid -->
                <div class="row g-4 mb-5">
                    <!-- Benefit 1: Accurate stock reporting -->
                    <div class="col-lg-4 col-md-6">
                        <div class="additional-benefit-card p-4 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="benefit-icon-wrapper">
                                    <div class="benefit-icon-box"
                                        style="border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/analytics.png') }}" alt="Checklist Icon"
                                            style="width: 40px; height: 40px;">
                                    </div>
                                </div>
                                <div class="benefit-content">
                                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Barlow', sans-serif; font-weight: 700 !important; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">Accurate stock
                                        reporting</h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.9rem;">
                                        Ensures that physical inventory matches recorded figures.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 2: Regulatory and bank compliance -->
                    <div class="col-lg-4 col-md-6">
                        <div class="additional-benefit-card p-4 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="benefit-icon-wrapper">
                                    <div class="benefit-icon-box"
                                        style="border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/account_balance.png') }}" alt="Checklist Icon"
                                            style="width: 40px; height: 40px;">
                                    </div>
                                </div>
                                <div class="benefit-content">
                                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Barlow', sans-serif; font-weight: 700 !important; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">Regulatory and
                                        bank
                                        compliance</h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.9rem;">
                                        Meets statutory and financial institution requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 3: Detection of pilferage, wastage, and expired goods -->
                    <div class="col-lg-4 col-md-6">
                        <div class="additional-benefit-card p-4 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="benefit-icon-wrapper">
                                    <div class="benefit-icon-box"
                                        style="border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/barcode_reader.png') }}" alt="Checklist Icon"
                                            style="width: 40px; height: 40px;">
                                    </div>
                                </div>
                                <div class="benefit-content">
                                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Barlow', sans-serif; font-weight: 700 !important; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">Detection of
                                        pilferage, wastage, and expired goods</h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.9rem;">
                                        Reduces losses and improves operational efficiency.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 4: Improved inventory turnover and working capital management -->
                    <div class="col-lg-4 col-md-6">
                        <div class="additional-benefit-card p-4 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="benefit-icon-wrapper">
                                    <div class="benefit-icon-box"
                                        style="border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/deployed_code_account.png') }}" alt="Checklist Icon"
                                            style="width: 40px; height: 40px;">
                                    </div>
                                </div>
                                <div class="benefit-content">
                                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Barlow', sans-serif; font-weight: 700 !important; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">Improved inventory
                                        turnover and working capital management</h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.9rem;">
                                        Supports better resource allocation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 5: Enhanced credibility with lenders and stakeholders -->
                    <div class="col-lg-4 col-md-6">
                        <div class="additional-benefit-card p-4 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="benefit-icon-wrapper">
                                    <div class="benefit-icon-box"
                                        style="border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/money_bag.png') }}" alt="Checklist Icon"
                                            style="width: 40px; height: 40px;">
                                    </div>
                                </div>
                                <div class="benefit-content">
                                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Barlow', sans-serif; font-weight: 700 !important; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">Enhanced
                                        credibility
                                        with lenders and stakeholders</h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.9rem;">
                                        Strengthens trust in financial reporting.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 6: Stronger internal controls and fraud prevention -->
                    <div class="col-lg-4 col-md-6">
                        <div class="additional-benefit-card p-4 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="benefit-icon-wrapper">
                                    <div class="benefit-icon-box"
                                        style="border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/enhanced_encryption.png') }}" alt="Checklist Icon"
                                            style="width: 40px; height: 40px;">
                                    </div>
                                </div>
                                <div class="benefit-content">
                                    <h5 class="fw-bold text-dark mb-2" style="font-family: 'Barlow', sans-serif; font-weight: 700 !important; font-style: normal; font-size: 24px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">Stronger internal
                                        controls and fraud prevention</h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.9rem;">
                                        Safeguards assets and reduces risk.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Important Note -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="alert alert-light py-3 px-4" style="border-radius: 12px; border: 1px solid #000;">
                            <div class="d-flex align-items-start">
                                <div>
                                    <strong
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important;">Please
                                        Note:</strong>
                                    <span
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #587485 !important;"
                                        class="text-muted ms-2">
                                        Regular audits not only enhance transparency and accountability but also contribute to operational efficiency, financial reliability, and overall business credibility.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stock Audit vs Internal Inventory Control Comparison -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="comparison-section">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold mb-4" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">
                            Stock Audit Fee in India
                        </h2>
                        <p class="text-muted lead mb-0" style="max-width: 700px; margin: 0 auto; line-height: 1.7; font-size: 1.1rem;">
                            Understanding the key differences between external stock audit and internal inventory management systems.
                        </p>
                    </div>

                    <!-- Comparison Table -->
                    <div class="comparison-table-wrapper bg-white rounded-4 p-5" style="border: 1px solid #E4E5EA;">
                        <div class="table-responsive">
                            <table class="table table-borderless comparison-table mb-0">
                                <thead>
                                    <tr class="" style="border-bottom: 1px solid #E4E5EA !important;">
                                        <th class="pb-4" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-size: 20px; color: #14365F; width: 20%;">
                                            Feature
                                        </th>
                                        <th class="pb-4 text-center" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-size: 20px; color: #14365F; width: 40%;">
                                            Stock Audit
                                        </th>
                                        <th class="pb-4 text-center" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-size: 20px; color: #14365F; width: 40%;">
                                            Internal Inventory Control
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom" style="border-color: #F5F5F5 !important;">
                                        <td class="py-4" style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-size: 16px; color: #2c3e50;">
                                            Objective
                                        </td>
                                        <td class="py-4 text-center" style="font-family: 'DM Sans', sans-serif; font-weight: 400; font-size: 15px; color: #6c757d; line-height: 1.6;">
                                            Independent verification of inventory accuracy
                                        </td>
                                        <td class="py-4 text-center" style="font-family: 'DM Sans', sans-serif; font-weight: 400; font-size: 15px; color: #6c757d; line-height: 1.6;">
                                            Day-to-day management and monitoring of stock
                                        </td>
                                    </tr>
                                    <tr class="border-bottom" style="border-color: #F5F5F5 !important;">
                                        <td class="py-4" style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-size: 16px; color: #2c3e50;">
                                            Frequency
                                        </td>
                                        <td class="py-4 text-center" style="font-family: 'DM Sans', sans-serif; font-weight: 400; font-size: 15px; color: #6c757d; line-height: 1.6;">
                                            Periodic (annually or as required)
                                        </td>
                                        <td class="py-4 text-center" style="font-family: 'DM Sans', sans-serif; font-weight: 400; font-size: 15px; color: #6c757d; line-height: 1.6;">
                                            Continuous
                                        </td>
                                    </tr>
                                    <tr class="border-bottom" style="border-color: #F5F5F5 !important;">
                                        <td class="py-4" style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-size: 16px; color: #2c3e50;">
                                            Responsibility
                                        </td>
                                        <td class="py-4 text-center" style="font-family: 'DM Sans', sans-serif; font-weight: 400; font-size: 15px; color: #6c757d; line-height: 1.6;">
                                            <span>External auditors or professional consultants</span>
                                        </td>
                                        <td class="py-4 text-center" style="font-family: 'DM Sans', sans-serif; font-weight: 400; font-size: 15px; color: #6c757d; line-height: 1.6;">
                                            Internal staff, supported by ERP or inventory systems
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-4" style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-size: 16px; color: #2c3e50;">
                                            Outcome
                                        </td>
                                        <td class="py-4 text-center" style="font-family: 'DM Sans', sans-serif; font-weight: 400; font-size: 15px; color: #6c757d; line-height: 1.6;">
                                            Detailed audit report highlighting discrepancies and recommendations
                                        </td>
                                        <td class="py-4 text-center" style="font-family: 'DM Sans', sans-serif; font-weight: 400; font-size: 15px; color: #6c757d; line-height: 1.6;">
                                            Real-time operational insights for effective stock management
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Important Note -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="alert alert-light py-3 px-4" style="border-radius: 12px; border: 1px solid #000;">
                            <div class="d-flex align-items-start">
                                <div>
                                    <strong
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important;">Please
                                        Note:</strong>
                                    <span
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #587485 !important;"
                                        class="text-muted ms-2">
                                       With Patron Accounting, clients receive more than just compliance; they gain actionable insights to optimize inventory management, enhance profitability, and strengthen corporate governance.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Patron Accounting Stock Audit Partner Section -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.2rem; color: #2c3e50;">Patron Accounting: Your
                        Stock
                        Audit Partner in India</h2>
                    <p class="text-muted lead mb-0" style="max-width: 800px; margin: 0 auto; line-height: 1.7;">
                        Patron Accounting offers specialized stock audit services across India, leveraging years of
                        experience in statutory,
                        internal, and sector-specific audits. Our team provides:
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="row g-4 mb-5">
                    <!-- Service 1: Sector Expertise -->
                    <div class="col-lg-6">
                        <div class="partner-service-card py-4 h-100" style="background: #f8f9fa; border-radius: 12px;">
                            <div class="d-flex align-items-start gap-4">
                                <div class="service-icon-wrapper">
                                    <div class="service-icon-box"
                                        style="border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/emoji_objects.png') }}" alt="Sector Expertise Icon"
                                            style="width: 48px; height: 48px;">
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h5 class="fw-bold text-dark mb-3 patron-service-heading">Sector Expertise
                                    </h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                        Comprehensive audit solutions for retail, pharmaceutical, banking, and
                                        manufacturing sectors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: Efficient Reconciliation -->
                    <div class="col-lg-6">
                        <div class="partner-service-card py-4 h-100" style="background: #f8f9fa; border-radius: 12px;">
                            <div class="d-flex align-items-start gap-4">
                                <div class="service-icon-wrapper">
                                    <div class="service-icon-box"
                                        style="border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/verified_user.png') }}" alt="Sector Expertise Icon"
                                            style="width: 48px; height: 48px;">
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h5 class="fw-bold text-dark mb-3 patron-service-heading">Efficient
                                        Reconciliation</h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                        Proven methodologies for accurate and timely stock verification.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: Regulatory Compliance -->
                    <div class="col-lg-6">
                        <div class="partner-service-card py-4 h-100" style="background: #f8f9fa; border-radius: 12px;">
                            <div class="d-flex align-items-start gap-4">
                                <div class="service-icon-wrapper">
                                    <div class="service-icon-box"
                                        style="border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/assured_workload.png') }}" alt="Sector Expertise Icon"
                                            style="width: 48px; height: 48px;">
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h5 class="fw-bold text-dark mb-3 patron-service-heading">Regulatory
                                        Compliance
                                    </h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                        Transparent reporting aligned with RBI norms and Companies Act requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4: Customized Solutions -->
                    <div class="col-lg-6">
                        <div class="partner-service-card py-4 h-100" style="background: #f8f9fa; border-radius: 12px;">
                            <div class="d-flex align-items-start gap-4">
                                <div class="service-icon-wrapper">
                                    <div class="service-icon-box"
                                        style="border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ asset('images/instant_mix.png') }}" alt="Sector Expertise Icon"
                                            style="width: 48px; height: 48px;">
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h5 class="fw-bold text-dark mb-3 patron-service-heading">Customized
                                        Solutions
                                    </h5>
                                    <p class="text-muted mb-0" style="line-height: 1.6; font-size: 0.95rem;">
                                        Tailored services for both SMEs and large corporations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- Important Note -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="alert alert-light py-3 px-4" style="border-radius: 12px; border: 1px solid #000;">
                            <div class="d-flex align-items-start">
                                <div>
                                    <strong
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #F26522 !important;">Please
                                        Note:</strong>
                                    <span
                                        style="font-family: 'DM Sans', sans-serif; font-weight: 700; font-style: italic; font-size: 22px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #587485 !important;"
                                        class="text-muted ms-2">
                                    With Patron Accounting, clients receive more than just compliance; they gain actionable insights to optimize inventory management, enhance profitability, and strengthen corporate governance.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conclusion Section -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="conclusion-content text-start">
                    <h2 class="fw-bold mb-4" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 34px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">
                        Conclusion
                    </h2>
                    <p class="text-muted mb-0" style="line-height: 1.8; font-size: 1.1rem; text-align: justify;">
                        Stock Audit is more than a compliance exercise — it is a strategic tool for reducing losses,
                        improving efficiency, and building trust with regulators and lenders. Whether you are a retail store, manufacturer, or
                        borrower with bank exposure, timely audits can protect and grow your business. 
                        <strong style="color: #14365F; font-weight: 600;">Partner with Patron Accounting today to schedule
                        your professional stock audit.</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
                
                <!-- Partnership Section -->
                <div class="partnership-section text-center bg-white rounded-4 p-5 shadow-sm" style="border: 1px solid #E4E5EA;">
                    <!-- Illustration -->
                    <div class="row justify-content-center mb-4">
                        <div class="col-12 text-center">
                            <div class="partnership-illustration mb-4">
                             <img src="{{ asset('images/home-hero.png.png') }}" alt="Play Icon"
                                class="flex-shrink-0">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Partnership Message -->
                    <div class="partnership-message">
                        <h3 class="fw-bold mb-4" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-style: normal; font-size: 32px; line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">
                            Your one-stop partner for Business Registration
                        </h3>
                        <p class="mb-4" style="font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 18px; line-height: 1.4; color: #F26522;">
                            <span style="color: #F26522; font-weight: 600;">Accounting</span> • 
                            <span style="color: #F26522; font-weight: 600;">Tax</span> • 
                            <span style="color: #F26522; font-weight: 600;">Audit</span> • 
                            <span style="color: #F26522; font-weight: 600;">Compliance</span>
                        </p>

                        <!-- Final CTA -->
                        <div class="final-cta mt-4">
                            <a href="#contact" class="btn rounded-pill px-5 py-3" 
                               style="background-color: #F26522; color: white; font-family: 'DM Sans', sans-serif; font-weight: 600; font-size: 18px; border: none; transition: all 0.3s ease;">
                                Let's grow together!
                            </a>
                        </div>
                    </div>
                </div>

<!-- Company Registration Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-start mb-5">
            <h2 class="fw-bold mb-3" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-size: 34px; color: #14365F;">
                Company Registration Customised by States and Cities
            </h2>
        </div>
        
        <div class="row g-4">
            <!-- Row 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited company in Assam
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Madhya Pradesh
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Jharkhand
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Company Registration in Amritsar
                        </h6>
                    </div>
                </div>
            </div>
            
            <!-- Row 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Meghalaya
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Rajasthan
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Tamil Nadu
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Company Registration in Delhi
                        </h6>
                    </div>
                </div>
            </div>
            
            <!-- Row 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Chandigarh
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Ambala
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Bihar
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Company Registration in Dehradun
                        </h6>
                    </div>
                </div>
            </div>
            
            <!-- Row 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Haryana
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Chennai
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Private Limited Company Registration in Chattisgarh
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="me-3">
                        <img src="{{ asset('images/domain_add.svg') }}" alt="India Map" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h6 style="color: #4A90E2; font-family: 'DM Sans', sans-serif; font-weight: 500; font-size: 14px; margin: unset !important;">
                            Company Registration in Himachal pradesh
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex align-items-end">
                <div class="faq-content">
                    <h2 class="fw-bold mb-3" style="font-family: 'Barlow', sans-serif; font-weight: 700; font-size: 34px; color: #14365F;">Frequently Asked Questions</h2>
                    <p class="text-muted mb-5" style="font-family: 'DM Sans', sans-serif; font-size: 16px; line-height: 1.6; color: #587485;">
                        Have a look at the answers to the most asked questions about Stock Audit.
                    </p>
                </div>
            </div>

            <!-- FAQ Illustration -->
            <div class="col-lg-4">
                <div class="faq-illustration text-center">
                    <div class="illustration-wrapper" style="position: relative; padding: 2rem;">
                        <!-- Custom FAQ Illustration matching screenshot -->
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <img src="{{ asset('images/section6.png') }}" alt="FAQ Illustration"
                                    class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-content">
                    <!-- FAQ Accordion -->
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item border-0 mb-3" style="background: #ffffff; border: 1px solid #E4E5EA; border-radius: 12px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                    aria-controls="collapse1"
                                    style="background: transparent; border: none; padding: 1.5rem; font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 600; color: #14365F;">
                                    1. Is a stock audit mandatory in India?
                                    <span class="accordion-icon ms-auto"
                                        style="color: #28a745; font-size: 20px; font-weight: bold; transition: transform 0.3s ease;">+</span>
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body"
                                    style="padding: 0 1.5rem 1.5rem 1.5rem; font-family: 'DM Sans', sans-serif; color: #587485; line-height: 1.7; font-size: 15px;">
                                    Stock audits are mandatory for certain entities under specific conditions, such
                                    as companies borrowing from banks above specified limits, public sector
                                    enterprises, and companies under investigation by regulatory authorities.
                                    However, many businesses opt for voluntary stock audits to maintain accurate
                                    inventory records and improve operational efficiency.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item border-0 mb-3" style="background: #ffffff; border: 1px solid #E4E5EA; border-radius: 12px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                    aria-controls="collapse2"
                                    style="background: transparent; border: none; padding: 1.5rem; font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 600; color: #14365F;">
                                    2. Can Patron Accounting conduct multi-location audits?
                                    <span class="accordion-icon ms-auto"
                                        style="color: #28a745; font-size: 20px; font-weight: bold; transition: transform 0.3s ease;">+</span>
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body"
                                    style="padding: 0 1.5rem 1.5rem 1.5rem; font-family: 'DM Sans', sans-serif; color: #587485; line-height: 1.7; font-size: 15px;">
                                    Yes, Patron Accounting specializes in conducting comprehensive stock audits
                                    across multiple locations. Our experienced team uses standardized methodologies
                                    and advanced technology to ensure consistent and accurate auditing across all
                                    your business locations, warehouses, and facilities throughout India.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item border-0 mb-3" style="background: #ffffff; border: 1px solid #E4E5EA; border-radius: 12px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                    aria-controls="collapse3"
                                    style="background: transparent; border: none; padding: 1.5rem; font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 600; color: #14365F;">
                                    3. Do you provide digital audit reports?
                                    <span class="accordion-icon ms-auto"
                                        style="color: #28a745; font-size: 20px; font-weight: bold; transition: transform 0.3s ease;">+</span>
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body"
                                    style="padding: 0 1.5rem 1.5rem 1.5rem; font-family: 'DM Sans', sans-serif; color: #587485; line-height: 1.7; font-size: 15px;">
                                    Absolutely! Patron Accounting provides comprehensive digital audit reports that
                                    include detailed findings, recommendations, and supporting documentation. Our
                                    digital reports are professionally formatted, easily shareable, and include
                                    interactive elements for better understanding and implementation of
                                    recommendations.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item border-0 mb-3" style="background: #ffffff; border: 1px solid #E4E5EA; border-radius: 12px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);">
                            <h2 class="accordion-header" id="faq4">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                    aria-controls="collapse4"
                                    style="background: transparent; border: none; padding: 1.5rem; font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 600; color: #14365F;">
                                    4. How often should a company conduct stock audits?
                                    <span class="accordion-icon ms-auto"
                                        style="color: #28a745; font-size: 20px; font-weight: bold; transition: transform 0.3s ease;">+</span>
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body"
                                    style="padding: 0 1.5rem 1.5rem 1.5rem; font-family: 'DM Sans', sans-serif; color: #587485; line-height: 1.7; font-size: 15px;">
                                    The frequency of stock audits depends on your business size, industry, and
                                    regulatory requirements. Generally, annual audits are common, but quarterly or
                                    bi-annual audits may be beneficial for businesses with high inventory turnover,
                                    multiple locations, or specific compliance requirements. We recommend discussing
                                    your specific needs with our experts to determine the optimal audit frequency.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item border-0 mb-3" style="background: #ffffff; border: 1px solid #E4E5EA; border-radius: 12px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);">
                            <h2 class="accordion-header" id="faq5">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                    aria-controls="collapse5"
                                    style="background: transparent; border: none; padding: 1.5rem; font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 600; color: #14365F;">
                                    5. What industries benefit most from stock audits?
                                    <span class="accordion-icon ms-auto"
                                        style="color: #28a745; font-size: 20px; font-weight: bold; transition: transform 0.3s ease;">+</span>
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body"
                                    style="padding: 0 1.5rem 1.5rem 1.5rem; font-family: 'DM Sans', sans-serif; color: #587485; line-height: 1.7; font-size: 15px;">
                                    Industries that benefit most from stock audits include retail and e-commerce,
                                    manufacturing and production, pharmaceuticals and healthcare, food and beverage,
                                    automotive and spare parts, textiles and garments, and commodity trading.
                                    However, any business that maintains significant inventory can benefit from
                                    professional stock auditing services.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.section-image {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}


@media (max-width: 768px) {
    .section-image {
        border-radius: 10px !important;
    }
}

.speedometer-svg {
    filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.15));
}

.feature-bubbles-container {
    padding-left: 3rem;
    position: relative;
}

.main-connector-line {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #dee2e6;
    border-left: 2px dashed #dee2e6;
}

.feature-bubble-wrapper {
    opacity: 0;
    animation: fadeInUp 0.8s ease forwards;
}

.connection-system {
    position: relative;
    width: 80px;
    height: 50px;
    display: flex;
    align-items: center;
}

.connection-dot {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    position: absolute;
    left: 0;
    z-index: 2;
}

.connection-line {
    position: absolute;
    left: 16px;
    width: 30px;
    height: 2px;
    background: #dee2e6;
    border-top: 2px dashed #dee2e6;
}

.sub-connection-dot {
    position: absolute;
    left: 46px;
    width: 8px;
    height: 8px;
    background: #6c757d;
    border-radius: 50%;
}

.sub-connection-line {
    position: absolute;
    left: 54px;
    width: 20px;
    height: 2px;
    background: #dee2e6;
    border-top: 2px dashed #dee2e6;
}

.feature-pill-enhanced {
    transition: all 0.4s ease;
    min-width: 300px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

.feature-pill-enhanced:hover {
    transform: translateX(15px) scale(1.02);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
}

.feature-icon-enhanced {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(229, 87, 34, 0.1);
    border-radius: 50%;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 991px) {
    .feature-bubbles-container {
        padding-left: 0;
        margin-top: 3rem;
    }

    .main-connector-line,
    .connection-system {
        display: none;
    }

    .feature-pill-enhanced {
        min-width: auto;
        width: 100%;
    }

    .feature-bubble-wrapper {
        margin-bottom: 1rem !important;
    }
}

@media (max-width: 576px) {
    .speedometer-svg {
        width: 280px;
        height: 180px;
    }

    .feature-pill-enhanced {
        padding: 0.75rem 1.5rem !important;
    }

    .feature-icon-enhanced {
        width: 35px;
        height: 35px;
    }
}

/* FAQ Accordion Custom Styling */
.accordion-button:not(.collapsed)::after,
.accordion-button::after {
    display: none !important;
}

.accordion-button:focus {
    border-color: transparent !important;
    box-shadow: none !important;
}

.accordion-button:not(.collapsed) {
    background-color: transparent !important;
    color: #14365F !important;
}

.accordion-button:hover {
    background-color: #f8f9fa !important;
}

/* Custom plus icon rotation when expanded */
.accordion-button:not(.collapsed) .accordion-icon {
    transform: rotate(45deg);
}
</style>



@push('styles')
<style>
/* Alert Messages */
.alert {
    border: none;
    font-size: 0.95rem;
}

.alert-success {
    background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
    color: #155724;
    border-left: 4px solid #28a745;
}

.alert-warning {
    background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
    color: #856404;
    border-left: 4px solid #ffc107;
}

.alert-danger {
    background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
    color: #721c24;
    border-left: 4px solid #dc3545;
}

.alert .bi {
    flex-shrink: 0;
}

/* Form Validation */
.form-control.is-invalid {
    border-color: #dc3545 !important;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.15) !important;
}

.invalid-feedback {
    display: block;
    font-size: 0.875rem;
    color: #dc3545;
    margin-top: 0.25rem;
}

/* Private Limited Company Registration Section */
.private-registration-heading {
    font-family: 'Barlow', sans-serif !important;
    font-weight: 700 !important;
    font-style: normal !important;
    font-size: 48px !important;
    line-height: 100% !important;
    letter-spacing: 0% !important;
    vertical-align: middle !important;
    margin-bottom: 1.5rem !important;
    color: #14365F !important;
}

/* Responsive design for mobile devices */
@media (max-width: 768px) {
    .private-registration-heading {
        font-size: 32px !important;
        line-height: 110% !important;
    }
}

@media (max-width: 480px) {
    .private-registration-heading {
        font-size: 28px !important;
        line-height: 115% !important;
    }
}

.registration-form .form-control:focus {
    border-color: #ff6600;
    box-shadow: 0 0 0 0.2rem rgba(255, 102, 0, 0.15);
}

.registration-form .btn-dark {
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    border: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.registration-form .btn-dark:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(44, 62, 80, 0.3);
}

.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545;
}

.btn-outline-danger:hover {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
}

.text-warning {
    color: #ff6600 !important;
}

.registration-form .card {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
}

/* Real Stories from Real People Section */
.testimonial-image-wrapper {
    position: relative;
    margin-bottom: 1rem;
}

.testimonial-profile-img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.star-rating-overlay {
    position: absolute;
    bottom: 15px;
    left: 15px;
    background: rgba(255, 255, 255, 0.9);
    padding: 8px 12px;
    border-radius: 20px;
    backdrop-filter: blur(10px);
}

.star-rating-overlay .bi-star-fill {
    font-size: 0.85rem;
    margin-right: 1px;
}

.testimonial-content-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    border: 1px solid #f0f0f0;
}

.company-logo {
    width: 35px;
    height: 35px;
    background: #f8f9fa;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
}

.simple-testimonial-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    border: 1px solid #f0f0f0;
    height: 100%;
}

.client-avatar {
    flex-shrink: 0;
}

.client-avatar .rounded-circle {
    width: 40px;
    height: 40px;
    font-size: 0.9rem;
}

.bi-star-fill {
    font-size: 0.8rem;
    margin-right: 1px;
}

.bi-google {
    opacity: 0.8;
}

@media (max-width: 768px) {
    .display-5 {
        font-size: 2rem;
    }

    .pe-lg-5 {
        padding-right: 0 !important;
        margin-bottom: 2rem;
    }

    .testimonial-avatar {
        width: 60px;
        height: 60px;
    }

    .testimonial-card .row .col-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .testimonial-card .row .col-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }
}

@media (max-width: 576px) {
    .testimonial-card .card-body {
        padding: 1.5rem !important;
    }

    .testimonial-card .fs-4 {
        font-size: 1.1rem !important;
    }
}
</style>
@endpush





@endsection