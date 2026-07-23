@extends('layouts.app')

@section('title', 'Patron Accounting | Accounting & Compliance for Startups & SMEs Across India')

@push('styles')
<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap');

/* Hero Banner Styles */
.hero-banner {
    background-color: #14365F;
    position: relative;
    overflow: hidden;
    padding: 60px 0 80px;
}

.box-row {
    margin-top: 38px;
}

.hero-banner::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: white;
    clip-path: ellipse(100% 100% at 50% 100%);
}

.hero-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 52px;
    line-height: 1.2;
    color: white;
    margin-bottom: 20px;
    text-align: center;
}

.hero-title .highlight {
    color: #F26522;
}

.hero-subtitle {
    font-family: 'DM Sans', sans-serif;
    font-size: 18px;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 30px;
    max-width: 577px;
    text-align: center;
    width: 100%;
}

.hero-search-box {
    position: relative;
    max-width: 677px;
    margin-bottom: 40px;
    width: 100%;
}

.hero-search-box input {
    width: 100%;
    padding: 14px 50px;
    border: none;
    border-radius: 16px;
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    background: white;
}

.hero-search-box input::placeholder {
    color: #999;
}
/* rotating placeholder cross-fade (matches the header search) */
.pa-ph-rot::placeholder { transition: opacity .26s ease; opacity: 1; }
.pa-ph-rot.pa-ph-fade::placeholder { opacity: 0; }
/* recent-searches header inside the hero suggestions dropdown */
.hero-rec-head { display:flex; justify-content:space-between; align-items:center; padding:9px 16px 6px; font-size:11.5px; font-weight:700; color:#8A8F99; text-transform:uppercase; letter-spacing:.05em; }
.hero-rec-clear { border:0; background:none; color:#F0592A; font-size:12px; font-weight:600; cursor:pointer; padding:0; }

.hero-search-box .search-icon {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 18px;
}

.hero-search-box .voice-icon {
    position: absolute;
    right: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #F26522;
    font-size: 20px;
    cursor: pointer;
}

.hero-search-box input:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(242, 101, 34, 0.2);
}

/* Hero Search Suggestions */
.hero-search-suggestions {
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

.hero-search-suggestions.show {
    display: block;
}

.hero-suggestion-item {
    padding: 12px 15px;
    cursor: pointer;
    border-bottom: 1px solid #f3f4f6;
    transition: background-color 0.2s ease;
    text-decoration: none;
    color: inherit;
    display: block;
}

.hero-suggestion-item:last-child {
    border-bottom: none;
}

.hero-suggestion-item:hover {
    background-color: #f9fafb;
    text-decoration: none;
}

.hero-suggestion-title {
    font-weight: 600;
    color: #1f2937;
    font-size: 14px;
    margin-bottom: 4px;
}

.hero-suggestion-excerpt {
    font-size: 12px;
    color: #6b7280;
    line-height: 1.4;
}

.hero-no-results {
    padding: 20px;
    text-align: center;
    color: #6b7280;
    font-size: 14px;
}

.hero-search-spinner {
    position: absolute;
    right: 18px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
}

.hero-image-wrapper {
    position: relative;
}

.hero-image {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

.floating-contacts {
    position: absolute;
    right: -20px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.contact-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    cursor: pointer;
    transition: all 0.3s ease;
}

.contact-icon:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
}

.contact-icon i {
    font-size: 22px;
}

.contact-icon.phone i,
.contact-icon.chat i,
.contact-icon.email i {
    color: #F26522;
}

.contact-icon.whatsapp {
    background: #25D366;
}

.contact-icon.whatsapp i {
    color: white;
    font-size: 26px;
}

.contact-icon.assistant {
    background: linear-gradient(135deg, #00D9FF, #0099FF);
}

.contact-icon.assistant::before {
    content: 'A';
    color: white;
    font-weight: 700;
    font-size: 24px;
    font-family: 'DM Sans', sans-serif;
}

.trusted-section {
    text-align: center;
    padding: 40px 0 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.trusted-text {
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 1.5px;
    color: rgba(255, 255, 255, 0.7);
    text-transform: uppercase;
    margin-bottom: 30px;
}

.logo-carousel {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 30px;
    padding: 0 20px 60px;
}

.brand-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.brand-logo:hover {
    transform: scale(1.05);
}

.brand-text {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    font-weight: 600;
    color: white;
    opacity: 0.85;
    display: flex;
    align-items: center;
    gap: 5px;
    white-space: nowrap;
}

.brand-logo:hover .brand-text {
    opacity: 1;
}

.brand-text i {
    font-size: 12px;
}

.brand-text sup {
    font-size: 10px;
}

/* Social Icons on Image Left Side */
.social-icons-left {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    cursor: pointer;
    transition: all 0.3s ease;
}

.service-logo-img {
    width: 32px;
    height: 32px;
}

.social-icon:hover {
    transform: scale(1.1);
}

.social-icon.facebook {
    background: #1877F2;
}

.social-icon.twitter {
    background: #1DA1F2;
}

.social-icon.linkedin {
    background: #0A66C2;
}

.social-icon.instagram {
    background: linear-gradient(45deg, #F58529, #DD2A7B, #8134AF);
}

.social-icon i {
    color: white;
    font-size: 18px;
}

.banner-spacer {
    display: none !important;
    background-color: #F26522;
    height: 40px;
    display: flex;
    align-items: center;
    padding: 0;
}

.banner-spacer .container-fluid {
    padding: 0 40px;
}

.banner-spacer .brand-logo {
    display: flex;
    align-items: center;
    gap: 8px;
}

.box1 {
    display: flex;
    align-items: center;
    justify-content: center;
}

.box1 img {
    width: 20px;
    height: 20px;
}

.box2 {
    color: white;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    font-size: 14px;
    line-height: 1;
    white-space: nowrap;
}

/* Private Limited Company Registration Section */
.company-registration-section {
    background-color: #fff;
    padding: 60px 0;
}

.company-registration-content {
    text-align: center;
}

.company-registration-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 36px;
    color: #14365F;
    margin: 0;
    line-height: 1.3;
}

/* Our Services Section */
.our-services-section {
    background-color: #F9FAFB;
    padding: 80px 0;
}

.services-header {
    margin-bottom: 50px;
    display: flex;
    justify-content: space-between;
    ;
}

.services-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 32px;
    color: #14365F;
    margin-bottom: 40px;
}

.services-tabs {
    display: flex;
    gap: 10px;
    padding-bottom: 0;
    margin-bottom: 0;
    height: 50px;
    align-items: center;
}

.service-tab {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #6B7280;
    background: transparent;
    border: none;
    padding: 12px 24px;
    position: relative;
    cursor: pointer;
    transition: all 0.3s ease;
    border-bottom: 5px solid transparent;
    height: 100%;
}

.service-tab:hover {
    color: #14365F;
}

.service-tab.active {
    color: #000000;
    border-bottom-color: #F26522;
}

.service-card {
    background: #F5F5F5;
    border-radius: 12px;
    padding: 30px;
    height: 100%;
    transition: all 0.3s ease;
    cursor: pointer;
}

.service-card:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transform: translateY(-5px);
    background: #ffffff;
}

.service-icon-wrapper {
    width: 48px;
    height: 48px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.service-icon-wrapper i {
    font-size: 24px;
    color: #14365F;
}

.service-card-title {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 18px;
    color: #14365F;
    margin-bottom: 12px;
}

.service-card-description {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    line-height: 1.6;
    color: #6B7280;
    margin: 0;
}

.service-card-link {
    display: inline-block;
    margin-top: 15px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: #F26522;
    text-decoration: none;
    transition: all 0.3s ease;
}

.service-card-link:hover {
    color: #e55722;
    gap: 8px;
}

.tab-content-services {
    display: none;
    animation: fadeIn 0.3s ease-in;
}

.tab-content-services.active {
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

/* Our Working Process Section */
.working-process-section {
    background-color: #14365F;
    padding: 80px 0;
    position: relative;
}

.process-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 36px;
    color: white;
    text-align: center;
    margin-bottom: 60px;
}

.process-cards-wrapper {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 50px;
}

.process-card {
    background: white;
    border-radius: 12px;
    padding: 40px 30px;
    text-align: center;
    max-width: 260px;
    flex: 1;
    transition: all 0.3s ease;
    border: 3px solid transparent;
    position: relative;
}

.process-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.process-card.active {
    border-color: #00A8E8;
    transform: translateY(-5px);
}

.process-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 25px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.process-icon i {
    font-size: 48px;
    color: #F26522;
}

.process-card-title {
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    font-size: 16px;
    line-height: 1.5;
    color: #14365F;
    margin: 0;
}

.process-description {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    line-height: 1.7;
    color: white;
    text-align: start;
}

/* CTA Section - Start your Compliance Journey (Change 2: compact, brand-aligned) */
.cta-compliance-section {
    background: linear-gradient(135deg, #14365F 0%, #1e4d7a 50%, #14365F 100%);
    padding: 40px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.cta-compliance-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background:
        radial-gradient(circle at 20% 50%, rgba(242, 101, 34, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(30, 77, 122, 0.2) 0%, transparent 50%);
    pointer-events: none;
}

.cta-compliance-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 32px;
    line-height: 1.3;
    color: white;
    max-width: 500px;
    margin: 0 auto;
    padding-bottom: 24px;
    position: relative;
    z-index: 1;
}

.cta-get-started-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background-color: #F26522;
    color: white;
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 16px;
    padding: 14px 36px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    position: relative;
    z-index: 1;
    box-shadow: 0 4px 20px rgba(242, 101, 34, 0.3);
}

.cta-get-started-btn:hover {
    background-color: #e55722;
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(242, 101, 34, 0.4);
    color: white;
    text-decoration: none;
}

.cta-get-started-btn i {
    font-size: 16px;
    transition: transform 0.3s ease;
}

.cta-get-started-btn:hover i {
    transform: translateX(5px);
}

/* Comparison Section - Patron vs Others (Change 22: white bg for rhythm) */
.comparison-section {
    background-color: #ffffff;
    padding: 80px 0;
}

.comparison-header {
    text-align: center;
    margin-bottom: 60px;
}

.comparison-main-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 32px;
    color: #14365F;
    margin-bottom: 20px;
    line-height: 1.3;
}

.comparison-subtitle {
    font-family: 'DM Sans', sans-serif;
    font-size: 18px;
    line-height: 1.6;
    color: #6B7280;
    max-width: 800px;
    margin: 0 auto;
}

.comparison-table-wrapper {
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    gap: 0;
    border-radius: 16px;
    overflow: hidden;
    align-items: stretch;
        /* box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); */
}

.comparison-column {
    flex: 1;
    background: white;
}

.comparison-column.patron {
    background: #385C95;
    color: white;
    padding-bottom: 30px;
    border-radius: 16px;
    min-height: auto;
}

.comparison-column.others {
    background: white;
    border: 1px solid #CDCDCD;
    border-radius: 16px;
    min-height: auto;
}

.comparison-column-header {
    /* padding: 30px 20px; */
    text-align: center;
}


.comparison-column-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 28px;
    margin: 0;
    padding-top: 40px;
}

.comparison-column.patron .comparison-column-title {
    color: white;
}

.comparison-column.others .comparison-column-title {
    color: #14365F;
}

.comparison-row {
    padding: 30px 25px;
    background: #193A6A47;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    margin: 15px 0;
    text-align: center;
}

.comparison-column.others .comparison-row {
    border-bottom: 1px solid #E5E7EB;
    background: #193A6A47;
}

.comparison-row:last-child {
    border-bottom: none;
}

.comparison-feature-title {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 16px;
    margin-bottom: 10px;
}

.comparison-column.patron .comparison-feature-title {
    color: white;
}

.comparison-column.others .comparison-feature-title {
    color: #374151;
}

.comparison-feature-desc {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    line-height: 1.6;
    margin: 0;
}

.comparison-column.patron .comparison-feature-desc {
    color: rgba(255, 255, 255, 0.9);
}

.comparison-column.others .comparison-feature-desc {
    color: #6B7280;
}

/* Who We Are Section */
.who-we-are-section {
    background-color: white;
    padding: 80px 0;
}

.who-we-are-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 40px;
    color: #14365F;
    text-align: center;
    margin-bottom: 50px;
}

