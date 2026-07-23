@extends('layouts.app')

@section('title', $page->title ?? 'SequelZone - Your Premier Accounting Partner')

@push('styles')
<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');

.benefit-paragraph {
    /**/
    font-weight: 400;
    font-style: normal;
    margin-top: 5px;
    font-size: 1rem;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    /*color: #F26522 !important;*/
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
    color: #FFB922 !important;
    font-size: 10.5px;
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
main section h3{color: #14365F !important;}
main strong{/* color: #14365F; */}
main section tr, main section td {border: 1px solid #E8712C !important; padding: 20px; font-size: 16px;}
main section table {width: 100% !important; font-family: 'Barlow', sans-serif; }
table thead tr th{border: 1px solid #E8712C !important;color: #fff !important; font-size: 20px; font-weight: 700; background-color:#14365F !important}

table tr:first-child{color: #fff !important; font-size: 20px; font-weight: 700; background-color:#14365F}
table tbody tr:first-child td{/* font-size: 20px !important; *//* font-weight: 700 !important; */}

.stock-audit-procedure-paragraph {
    
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
    
    font-weight: 700 !important;
    font-style: normal;
    font-size: 22px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #14365F !important;
}

.registration-heading {
    
    font-weight: 700;
    font-style: normal;
    font-size: 24px;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #14365F !important;
}
.form-control {
    width: 100%;
    padding: 13px 16px;
    font-family: 'Barlow', sans-serif;
    font-size: 14px;
    color: var(--text-primary);
    background: #F9FAFB !important;
    /*border: 1.5px solid transparent;*/
    border-radius: var(--radius-md) !important;
    transition: all 0.2s ease;
}
.input-group{
display: flex;
    background: var(--gray-50);
    border-radius: var(--radius-md);
    border: 1.5px solid transparent;
    overflow: hidden;
    transition: all 0.2s ease;
}
/*.registration-form-input {*/
/*    */
/*    font-weight: 400;*/
/*    font-style: normal;*/
/*    font-size: 16px;*/
/*    line-height: 100%;*/
/*    letter-spacing: 0%;*/
/*    vertical-align: middle;*/
/*    color: #61666D !important;*/
/*}*/

/*.registration-form-input::placeholder {*/
/*    */
/*    font-weight: 400;*/
/*    font-style: normal;*/
/*    font-size: 16px;*/
/*    line-height: 100%;*/
/*    letter-spacing: 0%;*/
/*    vertical-align: middle;*/
/*    color: #61666D !important;*/
/*}*/

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
    width: 100%;
    height: 306px;
    border-radius: 12px;
    overflow: hidden;
    /* box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
}

.screenshot-testimonial-card:hover {
    /*transform: translateY(-5px);*/
    /* box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15); */
}

.profile-image-section {
    position: relative;
    width: 100%;
    height: 220px;
    overflow: hidden;
    flex-shrink: 0;
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
    padding: 8px 12px;
    border-radius: 25px;
    display: flex;
    gap: 2px;
}

.star-rating-badge i {
    color: #FFC107 !important;
    font-size: 20px;
}

.testimonial-content {
    padding: 20px;
    flex: 1;
    display: flex;
    align-items: center;
}

.client-info {
    display: flex;
    align-items: center;
    gap: 15px;
    width: 100%;
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
    
    flex-shrink: 0;
}

.client-details {
    flex-grow: 1;
}

.client-name {
    
    font-weight: 700;
    font-size: 14px;
    color: #2c3e50;
    margin: 0 0 4px 0;
    line-height: 1.2;
}

.client-position {
    
    font-weight: 400;
    font-size: 12px;
    color: #6c757d;
    margin: 0;
    line-height: 1.3;
}

/* Testimonial Quote Card Styles matching screenshot */
.testimonial-quote-card {
    background: white;
    width: 100%;
    height: 306px;
     border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    /*padding: 24px;*/
    /*transition: all 0.25s ease;*/
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
    /*transform: translateY(-5px);*/
    border-color: var(--orange);
    box-shadow: var(--shadow-md);
    /* box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15); */
}

.quote-content {
    flex-grow: 1;
    /* margin-bottom: 20px; */
    height: 147px !important;
}

.testimonial-text {
    
    font-weight: 400;
    font-size: 14px;
    line-height: 1.6;
    color: #495057;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 7;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 147px;
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
    
    font-weight: 600;
    font-size: 14px;
    flex-shrink: 0;
}

.client-details-quote {
    flex-grow: 1;
}

.client-name-quote {
    
    font-weight: 700;
    font-size: 14px;
    color: #2c3e50;
    margin: 0 0 2px 0;
    line-height: 1.2;
}

.client-position-quote {
    
    font-weight: 400;
    font-size: 12px;
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
    outline: none;
}

.testimonial-slide > div {
    height: 100%;
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

/* Border utilities for responsive */
.border-end-md {
    border-right: 0 !important;
}

@media (min-width: 768px) {
    .border-end-md {
        border-right: 1px solid #dee2e6 !important;
    }
}

/* Navigation Buttons - Removed */

/* Responsive Adjustments */
@media (max-width: 768px) {
    .testimonial-slide {
        padding: 0;
    }
    
    .testimonial-slide .row {
        margin: 0;
    }
    
    .testimonial-slide .col-12 {
        max-width: 90%;
        margin: 0 auto;
        padding: 0 15px;
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
    background-color: #fff !important;
    border-color: #29a507ff !important;
    width: 3rem !important;
    height: 1.5rem !important;
}

.whatsapp-switch:checked {
    background-color: #29a507ff !important;
    border-color: #29a507ff !important;
}

.whatsapp-switch:focus {
    border-color: #29a507ff !important;
    box-shadow: 0 0 0 0.25rem rgba(41, 165, 7, 0.25) !important;
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

/* Scroll Animation Styles */
.procedure-step {
    opacity: 0;
    transition: all 0.8s ease-out;
}

.procedure-step.animate-left {
    transform: translateX(-100px);
}

.procedure-step.animate-right {
    transform: translateX(100px);
}

.procedure-step.in-view {
    opacity: 1;
    transform: translateX(0);
}

/* Prevent horizontal scroll only for procedure section */
.stock-audit-procedure-section {
    overflow-x: hidden;
}

.procedure-step-container {
    position: relative;
}

.procedure-step-container .procedure-step {
    max-width: 100%;
}

/* Video Testimonial Play Button Overlay */
.video-testimonial-wrapper {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    cursor: pointer;
}

.video-testimonial-wrapper video {
    display: block;
    width: 100%;
}

.video-play-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
    pointer-events: none;
}

.video-testimonial-wrapper video:not([data-playing="true"]) ~ .video-play-overlay {
    opacity: 1;
}

.video-testimonial-wrapper video[data-playing="true"] ~ .video-play-overlay {
    opacity: 0;
}
.additional-benefit-card{
    background: var(--white);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: 28px;
    transition: all 0.25s ease;
}
.video-play-icon {
    width: 60px;
    height: 60px;
    position: relative;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

.video-play-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #F26522;
    opacity: 0.5;
    border-radius: 50%;
    z-index: 1;
}

.video-play-icon::after {
    content: '';
    width: 30px;
    height: 30px;
    background-image: url('/images/playvideo.svg');
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    z-index: 2;
}

/* YouTube Modal Styles */
#youtubeVideoModal .modal-dialog {
    max-width: 800px;
}

#youtubeVideoModal .modal-content {
    background: transparent;
    border: none;
    box-shadow: none;
}

#youtubeVideoModal .btn-close {
    background-color: white;
    opacity: 1;
    border-radius: 50%;
    padding: 0.7rem;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

#youtubeVideoModal .btn-close:hover {
    background-color: #f8f9fa;
    transform: scale(1.1);
}

#youtubeVideoModal .modal-body {
    border-radius: 8px;
    overflow: hidden;
}

#youtubeVideoModal iframe {
    border-radius: 8px;
}

/* Fee Structure Mobile Scroll */
@media (max-width: 768px) {
    .fee-structure-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin: 0 -15px;
        padding: 0 15px;
    }
    
    .fee-structure-card {
        min-width: 600px;
        padding: 1.5rem !important;
    }
    
    .fee-structure-card .row.g-0 {
        flex-wrap: nowrap !important;
    }
    
    .fee-structure-card .col-md-6 {
        flex: 0 0 50%;
        min-width: 300px;
    }
    
    .fee-components-column h4,
    .costs-column h4 {
        font-size: 1.2rem !important;
        padding-bottom: 1rem !important;
        margin-bottom: 1rem !important;
    }
    
    .fee-item p,
    .cost-item p {
        font-size: 0.9rem !important;
    }
    
    /* Scrollbar styling for better UX */
    .fee-structure-wrapper::-webkit-scrollbar {
        height: 8px;
    }
    
    .fee-structure-wrapper::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .fee-structure-wrapper::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }
    
    .fee-structure-wrapper::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    /* Comparison Table Mobile Scroll */
    .comparison-scroll-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin: 0 -15px;
        padding: 0 15px;
    }
    
    .comparison-table-wrapper {
        min-width: 700px;
    }
    
    .comparison-table {
        min-width: 650px;
    }
    
    .comparison-table th,
    .comparison-table td {
        white-space: normal !important;
    }
    
    /* Scrollbar styling for comparison table */
    .comparison-scroll-wrapper::-webkit-scrollbar {
        height: 8px;
    }
    
    .comparison-scroll-wrapper::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .comparison-scroll-wrapper::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }
    
    .comparison-scroll-wrapper::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    /* Challenge-Solution Table Mobile Scroll */
    .challenge-solution-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin: 0 -15px;
        padding: 0 15px;
    }
    
    .challenge-solution-table {
        min-width: 700px;
    }
    
    .challenge-solution-table .row.g-0 {
        flex-wrap: nowrap !important;
        display: flex !important;
    }
    
    .challenge-solution-table .col-12 {
        flex: 0 0 50% !important;
        max-width: 50% !important;
        min-width: 350px !important;
    }
    
    .challenge-solution-table .col-md-6 {
        flex: 0 0 50% !important;
        max-width: 50% !important;
        min-width: 350px !important;
    }
    
    .challenges-column h3,
    .solutions-column h3 {
        font-size: 1.2rem !important;
    }
    
    .challenge-item p,
    .solution-item p {
        font-size: 0.9rem !important;
    }
    
    /* Scrollbar styling for challenge-solution table */
    .challenge-solution-wrapper::-webkit-scrollbar {
        height: 8px;
    }
    
    .challenge-solution-wrapper::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    
    .challenge-solution-wrapper::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }
    
    .challenge-solution-wrapper::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
}

@media (max-width: 576px) {
    .fee-structure-card {
        min-width: 550px;
        padding: 1rem !important;
    }
    
    .fee-structure-card .col-md-6 {
        min-width: 275px;
    }
    
    .fee-components-column,
    .costs-column {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    .fee-components-column h4,
    .costs-column h4 {
        font-size: 1rem !important;
    }
    
    .fee-item,
    .cost-item {
        padding: 0.5rem 0 !important;
        margin-bottom: 0.5rem !important;
    }

    /* Comparison Table Extra Small Screens */
    .comparison-table-wrapper {
        min-width: 600px;
    }
    
    .comparison-table {
        min-width: 580px;
    }
}

/* External csss apply here */


        :root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
        }

        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
        }

        /* ============================================
           TABLE OF CONTENTS SECTION
           ============================================ */
        .toc-section {
            background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            padding: 20px 0;
            position: sticky;
            top: 100px;
            z-index: 50;
        }

        .toc-container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 32px;
            position: relative;
            display: flex;
            align-items: center;
        }

        .toc-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
              scroll-behavior: smooth;
            padding-bottom: 4px;
        }

        .toc-wrapper::-webkit-scrollbar {
            display: none;
        }

        .toc-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 18px;
            font-family: 'Barlow', sans-serif;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            background: var(--white);
            border: 1.5px solid var(--gray-200);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.25s ease;
            white-space: nowrap;
            text-decoration: none;
        }

        .toc-btn:hover {
            border-color: var(--orange);
            color: var(--orange);
            background: var(--orange-lighter);
        }

        .toc-btn.active {
            background: var(--orange);
            border-color: var(--orange);
            color: var(--white);
        }

        .toc-btn.active:hover {
            background: var(--orange-dark);
            border-color: var(--orange-dark);
        }

.toc-arrow {
    /*background: white;*/
    border: none;
    cursor: pointer;
    font-size: 22px;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    /*box-shadow: 0 2px 6px rgba(0,0,0,0.1);*/
    z-index: 2;
}

.toc-arrow.left {
    margin-right: 8px;
}

.toc-arrow.right {
    margin-left: 8px;
}
        /* ============================================
           CONTENT SECTIONS
           ============================================ */
        .content-section {
            padding: 64px 32px;
            background: var(--white);
        }

        .content-section:nth-child(even) {
            background: var(--gray-50);
        }

        .content-container {
            max-width: 1320px;
            margin: 0 auto;
        }

        /* Text Only Section */
        .text-content {
            max-width: 900px;
        }

        .section-title {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }

        .content-text {
            font-size: 15px;
            line-height: 1.8;
            color: var(--text-secondary);
        }

        .content-text p {
            margin-bottom: 16px;
        }

        .content-text p:last-child {
            margin-bottom: 0;
        }

        .content-text strong {
            color: var(--text-primary);
            font-weight: 600;
        }

        .content-text a {
            color: var(--orange);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .content-text a:hover {
            color: var(--orange-dark);
            text-decoration: underline;
        }

        /* Two Column Section (Text + Image) */
        .two-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            align-items: center;
        }

        .two-column.reverse {
            grid-template-columns: 1fr 1fr;
        }

        .two-column.reverse .column-content {
            order: 1;
        }

        .two-column.reverse .column-image {
            order: 2;
        }

        .column-content {
            max-width: 560px;
        }

        .column-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-wrapper {
            position: relative;
            width: 100%;
            max-width: 480px;
        }

        .image-wrapper img {
            width: 100%;
            height: auto;
            border-radius: var(--radius-lg);
        }

        /* Placeholder Illustration Style */
        .illustration-placeholder {
            width: 100%;
            max-width: 420px;
            aspect-ratio: 4/3;
            background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%);
            border-radius: var(--radius-xl);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .illustration-placeholder::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -20%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, rgba(232, 113, 44, 0.08) 0%, transparent 70%);
            pointer-events: none;
        }

        .illustration-icon {
            width: 80px;
            height: 80px;
            background: var(--white);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: var(--shadow-md);
        }

        .illustration-icon svg {
            width: 40px;
            height: 40px;
            color: var(--blue);
        }

        .illustration-badge {
            background: var(--white);
            padding: 12px 20px;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            text-align: center;
        }

        .illustration-badge span {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }

        .illustration-badge strong {
            font-size: 14px;
            font-weight: 700;
            color: var(--blue);
        }

        /* Highlight Box */
        .highlight-box {
            background: var(--orange-lighter);
            border-left: 4px solid var(--orange);
            padding: 16px 20px;
            border-radius: 0 var(--radius-md) var(--radius-md) 0;
            margin: 20px 0;
        }

        .highlight-box p {
            margin: 0;
            font-size: 14px;
            color: var(--text-secondary);
        }

        /* Key Points List */
        .key-points {
            list-style: none;
            margin-top: 20px;
        }

        .key-points li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 10px 0;
            font-size: 14px;
            color: var(--text-secondary);
        }

        .key-points li:not(:last-child) {
            border-bottom: 1px solid var(--gray-100);
        }

        .key-point-icon {
            width: 20px;
            height: 20px;
            background: rgba(16, 185, 129, 0.12);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .key-point-icon svg {
            width: 10px;
            height: 10px;
            color: var(--green);
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .two-column {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .two-column.reverse .column-content {
                order: 1;
            }

            .two-column.reverse .column-image {
                order: 2;
            }

            .column-content {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .content-section {
                padding: 48px 20px;
            }

            .toc-container {
                padding: 0 20px;
            }

            .toc-btn {
                padding: 8px 14px;
                font-size: 12px;
            }

            .section-title {
                font-size: 24px;
            }

            .illustration-placeholder {
                max-width: 320px;
            }
        }

        @media (max-width: 480px) {
            .toc-section {
                padding: 16px 0;
            }

            .content-section {
                padding: 40px 16px;
            }
        }

        /* Smooth scroll offset for sticky header */
        .content-section[id] {
            scroll-margin-top: 80px;
        }
    


        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0,0,0,0);
            border: 0;
        }

        /* ============================================
           HERO SECTION - LIGHT THEME
           ============================================ */
        .hero-section {
            position: relative;
            background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(ellipse 80% 50% at 20% 80%, rgba(232, 113, 44, 0.04) 0%, transparent 60%),
                radial-gradient(ellipse 60% 40% at 85% 20%, rgba(27, 54, 93, 0.03) 0%, transparent 50%);
            pointer-events: none;
        }

        .hero-container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 56px 32px 72px;
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 64px;
            align-items: start;
            position: relative;
            z-index: 1;
        }

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 20px;
        }

        .breadcrumb a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.2s;
        }

        .breadcrumb a:hover {
            color: var(--orange);
        }

        .breadcrumb span {
            color: var(--text-secondary);
        }

        /* Badge */
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--orange-light);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            color: var(--orange);
            margin-bottom: 20px;
        }

        .hero-badge svg {
            width: 14px;
            height: 14px;
        }

        /* Title */
        .hero-title {
            font-size: clamp(32px, 4vw, 46px);
            font-weight: 800;
            line-height: 1.15;
            color: var(--blue);
            margin-bottom: 16px;
            letter-spacing: -0.02em;
        }

        /* Price */
        .hero-price {
            display: flex;
            align-items: baseline;
            gap: 10px;
            margin-bottom: 28px;
            flex-wrap: wrap;
        }

        .price-label {
            font-size: 15px;
            color: var(--text-muted);
        }

        .price-value {
            font-size: clamp(28px, 3.5vw, 36px);
            font-weight: 800;
            color: var(--orange);
        }

        .price-suffix {
            font-size: 15px;
            color: var(--text-muted);
        }

        /* Features */
        .hero-features {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-bottom: 32px;
        }

        .hero-features li {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 15px;
            color: var(--text-secondary);
        }

        .check-icon {
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(16, 185, 129, 0.12);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .check-icon svg {
            width: 12px;
            height: 12px;
            color: var(--green);
        }

        /* CTA Buttons */
        .hero-cta {
            display: flex;
            gap: 14px;
            margin-bottom: 36px;
            flex-wrap: wrap;
        }

        .btn-video {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            background: var(--white);
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif;
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
        }

        .btn-video:hover {
            border-color: var(--orange);
            background: var(--orange-lighter);
            color: var(--orange);
        }

        .btn-video .play-circle {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--orange);
            border-radius: 50%;
            transition: transform 0.25s ease;
        }

        .btn-video:hover .play-circle {
            transform: scale(1.08);
        }

        .btn-video .play-circle svg {
            width: 10px;
            height: 10px;
            color: var(--white);
            margin-left: 1px;
        }

        .btn-sample {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            background: transparent;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif;
            font-size: 14px;
            font-weight: 600;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
        }

        .btn-sample:hover {
            border-color: var(--blue);
            background: var(--blue-lighter);
            color: var(--blue);
        }

        .btn-sample svg {
            width: 16px;
            height: 16px;
        }

        /* Trust Section */
        .trust-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .trust-row {
            display: flex;
            flex-wrap: wrap;
            gap: 28px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .trust-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gray-50);
            border-radius: var(--radius-sm);
        }

        .trust-icon svg {
            width: 18px;
            height: 18px;
            color: var(--blue);
        }

        .trust-text {
            font-size: 12px;
            color: var(--text-muted);
            line-height: 1.3;
        }

        .trust-text strong {
            display: block;
            font-size: 14px;
            font-weight: 700;
            color: var(--text-primary);
        }

        /* Google Rating */
        .google-rating {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: var(--white);
            border: 1px solid var(--gray-200);
            padding: 10px 16px;
            border-radius: var(--radius-md);
        }

        .google-logo svg {
            height: 20px;
            width: auto;
        }

        .rating-content {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .rating-stars {
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .rating-stars svg {
            width: 14px;
            height: 14px;
            color: var(--gold);
            fill: var(--gold);
        }

        .rating-score {
            font-size: 13px;
            font-weight: 700;
            color: var(--text-primary);
            margin-left: 4px;
        }

        .rating-count {
            font-size: 11px;
            color: var(--text-muted);
        }

        /* ============================================
           FORM CARD
           ============================================ */
        .form-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 32px;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--gray-100);
            position: relative;
        }

        .form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 28px;
            right: 28px;
            height: 3px;
            background: linear-gradient(90deg, var(--orange), var(--blue));
            border-radius: 0 0 3px 3px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 24px;
        }

        .form-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--blue);
            margin-bottom: 4px;
        }

        .form-subtitle {
            font-size: 13px;
            color: var(--text-muted);
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-input {
            width: 100%;
            padding: 13px 16px;
            font-family: 'Barlow', sans-serif;
            font-size: 14px;
            color: var(--text-primary) !important;
            background: var(--gray-50) !important;
            border: 1.5px solid transparent;
            border-radius: var(--radius-md) !important;
            transition: all 0.2s ease;
        }

        .form-input::placeholder {
            color: var(--gray-400) !important;
        }

        .form-input:hover {
            background: var(--gray-100) !important;
        }

        .form-input:focus {
            outline: none;
            background: var(--white) !important;
            border-color: var(--orange) !important;
            box-shadow: 0 0 0 3px rgba(232, 113, 44, 0.08);
        }

        /* Phone Group */
        .phone-group {
            display: flex;
            background: var(--gray-50) !important;
            border-radius: var(--radius-md) !important;
            border: 1.5px solid transparent;
            overflow: hidden;
            transition: all 0.2s ease;
        }

        .phone-group:hover {
            background: var(--gray-100);
        }

        .phone-group:focus-within {
            background: var(--white);
            border-color: var(--orange);
            box-shadow: 0 0 0 3px rgba(232, 113, 44, 0.08);
        }

        .country-code {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 13px 12px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-secondary);
            border-right: 1px solid var(--gray-200);
            background: transparent;
        }

        .country-code img {
            width: 20px;
            height: 14px;
            border-radius: 2px;
        }

        .phone-group .form-input {
            background: transparent;
            border: none;
            box-shadow: none;
        }

        .phone-group .form-input:focus {
            box-shadow: none;
        }

        /* Select Dropdown */
        .form-select {
            width: 100%;
            padding: 13px 16px;
            font-family: 'Barlow', sans-serif;
            font-size: 14px;
            color: var(--text-primary);
            background: var(--gray-50);
            border: 1.5px solid transparent;
            border-radius: var(--radius-md);
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            transition: all 0.2s ease;
        }

        .form-select:hover {
            background-color: var(--gray-100);
        }

        .form-select:focus {
            outline: none;
            background-color: var(--white);
            border-color: var(--orange);
            box-shadow: 0 0 0 3px rgba(232, 113, 44, 0.08);
        }

        /* WhatsApp Toggle */
        .whatsapp-toggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 14px;
            background: var(--gray-50);
            border-radius: var(--radius-md);
            margin-bottom: 16px;
        }

        .whatsapp-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .whatsapp-label svg {
            width: 18px;
            height: 18px;
            color: #25D366;
        }

        .toggle-switch {
            position: relative;
            width: 44px;
            height: 24px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-slider {
            position: absolute;
            cursor: pointer;
            inset: 0;
            background: var(--gray-300);
            border-radius: 24px;
            transition: 0.25s;
        }

        .toggle-slider::before {
            content: '';
            position: absolute;
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background: var(--white);
            border-radius: 50%;
            transition: 0.25s;
            box-shadow: var(--shadow-sm);
        }

        .toggle-switch input:checked + .toggle-slider {
            background: var(--orange);
        }

        .toggle-switch input:checked + .toggle-slider::before {
            transform: translateX(20px);
        }

        /* Submit Button */
        .btn-submit {
            width: 100%;
            padding: 14px 24px;
            font-family: 'Barlow', sans-serif;
            font-size: 15px;
            font-weight: 700;
            color: var(--white);
            background: var(--orange);
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit:hover {
            background: var(--orange-dark);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(232, 113, 44, 0.3);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Form Footer */
        .form-footer {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-100);
        }

        .form-footer-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 11px;
            color: var(--text-muted);
        }

        .form-footer-item svg {
            width: 14px;
            height: 14px;
            color: var(--green);
        }

        /* ============================================
           STATS BAR
           ============================================ */
        .stats-bar {
            background: var(--white);
            border-top: 1px solid var(--gray-100);
            border-bottom: 1px solid var(--gray-100);
            /*padding: 24px 32px;*/
        }

        .stats-container {
            max-width: 1320px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 48px;
            flex-wrap: wrap;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .stat-icon {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--orange-light);
            border-radius: var(--radius-md);
        }

        .stat-icon svg {
            width: 20px;
            height: 20px;
            color: var(--orange);
        }

        .stat-content {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-size: 20px;
            font-weight: 800;
            color: var(--blue);
            line-height: 1.2;
        }

        .stat-label {
            font-size: 12px;
            color: var(--text-muted);
        }

        .certifications {
            display: flex;
            gap: 16px;
            padding-left: 32px;
            border-left: 1px solid var(--gray-200);
        }

        .cert-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: var(--text-muted);
            font-weight: 500;
        }

        .cert-item svg {
            width: 18px;
            height: 18px;
        }

        /* ============================================
           REVIEWS SECTION
           ============================================ */
        .reviews-section {
            padding: 72px 32px;
            background: var(--white);
        }

        .reviews-container {
            max-width: 1320px;
            margin: 0 auto;
        }

        .section-header {
            /*text-align: center;*/
            max-width: 600px;
            /*margin: 0 auto 40px;*/
        }

        .section-eyebrow {
            font-size: 13px;
            font-weight: 600;
            color: var(--orange);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: clamp(26px, 3.5vw, 34px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 10px;
        }

        .section-subtitle {
            font-size: 15px;
            color: var(--text-muted);
        }

        /* Reviews Carousel */
        .reviews-carousel-wrapper {
            position: relative;
            overflow: hidden;
        }

        .reviews-carousel {
            display: flex;
            gap: 20px;
            transition: transform 0.4s ease;
        }

        .review-card {
            flex: 0 0 calc(25% - 15px);
            min-width: 280px;
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            transition: all 0.25s ease;
        }

        .review-card:hover {
            border-color: var(--orange);
            box-shadow: var(--shadow-md);
        }

        .review-quote {
            color: var(--orange);
            margin-bottom: 12px;
            opacity: 0.3;
        }

        .review-quote svg {
            width: 24px;
            height: 24px;
        }

        .review-text {
            font-size: 14px;
            line-height: 1.65;
            color: var(--text-secondary);
            margin-bottom: 18px;
            min-height: 90px;
        }

        .review-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid var(--gray-100);
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .reviewer-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
            color: var(--white);
        }

        .reviewer-avatar.orange { background: var(--orange); }
        .reviewer-avatar.blue { background: var(--blue); }
        .reviewer-avatar.teal { background: #0D9488; }
        .reviewer-avatar.purple { background: #7C3AED; }

        .reviewer-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
        }

        .reviewer-rating {
            display: flex;
            gap: 1px;
            margin-top: 3px;
        }

        .reviewer-rating svg {
            width: 12px;
            height: 12px;
            color: var(--gold);
            fill: var(--gold);
        }

        .google-badge {
            width: 20px;
            height: 20px;
        }

        /* Carousel Controls */
        .carousel-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            margin-top: 32px;
        }

        .carousel-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 1.5px solid var(--gray-200);
            background: var(--white);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .carousel-btn:hover {
            border-color: var(--orange);
            background: var(--orange-lighter);
        }

        .carousel-btn svg {
            width: 18px;
            height: 18px;
            color: var(--text-secondary);
        }

        .carousel-btn:hover svg {
            color: var(--orange);
        }

        .carousel-dots {
            display: flex;
            gap: 6px;
        }

        .carousel-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--gray-300);
            border: none;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .carousel-dot.active {
            width: 24px;
            border-radius: 8px;
            background: var(--orange);
        }

        /* Reviews CTA */
        .reviews-cta {
            margin-top: 40px;
            padding: 28px 32px;
            background: var(--blue);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .reviews-cta-content {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .reviews-cta-icon {
            width: 48px;
            height: 48px;
            background: rgba(255,255,255,0.1);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .reviews-cta-icon svg {
            width: 24px;
            height: 24px;
            color: var(--white);
        }

        .reviews-cta-text h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 2px;
        }

        .reviews-cta-text p {
            font-size: 13px;
            color: rgba(255,255,255,0.7);
        }

        .btn-cta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            font-family: 'Barlow', sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: var(--blue);
            background: var(--white);
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn-cta:hover {
            background: var(--orange-light);
            color: var(--orange);
        }

        .btn-cta svg {
            width: 16px;
            height: 16px;
        }

        /* ============================================
           VIDEO MODAL
           ============================================ */
        .video-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.9);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .video-modal-content {
            position: relative;
            width: 90%;
            max-width: 900px;
        }

        .video-modal-close {
            position: absolute;
            top: -40px;
            right: 0;
            background: none;
            border: none;
            color: white;
            font-size: 32px;
            cursor: pointer;
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            background: #000;
            border-radius: var(--radius-md);
            overflow: hidden;
        }

        .video-wrapper iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .hero-container {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 40px 24px 56px;
            }

            .form-card {
                max-width: 480px;
                margin: 0 auto;
            }

            .review-card {
                flex: 0 0 calc(50% - 10px);
            }

            .stats-container {
                gap: 32px;
            }

            .certifications {
                padding-left: 0;
                border-left: none;
                width: 100%;
                justify-content: center;
                padding-top: 16px;
                border-top: 1px solid var(--gray-200);
            }
        }

        @media (max-width: 768px) {
            .hero-container {
                padding: 32px 20px 48px;
            }

            .hero-cta {
                flex-direction: column;
            }

            .btn-video, .btn-sample {
                width: 100%;
                justify-content: center;
            }

            .trust-row {
                gap: 16px;
            }

            .stats-container {
                flex-direction: column;
                gap: 20px;
            }

            .review-card {
                flex: 0 0 calc(100% - 20px);
                min-width: calc(100vw - 64px);
            }

            .reviews-section {
                padding: 48px 20px;
            }

            .reviews-cta {
                flex-direction: column;
                text-align: center;
            }

            .reviews-cta-content {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .form-card {
                padding: 24px 20px;
            }

            .form-footer {
                flex-wrap: wrap;
                gap: 10px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-content > * {
            animation: fadeIn 0.5s ease forwards;
        }

        .hero-content > *:nth-child(1) { animation-delay: 0s; }
        .hero-content > *:nth-child(2) { animation-delay: 0.05s; }
        .hero-content > *:nth-child(3) { animation-delay: 0.1s; }
        .hero-content > *:nth-child(4) { animation-delay: 0.15s; }
        .hero-content > *:nth-child(5) { animation-delay: 0.2s; }
        .hero-content > *:nth-child(6) { animation-delay: 0.25s; }
        .hero-content > *:nth-child(7) { animation-delay: 0.3s; }

        .form-card {
            animation: fadeIn 0.5s ease 0.2s forwards;
            opacity: 0;
        }


        /* section third  */
        /* ============================================
           WHEN REQUIRED SECTION
           ============================================ */
        .when-required-section {
            padding: 72px 32px;
            background: var(--white);
        }

        .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }

        /* Section Header */
        .section-header {
            /*text-align: center;*/
            margin-bottom: 40px;
        }

        .section-title {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 12px;
            line-height: 1.25;
        }

        .section-subtitle {
            font-size: 15px;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Requirements List */
        .requirements-box {
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 32px;
            margin-bottom: 48px;
        }

        .requirements-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .requirement-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 12px 0;
            border-bottom: 1px solid var(--gray-200);
        }

        .requirement-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .requirement-item:first-child {
            padding-top: 0;
        }

        .requirement-icon {
            width: 28px;
            height: 28px;
            background: var(--orange-light);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .requirement-icon svg {
            width: 14px;
            height: 14px;
            color: var(--orange);
        }

        .requirement-content {
            flex: 1;
        }

        .requirement-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 4px;
        }

        .requirement-desc {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* Content Cards Section */
        .cards-section {
            margin-top: 48px;
        }

        .cards-header {
            /*text-align: center;*/
            margin-bottom: 32px;
        }

        .cards-title {
            font-size: clamp(22px, 2.5vw, 28px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 8px;
        }

        .cards-subtitle {
            font-size: 14px;
            color: var(--text-muted);
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .content-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 28px;
            transition: all 0.25s ease;
            position: relative;
        }

        .content-card:hover {
            border-color: var(--orange);
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 24px;
            right: 24px;
            height: 3px;
            background: var(--orange);
            border-radius: 0 0 3px 3px;
            opacity: 0;
            transition: opacity 0.25s ease;
        }

        .content-card:hover::before {
            opacity: 1;
        }

        .card-icon {
            width: 48px;
            height: 48px;
            background: var(--blue-lighter);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
        }

        .card-icon svg {
            width: 24px;
            height: 24px;
            color: var(--blue);
        }

        .card-number {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 28px;
            height: 28px;
            background: var(--gray-100);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-muted);
        }

        .content-card:hover .card-number {
            background: var(--orange-light);
            color: var(--orange);
        }

        .card-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--blue);
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .card-text {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* Single Card Below (Centered) */
        .cards-grid-single {
            display: flex;
            justify-content: center;
            margin-top: 24px;
        }

        .cards-grid-single .content-card {
            max-width: 380px;
            width: 100%;
        }

        /* Alternative: 2+2 Grid Layout */
        .cards-grid-2x2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            max-width: 800px;
            margin: 0 auto;
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .when-required-section {
                padding: 56px 20px;
            }

            .requirements-box {
                padding: 24px;
            }

            .cards-grid {
                grid-template-columns: 1fr;
            }

            .cards-grid-single .content-card {
                max-width: 100%;
            }

            .cards-grid-2x2 {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .when-required-section {
                padding: 40px 16px;
            }

            .requirements-box {
                padding: 20px;
            }

            .requirement-item {
                flex-direction: column;
                gap: 10px;
            }

            .content-card {
                padding: 24px;
            }
        }

    /* fourth section */
        /* ============================================
           ELIGIBILITY CRITERIA SECTION - LIGHT VERSION
           ============================================ */
        .eligibility-section {
            padding: 72px 32px;
            background: var(--blue-lighter);
            position: relative;
        }

        .eligibility-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--orange), var(--blue));
        }

        .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }

        /* Section Header */
        .section-header {
            /*text-align: center;*/
            margin-bottom: 48px;
        }

        .section-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            color: var(--orange);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }

        .section-eyebrow svg {
            width: 18px;
            height: 18px;
        }

        .section-title {
            font-size: clamp(26px, 3vw, 34px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 12px;
            line-height: 1.25;
        }

        .section-subtitle {
            font-size: 15px;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Criteria Cards Grid */
        .criteria-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .criteria-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 28px;
            border: 1px solid var(--gray-200);
            border-left: 4px solid var(--orange);
            transition: all 0.25s ease;
            position: relative;
        }

        .criteria-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-3px);
            border-left-color: var(--blue);
        }

        .card-icon {
            width: 44px;
            height: 44px;
            background: var(--orange-light);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            transition: all 0.25s ease;
        }

        .criteria-card:hover .card-icon {
            background: var(--blue-lighter);
        }

        .card-icon svg {
            width: 22px;
            height: 22px;
            color: var(--orange);
            transition: color 0.25s ease;
        }

        .criteria-card:hover .card-icon svg {
            color: var(--blue);
        }

        .card-title {
            font-size: 17px;
            font-weight: 700;
            color: var(--blue);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .card-text {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* ============================================
           DARK VERSION (Alternative)
           ============================================ */
        .eligibility-section.dark {
            background: var(--blue);
        }

        .eligibility-section.dark::before {
            background: var(--orange);
        }

        .eligibility-section.dark .section-eyebrow {
            color: var(--orange);
        }

        .eligibility-section.dark .section-title {
            color: var(--white);
        }

        .eligibility-section.dark .section-subtitle {
            color: rgba(255, 255, 255, 0.7);
        }

        .eligibility-section.dark .criteria-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-left: 4px solid var(--orange);
        }

        .eligibility-section.dark .criteria-card:hover {
            background: rgba(255, 255, 255, 0.08);
            border-left-color: var(--orange);
        }

        .eligibility-section.dark .card-icon {
            background: rgba(232, 113, 44, 0.15);
        }

        .eligibility-section.dark .criteria-card:hover .card-icon {
            background: rgba(232, 113, 44, 0.2);
        }

        .eligibility-section.dark .card-icon svg {
            color: var(--orange);
        }

        .eligibility-section.dark .card-title {
            color: var(--white);
        }

        .eligibility-section.dark .card-text {
            color: rgba(255, 255, 255, 0.7);
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .criteria-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .eligibility-section {
                padding: 56px 20px;
            }

            .criteria-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .criteria-card {
                padding: 24px;
            }
        }

        @media (max-width: 480px) {
            .eligibility-section {
                padding: 40px 16px;
            }

            .section-header {
                margin-bottom: 32px;
            }
        }
    /* 5th section */


        /* ============================================
           STEPS SECTION
           ============================================ */
        .steps-section {
            padding: 72px 32px;
            background: var(--gray-50);
        }

        .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }

        /* Section Header */
        .section-header {
            margin-bottom: 56px;
        }

        .section-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            color: var(--orange);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }

        .section-title {
            font-size: clamp(26px, 3vw, 34px);
            font-weight: 800;
            color: var(--blue);
            line-height: 1.25;
            max-width: 600px;
        }

        /* Steps Container */
        .steps-container {
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        /* Individual Step Card */
        .step-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: center;
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 40px;
            border: 1px solid var(--gray-200);
            transition: all 0.3s ease;
        }

        .step-card:hover {
            box-shadow: var(--shadow-lg);
            border-color: var(--gray-300);
        }

        /* Reverse layout for even steps (Z-pattern) */
        .step-card:nth-child(even) {
            direction: rtl;
        }

        .step-card:nth-child(even) > * {
            direction: ltr;
        }

        /* Step Content */
        .step-content {
            display: flex;
            flex-direction: column;
        }

        .step-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--orange);
            color: var(--white);
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
            width: fit-content;
        }

        .step-title {
            font-size: clamp(20px, 2.5vw, 24px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 14px;
            line-height: 1.3;
        }

        .step-description {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.75;
        }

        /* Step highlights */
        .step-highlights {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 18px;
        }

        .highlight-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .highlight-tag svg {
            width: 12px;
            height: 12px;
            color: var(--green);
        }

        /* Step Image/Illustration */
        .step-visual {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .step-illustration {
            width: 100%;
            max-width: 280px;
            aspect-ratio: 1;
            background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%);
            border-radius: var(--radius-xl);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 32px;
            position: relative;
            overflow: hidden;
        }

        .step-illustration::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -30%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, rgba(232, 113, 44, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .illustration-icon {
            width: 72px;
            height: 72px;
            background: var(--white);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-md);
            margin-bottom: 16px;
        }

        .illustration-icon svg {
            width: 36px;
            height: 36px;
            color: var(--blue);
        }

        .illustration-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            text-align: center;
        }

        /* Step Number Connector (optional visual) */
        .step-number-large {
            position: absolute;
            bottom: 16px;
            right: 20px;
            font-size: 64px;
            font-weight: 800;
            color: rgba(27, 54, 93, 0.06);
            line-height: 1;
        }

        /* For actual images */
        .step-image {
            width: 100%;
            max-width: 320px;
            border-radius: var(--radius-lg);
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 900px) {
            .step-card {
                grid-template-columns: 1fr;
                gap: 32px;
                padding: 32px;
            }

            .step-card:nth-child(even) {
                direction: ltr;
            }

            .step-visual {
                order: -1;
            }

            .step-illustration {
                max-width: 240px;
            }
        }

        @media (max-width: 768px) {
            .steps-section {
                padding: 56px 20px;
            }

            .step-card {
                padding: 28px;
            }

            .section-header {
                margin-bottom: 40px;
            }
        }

        @media (max-width: 480px) {
            .steps-section {
                padding: 40px 16px;
            }

            .step-card {
                padding: 24px;
                gap: 24px;
            }

            .step-illustration {
                max-width: 200px;
                padding: 24px;
            }

            .illustration-icon {
                width: 56px;
                height: 56px;
            }

            .illustration-icon svg {
                width: 28px;
                height: 28px;
            }
        }
   
        /* ============================================
           SECTION 1: CHECKLIST SECTION
           ============================================ */
        .checklist-section {
            padding: 72px 32px;
            background: var(--white);
        }

        .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }

        .section-container-wide {
            max-width: 1200px;
            margin: 0 auto;
        }

        .checklist-content {
            max-width: 800px;
        }

        .section-title {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }

        .checklist-paragraphs {
            margin-bottom: 32px;
        }

        .checklist-paragraphs p {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 16px;
        }

        .checklist-paragraphs p:last-child {
            margin-bottom: 0;
        }

        .checklist-paragraphs strong {
            color: var(--text-primary);
            font-weight: 600;
        }

        /* Checklist Items */
        .checklist-items {
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 28px;
        }

        .checklist-items-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--blue);
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checklist-items-title svg {
            width: 20px;
            height: 20px;
            color: var(--orange);
        }

        .checklist-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .checklist-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .check-icon {
            width: 22px;
            height: 22px;
            background: var(--orange-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .check-icon svg {
            width: 12px;
            height: 12px;
            color: var(--orange);
        }

        /* ============================================
           SECTION 2: WHY CHOOSE PATRON ACCOUNTING
           ============================================ */
        .why-choose-section {
            padding: 72px 32px;
            background: var(--gray-50);
        }

        .why-choose-header {
            text-align: center;
            margin-bottom: 48px;
        }

        .section-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            color: var(--orange);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }

        .section-subtitle {
            font-size: 15px;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .feature-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 28px;
            transition: all 0.25s ease;
        }

        .feature-card:hover {
            box-shadow: var(--shadow-md);
            border-color: var(--orange);
            transform: translateY(-2px);
        }

        .feature-icon {
            width: 52px;
            height: 52px;
            background: var(--orange-light);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
        }

        .feature-icon svg {
            width: 26px;
            height: 26px;
            color: var(--orange);
        }

        .feature-title {
            font-size: 17px;
            font-weight: 700;
            color: var(--blue);
            margin-bottom: 10px;
        }

        .feature-text {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* ============================================
           SECTION 3: YOUR PARTNER SECTION
           ============================================ */
        .partner-section {
            padding: 72px 32px;
            background: var(--white);
        }

        .partner-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .partner-title {
            font-size: clamp(24px, 3vw, 30px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 16px;
        }

        .partner-text {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 28px;
        }

        /* Note Box */
        .note-box {
            background: var(--orange-lighter);
            border: 1px solid rgba(232, 113, 44, 0.2);
            border-left: 4px solid var(--orange);
            border-radius: var(--radius-md);
            padding: 20px 24px;
            text-align: left;
        }

        .note-label {
            font-size: 13px;
            font-weight: 700;
            color: var(--orange);
            margin-bottom: 6px;
        }

        .note-text {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* ============================================
           SECTION 4: CTA BANNER
           ============================================ */
        .cta-banner-section {
            padding: 56px 32px;
            background: var(--gray-50);
        }

        .cta-banner {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }

        .cta-title {
            font-size: clamp(22px, 2.5vw, 28px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 12px;
        }

        .cta-services {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 24px;
        }

        .cta-service-tag {
            font-size: 14px;
            font-weight: 600;
            color: var(--orange);
        }

        .cta-service-tag:not(:last-child)::after {
            content: '•';
            margin-left: 8px;
            color: var(--gray-400);
        }

        .btn-cta-primary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 32px;
            font-family: 'Barlow', sans-serif;
            font-size: 15px;
            font-weight: 700;
            color: var(--white);
            background: var(--orange);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
        }

        .btn-cta-primary:hover {
            background: var(--orange-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(232, 113, 44, 0.35);
        }

        .btn-cta-primary svg {
            width: 18px;
            height: 18px;
        }

        /* ============================================
           SECTION 5: LOCATIONS / STATES & CITIES
           ============================================ */
        .locations-section {
            padding: 72px 32px;
            background: var(--white);
            border-top: 1px solid var(--gray-200);
        }

        .locations-header {
            margin-bottom: 36px;
        }

        .locations-title {
            font-size: clamp(22px, 2.5vw, 28px);
            font-weight: 800;
            color: var(--blue);
        }

        .locations-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .location-card {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .location-card:hover {
            background: var(--orange-lighter);
            border-color: var(--orange);
        }

        .location-icon {
            width: 40px;
            height: 40px;
            background: var(--white);
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: var(--shadow-sm);
        }

        .location-icon svg {
            width: 20px;
            height: 20px;
            color: var(--orange);
        }

        .location-text {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-primary);
            line-height: 1.4;
        }

        .location-card:hover .location-text {
            color: var(--orange);
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .locations-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .checklist-section,
            .why-choose-section,
            .partner-section,
            .locations-section {
                padding: 56px 20px;
            }

            .cta-banner-section {
                padding: 48px 20px;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .locations-grid {
                grid-template-columns: 1fr;
            }

            .feature-card {
                padding: 24px;
            }
        }

        @media (max-width: 480px) {
            .checklist-section,
            .why-choose-section,
            .partner-section,
            .locations-section {
                padding: 40px 16px;
            }

            .cta-banner-section {
                padding: 40px 16px;
            }

            .checklist-items {
                padding: 20px;
            }

            .note-box {
                padding: 16px;
            }

            .cta-services {
                flex-direction: column;
                gap: 4px;
            }

            .cta-service-tag:not(:last-child)::after {
                display: none;
            }
        }    

    
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
h2{
    font-size: clamp(26px, 3vw, 32px);
    font-weight: 800;
    color: var(--blue);
    margin-bottom: 24px;
    line-height: 1.25;
    font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
}
h3{
    color:var(--blue);
    font-size: 1.5rem;
    /*color: ;*/
    font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
}
p{
    font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
    color:var(--text-secondary);
}
section a{
    color: var(--orange);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s;
}
/* Remove default bullets */
section ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
}

/* Apply checklist layout */
section ul li:not(.nav-item) {
     display: -webkit-inline-box;
//    align-items: flex-start;
    gap: 12px;
    /*font-size: 14px;*/
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 10px;
}

/* Create the circular icon */
section ul li:not(.nav-item)::before {
    content: "";
    width: 22px;
    height: 22px;
    background: var(--orange-light);
    border-radius: 50%;
    flex-shrink: 0;
    margin-top: 1px;

    /* Center checkmark */
    display: flex;
    align-items: center;
    justify-content: center;

    /* SVG checkmark */
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 12px;
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
@if($page->hero_enabled && $page->hero_title)
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Trusted by 10,000+ Businesses
                </div>
                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        {{ $page->hero_title }}
                    </h1>

                    @if($page->hero_benefits && count($page->hero_benefits) > 0)
                    <div class="mb-4">
                        @foreach($page->hero_benefits as $benefit)
                        @if($benefit)
                        <div class="d-flex align-items-start mb-3">
                            <!--<div class="me-3">-->
                            <!--    <div class="custom-dot-circle"></div>-->
                            <!--</div>-->
                             <span class="check-icon me-2">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg>
                        </span>
                            <div>
                                <p class="mb-0 text-dark benefit-paragraph">{!! nl2br(e($benefit)) !!}</p>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif

                    @if($page->hero_button_text && $page->hero_button_link)
                    <div class="mb-4">
                        <a href="{{ $page->hero_button_link }}" class="explore-services-btn me-3 mb-2">
                            {{ $page->hero_button_text }}
                        </a>
                    </div>
                    @endif

                    @if(($page->hero_video_text && $page->hero_video_link) || ($page->hero_document_text && $page->hero_document_link))
                    
                    <div class="hero-cta">
                    <button class="btn-video" id="watchVideoBtn" type="button">
                        <span class="play-circle">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </span>
                        <!--Watch How It Works-->
                          <div class="action-btn-youtube">
                                <a href="javascript:void(0);" class="text-decoration-none hero-video-trigger" data-video-url="{{ $page->hero_video_link }}">
                                    {{ $page->hero_video_text }}
                                </a>
                            </div>
                    </button>
                    <a href="javascript:void(0);" class="btn-sample text-decoration-none document-image-trigger" id="downloadSampleBtn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                               {{ $page->hero_document_text }}
                    </a>
                </div>
                @endif
                <!-- Trust Section -->
                <div class="trust-section">
                    <div class="trust-row">
                        <div class="trust-item">
                            <div class="trust-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                            </div>
                            <div class="trust-text">
                                <strong>15+ Years</strong>
                                Industry Experience
                            </div>
                        </div>
                        <div class="trust-item">
                            <div class="trust-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div class="trust-text">
                                <strong>CA & CS</strong>
                                Certified Experts
                            </div>
                        </div>
                    </div>

                    <div class="google-rating">
                        <div class="google-logo">
                            <svg viewBox="0 0 74 24" height="20">
                                <path fill="#4285F4" d="M9.24 8.19v2.46h5.88c-.18 1.38-.64 2.39-1.34 3.1-.86.86-2.2 1.8-4.54 1.8-3.62 0-6.45-2.92-6.45-6.54s2.83-6.54 6.45-6.54c1.95 0 3.38.77 4.43 1.76L15.4 2.5C13.94 1.08 11.98 0 9.24 0 4.28 0 .11 4.04.11 9s4.17 9 9.13 9c2.68 0 4.7-.88 6.28-2.52 1.62-1.62 2.13-3.91 2.13-5.75 0-.57-.04-1.1-.13-1.54H9.24z"/>
                                <path fill="#EA4335" d="M25 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52z"/>
                                <path fill="#FBBC05" d="M53.58 7.49h-.09c-.57-.68-1.67-1.3-3.06-1.3C47.53 6.19 45 8.72 45 12c0 3.26 2.53 5.81 5.43 5.81 1.39 0 2.49-.62 3.06-1.32h.09v.81c0 2.22-1.19 3.41-3.1 3.41-1.56 0-2.53-1.12-2.93-2.07l-2.22.92c.64 1.54 2.33 3.43 5.15 3.43 2.99 0 5.52-1.76 5.52-6.05V6.49h-2.42v1zm-2.93 8.03c-1.76 0-3.1-1.5-3.1-3.52 0-2.05 1.34-3.52 3.1-3.52 1.74 0 3.1 1.5 3.1 3.54.01 2.03-1.36 3.5-3.1 3.5z"/>
                                <path fill="#4285F4" d="M58 .24h2.51v17.57H58z"/>
                                <path fill="#34A853" d="M68.26 15.52c-1.3 0-2.22-.59-2.82-1.76l7.77-3.21-.26-.66c-.48-1.3-1.96-3.7-4.97-3.7-2.99 0-5.48 2.35-5.48 5.81 0 3.26 2.46 5.81 5.76 5.81 2.66 0 4.2-1.63 4.84-2.57l-1.98-1.32c-.66.96-1.56 1.6-2.86 1.6zm-.18-7.15c1.03 0 1.91.53 2.2 1.28l-5.25 2.17c0-2.44 1.73-3.45 3.05-3.45z"/>
                                <path fill="#EA4335" d="M40.75 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52z"/>
                            </svg>
                        </div>
                        <div class="rating-content">
                            <div class="rating-stars">
                                <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                <span class="rating-score">4.9</span>
                            </div>
                            <span class="rating-count">Based on 500+ reviews</span>
                        </div>
                    </div>
                </div>
                    
                    
                    <!--<div class="d-flex flex-column flex-sm-row flex-wrap gap-3 gap-sm-2 align-items-start">-->
                    <!--    @if($page->hero_video_text && $page->hero_video_link)-->
                        <!-- YouTube Section -->
                    <!--    <div class="d-flex align-items-center gap-2 mb-2 mb-sm-0">-->
                    <!--        <img src="{{ asset('images/youtube-168-svgrepo-com-1.png') }}" alt="Play Icon"-->
                    <!--            class="flex-shrink-0" style="width: 20px; height: 20px;">-->
                    <!--        <div class="action-btn-youtube">-->
                    <!--            <a href="javascript:void(0);" class="text-decoration-none hero-video-trigger" data-video-url="{{ $page->hero_video_link }}">-->
                    <!--                {{ $page->hero_video_text }}-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    @endif-->

                    <!--    @if($page->hero_document_text && $page->hero_document_link)-->
                        <!-- Document Section -->
                    <!--    <div class="d-flex align-items-center gap-2">-->
                    <!--        <img src="{{ asset('images/document-text-svgrepo-com-1.png') }}" alt="Document Icon"-->
                    <!--            class="flex-shrink-0" style="width: 20px; height: 20px;">-->
                    <!--        <div class="action-btn-document">-->
                    <!--            <a href="javascript:void(0);" class="text-decoration-none document-image-trigger">-->
                    <!--                {{ $page->hero_document_text }}-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    @endif-->
                    <!--</div>-->

                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-lg border-0"  style="border-radius: 15px;border-top: 5px #F26522 solid !important;">
                    <div class="card-body p-4">
                        <div class="form-header">
                       <h2 class="form-title">Request a Call Back</h2>
                        <p class="form-subtitle">Get expert advice within 30 minutes</p>
                     </div>

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
 	 	 	 	<input name='Contacts.Last Name' type='text' value='' class='wf-field-item wf-field-input form-control form-control-lg form-input registration-form-input' oninput='removeError(this)' placeholder='Your Name' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' />
 	 	 	 	</div>
 	 	 	    <div class='mb-3'>
 	 	 	 	<input fvalidate='true' ftype='email' name='Contacts.Email' type='text' value='' class='wf-field-item form-input wf-field-input form-control form-control-lg registration-form-input' oninput='removeError(this)' placeholder='Your Email id.' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' />
 	 	 	 	</div>
 	 	 	 	    <div class='form-group'>
                                <div class='phone-group'>
                                    <span class='country-code'>
                                        <img src='{{ asset("images/india.png") }}' alt='India Flag'>
                                        +91
                                    </span>
                                        <input fvalidate='true' ftype='mobile' name='Contacts.Mobile'  class='wf-field-item wf-field-input form-input @error('mobile') is-invalid @enderror' maxlength='30' type='text' value='' pattern='[0-9]{10}' maxlength='10'  oninput='this.value = this.value.replace(/[^0-9]/g, "")'
                                            title='Please enter a valid 10-digit mobile number' required />
                                    <!--<input ftype='dialcode' name='Contacts.Mobile' maxlength='30' type='text' style='display:none;'/>-->
                                    @error('mobile')
                                    <div class='invalid-feedback'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
 	 	 	 	
 	 	 	 	
 	 	 	 	<div class='wf-field-inner mb-3'>
 	 	 	 	<input name='Contacts.Mailing City' type='text' value='' class='wf-field-item wf-field-input form-input form-control form-control-lg registration-form-input' oninput='removeError(this)' placeholder='City/Pincode' style='border-radius: 10px; border: 1px solid #ddd; padding: 15px;' required/>
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
                </div>
            </div>
        </div>
    </div>
</section>

<!-- YouTube Video Modal -->
<div class="modal fade" id="youtubeVideoModal" tabindex="-1" aria-labelledby="youtubeVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: transparent; border: none;">
            <div class="modal-body p-0" style="position: relative;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" 
                    style="position: absolute; top: 6px; right: 8px; z-index: 1050; background-color: white; opacity: 1; border-radius: 50%; padding: 0.5rem;"></button>
                <div class="ratio ratio-16x9" id="videoContainer">
                    <!-- YouTube iframe will be inserted here -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Document Image Modal -->
<div class="modal fade" id="documentImageModal" tabindex="-1" aria-labelledby="documentImageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: transparent; border: none;">
            <div class="modal-body p-0" style="position: relative;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" 
                    style="position: absolute; top: 6px; right: 8px; z-index: 1050; background-color: white; opacity: 1; border-radius: 50%; padding: 0.5rem;"></button>
                <div style="border-radius: 8px; overflow: hidden;">
                    <img src="{{ asset('images/dummy-img.jpeg') }}" alt="Document" class="img-fluid w-100" style="border-radius: 8px;">
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Stats Bar -->
<div class="stats-bar">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <div class="stat-content">
                    <span class="stat-value">10,000+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                </div>
                <div class="stat-content">
                    <span class="stat-value">15+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                </div>
                <div class="stat-content">
                    <span class="stat-value">50,000+</span>
                    <span class="stat-label">Documents Filed</span>
                </div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg>
                </div>
                <div class="stat-content">
                    <span class="stat-value">4.9★</span>
                    <span class="stat-label">Client Rating</span>
                </div>
            </div>

            <div class="certifications">
                <div class="cert-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    ISO Certified
                </div>
                <div class="cert-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                    SSL Secure
                </div>
            </div>
        </div>
    </div>

<!-- Real Stories from Real People Section -->
<section class="py-5" style="background-color:#fff;">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <h2 class="fw-bold mb-3">Real Stories from Real People</h2>
                <p class="text-muted mb-0">Hear how teams across industries use patron to
                    save time, cut costs, & stay in control.</p>
            </div>
        </div>

        @php
            // Fetch published testimonials
            $testimonials = \App\Models\Testimonial::where('status', 'published')
                ->ordered()
                ->get();
            
            // Split testimonials into chunks of 4 for slides
            $testimonialChunks = $testimonials->chunk(4);
        @endphp


    

        @if($testimonials->count() > 0)
        <!-- Testimonial Slider Container -->
        <div class="testimonial-slider-container position-relative">
            <!-- Slick Slider -->
            <div class="testimonial-slick-slider">

                @foreach($testimonials as $testimonial)
                <!-- Individual Slide for each testimonial -->
                <div class="testimonial-slide px-2">
                    @if($testimonial->video)
                        <!-- Video Testimonial Card - Screenshot Style -->
                        <div class="screenshot-testimonial-card">
                            <div class="profile-image-section">
                                <div class="video-testimonial-wrapper" onclick="playVideo(this)">
                                    <video class="w-100 h-100" style="border-radius: 12px 12px 0 0; object-fit: cover;" 
                                           onplay="this.setAttribute('data-playing', 'true')" 
                                           onpause="this.setAttribute('data-playing', 'false')" 
                                           onended="this.setAttribute('data-playing', 'false')">
                                        <source src="{{ asset('storage/' . $testimonial->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                            </video>
                                            <div class="video-play-overlay">
                                                <div class="video-play-icon"></div>
                                            </div>
                                        </div>
                                        <div class="star-rating-badge">
                                            {!! $testimonial->stars_html !!}
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="client-info">
                                            <div class="company-logo-badge">
                                                @if($testimonial->image)
                                                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}"
                                                        style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover;">
                                                @else
                                                    <img src="{{ asset('images/image1.png') }}" alt="Company Logo"
                                                        style="width: 42px; height: 42px; object-fit: contain;">
                                                @endif
                                            </div>
                                            <div class="client-details">
                                                <div class="client-name">{{ $testimonial->name }}</div>
                                                @if($testimonial->position)
                                                <p class="client-position">
                                                    {{ $testimonial->position }}
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($testimonial->image && $testimonial->content)
                                <!-- Quote Card with Image -->
                                <div class="testimonial-quote-card">
                                   
                                    <div class="quote-content"> 
                                        <p class="testimonial-text">
                                            
                                            {{ Str::limit($testimonial->content, 150) }}
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="client-info-quote">
                                            <div class="client-avatar-quote">
                                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}"
                                                    style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover;">
                                            </div>
                                            <div class="client-details-quote">
                                                <h3 class="client-name-quote">{{ $testimonial->name }}</h3>
                                                @if($testimonial->position)
                                                <p class="client-position-quote">
                                                    {{ $testimonial->position }}
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="rating-section">
                                            <div class="stars-rating">
                                                {!! $testimonial->stars_html !!}
                                            </div>
                                            <div class="google-logo">
                                                <img src="{{ asset('images/google.png') }}" alt="Google Logo" style="width: 26px; height: 26px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($testimonial->image)
                                <!-- Profile Card with Image Only -->
                                <div class="screenshot-testimonial-card">
                                    <div class="profile-image-section">
                                        <img src="{{ asset('storage/' . $testimonial->image) }}" class="profile-image"
                                            alt="{{ $testimonial->name }}">
                                        <div class="star-rating-badge">
                                            {!! $testimonial->stars_html !!}
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="client-info">
                                            <div class="company-logo-badge">
                                                <img src="{{ asset('images/image1.png') }}" alt="Company Logo"
                                                    style="width: 42px; height: 42px; object-fit: contain;">
                                            </div>
                                            <div class="client-details">
                                                <div class="client-name">{{ $testimonial->name }}</div>
                                                @if($testimonial->position)
                                                <p class="client-position">
                                                    {{ $testimonial->position }}
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- Text Only Quote Card -->
                                <div class="testimonial-quote-card">
                                     <div class="review-quote"> 
                                 <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path></svg>
                                 </div>
                                    <div class="quote-content">
                                        <p class="testimonial-text">
                                            {{ Str::limit($testimonial->content, 150) }}
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="client-info-quote">
                                            <div class="client-avatar-quote">
                                                <div style="width: 42px; height: 42px; border-radius: 50%; background: #28a745; color: white; display: flex; align-items: center; justify-content: center; font-weight: 600;">
                                                    {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                                                </div>
                                            </div>
                                            <div class="client-details-quote">
                                                <h3 class="client-name-quote">{{ $testimonial->name }}</h3>
                                                @if($testimonial->position)
                                                <p class="client-position-quote">
                                                    {{ $testimonial->position }}
                                                </p>
                                                @endif
                                                <div class="stars-rating">
                                                {!! $testimonial->stars_html !!}
                                                </div>
                                            </div>
                                            <div class="rating-section">
                                            
                                            <div class="google-logo">
                                                <img src="{{ asset('images/google.png') }}" alt="Google Logo" style="width: 26px; height: 26px;">
                                            </div>
                                        </div>
                                        </div>

                                    </div>
                                </div>
                            @endif
                </div>
                @endforeach

            </div>
        </div>
        <div class="reviews-cta mt-5">
                <div class="reviews-cta-content">
                    <div class="reviews-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                    </div>
                    <div class="reviews-cta-text">
                        <h3 class="text-white">Join 10,000+ Satisfied Businesses</h3>
                        <p>Get expert assistance for all your business registration needs</p>
                    </div>
                </div>
                <button class="btn-cta" type="button">
                    Talk to an Expert
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        @else
        <!-- No Testimonials Available -->
        <div class="text-center py-5">
            <p class="text-muted">No testimonials available at the moment.</p>
        </div>
        @endif
    </div>

    <!-- jQuery (required for Slick) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
    // Video Play Function
    function playVideo(wrapper) {
        const video = wrapper.querySelector('video');
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    }

    $(document).ready(function() {
        // Initialize testimonial slider with responsive settings
        $('.testimonial-slick-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 3000
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 3000
                    }
                }
            ]
        });
    });

    // Tab functionality with smooth scrolling
    $(document).ready(function() {
        $('.tab-button').on('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all buttons
            $('.tab-button').removeClass('active');
            
            // Add active class to clicked button
            $(this).addClass('active');

            // Get the target section ID from data-tab attribute
            var targetTab = $(this).data('tab');
            
            // Smooth scroll to the section
            if ($(targetTab).length) {
                $('html, body').animate({
                    scrollTop: $(targetTab).offset().top - 100 // 100px offset for header
                }, 800);
            }
        });

        // Update active button on scroll
        $(window).on('scroll', function() {
            var scrollPos = $(window).scrollTop() + 150;
            
            $('.tab-button').each(function() {
                var targetSection = $($(this).data('tab'));
                if (targetSection.length) {
                    if (targetSection.offset().top <= scrollPos && 
                        targetSection.offset().top + targetSection.outerHeight() > scrollPos) {
                        $('.tab-button').removeClass('active');
                        $(this).addClass('active');
                    }
                }
            });
        });
    });

    // Scroll Animation functionality
    $(document).ready(function() {
        // Create intersection observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                }
            });
        }, observerOptions);

        // Observe all procedure steps
        document.querySelectorAll('.procedure-step').forEach(function(step) {
            observer.observe(step);
        });
    });
    </script>
    </div>