.who-we-are-content {
    background: #DCEEFF;
    border-radius: 24px;
    padding: 60px;
    display: flex;
    align-items: center;
    gap: 60px;
}

.who-we-are-text-content {
    flex: 1;
}

.who-we-are-subtitle {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 28px;
    line-height: 1.4;
    color: #14365F;
    margin-bottom: 25px;
}

.who-we-are-description {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    line-height: 1.8;
    color: #4B5563;
    margin-bottom: 30px;
}

.know-more-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 16px;
    color: #F26522;
    text-decoration: none;
    transition: all 0.3s ease;
}

.know-more-link:hover {
    color: #e55722;
    gap: 12px;
}

.know-more-link i {
    font-size: 14px;
    transition: transform 0.3s ease;
}

.know-more-link:hover i {
    transform: translateX(5px);
}

.who-we-are-image-wrapper {
    flex: 1;
    position: relative;
}

.who-we-are-image {
    width: 100%;
    height: auto;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    object-fit: cover;
}

/* Why Choose Patron Accounting Section (Change 3: refined grid) */
.why-choose-section {
    background-color: #F9FAFB;
    padding: 80px 0;
}

.why-choose-header {
    margin-bottom: 50px;
}

.why-choose-label {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 28px;
    line-height: 100%;
    letter-spacing: 0%;
    color: #14365F;
}

.why-choose-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 54px;
    color: #14365F;
    line-height: 1.2;
}

.why-choose-description {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    line-height: 1.8;
    color: #536D71;
    margin-bottom: 50px;
    max-width: 1000px;
}

.why-choose-features {
    background: white;
    border-radius: 16px;
    padding: 40px;
    border: 1px solid #E5E7EB;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 32px 40px;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    min-height: 80px;
}

.feature-icon {
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 2px;
}

.feature-icon i {
    font-size: 18px;
    color: #14365F;
}

.feature-content h4 {
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    font-size: 14px;
    color: #D4541C; /* Change 24: WCAG AA compliant orange */
    margin: 0;
    line-height: 1.5;
}

.feature-content p {
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    color: #6B7280;
    margin: 4px 0 0 0;
    line-height: 1.5;
}

/* Responsive Client Communication Section */
.client-communication-section {
    background-color: white;
    padding: 80px 0;
}

.client-communication-card {
    background: white;
    border: 1px solid #E5E7EB;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}

.client-communication-content {
    display: flex;
    align-items: center;
    gap: 0;
    padding: 30px;
}

.client-communication-text {
    flex: 1;
    padding: 15px;
}

.client-communication-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 36px;
    color: #000000;
    margin-bottom: 25px;
    line-height: 1.3;
}

.client-communication-description {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    line-height: 1.8;
    color: #6B7280;
    margin-bottom: 35px;
}

.book-consultation-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background-color: #F26522;
    color: white;
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 16px;
    padding: 14px 32px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(242, 101, 34, 0.25);
}

.book-consultation-btn:hover {
    background-color: #e55722;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(242, 101, 34, 0.35);
    color: white;
    text-decoration: none;
}

.book-consultation-btn i {
    font-size: 14px;
    transition: transform 0.3s ease;
}

.book-consultation-btn:hover i {
    transform: translateX(5px);
}

.client-communication-image {
    flex: 1;
    position: relative;
    overflow: hidden;
}

.client-communication-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    min-height: 400px;
    border-radius: 8px;
}

/* Proactive Compliance & Process Management Sections */
.feature-section-card {
    background-color: white;
    padding: 0;
    margin-bottom: 40px;
}

.feature-section-wrapper {
    background: #F9FAFB;
    border: 1px solid #E5E7EB;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}

.feature-section-content {
    display: flex;
    align-items: center;
    gap: 0;
}

.feature-section-content.reverse {
    flex-direction: row-reverse;
}

.feature-section-text {
    flex: 1;
    padding: 60px;
}

.feature-section-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 32px;
    color: #14365F;
    margin-bottom: 20px;
    line-height: 1.3;
}

.feature-section-description {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    line-height: 1.8;
    color: #6B7280;
    margin-bottom: 30px;
}

.feature-section-image {
    flex: 1;
    position: relative;
    overflow: hidden;
}

.feature-section-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    min-height: 400px;
    filter: grayscale(100%);
}

/* Real Stories Testimonial Section */
/* Real Stories section REMOVED (Change 5: was OtterMap placeholder content) */

/* More Than Legal Section */
.more-than-legal-section {
    background-color: #2C2C2C;
    padding: 80px 0;
}

.more-than-legal-content {
    display: flex;
    align-items: center;
    gap: 60px;
}

.more-than-legal-text {
    flex: 1;
}

.more-than-legal-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 40px;
    line-height: 1.3;
    color: #FFFFFF;
    margin-bottom: 30px;
}

.more-than-legal-description {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 40px;
}

.more-than-legal-image {
    flex: 1;
    position: relative;
}

.more-than-legal-image img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    object-fit: cover;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.testimonial-card {
    background: white;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.testimonial-card:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
}

.testimonial-text {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    line-height: 1.7;
    color: #6B7280;
    margin-bottom: 25px;
    flex-grow: 1;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: auto;
}

.author-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #E0F2FE;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.author-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.author-initials {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 16px;
    color: #14365F;
}

.author-info {
    flex: 1;
}

.author-name {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 15px;
    color: #333333;
    margin: 0 0 3px 0;
}

.author-position {
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    color: #9CA3AF;
    margin: 0;
}

.subtitle,
.search {
    display: flex;
    ;
    justify-content: center;
}

/* Trusted Companies Slider */
/* Fallback: horizontal scroll when Slick hasn't initialized */
.trusted-companies-slider:not(.slick-initialized) {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    padding: 10px 0;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
}
.trusted-companies-slider:not(.slick-initialized)::-webkit-scrollbar { display: none; }
.trusted-companies-slider:not(.slick-initialized) .slider-item {
    flex: 0 0 auto;
}

.trusted-companies-slider .slick-slide {
    padding: 0 15px;
    display: flex !important;
    align-items: center;
    justify-content: center;
}

.our-services-section{
    /* Enabled — updated with 9 focus area service cards */
}



.trusted-companies-slider .slider-item {
    text-align: center;
    display: flex !important;
    align-items: center;
    justify-content: center;
    height: 120px;
}

.trusted-companies-slider .slider-item img {
    max-height: 104px;
    max-width: 104px;
    width: auto;
    height: auto;
    margin: 0 auto;
    transition: all 0.3s ease;
    object-fit: contain;
}

.trusted-companies-slider .slider-item img:hover {
    transform: scale(1.1);
}

/* Responsive Styles */
@media (max-width: 991px) {
    .floating-contacts {
        position: static;
        transform: none;
        flex-direction: row;
        justify-content: center;
        margin-top: 20px;
    }

    .social-icons-left {
        position: static;
        transform: none;
        flex-direction: row;
        justify-content: center;
        margin-top: 20px;
    }
}

@media (max-width: 768px) {
    .hero-banner {
        padding: 40px 0 60px;
    }

    .hero-image {
        max-height: 320px;
    }

    .hero-title {
        font-size: 36px;
    }

    .hero-subtitle {
        font-size: 16px;
    }

    .hero-search-box {
        max-width: 100%;
    }

    .logo-carousel {
        gap: 15px;
    }

    .brand-text {
        font-size: 14px;
    }

    .banner-spacer .container-fluid {
        padding: 0 20px;
    }

    .box2 {
        font-size: 12px;
    }

    .box1 img {
        width: 18px;
        height: 18px;
    }

    .company-registration-section {
        padding: 40px 0;
    }

    .company-registration-title {
        font-size: 28px;
        padding: 0 20px;
    }

    .our-services-section {
        padding: 50px 0;
    }

    .services-title {
        font-size: 28px;
    }

    .services-tabs {
        flex-wrap: wrap;
    }

    .service-tab {
        font-size: 14px;
        padding: 10px 16px;
    }

    .service-card {
        margin-bottom: 20px;
    }

    .working-process-section {
        padding: 50px 0;
    }

    .process-title {
        font-size: 28px;
        margin-bottom: 40px;
    }

    .process-cards-wrapper {
        flex-wrap: wrap;
    }

    .process-card {
        max-width: 100%;
        margin-bottom: 20px;
    }

    .process-description {
        font-size: 14px;
    }

    .cta-compliance-section {
        padding: 32px 0;
    }

    .cta-compliance-title {
        font-size: 26px;
        margin-bottom: 20px;
        padding: 0 20px;
    }

    .cta-get-started-btn {
        font-size: 15px;
        padding: 12px 28px;
    }

    .comparison-section {
        padding: 60px 0;
    }

    .comparison-main-title {
        font-size: 32px;
        padding: 0 20px;
    }

    .comparison-subtitle {
        font-size: 16px;
        padding: 0 20px;
    }

    .comparison-table-wrapper {
        flex-direction: column;
        margin: 0 20px;
        gap: 20px;
    }

    .comparison-column.patron,
    .comparison-column.others {
        height: auto;
        min-height: auto;
    }

    .comparison-column-header {
        padding: 20px 15px;
    }

    .comparison-column-title {
        font-size: 24px;
        padding-top: 20px;
    }

    .box-row {
        margin-top: 20px;
    }

    .comparison-row {
        margin: 10px 0;
    }

    .comparison-feature-title {
        font-size: 15px;
    }

    .comparison-feature-desc {
        font-size: 13px;
    }

    .who-we-are-section {
        padding: 60px 0;
    }

    .who-we-are-title {
        font-size: 32px;
        padding: 0 20px;
    }

    .who-we-are-content {
        flex-direction: column;
        padding: 40px;
        gap: 40px;
        margin: 0 20px;
    }

    .who-we-are-subtitle {
        font-size: 24px;
    }

    .who-we-are-description {
        font-size: 15px;
    }

    .who-we-are-image-wrapper {
        width: 100%;
    }

    .why-choose-section {
        padding: 60px 0;
    }

    .why-choose-title {
        font-size: 36px;
    }

    .why-choose-description {
        font-size: 15px;
        padding: 0 20px;
    }

    .why-choose-features {
        padding: 40px 30px;
        margin: 0 20px;
    }

    .features-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .feature-item {
        gap: 12px;
    }

    .client-communication-section {
        padding: 60px 0;
    }

    .client-communication-card {
        margin: 0 20px;
    }

    .client-communication-content {
        flex-direction: column;
    }

    .client-communication-text {
        padding: 40px;
    }

    .client-communication-title {
        font-size: 28px;
    }

    .client-communication-description {
        font-size: 15px;
    }

    .client-communication-image img {
        min-height: 300px;
    }

    .feature-section-card {
        margin-bottom: 30px;
    }

    .feature-section-wrapper {
        margin: 0 20px;
    }

    .feature-section-content,
    .feature-section-content.reverse {
        flex-direction: column;
    }

    .feature-section-text {
        padding: 40px;
    }

    .feature-section-title {
        font-size: 26px;
    }

    .feature-section-description {
        font-size: 15px;
    }

    .feature-section-image img {
        min-height: 300px;
    }

        .more-than-legal-section {
        padding: 60px 0;
    }

    .more-than-legal-content {
        flex-direction: column;
        gap: 40px;
    }

    .more-than-legal-title {
        font-size: 32px;
    }

    .more-than-legal-description {
        font-size: 15px;
    }

                .testimonials-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 20px;
    }

    .testimonial-card {
        padding: 20px;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 28px;
    }

    .hero-image {
        max-height: 240px;
    }

    .hero-subtitle {
        font-size: 14px;
    }

    .trusted-text {
        font-size: 12px;
    }

    .brand-text {
        font-size: 12px;
    }

    .logo-carousel {
        gap: 10px;
    }

    .banner-spacer {
        height: auto;
        padding: 8px 0;
    }

    .banner-spacer .container-fluid {
        padding: 0 15px;
    }

    .banner-spacer .d-flex {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 8px !important;
    }

    .box2 {
        font-size: 11px;
    }

    .box1 img {
        width: 16px;
        height: 16px;
    }

    .company-registration-section {
        padding: 30px 0;
    }

    .company-registration-title {
        font-size: 22px;
        padding: 0 15px;
        line-height: 1.4;
    }

    .process-title {
        font-size: 24px;
        margin-bottom: 30px;
    }

    .process-cards-wrapper {
        gap: 15px;
    }

    .process-card {
        padding: 30px 20px;
    }

    .process-icon {
        width: 60px;
        height: 60px;
        margin-bottom: 20px;
    }

    .process-icon i {
        font-size: 36px;
    }

    .process-card-title {
        font-size: 14px;
    }

    .process-description {
        font-size: 13px;
    }

    .cta-compliance-section {
        padding: 28px 0;
    }

    .cta-compliance-title {
        font-size: 22px;
        margin-bottom: 18px;
        padding: 0 15px;
    }

    .cta-get-started-btn {
        font-size: 14px;
        padding: 12px 28px;
        width: calc(100% - 40px);
        max-width: 300px;
        justify-content: center;
    }

    .comparison-section {
        padding: 50px 0;
    }

    .comparison-header {
        margin-bottom: 40px;
    }

    .comparison-main-title {
        font-size: 24px;
        padding: 0 15px;
    }

    .comparison-subtitle {
        font-size: 14px;
        padding: 0 15px;
    }

    .comparison-table-wrapper {
        margin: 0 15px;
        gap: 20px;
        flex-direction: column;
    }

    .comparison-column.patron,
    .comparison-column.others {
        height: auto;
        min-height: auto;
        padding-bottom: 20px;
    }

    .comparison-column.patron {
        margin-bottom: 0;
    }

    .comparison-column-header {
        padding: 15px;
    }

    .comparison-column-title {
        font-size: 20px;
        padding-top: 20px;
    }

    .box-row {
        margin-top: 15px;
    }

    .comparison-row {
        padding: 15px;
        margin: 10px 15px;
    }

    .comparison-feature-title {
        font-size: 14px;
        margin-bottom: 8px;
    }

    .comparison-feature-desc {
        font-size: 12px;
    }

    .who-we-are-section {
        padding: 50px 0;
    }

    .who-we-are-title {
        font-size: 26px;
        padding: 0 15px;
        margin-bottom: 30px;
    }

    .who-we-are-content {
        padding: 30px 20px;
        gap: 30px;
        margin: 0 15px;
        border-radius: 16px;
    }

    .who-we-are-subtitle {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .who-we-are-description {
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .know-more-link {
        font-size: 15px;
    }

    .why-choose-section {
        padding: 50px 0;
    }

    .why-choose-header {
        padding: 0 15px;
        margin-bottom: 30px;
    }

    .why-choose-label {
        font-size: 14px;
    }

    .why-choose-title {
        font-size: 28px;
    }

    .why-choose-description {
        font-size: 14px;
        padding: 0 15px;
        margin-bottom: 30px;
    }

    .why-choose-features {
        padding: 30px 20px;
        margin: 0 15px;
    }

    .features-grid {
        gap: 25px;
    }

    .feature-icon {
        width: 40px;
        height: 40px;
    }

    .feature-icon i {
        font-size: 18px;
    }

    .feature-content h4 {
        font-size: 15px;
    }

    .feature-content p {
        font-size: 13px;
    }

    .client-communication-section {
        padding: 50px 0;
    }

    .client-communication-card {
        margin: 0 15px;
        border-radius: 16px;
    }

    .client-communication-text {
        padding: 30px 25px;
    }

    .client-communication-title {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .client-communication-description {
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .book-consultation-btn {
        width: 100%;
        justify-content: center;
        font-size: 15px;
        padding: 12px 24px;
    }

    .client-communication-image img {
        min-height: 250px;
    }

    .feature-section-card {
        margin-bottom: 25px;
    }

    .feature-section-wrapper {
        margin: 0 15px;
        border-radius: 16px;
    }

    .feature-section-text {
        padding: 30px 25px;
    }

    .feature-section-title {
        font-size: 22px;
        margin-bottom: 15px;
    }

    .feature-section-description {
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .feature-section-image img {
        min-height: 250px;
    }

        .more-than-legal-section {
        padding: 50px 0;
    }

    .more-than-legal-content {
        padding: 0 15px;
    }

    .more-than-legal-title {
        font-size: 26px;
        margin-bottom: 25px;
    }

    .more-than-legal-description {
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 30px;
    }

                .testimonials-grid {
        grid-template-columns: 1fr;
        gap: 15px;
        padding: 0 15px;
    }

    .testimonial-card {
        padding: 20px;
    }

    .testimonial-text {
        font-size: 13px;
        margin-bottom: 20px;
    }

    .author-avatar {
        width: 42px;
        height: 42px;
    }

    .author-initials {
        font-size: 14px;
    }

    .author-name {
        font-size: 14px;
    }

    .author-position {
        font-size: 12px;
    }
}
</style>
@endpush

@push('scripts-head')
<!-- Meta Description -->
<meta name="description" content="Patron Accounting — accounting & compliance for startups & SMEs across India. Zoho Books, ITR filing, GST, payroll & EOR, litigation with GSTAT Principal Bench representation. 4.9★ rated. Offices in Pune, Mumbai, Delhi & Gurgaon.">

<!-- Canonical URL (Change 12) -->
<link rel="canonical" href="/">

<!-- Open Graph Tags (Change 11) -->
<meta property="og:type" content="website">
<meta property="og:title" content="Patron Accounting | Accounting & Compliance for Startups & SMEs Across India">
<meta property="og:description" content="Zoho Books accounting, ITR filing, GST, payroll & EOR, startup registration to GST litigation — one team of CAs & CS experts serving businesses across India. 4.9★ Google rated.">
<meta property="og:url" content="/">
<meta property="og:image" content="/images/site-logo.svg">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">

<!-- Twitter Card Tags (Change 11) -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Patron Accounting | Accounting & Compliance for Startups & SMEs Across India">
<meta name="twitter:description" content="Zoho Books accounting, ITR filing, GST, payroll & EOR, startup registration to GST litigation — one team of CAs & CS experts serving businesses across India. 4.9★ Google rated.">
<meta name="twitter:image" content="/images/site-logo.svg">

<!-- FAQPage Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {"@type": "Question", "name": "What services does Patron Accounting offer?", "acceptedAnswer": {"@type": "Answer", "text": "Patron Accounting offers end-to-end financial services for startups and SMEs across India including Zoho Books accounting and bookkeeping, income tax return filing, GST registration and compliance, payroll management and EOR services, corporate compliance (ROC filings), startup incorporation (Pvt Ltd, LLP, OPC), trademark registration, CA-certified net worth certificates, and GST litigation including GSTAT Principal Bench representation in Delhi. The firm is led by CA Sundram Gupta with offices in Pune, Mumbai, Delhi and Gurgaon."}},
        {"@type": "Question", "name": "Does Patron Accounting work with Zoho Books?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Patron Accounting is a certified Zoho Books partner and works natively on the platform. We handle complete migration from Tally, QuickBooks, or Xero to Zoho Books, including chart of accounts setup, opening balance mapping, bank feed configuration, automated reconciliation rules, and ongoing monthly bookkeeping with GST-ready invoicing."}},
        {"@type": "Question", "name": "Do you handle GST litigation across India?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Patron Accounting handles GST litigation for businesses across India with direct representation at the GSTAT Principal Bench in Delhi for place-of-supply and inter-state disputes. The litigation team manages the full cycle from GST notice response and demand order defence to appellate tribunal representation, including income tax scrutiny notices under Section 143 and reassessment under Section 148."}},
        {"@type": "Question", "name": "What types of ITR filing does Patron handle?", "acceptedAnswer": {"@type": "Answer", "text": "Patron Accounting files all ITR types from ITR-1 through ITR-7, including returns for salaried professionals, business owners, freelancers with Section 44ADA benefits, NRIs with Indian income, and startup founders with ESOP taxation. CAs run old-vs-new regime comparisons and build advance tax schedules to avoid interest under Section 234B/C."}},
        {"@type": "Question", "name": "Can you help foreign companies hire in India?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Our Employer of Record (EOR) service lets foreign companies hire Indian employees without a local entity. We handle payroll, PF/ESI, TDS, and employment contracts."}},
        {"@type": "Question", "name": "Where are Patron Accounting's offices?", "acceptedAnswer": {"@type": "Answer", "text": "Patron Accounting has offices in Pune (HQ), Mumbai, Delhi, and Gurgaon, and serves clients across India through in-person and virtual engagement."}},
        {"@type": "Question", "name": "Do you provide net worth certificates for visa?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. CA-certified net worth certificates accepted by embassies worldwide, typically delivered within 48 hours."}},
        {"@type": "Question", "name": "Who founded Patron Accounting?", "acceptedAnswer": {"@type": "Answer", "text": "Patron Accounting was founded by CA Sundram Gupta. The firm serves startups and SMEs across India with a 4.9 star Google rating and offices in Pune, Mumbai, Delhi & Gurgaon."}},
        {"@type": "Question", "name": "How do I get started?", "acceptedAnswer": {"@type": "Answer", "text": "Fill out the application form or book a free call. After payment, our CAs & CS experts process your requirements with confirmation on email within 48 hours."}},
        {"@type": "Question", "name": "What makes Patron different from other CA firms?", "acceptedAnswer": {"@type": "Answer", "text": "Patron works natively on Zoho Books, offers EOR services, handles GSTAT litigation in Delhi, and provides full-stack finance under one roof with transparent stage-based pricing."}}
    ]
}
</script>

<!-- ProfessionalService Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Patron Accounting",
    "description": "CA firm for startups and SMEs offering Zoho Books accounting, ITR filing, GST services, payroll & EOR, corporate compliance, startup incorporation, trademark registration, net worth certificates, and GST litigation across India with GSTAT Principal Bench representation.",
    "url": "/",
    "founder": {"@type": "Person", "name": "CA Sundram Gupta"},
    "aggregateRating": {"@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "100", "bestRating": "5"},
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Accounting & Compliance Services",
        "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Zoho Books Accounting"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Income Tax & ITR Filing"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "GST Registration & Returns"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Payroll & EOR Services"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Corporate & Secretarial Compliance"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Startup Incorporation & ESOP Advisory"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Trademark Registration"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Net Worth Certificates"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "GST Litigation & GSTAT Appeals"}}
        ]
    },
    "areaServed": ["Pune", "Mumbai", "Delhi", "Gurgaon", "India"],
    "telephone": "+91 945 945 6700",
    "email": "sales@patronaccounting.com"
}
</script>