</section>

<!-- Real Stories from Real People Section -->

<nav class="toc-section" aria-label="Table of Contents">
    <div class="toc-container">
        <button class="toc-arrow left" type="button" aria-label="Scroll Left">
            &#10094;
        </button>
        <div class="toc-wrapper" id="tocWrapper">
            @php
                $navItems = [];

                if($page->intro_enabled && $page->intro_title) {
                    $navItems[] = ['title' => $page->intro_title, 'id' => 'intro-section'];
                }
                if($page->what_enabled && $page->what_title) {
                    $navItems[] = ['title' => $page->what_title, 'id' => 'what-section'];
                }
                if($page->applicability_enabled && $page->applicability_title) {
                    $navItems[] = ['title' => $page->applicability_title, 'id' => 'applicability-section'];
                }
                if($page->report_components_enabled && $page->report_format_header_title) {
                    $navItems[] = ['title' => $page->report_format_header_title, 'id' => 'report-format-section'];
                }
                if($page->procedure_steps_enabled && $page->procedure_steps_items && count($page->procedure_steps_items) > 0) {
                    $navItems[] = [
                        'title' => $page->procedure_header_title ?: 'Stock Audit Procedure',
                        'id' => 'procedure-section'
                    ];
                }
                if($page->checklist_enabled && $page->checklist_items && count($page->checklist_items) > 0) {
                    $navItems[] = [
                        'title' => $page->checklist_header_title ?: 'Stock Audit Checklist',
                        'id' => 'checklist-section'
                    ];
                }
                if($page->challenges_enabled && $page->challenges_items && count($page->challenges_items) > 0) {
                    $navItems[] = [
                        'title' => $page->challenges_title ?: 'Challenges & Solutions',
                        'id' => 'challenges-section'
                    ];
                }
                if($page->fees_enabled && $page->fees_items && count($page->fees_items) > 0) {
                    $navItems[] = [
                        'title' => $page->fees_title ?: 'Stock Audit Fees',
                        'id' => 'fees-section'
                    ];
                }
                if($page->time_taken_enabled && $page->time_taken_title) {
                    $navItems[] = ['title' => $page->time_taken_title, 'id' => 'time-taken-section'];
                }
                if($page->benefits_enabled && $page->benefits_items && count($page->benefits_items) > 0) {
                    $navItems[] = [
                        'title' => $page->benefits_header_title ?: 'Benefits',
                        'id' => 'benefits-section'
                    ];
                }
                if($page->conclusion_enabled && $page->conclusion_title) {
                    $navItems[] = ['title' => $page->conclusion_title, 'id' => 'conclusion-section'];
                }
                if($page->faq_enabled && $page->faq_items && count($page->faq_items) > 0) {
                    $navItems[] = [
                        'title' => $page->faq_title ?: 'FAQs',
                        'id' => 'faq-section'
                    ];
                }
            @endphp

            @foreach($navItems as $index => $item)
                <a 
                    href="#{{ $item['id'] }}" 
                    class="toc-btn {{ $index === 0 ? 'active' : '' }}"
                >
                    {{ $item['title'] }}
                </a>
            @endforeach
        </div>
         <button class="toc-arrow right" type="button" aria-label="Scroll Right">
            &#10095;
        </button>
    </div>