<!-- Organization Schema with sameAs (Change 13) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://www.patronaccounting.com/#organization",
    "name": "Patron Accounting",
    "legalName": "Patron Accounting LLP",
    "url": "https://www.patronaccounting.com/",
    "logo": "https://www.patronaccounting.com/images/site-logo.svg",
    "description": "CA firm for startups and SMEs offering Zoho Books accounting, ITR filing, GST services, payroll & EOR, corporate compliance, startup incorporation, and GST litigation across India.",
    "founder": {"@type": "Person", "name": "CA Sundram Gupta"},
    "foundingLocation": "Pune, Maharashtra, India",
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-945-945-6700",
        "contactType": "customer service",
        "email": "sales@patronaccounting.com",
        "availableLanguage": ["English", "Hindi", "Marathi"],
        "areaServed": "IN"
    },
    "address": [
        {
            "@type": "PostalAddress",
            "streetAddress": "1st Floor, Office No B4, RTC Silver, Wagholi",
            "addressLocality": "Pune",
            "addressRegion": "Maharashtra",
            "postalCode": "412207",
            "addressCountry": "IN"
        },
        {
            "@type": "PostalAddress",
            "streetAddress": "1st Floor, Rajshila Building, 104, Jagannath Shankar Seth Rd, Marine Lines",
            "addressLocality": "Mumbai",
            "addressRegion": "Maharashtra",
            "postalCode": "400002",
            "addressCountry": "IN"
        },
        {
            "@type": "PostalAddress",
            "streetAddress": "Shop No A91, Nawada, opposite Metro Pillar No 745",
            "addressLocality": "Delhi",
            "postalCode": "110059",
            "addressCountry": "IN"
        }
    ],
    "sameAs": [
        "https://www.instagram.com/patronaccounting/",
        "https://in.linkedin.com/company/patron-accounting-llp",
        "https://g.co/kgs/patronaccounting"
    ]
}
</script>

<!-- BreadcrumbList Schema (Change 17) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "/"
        }
    ]
}
</script>

<!-- Individual Review Schema — Top 5 (Change 14) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Patron Accounting",
    "url": "/",
    "review": [
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Nikhil Nimbhorkar"},
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
            "reviewBody": "Patron Accounting gives the best service related to all account handling of our firm. Anu takes utmost care of everything — files all returns timely, prepares financials on proper time, and is most kind and respectful."
        },
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Shahriar"},
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
            "reviewBody": "I recently got my business incorporated and I am extremely satisfied with their services. They made the entire process of incorporation smooth and hassle-free."
        },
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Sameer Mehta"},
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
            "reviewBody": "I have called Patron to file ITR for my 5 family members. It was a smooth process. They understand basics of ITR filing and provide necessary guidance to client. Didn't even visit their office."
        },
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Tarun Gulati"},
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
            "reviewBody": "I have applied for my trademark registration and I am very much satisfied and happy with the services provided by Patron Accounting. Very supportive staff."
        },
        {
            "@type": "Review",
            "author": {"@type": "Person", "name": "Ayushi Garg"},
            "reviewRating": {"@type": "Rating", "ratingValue": "5", "bestRating": "5"},
            "reviewBody": "I have been taking services of Patron Accounting from 5 years and found them highly professional and the best people for all taxation related work be it individual or company services."
        }
    ]
}
</script>

<!-- Speakable Schema (Change 19) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Patron Accounting | Accounting & Compliance for Startups & SMEs Across India",
    "url": "/",
    "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [".company-registration-section p", "#faq-section .accordion-body"]
    }
}
</script>

<!-- VideoObject Schema — Who We Are YouTube video -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "VideoObject",
    "name": "About Patron Accounting — Who We Are",
    "description": "Learn how Patron Accounting helps startups and SMEs with accounting, compliance, ITR filing, GST, payroll, and corporate legal services across India. Founded by CA Sundram Gupta with offices in Pune, Mumbai, and Delhi.",
    "thumbnailUrl": "/images/whoweare.jpg",
    "uploadDate": "2024-01-01T00:00:00+05:30",
    "contentUrl": "https://www.youtube.com/watch?v=oVkvHKafp70",
    "embedUrl": "https://www.youtube.com/embed/oVkvHKafp70",
    "publisher": {
        "@type": "Organization",
        "name": "Patron Accounting",
        "logo": {
            "@type": "ImageObject",
            "url": "/images/site-logo.svg"
        }
    }
}
</script>

<!-- WebSite Schema — Sitelinks search box eligibility -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Patron Accounting",
    "url": "/",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>

<!-- hreflang for Indian English -->
<link rel="alternate" hreflang="en-in" href="/">
<link rel="alternate" hreflang="en" href="/">

<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endpush

@section('content')
<section class="banner-spacer">
    <div class="container">
        <div class="d-flex justify-content-start align-items-center gap-4">
            <div class="brand-logo">
                <div class="box1">
                    <img src="{{ asset('images/mail-banner.svg') }}" alt="Mail Icon" class="logo-img">
                </div>
                <div class="box2">sales@patronaccounting.com</div>
            </div>
            <div class="brand-logo">
                <div class="box1">
                    <img src="{{ asset('images/call-banner.svg') }}" alt="Call Icon" class="logo-img">
                </div>
                <div class="box2">+91 945 945 6700</div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section -->
<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="hero-content">
                    <h1 class="hero-title">
                        Accounting & Compliance<br>
                        <span class="highlight">From Day One to Scale</span>
                    </h1>
                    <div class="subtitle">
                        <p class="hero-subtitle">
                            Zoho Books accounting, ITR filing, GST, payroll & EOR, startup registration to GST litigation — one team of CAs & CS experts serving businesses across India.
                        </p>
                    </div>
                    <div class="search">
                        <div class="hero-search-box">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" class="form-control" id="heroSearchInput"
                                placeholder="Type to start search" autocomplete="off">
                            <div class="hero-search-spinner" id="heroSearchSpinner" style="display: none;">
                                <div class="spinner-border spinner-border-sm text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <div class="hero-search-suggestions" id="heroSearchSuggestions"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <div class="hero-image-wrapper">
                        <img src="{{ asset('images/banner.jpg') }}" alt="Patron Accounting — CA firm serving startups and SMEs across India" class="hero-image">
                    </div>
                </div>
            </div>
        </div>

        <!-- Trusted By Section -->
        <div class="row">
            <div class="col-12">
                <div class="trusted-section">
                    <p class="trusted-text">4.9 ★ GOOGLE RATED · ZOHO BOOKS EXPERTS · OFFICES IN PUNE · MUMBAI · DELHI · GURGAON</p>

                    <div class="logo-carousel d-none">
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/Coda.svg') }}" alt="Coda - Patron Accounting client" loading="lazy"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/Inter.svg') }}" alt="Inter - Patron Accounting client" loading="lazy"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/atlassian.svg') }}"
                                    alt="Atlassian - Patron Accounting client" loading="lazy"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/ClickTravel.svg') }}"
                                    alt="ClickTravel - Patron Accounting client" loading="lazy"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/Notion.svg') }}"
                                    alt="Notion - Patron Accounting client" loading="lazy"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/Etoro.svg') }}" alt="eToro - Patron Accounting client" loading="lazy"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/H_Rblock.svg') }}"
                                    alt="H&R Block - Patron Accounting client" loading="lazy"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/Contentful.svg') }}"
                                    alt="Contentful - Patron Accounting client" loading="lazy"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted By Section -->
<section class="bg-light trusted-companies-section">
    <div class="container">
        <div class="trusted-companies-slider">
            <div class="slider-item">
                <img src="{{ asset('images/houte.png') }}" alt="Houte - Patron Accounting client" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Hyundai'" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/hyundai.png') }}" alt="Hyundai - Patron Accounting client" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Asian+Paints'" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/asianpant.png') }}" alt="Asian Paints - Patron Accounting client" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Infinova'" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/infinova.png') }}" alt="Infinova - Patron Accounting client" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Bridgestone'" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/digisecure.png') }}" alt="Digisecure - Patron Accounting client" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Intellias'" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/intellias.png') }}" alt="Demandify Media" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Demandify'" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/demandify.png') }}" alt="Demandify Media - Patron Accounting client" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Acquia'" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/acavua.png') }}" alt="Acquia - Patron Accounting client" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=SB+NRI'" loading="lazy">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/sbnri.png') }}" alt="SB NRI - Patron Accounting client" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=SB+NRI'" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Chartered Expertise Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-start mb-5" style="max-width: 900px; margin: 0 auto;">
            <h2 class="fw-bold mb-4" style="color: #14365F; font-size: 2.25rem; font-family: 'Barlow', sans-serif; text-align: center;">
                Chartered Expertise. Startup & SME-Focused Solutions.
            </h2>
            <p class="text-muted mb-3" style="font-size: 1rem; line-height: 1.8;">
                At Patron Accounting, we deliver more than compliance — we deliver clarity, control, and confidence.
            </p>
            <p class="text-muted mb-3" style="font-size: 1rem; line-height: 1.8;">
                From <a href="/zoho-books-accounting" style="color: #D4541C; font-weight: 600; text-decoration: underline;">Zoho Books accounting</a> and ITR filing to GST services, payroll & EOR, startup incorporation, corporate compliance, trademark registration, net worth certificates, and <a href="/gst-notice" style="color: #D4541C; font-weight: 600; text-decoration: underline;">GST litigation including GSTAT Principal Bench representation</a> — we cover the full spectrum under one roof.
            </p>
            <p class="mb-4" style="font-size: 1rem; line-height: 1.8; color: #6B7280;">
                Founded by CA Sundram Gupta, with offices in Pune, Mumbai, Delhi & Gurgaon, we serve startups and SMEs across India. Explore <a href="#" id="openHeaderMenu" style="color: #D4541C; font-weight: 600; text-decoration: underline;">our full service menu above</a> for 150+ solutions.
            </p>
        </div>
        
        <script>
        // Mobile-only: Open hamburger menu when "our header menu section" link is clicked
        document.addEventListener('DOMContentLoaded', function() {
            const menuLink = document.getElementById('openHeaderMenu');
            if (menuLink) {
                menuLink.addEventListener('click', function(e) {
                    // Only trigger on mobile (< 992px)
                    if (window.innerWidth < 992) {
                        e.preventDefault();
                        
                        // Find the navbar toggler button and collapse element
                        const navbarToggler = document.querySelector('.navbar-toggler');
                        const navbarCollapse = document.querySelector('#navbarNav');
                        
                        // Check if menu is already open
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            // Menu is already open, just scroll to top
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            return;
                        }
                        
                        // Open the menu by triggering the toggler
                        if (navbarToggler) {
                            navbarToggler.click();
                        }
                        
                        // Alternatively, manually show the collapse if click didn't work
                        setTimeout(function() {
                            if (navbarCollapse && !navbarCollapse.classList.contains('show')) {
                                navbarCollapse.classList.add('show');
                                if (navbarToggler) {
                                    navbarToggler.classList.remove('collapsed');
                                    navbarToggler.setAttribute('aria-expanded', 'true');
                                }
                            }
                        }, 50);
                        
                        // Scroll to header smoothly
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                        }, 200);
                    }
                    // On desktop, do nothing (default link behavior)
                });
            }
        });
        </script>

        <div class="d-flex justify-content-center gap-3 mb-5">
            <a href="/contact-page" class="btn btn-lg px-5 py-3"
                style="background: #F26522; color: white; border-radius: 50px; font-weight: 600; border: none; font-size: 1rem;">
                Get in touch
            </a>
            <a href="/contact-page" class="btn btn-outline-dark btn-lg px-5 py-3"
                style="border-radius: 50px; font-weight: 600; border: 2px solid #333; font-size: 1rem;">
                Contact us
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="{{ asset('images/chartered.png') }}" alt="Patron Accounting Team" class="img-fluid rounded-4 shadow-lg"
                    style="width: 100%; height: auto; object-fit: cover; border-radius: 24px !important;"
                    onerror="this.src='https://via.placeholder.com/1200x600/f0f0f0/666666?text=Office+Team'" loading="lazy">
            </div>
        </div>
    </div>