</nav>

@if($page->intro_enabled && $page->intro_title && $page->intro_content)
<section class="content-section" id="intro-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">
                {{ $page->intro_title }}
            </h2>

            <div class="content-text">
                {!! $page->intro_content !!}
            </div>
        </div>
    </div>
</section>
@endif

 

<!-- What Section --> 
@if($page->what_enabled && $page->what_title)
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">

            <!-- LEFT CONTENT -->
            <div class="column-content">
                <h2 class="section-title">
                    {{ $page->what_title }}
                </h2>

                @if($page->what_content)
                <div class="content-text">
                    {!! $page->what_content !!}
                </div>
                @endif

                @if($page->what_additional_content)
                <div class="highlight-box">
                    {!! $page->what_additional_content !!}
                </div>
                @endif
            </div>

            <!-- RIGHT IMAGE -->
            <div class="column-image">
                @if($page->what_image)
                    <div class="image-wrapper">
                        <img 
                            src="{{ asset('storage/' . $page->what_image) }}"
                            alt="{{ $page->what_title }}"
                            loading="lazy"
                        >
                    </div>
                @else
                    <!-- Optional fallback illustration -->
                    <div class="illustration-placeholder">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div class="illustration-badge">
                            <span>Trusted Process</span>
                            <strong>100% Compliance</strong>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>