</section>


<!-- Our Services Section -->
<section class="our-services-section">
    <div class="container">
        <div class="services-header">
            <h2 class="services-title">Our Services</h2>

            <div class="services-tabs">
                <button class="service-tab active" data-tab="registration">Accounting, Tax & GST</button>
                <button class="service-tab" data-tab="accounting">Payroll, Startup & Registrations</button>
                <button class="service-tab" data-tab="regulatory">Compliance & Litigation</button>
            </div>
        </div>

        <div class="services-content">
            <!-- Accounting, Tax & GST Tab -->
            <div class="tab-content-services active" id="registration-tab">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service_box d-flex align-items-center gap-3">
                                <div class="service-icon-wrapper">
                                    <img src="{{ asset('images/corporate_fare.svg') }}" alt="Zoho Books Accounting Icon" class="service-logo-img" loading="lazy">
                                </div>
                                <div class="service_title">
                                    <h3 class="service-card-title">Zoho Books Accounting</h3>
                                </div>
                            </div>
                            <p class="service-card-description">
                                Migration from Tally, QuickBooks, or Xero. Chart of accounts setup, bank reconciliation, and ongoing monthly bookkeeping — all directly on your Zoho Books by qualified CAs.
                            </p>
                            <a href="/zoho-books-accounting" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service_box d-flex align-items-center gap-3">
                                <div class="service-icon-wrapper">
                                    <img src="{{ asset('images/enterprise.svg') }}" alt="ITR Filing Icon" class="service-logo-img" loading="lazy">
                                </div>
                                <div class="service_title">
                                    <h3 class="service-card-title">Income Tax & ITR Filing</h3>
                                </div>
                            </div>
                            <p class="service-card-description">
                                ITR filing for salaried individuals, business owners, freelancers, NRIs, and ESOP holders. Advance tax planning, capital gains, and old vs new regime optimization by CAs.
                            </p>
                            <a href="/income-tax-return" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service_box d-flex align-items-center gap-3">
                                <div class="service-icon-wrapper">
                                    <img src="{{ asset('images/security.svg') }}" alt="GST Services Icon" class="service-logo-img" loading="lazy">
                                </div>
                                <div class="service_title">
                                    <h3 class="service-card-title">GST Services</h3>
                                </div>
                            </div>
                            <p class="service-card-description">
                                End-to-end GST — registration, monthly/quarterly returns (GSTR-1, 3B, 9, 9C), GST audit, annual reconciliation, and e-invoicing setup. We track ITC mismatches proactively.
                            </p>
                            <a href="/gst-registration" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payroll, Startup & Registrations Tab -->
            <div class="tab-content-services" id="accounting-tab">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="service-card-title">Payroll & EOR Services</h3>
                            <p class="service-card-description">
                                Payroll processing, PF/ESI compliance, TDS on salary, and Employer of Record (EOR) for foreign companies hiring in India — full employment lifecycle management.
                            </p>
                            <a href="/payroll-processing-and-management-services" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-rocket-takeoff"></i>
                            </div>
                            <h3 class="service-card-title">Startup & Business Support</h3>
                            <p class="service-card-description">
                                Private limited, LLP, OPC incorporation, ESOP advisory, Startup India registration, and 26QB TDS on property. From Day 0 to Series A and beyond.
                            </p>
                            <a href="/startup-registration" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-file-earmark-check"></i>
                            </div>
                            <h3 class="service-card-title">Registrations & Licenses</h3>
                            <p class="service-card-description">
                                FSSAI registration & licenses, trademark registration, PAN & TAN, DSC, and 12A/80G for NGOs — handled end-to-end with zero rejections.
                            </p>
                            <a href="/private-limited-company-registration" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Compliance & Litigation Tab -->
            <div class="tab-content-services" id="regulatory-tab">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-building"></i>
                            </div>
                            <h3 class="service-card-title">Corporate & Secretarial</h3>
                            <p class="service-card-description">
                                CS retainership, ROC filings (AOC-4, MGT-7), board resolutions, DIR-3 KYC, share transfers, and statutory register maintenance.
                            </p>
                            <a href="/private-limited-company-compliance" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-shield-exclamation"></i>
                            </div>
                            <h3 class="service-card-title">Tax & GST Litigation</h3>
                            <p class="service-card-description">
                                Income tax notices (Section 143, 148), GST notices, demand orders, and GSTAT Principal Bench appeals in Delhi for inter-state and place-of-supply disputes — we represent clients from every state.
                            </p>
                            <a href="/gst-notice" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-award"></i>
                            </div>
                            <h3 class="service-card-title">Certifications & Advisory</h3>
                            <p class="service-card-description">
                                Net worth certificates for visa, CA-certified financial statements, project reports for bank loans, and business valuation — issued within 48 hours.
                            </p>
                            <a href="/net-worth-certificate" class="service-card-link">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Working Process Section -->
<section class="working-process-section">
    <div class="container">
        <h2 class="process-title">Our Working Process</h2>

        <div class="process-cards-wrapper">
            <!-- Step 1: Tell Us What You Need -->
            <div class="process-card">
                <div class="process-icon">
                    <img src="{{ asset('images/grid.svg') }}" alt="Tell us what you need" class="process-logo-img" loading="lazy">
                </div>
                <h3 class="process-card-title">Tell Us What You Need</h3>
            </div>

            <!-- Step 2: We Assign a Dedicated CA/CS -->
            <div class="process-card">
                <div class="process-icon">
                    <img src="{{ asset('images/dollar-sign.svg') }}" alt="Dedicated CA assigned" class="process-logo-img" loading="lazy">
                </div>
                <h3 class="process-card-title">We Assign a Dedicated CA/CS</h3>
            </div>

            <!-- Step 3: Your Team Handles Everything -->
            <div class="process-card">
                <div class="process-icon">
                    <img src="{{ asset('images/zap.svg') }}" alt="Team handles filings" class="process-logo-img" loading="lazy">
                </div>
                <h3 class="process-card-title">Your Team Handles Filings & Compliance</h3>
            </div>

            <!-- Step 4: Track Progress + Get Confirmation -->
            <div class="process-card">
                <div class="process-icon">
                    <img src="{{ asset('images/briefcase.svg') }}" alt="Track progress" class="process-logo-img" loading="lazy">
                </div>
                <h3 class="process-card-title">Track Progress & Get Confirmation</h3>
            </div>
        </div>

        <p class="process-description">
            Getting started with Patron Accounting takes under 5 minutes. Share your requirements, and we assign a dedicated CA or CS who already understands your business type. Your expert handles all documentation, filings, and follow-ups — while you track real-time progress. Confirmation lands in your inbox, not your to-do list.
        </p>
    </div>
</section>

<!-- CTA Section - Start your Compliance Journey -->
<section class="cta-compliance-section">
    <div class="container">
        <h2 class="cta-compliance-title">Start your Compliance Journey With Patron</h2>
        <a href="/contact-page" class="cta-get-started-btn">
            GET STARTED
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>

<!-- Comparison Section - Patron vs Others -->
<section class="comparison-section">
    <div class="container">
        <div class="comparison-header">
            <h2 class="comparison-main-title">Why Startups & SMEs Choose Patron Over Traditional CAs</h2>
            <p class="comparison-subtitle">
                Zoho Books expertise, proactive compliance, and full-stack finance — all under one roof.
            </p>
        </div>

        <div class="comparison-table-wrapper">
            <!-- Patron Accounting Column -->
            <div class="comparison-column patron">
                <div class="comparison-column-header" style="padding-bottom: 18px;">
                    <h3 class="comparison-column-title">Patron Accounting</h3>
                </div>
                <div class="box-row">
                    <div class="comparison-row">
                        <h4 class="comparison-feature-title">Zoho Books Native Expertise</h4>
                        <p class="comparison-feature-desc">
                            We work on your Zoho Books directly — no parallel Tally entries.
                        </p>
                    </div>

                    <div class="comparison-row">
                        <h4 class="comparison-feature-title">Proactive Compliance Calendar</h4>
                        <p class="comparison-feature-desc">
                            GST, TDS, ROC, ITR deadlines tracked. Alerts 15 days in advance.
                        </p>
                    </div>

                    <div class="comparison-row">
                        <h4 class="comparison-feature-title">Full-Stack Finance, One Team</h4>
                        <p class="comparison-feature-desc">
                            Tax + GST + payroll + ESOP + litigation — one point of contact.
                        </p>
                    </div>

                    <div class="comparison-row">
                        <h4 class="comparison-feature-title">Startup-Stage Pricing</h4>
                        <p class="comparison-feature-desc">
                            Packages that scale with your stage. No bloated retainers.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Others Column -->
            <div class="comparison-column others">
                <div class="comparison-column-header">
                    <h3 class="comparison-column-title">Others</h3>
                </div>
                <div class="box-row">
                    <div class="comparison-row">
                        <h4 class="comparison-feature-title">Tally-Only Approach</h4>
                        <p class="comparison-feature-desc">
                            You maintain two systems with inconsistent data.
                        </p>
                    </div>

                    <div class="comparison-row">
                        <h4 class="comparison-feature-title">Reactive Support Only</h4>
                        <p class="comparison-feature-desc">
                            No reminders. Penalties hit before you know a filing was due.
                        </p>
                    </div>

                    <div class="comparison-row">
                        <h4 class="comparison-feature-title">Fragmented Providers</h4>
                        <p class="comparison-feature-desc">
                            One CA for tax, another for GST, a CS for ROC — your problem.
                        </p>
                    </div>

                    <div class="comparison-row">
                        <h4 class="comparison-feature-title">One-Size-Fits-All Pricing</h4>
                        <p class="comparison-feature-desc">
                            Fixed retainers regardless of stage. Hidden charges surface later.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who We Are Section -->
<section class="who-we-are-section">
    <div class="container">
        <h2 class="who-we-are-title text-center mb-5">Who We Are — Patron Accounting</h2>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="video-wrapper position-relative" style="border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15); background: #14365F;">
                    <!-- YouTube Video: https://youtu.be/oVkvHKafp70 -->
                    <div id="youtubeThumb" style="position: relative; cursor: pointer; aspect-ratio: 16/9;" onclick="this.outerHTML='<iframe src=\'https://www.youtube.com/embed/oVkvHKafp70?autoplay=1&rel=0\' frameborder=\'0\' allow=\'autoplay; encrypted-media\' allowfullscreen style=\'width:100%;aspect-ratio:16/9;display:block;border-radius:24px;\'></iframe>'">
                        <img src="{{ asset('images/whoweare.jpg') }}" alt="Watch Patron Accounting introduction video" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                        <!-- Play Button Overlay -->
                        <div class="position-absolute top-50 start-50 translate-middle" style="display: flex; flex-direction: column; align-items: center; gap: 8px; z-index: 10;">
                            <img src="{{ asset('images/play_circle.png') }}" alt="Play video — Watch our story" style="width: 67px; height: 67px;" loading="lazy">
                            <span style="font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; color: white; text-shadow: 0 1px 4px rgba(0,0,0,0.5); letter-spacing: 0.5px;">Watch Our Story</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Patron Accounting Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="why-choose-header">
            <p class="why-choose-label">Why Choose</p>
            <h2 class="why-choose-title">Why Choose Patron Accounting</h2>
        </div>

        <p class="why-choose-description">
            Patron Accounting is a CA firm built for startups and SMEs who need more than a filing service — they need a financial partner. Founded by CA Sundram Gupta, our team of chartered accountants and company secretaries delivers <a href="/zoho-books-accounting" style="color: #F26522; text-decoration: none;">Zoho Books accounting</a>, ITR filing, GST services, payroll & EOR, corporate compliance, startup incorporation, trademark registration, net worth certificates, and <a href="/gst-notice" style="color: #F26522; text-decoration: none;">GST litigation across India, with representation at the GSTAT Principal Bench in Delhi</a> — serving businesses across the country with offices in Pune, Mumbai, Delhi & Gurgaon.
        </p>

        <div class="why-choose-features">
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="One Team Icon" class="feature-logo-img" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <h4>One Team for All Your Finance Needs</h4>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Transparent Pricing Icon" class="feature-logo-img" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <h4>100% Transparent Pricing — No Hidden Charges</h4>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Deadline Tracking Icon" class="feature-logo-img" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <h4>Proactive Deadline Tracking — We Flag Issues Before Penalties</h4>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Zoho Books Native Icon" class="feature-logo-img" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <h4>Zoho Books Native — We Work on Your Platform, Not Ours</h4>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="CA Reviewed Icon" class="feature-logo-img" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <h4>CA & CS Reviewed — Every Filing Checked by Professionals</h4>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Startup Pricing Icon" class="feature-logo-img" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <h4>Startup-Friendly Pricing — Packages That Scale With You</h4>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Zero Penalty Icon" class="feature-logo-img" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <h4>Zero-Penalty Track Record — On-Time Filings, Every Time</h4>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="4 Offices Icon" class="feature-logo-img" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <h4>Serving Businesses Across India — Offices in Pune, Mumbai, Delhi & Gurgaon</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Responsive Client Communication Section -->
<section class="client-communication-section">
    <div class="container">
        <div class="client-communication-card">
            <div class="client-communication-content">
                <div class="client-communication-text">
                    <h2 class="client-communication-title">Responsive Client Communication</h2>
                    <p class="client-communication-description">
                        Whether it's a GST notice or an ITR query at 10 PM — our team responds in hours, not days. Every client gets a dedicated CA who knows your Zoho Books setup, your filing history, and your business.
                    </p>
                    <a href="/contact-page" class="book-consultation-btn">
                        Book a free consultation
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="client-communication-image">
                    <img src="{{ asset('images/responsive client communication.png') }}" alt="Responsive Client Communication" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proactive Compliance Monitoring Section (Change 26: tinted bg) -->
<section class="client-communication-section" style="background-color: #F9FAFB;">
    <div class="container">
        <div class="client-communication-card">
            <div class="client-communication-content">

                <div class="client-communication-image">
                    <img src="{{ asset('images/protective compliance monitoring.png') }}" alt="Proactive Compliance Monitoring" loading="lazy">
                </div>


                <div class="client-communication-text">
                    <h2 class="client-communication-title">Proactive Compliance Monitoring</h2>
                    <p class="client-communication-description">
                        We track ROC filings, GST return dates, TDS deposits, ITR deadlines, and DIR-3 KYC windows 30 days in advance. You get alerts before penalties — not after.
                    </p>
                    <a href="/contact-page" class="book-consultation-btn">
                        Talk to a CA today
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- End-to-End Process Management Section -->
<section class="client-communication-section">
    <div class="container">
        <div class="client-communication-card">
            <div class="client-communication-content reverse">
                <div class="client-communication-text">
                    <h2 class="client-communication-title">End-to-End Process Management</h2>
                    <p class="client-communication-description">
                        From Zoho Books setup to GST returns, from payroll to ROC filings — one team handles everything. No outsourcing, no coordination overhead. You brief us once, we deliver.
                    </p>
                    <a href="/contact-page" class="book-consultation-btn">
                        See how it works
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="client-communication-image">
                    <img src="{{ asset('images/end to end process.png') }}" alt="End-to-End Process Management" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More Than Legal Section -->
<section class="more-than-legal-section">
    <div class="container">
        <div class="more-than-legal-content">
            <div class="more-than-legal-text">
                <h2 class="more-than-legal-title">More Than Compliance — We Build Financial Clarity</h2>
                <p class="more-than-legal-description">
                    At Patron Accounting, we don't just complete tasks — we anticipate what comes next.
                </p>
                <p class="more-than-legal-description" style="margin-top: 12px;">
                    <strong style="color: #D4541C; text-decoration: underline;">Zoho Books:</strong> We don't just set it up — we monitor it monthly and flag discrepancies before your auditor does.<br>
                    <strong style="color: #D4541C; text-decoration: underline;">ITR Filing:</strong> We don't just file your return — we plan your advance tax so there are no year-end surprises.<br>
                    <strong style="color: #D4541C; text-decoration: underline;">GST Litigation:</strong> We don't just respond to notices — we handle litigation for businesses across India, including GSTAT Principal Bench appeals in Delhi.
                </p>
                <p class="more-than-legal-description" style="margin-top: 12px;">
                    Founded by CA Sundram Gupta, every service comes with quarterly business health reviews, early renewal reminders, and practical advice when tax laws change. With offices in Pune, Mumbai, Delhi & Gurgaon — Patron Accounting is your built-in finance ecosystem.
                </p>
                <a href="/contact-page" class="book-consultation-btn">
                    Schedule a free call
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="more-than-legal-image">
                <img src="{{ asset('images/patron_3.png') }}" alt="More Than Legal - Business Backbone" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Fake Testimonials REMOVED — contained OtterMap content (Bill Jacobson, David Sobel) -->