@endif


<!-- Applicability Section --> 
@if($page->applicability_enabled && $page->applicability_title)
<section class="when-required-section">
        <div class="section-container">
             <!-- SECTION HEADER -->
        <div class="cards-section">
            <header class="cards-header">
                <h3 class="cards-title">
                    {{ $page->applicability_title }}
                </h3>

                @if($page->applicability_content)
                    <p class="cards-subtitle">
                        {!! ($page->applicability_content) !!}
                    </p>
                @endif
            </header>

            <!-- CARDS GRID -->
            @if($page->services_enabled && $page->services_items && count($page->services_items) > 0)
            <div class="cards-grid">

                @foreach($page->services_items as $index => $service)
                <article class="content-card">
                    <span class="card-number">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    @if(!empty($service['image']))
                    <div class="card-icon">
                        <img
                            src="{{ str_starts_with($service['image'], 'images/services/')
                                    ? asset('storage/' . $service['image'])
                                    : asset('images/' . $service['image']) }}"
                            alt="{{ $service['title'] }}"
                            loading="lazy"
                        >
                    </div>
                    @endif

                    <h4 class="card-title">
                        {{ $service['title'] }}
                    </h4>

                    <p class="card-text">
                        {!! $service['description'] !!}
                    </p>
                </article>
                @endforeach

            </div>
            @endif

            <!-- OPTIONAL NOTE CARD -->
            @if($page->services_note)
            <div class="cards-grid-single">
                <article class="content-card highlight-card">
                    <span class="card-number">*</span>

                    <h4 class="card-title">Please Note</h4>

                    <p class="card-text">
                        {{ $page->services_note }}
                    </p>
                </article>
            </div>
            @endif

        </div>
        </div>