<!-- FAQ Section -->
<section class="py-5 bg-white" id="faq-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #14365F; font-size: 2rem; font-family: 'Barlow', sans-serif;">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="faq-list">

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">What services does Patron Accounting offer?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Patron Accounting offers end-to-end financial services for startups and SMEs across India. Core services include <a href="/zoho-books-accounting" style="color: #D4541C; text-decoration: underline;">Zoho Books accounting and bookkeeping</a>, <a href="/income-tax-return" style="color: #D4541C; text-decoration: underline;">income tax return filing for individuals and businesses</a>, <a href="/gst-registration" style="color: #D4541C; text-decoration: underline;">GST registration, returns, and compliance</a>, <a href="/payroll-processing-and-management-services" style="color: #D4541C; text-decoration: underline;">payroll management and Employer of Record (EOR) services</a>, corporate compliance (ROC filings, annual returns), startup incorporation (Pvt Ltd, LLP, OPC), trademark registration, CA-certified net worth certificates, and GST litigation including GSTAT Principal Bench representation in Delhi. The firm is led by CA Sundram Gupta with offices in Pune, Mumbai, Delhi & Gurgaon.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">Does Patron Accounting work with Zoho Books?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Yes. Patron Accounting is a certified Zoho Books partner and works natively on the platform — unlike most CA firms that rely on Tally. We handle complete <a href="/migration-from-tally-to-zoho" style="color: #D4541C; text-decoration: underline;">migration from Tally, QuickBooks, or Xero to Zoho Books</a>, including chart of accounts setup, opening balance mapping, bank feed configuration, and automated reconciliation rules. Our team provides ongoing monthly bookkeeping, GST-ready invoicing, and real-time financial reporting directly on your Zoho Books account.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">Do you handle GST litigation across India?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Yes. Patron Accounting handles GST litigation for businesses across India, with direct representation at the GSTAT Principal Bench in Delhi for complex place-of-supply and inter-state disputes. Our litigation team manages the full cycle — from initial <a href="/gst-notice" style="color: #D4541C; text-decoration: underline;">GST notice response and demand order defence</a> to appellate tribunal representation. We also handle <a href="/income-tax-notice" style="color: #D4541C; text-decoration: underline;">income tax scrutiny notices under Section 143(1), 143(3), and reassessment notices under Section 148</a>. Clients get a dedicated case manager who tracks hearing dates, prepares submissions, and coordinates with authorities.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">What types of ITR filing does Patron handle?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Patron Accounting files all ITR types — ITR-1 through ITR-7. This includes returns for <a href="/itr-filing-for-salary" style="color: #D4541C; text-decoration: underline;">salaried professionals with multiple Form 16s and HRA claims</a>, <a href="/itr-for-business" style="color: #D4541C; text-decoration: underline;">business owners with presumptive or regular income</a>, <a href="/itr-filing-for-freelancers-professionals" style="color: #D4541C; text-decoration: underline;">freelancers and consultants with Section 44ADA benefits</a>, NRIs with Indian rental or capital gains income, and startup founders with ESOP taxation. Our CAs run old-vs-new regime comparisons and build advance tax schedules so you never face interest under Section 234B/C.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">Can you help foreign companies hire in India?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Yes. Our Employer of Record (EOR) service lets foreign companies hire Indian employees without a local entity. We handle <a href="/payroll-processing-and-management-services" style="color: #D4541C; text-decoration: underline;">payroll</a>, PF/ESI, TDS, and employment contracts — fully compliant with Indian labour laws.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">Where are Patron Accounting's offices?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Patron Accounting has offices in Pune (headquarters), Mumbai, Delhi, and Gurgaon, and serves clients across India through in-person and virtual engagement.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">Do you provide net worth certificates for visa?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Yes. We issue CA-certified <a href="/net-worth-certificate" style="color: #D4541C; text-decoration: underline;">net worth certificates</a> accepted by embassies worldwide for <a href="/net-worth-certificate-for-visa" style="color: #D4541C; text-decoration: underline;">visa applications</a>, loan processing, and financial verification — typically within 48 hours.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">Who founded Patron Accounting?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Patron Accounting was founded by CA Sundram Gupta. The firm serves startups and SMEs across India with a 4.9★ Google rating and offices in Pune, Mumbai, Delhi & Gurgaon.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">How do I get started?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Fill out the application form or book a free consultation call. After payment, our CAs & CS experts process your requirements and you receive confirmation on email — typically within 48 hours.
                        </div>
                    </div>

                    <div class="faq-item" style="background: white; border-radius: 12px; margin-bottom: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); overflow: hidden;">
                        <div class="faq-question" onclick="toggleFaq(this)" style="padding: 18px 20px; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <h3 style="font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: #14365F; margin: 0;">What makes Patron different from other CA firms?</h3>
                            <span style="font-size: 20px; color: #6B7280; transition: transform 0.3s;">+</span>
                        </div>
                        <div class="faq-answer" style="display: none; padding: 0 20px 18px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #6B7280; line-height: 1.8;">
                            Patron works natively on Zoho Books (not just Tally), offers EOR for foreign companies, handles GSTAT litigation in Delhi, and provides full-stack finance — accounting, tax, GST, payroll, ESOP, compliance, and litigation — under one roof with transparent, stage-based pricing.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFaq(el) {
    var answer = el.nextElementSibling;
    var icon = el.querySelector('span');
    var allItems = document.querySelectorAll('.faq-answer');
    var allIcons = document.querySelectorAll('.faq-question span');
    
    // Close all others
    allItems.forEach(function(item) {
        if (item !== answer) {
            item.style.display = 'none';
        }
    });
    allIcons.forEach(function(ic) {
        if (ic !== icon) {
            ic.textContent = '+';
        }
    });
    
    // Toggle current
    if (answer.style.display === 'none') {
        answer.style.display = 'block';
        icon.textContent = '−';
    } else {
        answer.style.display = 'none';
        icon.textContent = '+';
    }
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.service-tab');
    const tabContents = document.querySelectorAll('.tab-content-services');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));

            // Add active class to clicked tab
            this.classList.add('active');

            // Hide all tab contents
            tabContents.forEach(content => content.classList.remove('active'));

            // Show selected tab content
            const tabId = this.getAttribute('data-tab') + '-tab';
            document.getElementById(tabId).classList.add('active');
        });
    });

    // Hero Search Functionality
    const heroSearchInput = document.getElementById('heroSearchInput');
    const heroSearchSuggestions = document.getElementById('heroSearchSuggestions');
    const heroSearchSpinner = document.getElementById('heroSearchSpinner');
    let heroSearchTimeout;

    if (heroSearchInput) {
        // Search input event
        heroSearchInput.addEventListener('input', function() {
            const query = this.value.trim();

            // Clear previous timeout
            clearTimeout(heroSearchTimeout);

            // Empty query → show recent searches (like the header) instead of nothing
            if (query.length === 0) {
                heroSearchSpinner.style.display = 'none';
                showHeroHistory();
                return;
            }

            // Show spinner
            heroSearchSpinner.style.display = 'block';

            // Debounce search - wait 300ms after user stops typing
            heroSearchTimeout = setTimeout(function() {
                performHeroSearch(query);
            }, 300);
        });

        // Load the static search index once (all services + city pages + tools; no DB needed).
        var HERO_INDEX = null, heroLoadingP = null;
        function loadHeroIndex(){
            if (HERO_INDEX) return Promise.resolve(HERO_INDEX);
            if (heroLoadingP) return heroLoadingP;
            heroLoadingP = fetch('/search-index.json', { headers: { 'Accept': 'application/json' } })
                .then(function(r){ return r.json(); })
                .then(function(d){ HERO_INDEX = (d && d.length) ? d : []; return HERO_INDEX; })
                .catch(function(){ HERO_INDEX = []; return HERO_INDEX; });
            return heroLoadingP;
        }
        function heroFilter(q){
            q = q.toLowerCase(); var out = [];
            for (var i = 0; i < HERO_INDEX.length; i++){
                var t = HERO_INDEX[i].t.toLowerCase(), pos = t.indexOf(q);
                if (pos < 0) continue;
                var score = (pos === 0) ? 0 : (t.indexOf(' ' + q) >= 0 ? 1 : 2);
                out.push({ e: HERO_INDEX[i], s: score, p: pos });
            }
            out.sort(function(a,b){ return a.s - b.s || a.p - b.p || a.e.t.length - b.e.t.length; });
            return out.slice(0, 8).map(function(x){ return x.e; });
        }

        function performHeroSearch(query) {
            loadHeroIndex().then(function(){
                heroSearchSpinner.style.display = 'none';
                displayHeroResults(heroFilter(query));
            });
        }

        function displayHeroResults(items) {
            if (!items || items.length === 0) {
                heroSearchSuggestions.innerHTML = '<div class="hero-no-results">No results found</div>';
                heroSearchSuggestions.classList.add('show');
                return;
            }
            let html = '';
            items.forEach(function(p){
                var url = p.u || '#';
                if (url !== '#' && !/^https?:\/\//.test(url) && url.charAt(0) !== '/') url = '/' + url;
                html += '<a href="' + escapeHtml(url) + '" class="hero-suggestion-item"><div class="hero-suggestion-title">' + escapeHtml(p.t) + '</div></a>';
            });
            heroSearchSuggestions.innerHTML = html;
            heroSearchSuggestions.classList.add('show');
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = (text == null ? '' : text);
            return div.innerHTML;
        }

        // Recent-search history — SHARED with the header search (same localStorage key),
        // so a search made in either bar shows up as a recent search in both.
        var HERO_HKEY = 'paSearchHistory';
        function heroGetHist(){ try { return JSON.parse(localStorage.getItem(HERO_HKEY) || '[]'); } catch(e){ return []; } }
        function heroSaveHist(q){ q=(q||'').trim(); if(!q) return; var a=heroGetHist().filter(function(x){ return x.toLowerCase()!==q.toLowerCase(); }); a.unshift(q); try{ localStorage.setItem(HERO_HKEY, JSON.stringify(a.slice(0,6))); }catch(e){} }
        function showHeroHistory(){
            var a = heroGetHist();
            if(!a.length){ heroSearchSuggestions.classList.remove('show'); heroSearchSuggestions.innerHTML=''; return; }
            var html = '<div class="hero-rec-head">Recent searches<button type="button" class="hero-rec-clear" data-hero-clear>Clear</button></div>';
            a.forEach(function(q){ html += '<a href="#" class="hero-suggestion-item" data-hero-h="'+escapeHtml(q)+'"><div class="hero-suggestion-title">&#8634;&nbsp; '+escapeHtml(q)+'</div></a>'; });
            heroSearchSuggestions.innerHTML = html;
            heroSearchSuggestions.classList.add('show');
        }

        // History interactions + remember picked results
        heroSearchSuggestions.addEventListener('click', function(e){
            var clr = e.target.closest('[data-hero-clear]');
            if(clr){ e.preventDefault(); try{ localStorage.removeItem(HERO_HKEY); }catch(e2){} heroSearchSuggestions.innerHTML=''; heroSearchSuggestions.classList.remove('show'); heroSearchInput.focus(); return; }
            var hi = e.target.closest('[data-hero-h]');
            if(hi){ e.preventDefault(); var v=hi.getAttribute('data-hero-h'); heroSearchInput.value=v; performHeroSearch(v); heroSearchInput.focus(); return; }
            var pick = e.target.closest('.hero-suggestion-item');
            if(pick && !pick.hasAttribute('data-hero-h')){ var titleEl=pick.querySelector('.hero-suggestion-title'); heroSaveHist(titleEl ? titleEl.textContent : ''); }
        });

        // Close suggestions when clicking outside
        document.addEventListener('click', function(e) {
            if (!heroSearchInput.contains(e.target) && !heroSearchSuggestions.contains(e.target)) {
                heroSearchSuggestions.classList.remove('show');
            }
        });

        // On focus: show current results if typed, otherwise recent searches
        heroSearchInput.addEventListener('focus', function() {
            if (this.value.trim().length > 0) {
                if (heroSearchSuggestions.innerHTML !== '') heroSearchSuggestions.classList.add('show');
            } else {
                showHeroHistory();
            }
        });

        // Handle Enter key to navigate to first result
        heroSearchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                var q = heroSearchInput.value.trim();
                if (q) heroSaveHist(q);
                const firstResult = heroSearchSuggestions.querySelector('.hero-suggestion-item:not([data-hero-h])');
                if (firstResult) {
                    window.location.href = firstResult.href;
                }
            }
        });

        // Rotating placeholder: calm cross-fade between phrases every 3s (no per-character flicker).
        (function(){
            var phr = ['GST Registration','Income Tax Return','Private Limited Company','Trademark Registration','Payroll Services','TDS Return Filing','Accounting Services','Startup Registration'];
            var i=0, paused=false;
            heroSearchInput.classList.add('pa-ph-rot');
            heroSearchInput.addEventListener('focus', function(){ paused=true; heroSearchInput.placeholder='Type to start search'; });
            heroSearchInput.addEventListener('blur', function(){ if(!heroSearchInput.value) paused=false; });
            function rot(){
                if(!paused && !heroSearchInput.value){
                    heroSearchInput.classList.add('pa-ph-fade');
                    setTimeout(function(){ heroSearchInput.placeholder='Search '+phr[i]; i=(i+1)%phr.length; heroSearchInput.classList.remove('pa-ph-fade'); }, 260);
                }
                setTimeout(rot, 3000);
            }
            heroSearchInput.placeholder='Search '+phr[0]; i=1; setTimeout(rot, 3000);
        })();
    }
});
</script>

<!-- Client Testimonial Section — Infinite Scrolling Strip -->
<section class="review-strip-section">
    <div class="container">
        <div class="review-strip-header">
            <h2 class="review-strip-title">What Founders & Business Owners Say About Patron</h2>
            <div class="review-strip-rating">
                <p class="review-strip-rating-text">We have been rated <strong>4.9 <span class="star-icon">⭐</span></strong> on <strong>Google</strong></p>
            </div>
        </div>
    </div>

    <!-- Row 1 — scrolls left -->
    <div class="review-strip-track-wrapper">
        <div class="review-strip-track scroll-left">
            <!-- 15 reviews duplicated for seamless loop -->
            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned Anu to take care of our company's needs. She files all returns timely and is most kind and respectful towards us.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #667eea, #764ba2);">N</div>
                    <div>
                        <h4 class="review-card-name">Nikhil Nimbhorkar</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I've had an outstanding experience working with Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process smooth and stress-free. Highly recommended for anyone seeking reliable and knowledgeable financial guidance!</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #f093fb, #f5576c);">S</div>
                    <div>
                        <h4 class="review-card-name">Subhendu Mishra</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really impressed by their acumen. And it's not expensive at all. Good guidance while filling was given as well.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #4facfe, #00f2fe);">R</div>
                    <div>
                        <h4 class="review-card-name">Rajib Dutta</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I recently got my business incorporated and I am extremely satisfied with their services. They made the entire process of incorporation smooth and hassle-free. The team was very professional, knowledgeable, and always ready to assist me.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #43e97b, #38f9d7);">S</div>
                    <div>
                        <h4 class="review-card-name">Shahriar</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge, attention to detail, and a genuine willingness to help. It gave me immense confidence and peace of mind.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #fa709a, #fee140);">P</div>
                    <div>
                        <h4 class="review-card-name">Preeti Singh Rathor</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I have applied for my trademark registration and I am very much satisfied and happy with the services provided by Patron Accounting. Very supportive staff. Helped and clarify all the doubts. And liked the way of communication and politeness.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #a18cd1, #fbc2eb);">T</div>
                    <div>
                        <h4 class="review-card-name">Tarun Gulati</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics of ITR filing and I really admire their skills to look into data and provide necessary guidance to Client.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #ffecd2, #fcb69f);">S</div>
                    <div>
                        <h4 class="review-card-name">Sameer Mehta</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I have been taking services of Patron Accounting from 5 years and found them highly professional and the best people for all taxation related work be it individual or company services. Highly recommended.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #ff9a9e, #fecfef);">A</div>
                    <div>
                        <h4 class="review-card-name">Ayushi Garg</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <!-- Duplicate set for seamless infinite loop -->
            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned Anu to take care of our company's needs. She files all returns timely and is most kind and respectful towards us.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #667eea, #764ba2);">N</div>
                    <div>
                        <h4 class="review-card-name">Nikhil Nimbhorkar</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I've had an outstanding experience working with Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process smooth and stress-free. Highly recommended for anyone seeking reliable and knowledgeable financial guidance!</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #f093fb, #f5576c);">S</div>
                    <div>
                        <h4 class="review-card-name">Subhendu Mishra</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really impressed by their acumen. And it's not expensive at all. Good guidance while filling was given as well.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #4facfe, #00f2fe);">R</div>
                    <div>
                        <h4 class="review-card-name">Rajib Dutta</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I recently got my business incorporated and I am extremely satisfied with their services. They made the entire process of incorporation smooth and hassle-free. The team was very professional, knowledgeable, and always ready to assist me.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #43e97b, #38f9d7);">S</div>
                    <div>
                        <h4 class="review-card-name">Shahriar</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge, attention to detail, and a genuine willingness to help. It gave me immense confidence and peace of mind.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #fa709a, #fee140);">P</div>
                    <div>
                        <h4 class="review-card-name">Preeti Singh Rathor</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I have applied for my trademark registration and I am very much satisfied and happy with the services provided by Patron Accounting. Very supportive staff. Helped and clarify all the doubts. And liked the way of communication and politeness.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #a18cd1, #fbc2eb);">T</div>
                    <div>
                        <h4 class="review-card-name">Tarun Gulati</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics of ITR filing and I really admire their skills to look into data and provide necessary guidance to Client.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #ffecd2, #fcb69f);">S</div>
                    <div>
                        <h4 class="review-card-name">Sameer Mehta</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I have been taking services of Patron Accounting from 5 years and found them highly professional and the best people for all taxation related work be it individual or company services. Highly recommended.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #ff9a9e, #fecfef);">A</div>
                    <div>
                        <h4 class="review-card-name">Ayushi Garg</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2 — scrolls right -->
    <div class="review-strip-track-wrapper" style="margin-top: 20px;">
        <div class="review-strip-track scroll-right">
            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Really a fantastic experience with Patron accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth and quick ITR filling experience.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #0ba360, #3cba92);">N</div>
                    <div>
                        <h4 class="review-card-name">Nishikant Gurav</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially filing the ITR.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #e44d26, #f16529);">A</div>
                    <div>
                        <h4 class="review-card-name">Anita Gaur</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Recommend to give them a try.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #6a11cb, #2575fc);">P</div>
                    <div>
                        <h4 class="review-card-name">Pankaj Arvikar</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I got financial services from them for my private limited company. They are having good and qualified staff to provide services in a professional manner which is beneficial for me.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #c471f5, #fa71cd);">M</div>
                    <div>
                        <h4 class="review-card-name">Monika Sharma</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Very professional team. I have been using this accounting firm services for IT filing from last 3 years. Its super convenient.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #f5af19, #f12711);">Y</div>
                    <div>
                        <h4 class="review-card-name">Yuvraj</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card review-card-video">
                <div class="review-video-thumbnail">
                    <img src="{{ asset('storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg') }}" alt="Sunny Ashpal - Demandify Media video testimonial" class="review-thumb-img" loading="lazy">
                    <div class="review-play-overlay">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="18" fill="rgba(242,101,34,0.9)"/><polygon points="14,11 27,18 14,25" fill="white"/></svg>
                    </div>
                </div>
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Sunny Ashpal, Director at Demandify Media, shares his experience with Patron Accounting's end-to-end compliance and accounting services for his company.</p>
                <div class="review-card-author">
                    <img src="{{ asset('storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg') }}" alt="Sunny Ashpal" class="review-card-avatar-img" loading="lazy">
                    <div>
                        <h4 class="review-card-name">Sunny Ashpal</h4>
                        <p class="review-card-role">Director — Demandify Media</p>
                    </div>
                </div>
            </div>

            <div class="review-card review-card-video">
                <div class="review-video-thumbnail">
                    <img src="{{ asset('storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg') }}" alt="Anjanay Srivastava - Hunarsource Consulting video testimonial" class="review-thumb-img" loading="lazy">
                    <div class="review-play-overlay">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="18" fill="rgba(242,101,34,0.9)"/><polygon points="14,11 27,18 14,25" fill="white"/></svg>
                    </div>
                </div>
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Anjanay Srivastava, Founder of Hunarsource Consulting, talks about how Patron Accounting helped streamline his company's financial operations from day one.</p>
                <div class="review-card-author">
                    <img src="{{ asset('storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg') }}" alt="Anjanay Srivastava" class="review-card-avatar-img" loading="lazy">
                    <div>
                        <h4 class="review-card-name">Anjanay Srivastava</h4>
                        <p class="review-card-role">Founder — Hunarsource Consulting</p>
                    </div>
                </div>
            </div>

            <!-- Duplicate set for seamless infinite loop -->
            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Really a fantastic experience with Patron accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth and quick ITR filling experience.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #0ba360, #3cba92);">N</div>
                    <div>
                        <h4 class="review-card-name">Nishikant Gurav</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially filing the ITR.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #e44d26, #f16529);">A</div>
                    <div>
                        <h4 class="review-card-name">Anita Gaur</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Recommend to give them a try.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #6a11cb, #2575fc);">P</div>
                    <div>
                        <h4 class="review-card-name">Pankaj Arvikar</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">I got financial services from them for my private limited company. They are having good and qualified staff to provide services in a professional manner which is beneficial for me.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #c471f5, #fa71cd);">M</div>
                    <div>
                        <h4 class="review-card-name">Monika Sharma</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card">
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Very professional team. I have been using this accounting firm services for IT filing from last 3 years. Its super convenient.</p>
                <div class="review-card-author">
                    <div class="review-card-avatar" style="background: linear-gradient(135deg, #f5af19, #f12711);">Y</div>
                    <div>
                        <h4 class="review-card-name">Yuvraj</h4>
                        <p class="review-card-source"><img src="https://www.google.com/favicon.ico" alt="Google" class="review-source-icon" loading="lazy"> Google Review</p>
                    </div>
                </div>
            </div>

            <div class="review-card review-card-video">
                <div class="review-video-thumbnail">
                    <img src="{{ asset('storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg') }}" alt="Sunny Ashpal - Demandify Media video testimonial" class="review-thumb-img" loading="lazy">
                    <div class="review-play-overlay">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="18" fill="rgba(242,101,34,0.9)"/><polygon points="14,11 27,18 14,25" fill="white"/></svg>
                    </div>
                </div>
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Sunny Ashpal, Director at Demandify Media, shares his experience with Patron Accounting's end-to-end compliance and accounting services for his company.</p>
                <div class="review-card-author">
                    <img src="{{ asset('storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg') }}" alt="Sunny Ashpal" class="review-card-avatar-img" loading="lazy">
                    <div>
                        <h4 class="review-card-name">Sunny Ashpal</h4>
                        <p class="review-card-role">Director — Demandify Media</p>
                    </div>
                </div>
            </div>

            <div class="review-card review-card-video">
                <div class="review-video-thumbnail">
                    <img src="{{ asset('storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg') }}" alt="Anjanay Srivastava - Hunarsource Consulting video testimonial" class="review-thumb-img" loading="lazy">
                    <div class="review-play-overlay">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="18" fill="rgba(242,101,34,0.9)"/><polygon points="14,11 27,18 14,25" fill="white"/></svg>
                    </div>
                </div>
                <div class="review-card-stars">⭐⭐⭐⭐⭐</div>
                <p class="review-card-text">Anjanay Srivastava, Founder of Hunarsource Consulting, talks about how Patron Accounting helped streamline his company's financial operations from day one.</p>
                <div class="review-card-author">
                    <img src="{{ asset('storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg') }}" alt="Anjanay Srivastava" class="review-card-avatar-img" loading="lazy">
                    <div>
                        <h4 class="review-card-name">Anjanay Srivastava</h4>
                        <p class="review-card-role">Founder — Hunarsource Consulting</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Review Strip Section */
.review-strip-section {
    background-color: #EEEEEE;
    padding: 60px 0;
    overflow: hidden;
}

.review-strip-header {
    margin-bottom: 40px;
}

.review-strip-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 32px;
    color: #000000;
    margin-bottom: 15px;
}

.review-strip-rating-text {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    color: #333333;
    margin: 0;
}

.review-strip-rating-text strong {
    font-weight: 700;
    color: #000000;
}

/* Track wrapper hides overflow */
.review-strip-track-wrapper {
    overflow: hidden;
    width: 100%;
    -webkit-mask-image: linear-gradient(to right, transparent 0%, black 4%, black 96%, transparent 100%);
    mask-image: linear-gradient(to right, transparent 0%, black 4%, black 96%, transparent 100%);
}

/* The track holds 2x cards and scrolls */
.review-strip-track {
    display: flex;
    gap: 20px;
    width: max-content;
}

.review-strip-track.scroll-left {
    animation: scrollLeft 60s linear infinite;
}

.review-strip-track.scroll-right {
    animation: scrollRight 55s linear infinite;
}

/* Pause on hover */
.review-strip-track:hover {
    animation-play-state: paused;
}

@keyframes scrollLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

@keyframes scrollRight {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
}

/* Card styles */
.review-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 24px;
    min-width: 340px;
    max-width: 340px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    display: flex;
    flex-direction: column;
    gap: 14px;
    flex-shrink: 0;
    transition: box-shadow 0.3s ease;
}

.review-card:hover {
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
}

.review-card-video {
    border-left: 3px solid #F26522;
}

/* Video thumbnail with play overlay (Change 4) */
.review-video-thumbnail {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 16/10;
    background: #f3f4f6;
}

.review-thumb-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.review-play-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;
    transition: transform 0.3s ease, opacity 0.3s ease;
    opacity: 0.9;
}

.review-video-thumbnail:hover .review-play-overlay {
    transform: translate(-50%, -50%) scale(1.15);
    opacity: 1;
}

.review-card-avatar-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0;
}

.review-card-badge {
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 600;
    color: #F26522;
    background: #FFF3ED;
    padding: 4px 10px;
    border-radius: 16px;
    width: fit-content;
}

.review-card-stars {
    font-size: 14px;
    letter-spacing: 2px;
}

.review-card-text {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    line-height: 1.65;
    color: #4B5563;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    flex-grow: 1;
}

.review-card-author {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: auto;
    padding-top: 10px;
    border-top: 1px solid #F3F4F6;
}

.review-card-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Barlow', sans-serif;
    font-size: 17px;
    font-weight: 700;
    color: white;
    flex-shrink: 0;
}

.review-card-name {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 14px;
    color: #1F2937;
    margin: 0 0 2px 0;
}

.review-card-source,
.review-card-role {
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    color: #9CA3AF;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 4px;
}

.review-source-icon {
    width: 14px;
    height: 14px;
}

/* Responsive */
@media (max-width: 768px) {
    .review-strip-section {
        padding: 40px 0;
    }
    .review-strip-title {
        font-size: 26px;
    }
    .review-card {
        min-width: 280px;
        max-width: 280px;
        padding: 18px;
    }
    .review-strip-track.scroll-left {
        animation-duration: 45s;
    }
    .review-strip-track.scroll-right {
        animation-duration: 40s;
    }
}

@media (max-width: 576px) {
    .review-strip-title {
        font-size: 22px;
    }
    .review-strip-header {
        margin-bottom: 25px;
    }
    .review-card {
        min-width: 260px;
        max-width: 260px;
        padding: 16px;
    }
    .review-card-text {
        font-size: 13px;
        -webkit-line-clamp: 3;
    }
}
</style>

<!-- Slick Slider JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize Trusted Companies Slider
    if ($('.trusted-companies-slider').length) {
        $('.trusted-companies-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 0,        // important
            speed: 3000,             // higher = slower smooth flow
            cssEase: 'linear', 
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
});
</script>

@endsection