</section>          

@endif

<!-- Stock Audit Report Format Section -->
@if($page->report_components_enabled)
<section class="eligibility-section" id="report-format-section">

    <div class="section-container">

        <!-- SECTION HEADER -->
        @if($page->report_format_title || $page->report_format_description)
        <header class="section-header">
            <span class="section-eyebrow">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Requirements
            </span>

            @if($page->report_format_title)
                <h2 class="section-title">
                    {{ $page->report_format_title }}
                </h2>
            @endif

            @if($page->report_format_description)
                <p class="section-subtitle">
                    {{ $page->report_format_description }}
                </p>
            @endif
        </header>
        @endif

        <!-- CRITERIA / COMPONENTS GRID -->
        @if($page->report_components_items && count($page->report_components_items) > 0)
        <div class="criteria-grid">

            @foreach($page->report_components_items as $component)
            <article class="criteria-card">

                @if(!empty($component['image']))
                <div class="card-icon">
                    <img
                        src="{{ str_starts_with($component['image'], 'images/report-components/')
                                ? asset('storage/' . $component['image'])
                                : asset($component['image']) }}"
                        alt="{{ $component['title'] }}"
                        loading="lazy"
                    >
                </div>
                @endif

                <h3 class="card-title">
                    {{ $component['title'] }}
                </h3>

                <p class="card-text">
                    {!! $component['description'] !!}
                </p>

            </article>
            @endforeach

        </div>
        @endif

        <!-- OPTIONAL NOTE -->
        @if($page->report_components_note)
        <div class="highlight-box">
            <p>
                <strong>Please Note:</strong> {{ $page->report_components_note }}
            </p>
        </div>
        @endif

    </div>

</section>
@endif


<!-- Stock Audit Procedure Section -->
 @if($page->procedure_steps_enabled)
<section class="steps-section" id="procedure-section">

    <div class="section-container">

        <!-- SECTION HEADER -->
        @if($page->procedure_header_title || $page->procedure_header_description)
        <header class="section-header">
            <span class="section-eyebrow">Our Process</span>

            @if($page->procedure_header_title)
                <h2 class="section-title">
                    {{ $page->procedure_header_title }}
                </h2>
            @endif

            @if($page->procedure_header_description)
                <p class="section-subtitle">
                    {!! $page->procedure_header_description !!}
                </p>
            @endif

            @if(
                ($page->procedure_header_button1_text && $page->procedure_header_button1_link) ||
                ($page->procedure_header_button2_text && $page->procedure_header_button2_link)
            )
            <div class="section-actions">
                @if($page->procedure_header_button1_text && $page->procedure_header_button1_link)
                    <a href="{{ $page->procedure_header_button1_link }}" class="primary-btn">
                        {{ $page->procedure_header_button1_text }}
                    </a>
                @endif

                @if($page->procedure_header_button2_text && $page->procedure_header_button2_link)
                    <a href="{{ $page->procedure_header_button2_link }}" class="secondary-btn">
                        {{ $page->procedure_header_button2_text }}
                    </a>
                @endif
            </div>
            @endif
        </header>
        @endif

        <!-- STEPS -->
        @if($page->procedure_steps_items && count($page->procedure_steps_items) > 0)
        <div class="steps-container">

            @foreach($page->procedure_steps_items as $index => $step)
            <article class="step-card">

                <!-- STEP CONTENT -->
                <div class="step-content">
                    <span class="step-badge">
                        {{ $step['step_number'] ?? 'Step ' . ($index + 1) }}
                    </span>

                    <h3 class="step-title">
                        {{ $step['title'] }}
                    </h3>

                    <p class="step-description">
                        {{ $step['description'] }}
                    </p>

                    @if(!empty($step['highlights']) && is_array($step['highlights']))
                    <div class="step-highlights">
                        @foreach($step['highlights'] as $highlight)
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $highlight }}
                        </span>
                        @endforeach
                    </div>
                    @endif
                </div>

                <!-- STEP VISUAL -->
                <div class="step-visual">
                    @if(!empty($step['image']))
                        <img
                            src="{{ str_starts_with($step['image'], 'images/procedure-steps/')
                                    ? asset('storage/' . $step['image'])
                                    : asset($step['image']) }}"
                            alt="{{ $step['title'] }}"
                            class="step-image"
                            loading="lazy"
                        >
                    @else
                        <!-- Fallback illustration -->
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M9 12l2 2 4-4"/>
                                </svg>
                            </div>
                            <span class="illustration-label">
                                {{ $step['title'] }}
                            </span>
                            <span class="step-number-large">
                                {{ $index + 1 }}
                            </span>
                        </div>
                    @endif
                </div>

            </article>
            @endforeach

        </div>
        @endif

    </div>

</section>
@endif



<!-- Stock Audit Checklist Section -->
@if($page->checklist_enabled)
<section class="checklist-section" id="checklist-section">

    <div class="section-container">
        <div class="checklist-content">

            <!-- SECTION TITLE -->
            @if($page->checklist_header_title)
                <h2 class="section-title">
                    {{ $page->checklist_header_title }}
                </h2>
            @endif

            <!-- INTRO / PARAGRAPHS -->
            @if($page->checklist_header_description)
            <div class="checklist-paragraphs">
                {!! $page->checklist_header_description !!}
            </div>
            @endif

            <!-- CHECKLIST ITEMS -->
            @if($page->checklist_items && count($page->checklist_items) > 0)
            <div class="checklist-items">

                <h3 class="checklist-items-title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Required Documents
                </h3>

                <ul class="checklist-list">
                    @foreach($page->checklist_items as $item)
                    <li class="checklist-item">
                        
                        {!! $item['text'] !!}
                    </li>
                    @endforeach
                </ul>

            </div>
            @endif

            <!-- NOTE -->
            @if($page->checklist_note)
            <div class="highlight-box">
                <strong>Please Note:</strong> {{ $page->checklist_note }}
            </div>
            @endif

        </div>
    </div>

</section>
@endif

<!-- Challenges & Solutions Section -->
@if($page->challenges_enabled)
<section id="challenges-section" class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                @if($page->challenges_title || $page->challenges_description)
                <div class="challenges-section  mb-5">
                    @if($page->challenges_title)
                    <h2 class="fw-bold mb-4" >{{ $page->challenges_title }}
                    </h2>
                    @endif

                    @if($page->challenges_description)
                    <div class="text-muted mb-0" style="line-height: 1.7;">
                        {!! $page->challenges_description !!}
                    </div>
                    @endif
                </div>
                @endif

@if($page->challenges_items && count($page->challenges_items) > 0)
<!-- Challenges & Solutions Table -->
<div class="row g-3 g-md-5">
    <div class="col-12">
        <div class="challenge-solution-wrapper">
            <div class="challenge-solution-table rounded-4 shadow-sm">
                
                <table class="table align-middle mb-0 table-responsive">
                    <thead>
                        <tr>
                            <th class="fw-bold pb-4">
                                {{ $page->challenges_column_heading ?? 'Common Challenge' }}
                            </th>
                            <th class="fw-bold pb-4">
                                {{ $page->solutions_column_heading ?? 'Patron Accounting Solution' }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($page->challenges_items as $index => $item)
                        <tr>
                            <!-- Challenge -->
                            <td class="py-3 border-top">
                                <p class=" mb-0"
                                   style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                    {{ $item['challenge'] ?? '' }}
                                </p>
                            </td>

                            <!-- Solution -->
                            <td class="py-3 border-top">
                                <div class="d-flex align-items-start gap-2 gap-md-3">
                                    <div class="solution-icon mt-1"
                                         style="width: 12px; height: 12px; background: #F26522; transform: rotate(45deg); flex-shrink: 0;">
                                    </div>
                                    <p class="text-dark mb-0"
                                       style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                        {{ $item['solution'] ?? '' }}
                                    </p>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endif


                @if($page->challenges_note)
                <!-- Important Note -->
                            <div class="highlight-box">
                              <strong>Please Note:</strong> {{ $page->challenges_note }}
                        </div>
                
                @endif
            </div>
        </div>
    </div>
</section>
@endif


@if($page->why_choose_enabled)
<section class="why-choose-section">
    
    <div class="section-container-wide">

        {{-- Section Header --}}
        @if($page->why_choose_title || $page->why_choose_subtitle)
        <header class="why-choose-header">
            @if($page->why_choose_eyebrow)
                <span class="section-eyebrow">{{ $page->why_choose_eyebrow }}</span>
            @endif

            @if($page->why_choose_title)
                <h2 class="section-title">{{ $page->why_choose_title }}</h2>
            @endif

            @if($page->why_choose_subtitle)
                <p class="section-subtitle">{{ $page->why_choose_subtitle }}</p>
            @endif
        </header>
        @endif

        {{-- Features Grid --}}
        @if(!empty($page->why_choose_items) && count($page->why_choose_items) > 0)
        <div class="features-grid">
            @foreach($page->why_choose_items as $item)
            <article class="feature-card">

                {{-- Icon --}}
                @if(!empty($item['icon']))
                <div class="feature-icon">
                    {!! $item['icon'] !!} 
                </div>
                @endif

                {{-- Title --}}
                @if(!empty($item['title']))
                    <h3 class="feature-title">{{ $item['title'] }}</h3>
                @endif

                {{-- Description --}}
                @if(!empty($item['description']))
                    <p class="feature-text">{{ $item['description'] }}</p>
                @endif

            </article>
            @endforeach
        </div>
        @endif

    </div>
</section>
@endif



<!-- Stock Audit Fee in India Section -->
@if($page->fees_enabled)
<section id="fees-section" class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                @if($page->fees_title || $page->fees_description)
                <div class=" mb-5">
                    @if($page->fees_title)
                    <h2 class="fw-bold mb-4 stock-audit-fee-heading">{{ $page->fees_title }}</h2>
                    @endif

                    @if($page->fees_description)
                    <p class="text-muted  mb-0" style="line-height: 1.7;">
                        {{ $page->fees_description }}
                    </p>
                    @endif
                </div>
                @endif

                @if($page->fees_items && count($page->fees_items) > 0)
                <!-- Fee Structure Table -->
                <div class="fee-structure-wrapper">
                    <div class="fee-structure-card bg-white rounded-4 p-5" style="border: 1px solid #E4E5EA;">
                        <div class="row g-0">
                            <!-- Left Column - Fee Components -->
                            <div class="col-md-6 border-end border-light">
                                <div class="fee-components-column pe-4">
                                    <h3 class="fw-bold text-dark text-center mb-4 pb-5">Fee Component</h3>

                                    @foreach($page->fees_items as $index => $item)
                                    <!-- Fee Item {{ $index + 1 }} -->
                                    <div class="fee-item mb-4 pb-4 border-bottom border-light">
                                        <p class="text-dark text-center mb-0"
                                            style="line-height: 1.6; font-size: 1rem; font-weight: 500;">
                                            {{ $item['component'] ?? '' }}
                                        </p>
                                    </div>
                                    @endforeach

                                    <!-- Total Row -->
                                    <div class="fee-item-total mt-4 pt-3">
                                        <p class="text-dark text-center mb-0"
                                            style="line-height: 1.6; font-size: 1rem; font-weight: 700;">
                                            Total Estimated Range
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column - Costs -->
                            <div class="col-md-6">
                                <div class="costs-column ps-4">
                                    <h3 class="fw-bold  text-center mb-4 pb-5">Cost (Approx.)</h3>

                                    @php
                                    $totalMin = 0;
                                    $totalMax = 0;
                                    foreach($page->fees_items as $item) {
                                    $cost = $item['cost'] ?? '';
                                    // Extract numbers from cost string (e.g., "₹5,000 - ₹10,000")
                                    preg_match_all('/[\d,]+/', $cost, $matches);
                                    if (!empty($matches[0])) {
                                    $numbers = array_map(function($n) { return (int)str_replace(',', '', $n); },
                                    $matches[0]);
                                    if (count($numbers) >= 2) {
                                    $totalMin += $numbers[0];
                                    $totalMax += $numbers[1];
                                    } elseif (count($numbers) == 1) {
                                    $totalMin += $numbers[0];
                                    $totalMax += $numbers[0];
                                    }
                                    }
                                    }
                                    $totalRange = '₹' . number_format($totalMin) . ' - ₹' . number_format($totalMax);
                                    @endphp

                                    @foreach($page->fees_items as $index => $item)
                                    <!-- Cost {{ $index + 1 }} -->
                                    <div class="cost-item mb-4 pb-4 border-bottom border-light text-end">
                                        <p class="text-dark text-center mb-0"
                                            style="line-height: 1.6; font-size: 1rem; font-weight: 600;">
                                            ₹{{ $item['cost'] ?? '' }}
                                        </p>
                                    </div>
                                    @endforeach

                                    <!-- Total Cost Row -->
                                    <div class="cost-item-total mt-4 pt-3">
                                        <p class="text-dark text-center mb-0"
                                            style="line-height: 1.6; font-size: 1rem; font-weight: 700;">
                                            {{ $totalRange }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($page->fees_note)
                <!-- Important Note -->
                  <div class="highlight-box">
                              <strong>Please Note:</strong> {{ $page->fees_note ?? ' ' }}
                        </div>
               
                @endif

                <!-- Fees Content Section -->
                @if($page->fees_content)
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="fees-content-section"
                            style="text-align: justify;">
                            {!! $page->fees_content !!}
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif

<!-- Time Taken & Benefits Section -->
<section class="py-5" style="background-color: #ffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- Time Taken for Stock Audit -->
                @if($page->time_taken_enabled)
                <div id="time-taken-section" class="mb-5">
                    @if($page->time_taken_title)
                    <div class="text-start mb-4">
                        <h2 class="fw-bold mb-4"
                            style="line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
                            {{ $page->time_taken_title }}
                        </h2>
                    </div>
                    @endif

                    @if($page->time_taken_content)
                    <div class="time-content-card bg-white  rounded">
                        <div class="text-muted mb-0" style="line-height: 1.8; font-size: 1rem;">
                            {!! $page->time_taken_content !!}
                        </div>
                    </div>
                    @endif
                </div>
                @endif

              
            </div>
        </div>
    </div>
</section>

<!-- Additional Stock Audit Benefits Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                  <!-- Benefits of Stock Audit -->
                @if($page->benefits_enabled && ($page->benefits_header_title || $page->benefits_header_description))
                <div>
                    <div class=" mb-4">
                        @if($page->benefits_header_title)
                        <h2 class="fw-bold mb-4"
                            style="letter-spacing: 0%; vertical-align: middle;">
                            {{ $page->benefits_header_title }}
                        </h2>
                        @endif
                        
                        @if($page->benefits_header_description)
                        <div class="text-muted  mb-4" style="line-height: 1.7;">
                            {!! $page->benefits_header_description !!}
                        </div>
                        @endif
                    </div>

                    @if($page->benefits_header_button1_text || $page->benefits_header_button2_text)
                    <!-- Action Buttons -->
                    <div class="text-center mb-5">
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            @if($page->benefits_header_button1_text && $page->benefits_header_button1_link)
                            <a href="{{ $page->benefits_header_button1_link }}" class="btn btn-orange rounded-pill px-4 py-2">
                                {{ $page->benefits_header_button1_text }}
                            </a>
                            @endif
                            
                            @if($page->benefits_header_button2_text && $page->benefits_header_button2_link)
                            <a href="{{ $page->benefits_header_button2_link }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">
                                {{ $page->benefits_header_button2_text }}
                            </a>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
                @endif
                
                <!-- Benefits Header Image -->
                @if($page->benefits_header_image)
                <div class="row justify-content-center mt-5">
                    <div class="col-12 text-center">
                        <img src="{{ asset('storage/' . $page->benefits_header_image) }}" alt="Benefits Section"
                            class="img-fluid section-image" style="width: 546px; height: 513px; object-fit: cover; border-radius: 15px;">
                    </div>
                </div>
                @endif
                @if($page->benefits_enabled && $page->benefits_items && count($page->benefits_items) > 0)
                <!-- Dynamic Benefits Grid -->
                <div id="benefits-section" class="row g-4 mb-5">
                    @foreach($page->benefits_items as $benefit)
                    <div class="col-lg-4 col-md-6">
                        <div class="additional-benefit-card p-4 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="benefit-icon-wrapper">
                                    <div class="benefit-icon-box"
                                        style="border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                        <img src="{{ !empty($benefit['icon']) ? asset('storage/' . $benefit['icon']) : asset('images/default-icon.png') }}" alt="{{ $benefit['title'] ?? 'Benefit' }}"
                                            style="width: 40px; height: 40px;">
                                    </div>
                                </div>
                                <div class="benefit-content">
                                    <h3 class="fw-bold text-dark mb-2"
                                        style="line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F !important;">
                                        {{ $benefit['title'] ?? '' }}</h3>
                                    <div class="text-muted mb-0" >
                                        {!! $benefit['description'] ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Important Note -->
                @if($page->benefits_note)
                
                 <div class="highlight-box">
                <strong>Please Note:</strong>  {{ $page->benefits_note }}
                        </div>
               

                @endif
            </div>
        </div>
    </div>
</section>

<!-- Stock Audit vs Internal Inventory Control Comparison -->
@if($page->fees_comparison_enabled)
<section class="py-5" style="background-color: #fff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="comparison-section">
                    <div class=" mb-5">
                        <h2 class="fw-bold mb-4"
                            style="line-height: 100%; letter-spacing: 0%; vertical-align: middle; color: #14365F;">
                            {{ $page->fees_comparison_title ?? 'Stock Audit Fee in India' }}
                        </h2>
                        @if($page->fees_comparison_subtitle)
                        <div class="text-muted  mb-0"
                            style="line-height: 1.7;">
                            {!! $page->fees_comparison_subtitle !!}
                        </div>
                        @endif
                    </div>
                     @php
                            $showComparisonTable =
                                !empty($page->fees_comparison_rows) &&
                                count($page->fees_comparison_rows) > 0;
                        @endphp

                     <!-- Comparison Table -->
                    @if($showComparisonTable)
                    <div class="comparison-scroll-wrapper">
                        <div class="comparison-table-wrapper bg-white rounded-4 " >
                            <div class="table-responsive">
                                <table class="table table-borderless comparison-table mb-0">
                                    <thead>
                                        <tr class="">
                                            <th class="pb-3 pb-md-4 text-center">
                                                {{ $page->fees_comparison_header_col1 ?? 'Feature' }}
                                            </th>
                                            <th class="pb-3 pb-md-4 text-center">
                                                {{ $page->fees_comparison_header_col2 ?? 'Stock Audit' }}
                                            </th>
                                            <th class="pb-3 pb-md-4 text-center">
                                                {{ $page->fees_comparison_header_col3 ?? 'Internal Inventory Control' }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($page->fees_comparison_rows as $index => $row)
                                        <tr class="{{ $loop->last ? '' : 'border-bottom' }} text-center" style="border-color: #F5F5F5 !important;">
                                            <td class="py-3 py-md-4"
                                                style=" font-weight: 700; font-size: clamp(13px, 3vw, 16px); color: #2c3e50;">
                                                {{ $row['feature'] ?? '' }}
                                            </td>
                                            <td class="py-3 py-md-4 text-center"
                                                style=" font-weight: 400; font-size: clamp(12px, 3vw, 15px); color: #6c757d; line-height: 1.6;">
                                                {!! nl2br(e($row['stock_audit'] ?? '')) !!}
                                            </td>
                                            <td class="py-3 py-md-4 text-center"
                                                style=" font-weight: 400; font-size: clamp(12px, 3vw, 15px); color: #6c757d; line-height: 1.6;">
                                                {!! nl2br(e($row['internal_control'] ?? '')) !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- Important Note -->
                    @if($page->fees_comparison_note)
                                     <div class="highlight-box">
                <strong>Please Note:</strong>  {{ $page->fees_comparison_note }}
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Patron Accounting Stock Audit Partner Section -->
@if($page->partner_services_enabled)
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                {{-- TITLE & DESCRIPTION (independent of items) --}}
                @if(!empty($page->partner_services_title) || !empty($page->partner_services_description))
                <div class="patron  mb-5">
                    @if(!empty($page->partner_services_title))
                    <h2 class="fw-bold mb-4" >
                        {{ $page->partner_services_title }}
                    </h2>
                    @endif

                    @if(!empty($page->partner_services_description))
                    <div class="text-muted mb-0" style="line-height: 1.7;">
                        {!! $page->partner_services_description !!}
                    </div>
                    @endif
                </div>
                @endif

                {{-- SERVICES GRID (only if items exist) --}}
                @if(!empty($page->partner_services_items) && count($page->partner_services_items) > 0)
                <div class="row g-4 mb-5">
                    @foreach($page->partner_services_items as $service)
                        <div class="col-lg-6">
                            <div class="partner-service-card py-4 h-100" style="background: #f8f9fa; border-radius: 12px;">
                                <div class="d-flex align-items-start gap-4">
                                    <div class="service-icon-wrapper">
                                        <img src="{{ !empty($service['icon']) ? asset('storage/' . $service['icon']) : asset('images/default-icon.png') }}"
                                             alt="{{ $service['title'] ?? 'Service' }}"
                                             style="width: 48px; height: 48px;">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="fw-bold text-dark mb-3">
                                            {{ $service['title'] ?? '' }}
                                        </h3>
                                        <div class="text-muted" >
                                            {!! $service['description'] ?? '' !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif

                {{-- NOTE (independent) --}}
                @if(!empty($page->partner_services_note))
                
                <div class="highlight-box">
                   <strong>Please Note:</strong>  {{ $page->partner_services_note }}
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif

@if($page->license_types_enabled && $page->license_types_rows && count($page->license_types_rows))
<!-- License Types Table Section -->
<section id="license-types-section" class="py-5" style="background-color: #ffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <!-- Section Heading -->
                <div class=" mb-5">
                    <h2 class="fw-bold mb-4" style="text-align:start;">
                        {{ $page->license_types_title ?? 'Types of FSSAI Licenses' }}
                    </h2>

                    @if(!empty($page->license_types_description))
                        <div class="text-muted " style="line-height:1.7;">
                            {!! $page->license_types_description !!}
                        </div>
                    @endif
                </div>

                @php
                    $showTable = false;

                    if (!empty($page->license_types_rows)) {
                        foreach ($page->license_types_rows as $row) {
                            if (
                                !empty($row['license_type']) ||
                                !empty($row['business_scale']) ||
                                !empty($row['jurisdiction']) ||
                                !empty($row['validity']) ||
                                !empty($row['suitable_for'])
                            ) {
                                $showTable = true;
                                break;
                            }
                        }
                    }
                @endphp

                @if($showTable)

                <!-- ================= DESKTOP TABLE ================= -->
                <div class="table-responsive d-none d-md-block">
                    <table class="table table-bordered table-hover">
                        <thead style="background:#14365F;color:#fff;">
                            <tr>
                                <th class="text-center">License Type</th>
                                <th class="text-center">Business Scale</th>
                                <th class="text-center">Jurisdiction</th>
                                <th class="text-center">Validity</th>
                                <th class="text-center">Suitable For</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($page->license_types_rows as $row)
                                @if(
                                    !empty($row['license_type']) ||
                                    !empty($row['business_scale']) ||
                                    !empty($row['jurisdiction']) ||
                                    !empty($row['validity']) ||
                                    !empty($row['suitable_for'])
                                )
                                <tr>
                                    <td class="text-center fw-semibold">{{ $row['license_type'] ?? '' }}</td>
                                    <td class="text-center">{{ $row['business_scale'] ?? '' }}</td>
                                    <td class="text-center">{!! $row['jurisdiction'] ?? '' !!}</td>
                                    <td class="text-center">{{ $row['validity'] ?? '' }}</td>
                                    <td class="text-center">{{ $row['suitable_for'] ?? '' }}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- ================= MOBILE CARDS ================= -->
                <div class="d-md-none mt-4">
                    @foreach($page->license_types_rows as $row)
                        @if(
                            !empty($row['license_type']) ||
                            !empty($row['business_scale']) ||
                            !empty($row['jurisdiction']) ||
                            !empty($row['validity']) ||
                            !empty($row['suitable_for'])
                        )
                        <div class="card mb-3 shadow-sm" style="border-radius:12px;">
                            <div class="card-header" style="background:#14365F;color:#fff;">
                                <strong>{{ $row['license_type'] ?? '' }}</strong>
                            </div>
                            <div class="card-body">

                                @if(!empty($row['business_scale']))
                                <p><strong>Business Scale:</strong> {{ $row['business_scale'] }}</p>
                                @endif

                                @if(!empty($row['jurisdiction']))
                                <p><strong>Jurisdiction:</strong> {!! $row['jurisdiction'] !!}</p>
                                @endif

                                @if(!empty($row['validity']))
                                <p><strong>Validity:</strong> {{ $row['validity'] }}</p>
                                @endif

                                @if(!empty($row['suitable_for']))
                                <p class="mb-0"><strong>Suitable For:</strong> {{ $row['suitable_for'] }}</p>
                                @endif

                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>

                @endif <!-- $showTable end -->

            </div>
        </div>
    </div>
</section>


<style>
/* License Types Section - Hide table on mobile, show cards */
@media (max-width: 767px) {
    #license-types-section .table-responsive {
        display: none !important;
    }
}

/* License Types Section - Hide cards on desktop, show table */
@media (min-width: 768px) {
    #license-types-section .d-md-none {
        display: none !important;
    }
}

/* Table hover effect */
.table-hover tbody tr:hover {
    background-color: #f1f3f5;
    transition: background-color 0.2s ease;
}

/* Table responsive improvements */
@media (max-width: 1199px) {

    .table th,
    .table td {
        font-size: 0.9rem;
        padding: 10px !important;
    }
}
</style>
@endif

@if($page->conclusion_enabled)
<!-- Conclusion Section -->
<section id="conclusion-section" class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="conclusion-content text-start">
                    <h2 class="fw-bold mb-4"
                        style="line-height: 100%; letter-spacing: 0%;">
                       {{ $page->conclusion_title ?? 'Conclusion' }}
                    </h2>
                    <div class="text-muted mb-0" style="text-align: justify;">
                        {!! $page->conclusion_content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if($page->partnership_enabled)
<!-- Partnership Section -->
<div class="partnership-section text-center bg-white rounded-4 p-5 shadow-sm" style="border: 1px solid #E4E5EA;">
    <!-- Illustration -->
    @if($page->partnership_image)
    <div class="row justify-content-center mb-4">
        <div class="col-12 text-center">
            <div class="partnership-illustration mb-4">
                <img src="{{ asset('storage/' . $page->partnership_image) }}" alt="Partnership" class="flex-shrink-0" style="width: 546px; height: 513px; object-fit: cover; border-radius: 15px;">
            </div>
        </div>
    </div>
    @endif

    <!-- Partnership Message -->
    <div class="partnership-message">
        <h2 class="fw-bold mb-4"
            style=" line-height: 100%; letter-spacing: 0%; vertical-align: middle;">
            {{ $page->partnership_title ?? 'Your one-stop partner for Business Registration' }}
        </h2>
        @if($page->partnership_services)
        <p class="mb-4">
            @php
                $services = explode('•', $page->partnership_services);
            @endphp
            @foreach($services as $index => $service)
                <span style="color: #F26522; font-weight: 600;">{{ trim($service) }}</span>@if($index < count($services) - 1) • @endif
            @endforeach
        </p>
        @endif

        <!-- Final CTA -->
        @if($page->partnership_button_text && $page->partnership_button_link)
        <div class="final-cta mt-4">
            <a href="{{ $page->partnership_button_link }}" class="btn rounded-pill px-5 py-3"
                style="background-color: #F26522; color: white; font-weight: 600; font-size: 18px; border: none; transition: all 0.3s ease;">
                {{ $page->partnership_button_text }}
            </a>
        </div>
        @endif
    </div>
</div>
@endif

<!-- Company Registration Section -->
@if($page->company_registration_enabled && !empty($page->company_registration_items))
<section class="locations-section">
    <div class="section-container-wide">

        {{-- Section Header --}}
        @if(!empty($page->company_registration_title))
        <header class="locations-header">
            <h2 class="locations-title">{{ $page->company_registration_title }}</h2>
        </header>
        @endif

        {{-- Locations Grid --}}
        <div class="locations-grid">
            @foreach($page->company_registration_items as $item)
            <a href="{{ $item['link'] ?? '#' }}" class="location-card">

                {{-- Icon --}}
                <div class="location-icon">
                    @if(!empty($item['icon']))
                        {!! $item['icon'] !!}
                    @else
                        {{-- Default icon if none provided --}}
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    @endif
                </div>

                {{-- Location / Service Title --}}
                @if(!empty($item['title']))
                    <span class="location-text">{{ $item['title'] }}</span>
                @endif

            </a>
            @endforeach
        </div>

    </div>
</section>
@endif


@php
// Parse FAQ data from page
$faqData = null;
if ($page->faq_enabled && $page->faq_items) {
// faq_items is already decoded as array due to JSON casting in Page model
$faqData = $page->faq_items;
}
@endphp

@if($page->faq_enabled && !empty($faqData) && is_array($faqData))
<!-- Dynamic FAQ Section -->
<section id="faq-section" class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex align-items-end">
                <div class="faq-content">
                    <h2 class="fw-bold mb-3">
                        {{ $page->faq_title ?? 'Frequently Asked Questions' }}
                    </h2>
                    <p class="text-muted mb-5">
                        {{ $page->faq_subtitle ?? 'Have a look at the answers to the most asked questions.' }}
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
                                <img src="{{ asset('images/section6.png') }}" alt="FAQ Illustration" class="img-fluid"
                                    style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-content">
                    <!-- Dynamic FAQ Accordion -->
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqData as $index => $faq)
                        @if(isset($faq['question']) && isset($faq['answer']) && !empty($faq['question']) &&
                        !empty($faq['answer']))
                        <div class="accordion-item border-0 mb-3"
                            style="background: #ffffff; border: 1px solid #E4E5EA; border-radius: 12px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);">
                            <h2 class="accordion-header" id="faq{{ $index + 1 }}">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1 }}"
                                    aria-expanded="false" aria-controls="collapse{{ $index + 1 }}"
                                    style="background: transparent; border: none; padding: 1.5rem;">
                                    {{ $index + 1 }}. {{ $faq['question'] }}
                                    <span class="accordion-icon ms-auto"
                                        style="color: #28a745; font-size: 20px; font-weight: bold; transition: transform 0.3s ease;">+</span>
                                </button>
                            </h2>
                            <div id="collapse{{ $index + 1 }}" class="accordion-collapse collapse"
                                aria-labelledby="faq{{ $index + 1 }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body"
                                    style="padding: 0 1.5rem 1.5rem 1.5rem; font-size: 15px;">
                                    {!! nl2br(e($faq['answer'])) !!}
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<style>
.section-image {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}


@media (max-width: 768px) {
     #what-section  .section-image {
        width: 100% !important;
        height: auto !important;
    }
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

    /* Challenges & Solutions Mobile */
    .challenge-solution-table {
        padding: 1.5rem !important;
    }

    .challenge-solution-table .row.g-0 {
        flex-direction: column;
    }

    .challenge-solution-table .col-md-6 {
        width: 100%;
        border-right: none !important;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 2rem;
        margin-bottom: 2rem;
    }

    .challenge-solution-table .col-md-6:last-child {
        border-bottom: none;
        padding-bottom: 0;
        margin-bottom: 0;
    }

    .challenges-column, .solutions-column {
        padding: 0 !important;
    }

    .challenge-solution-table h4 {
        font-size: 1.25rem !important;
        padding-bottom: 1rem !important;
        margin-bottom: 1.5rem !important;
    }

    .challenge-item, .solution-item {
        font-size: 0.9rem !important;
    }

    /* Comparison Table Mobile */
    .comparison-table-wrapper {
        padding: 1.5rem !important;
        overflow-x: auto;
    }

    .comparison-table {
        min-width: 600px;
    }

    .comparison-table th,
    .comparison-table td {
        font-size: 0.85rem !important;
        padding: 0.75rem !important;
    }

    .comparison-table thead th {
        font-size: 0.9rem !important;
    }
}

@media (max-width: 576px) {
    .testimonial-card .card-body {
        padding: 1.5rem !important;
    }

    .testimonial-card .fs-4 {
        font-size: 1.1rem !important;
    }

    /* Challenges & Solutions Extra Small Screens */
    .challenge-solution-table {
        padding: 1rem !important;
    }

    .challenge-solution-table h4 {
        font-size: 1.1rem !important;
    }

    .challenge-item, .solution-item {
        font-size: 0.85rem !important;
        padding: 0.5rem 0 !important;
    }

    .solution-icon {
        width: 10px !important;
        height: 10px !important;
    }

    /* Comparison Table Extra Small Screens */
    .comparison-table {
        min-width: 500px;
    }

    .comparison-table th,
    .comparison-table td {
        font-size: 0.75rem !important;
        padding: 0.5rem !important;
    }

    .comparison-table thead th {
        font-size: 0.8rem !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // YouTube Video Modal Handler
    $('.hero-video-trigger').on('click', function(e) {
        e.preventDefault();
        
        var videoUrl = $(this).data('video-url');
        
        // Extract YouTube video ID from URL
        var videoId = '';
        if (videoUrl.includes('youtube.com/watch?v=')) {
            videoId = videoUrl.split('v=')[1].split('&')[0];
        } else if (videoUrl.includes('youtu.be/')) {
            videoId = videoUrl.split('youtu.be/')[1].split('?')[0];
        } else if (videoUrl.includes('youtube.com/embed/')) {
            videoId = videoUrl.split('embed/')[1].split('?')[0];
        }
        
        // Create iframe with autoplay
        var iframe = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        
        // Insert iframe into modal
        $('#videoContainer').html(iframe);
        
        // Show modal
        $('#youtubeVideoModal').modal('show');
    });
    
    // Stop video when modal is closed
    $('#youtubeVideoModal').on('hidden.bs.modal', function () {
        $('#videoContainer').html('');
    });

    // Document image popup handler
    $('.document-image-trigger').on('click', function(e) {
        e.preventDefault();
        
        // Show modal with static image
        $('#documentImageModal').modal('show');
    });
});

//  table of the content 


    const tocWrapper = document.getElementById('tocWrapper');
    const leftBtn = document.querySelector('.toc-arrow.left');
    const rightBtn = document.querySelector('.toc-arrow.right');

    const scrollAmount = 200;

    leftBtn.addEventListener('click', () => {
        tocWrapper.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

    rightBtn.addEventListener('click', () => {
        tocWrapper.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
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

@endsection
