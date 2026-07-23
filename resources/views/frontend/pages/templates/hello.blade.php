@extends('layouts.app')

@section('title', $page->title)

@push('styles')
<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap');

/* Hero Banner Styles */
.hero-banner {
    background-color: #14365F;
    position: relative;
    overflow: hidden;
    padding: 60px 0 80px;
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
    width: 677px;
}

.hero-search-box {
    position: relative;
    max-width: 677px;
    margin-bottom: 40px;
    width: 677px;
}

.hero-search-box input {
    width: 100%;
    padding: 14px 50px;
    border: none;
    border-radius: 30px;
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    background: white;
}

.hero-search-box input::placeholder {
    color: #999;
}

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

.hero-image-wrapper {
    position: relative;
}

.hero-image {
    width: 100%;
    height: auto;
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
    border-radius: 10px;
    padding: 30px;
    height: 100%;
    transition: all 0.3s ease;
}

.service-card:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transform: translateY(-5px);
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
    color: #15365F;
    margin: 0;
}

.process-description {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    line-height: 1.7;
    color: white;
    text-align: start;
}

/* CTA Section - Start your Compliance Journey */
.cta-compliance-section {
    background: linear-gradient(135deg, #0EA5E9 0%, #8B5CF6 50%, #EC4899 100%);
    padding: 80px 0;
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
        radial-gradient(circle at 20% 50%, rgba(59, 130, 246, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(168, 85, 247, 0.3) 0%, transparent 50%);
    pointer-events: none;
}

.cta-compliance-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 48px;
    line-height: 1.2;
    color: white;
    max-width: 500px;
    margin: 0 auto;
    padding-bottom: 40px;
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
    font-size: 18px;
    padding: 16px 40px;
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

/* Comparison Section - Patron vs Others */
.comparison-section {
    background-color: #F9FAFB;
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
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.comparison-column {
    flex: 1;
    background: white;
}

.comparison-column.patron {
    background: #385C95;
    color: white;
    padding-bottom: 30px;
}

.comparison-column.others {
    background: white;
    border: 1px solid #CDCDCD
}

.comparison-column-header {
    padding: 30px 20px;
    text-align: center;
}


.comparison-column-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 28px;
    margin: 0;
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

/* Why Choose Patron Accounting Section */
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
    font-style: Bold;
    font-size: 28px;
    leading-trim: NONE;
    line-height: 100%;
    letter-spacing: 0%;
    vertical-align: middle;
    color: #15365F;

}

.why-choose-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 54px;
    color: #15365F;
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
    padding: 50px;
    border: 1px solid #E5E7EB;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px 60px;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
}

.feature-icon {
    flex-shrink: 0;
    width: 48px;
    height: 48px;
    /* background: #EFF6FF; */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    /* border: 2px solid #14365F; */
}

.feature-icon i {
    font-size: 20px;
    color: #14365F;
}

.feature-content h4 {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 16px;
    color: #F26522;
    margin: 0;
    line-height: 1.5;
}

.feature-content p {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: #6B7280;
    margin: 0;
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
    border-radius: 20px;
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
    border-radius: 20px;
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
.real-stories-section {
    background-color: #F3F1EF;
    padding: 40px 0;
    margin: 80px 0;
}

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

.real-stories-header {
    margin-bottom: 50px;
}

.real-stories-title {
    font-family: 'Barlow', sans-serif;
    font-weight: 700;
    font-size: 40px;
    color: #000000;
    margin-bottom: 15px;
}

.real-stories-subtitle {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    color: #6B7280;
    line-height: 1.6;
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
        padding: 60px 0;
    }

    .cta-compliance-title {
        font-size: 36px;
        margin-bottom: 30px;
        padding: 0 20px;
    }

    .cta-get-started-btn {
        font-size: 16px;
        padding: 14px 32px;
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
    }

    .comparison-column-title {
        font-size: 24px;
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

    .real-stories-section {
        padding: 60px 0;
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

    .real-stories-header {
        padding: 0 20px;
        margin-bottom: 40px;
    }

    .real-stories-title {
        font-size: 32px;
    }

    .real-stories-subtitle {
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
        padding: 50px 0;
    }

    .cta-compliance-title {
        font-size: 28px;
        margin-bottom: 25px;
        padding: 0 15px;
    }

    .cta-get-started-btn {
        font-size: 15px;
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
    }

    .comparison-column-header {
        padding: 20px 15px;
    }

    .comparison-column-title {
        font-size: 20px;
    }

    .comparison-row {
        padding: 20px 15px;
    }

    .comparison-feature-title {
        font-size: 14px;
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

    .real-stories-section {
        padding: 50px 0;
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

    .real-stories-header {
        padding: 0 15px;
        margin-bottom: 30px;
    }

    .real-stories-title {
        font-size: 26px;
        margin-bottom: 12px;
    }

    .real-stories-subtitle {
        font-size: 14px;
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
                        Business Made Simple.<br>
                        Compliance Made <span class="highlight">Smarter.</span>
                    </h1>
                    <div class="subtitle">
                        <p class="hero-subtitle">
                            Whether you're a first-time founder or an expanding company, we handle everything legal so
                            you
                            can focus on scaling.
                        </p>
                    </div>
                    <div class="search">
                        <div class="hero-search-box">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" class="form-control" placeholder="Type to start search">
                            <i class="bi bi-mic-fill voice-icon"></i>
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
                        <!-- Office Workspace Collage -->
                        <div class="office-collage">
                            <img src="{{ asset('images/banner.png') }}" alt="Modern Office Workspace"
                                class="hero-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trusted By Section -->
        <div class="row">
            <div class="col-12">
                <div class="trusted-section">
                    <p class="trusted-text">TRUSTED BY +25,000 BUSINESSES</p>

                    <div class="logo-carousel">
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/coda.svg') }}" alt="Brand Logo"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/inter.svg') }}" alt="Brand Logo"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/atlassian.svg') }}"
                                    alt="Brand Logo"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/ClickTravel.svg') }}"
                                    alt="Brand Logo"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/Notion.svg') }}"
                                    alt="Brand Logo"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/Etoro.svg') }}" alt="Brand Logo"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/H_Rblock.svg') }}"
                                    alt="Brand Logo"></span>
                        </div>
                        <div class="brand-logo">
                            <span class="brand-text"><img src="{{ asset('images/Contentful.svg') }}"
                                    alt="Brand Logo"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>

<!-- Private Limited Company Registration Section -->
<section class="company-registration-section">
    <div class="container">
        <div class="company-registration-content">
            <h2 class="company-registration-title">Private Limited Company registration in India - Starting @ ₹999</h2>
        </div>
    </div>
</section>

<!-- Our Services Section -->
<section class="our-services-section">
    <div class="container">
        <div class="services-header">
            <h2 class="services-title">Our Services</h2>

            <div class="services-tabs">
                <button class="service-tab active" data-tab="registration">Registration</button>
                <button class="service-tab" data-tab="accounting">Accounting & Payroll</button>
                <button class="service-tab" data-tab="regulatory">Regulatory compliance</button>
            </div>
        </div>

        <div class="services-content">
            <!-- Registration Tab Content -->
            <div class="tab-content-services active" id="registration-tab">
                <div class="row g-4">
                    <!-- Registrations Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service_box d-flex align-items-center gap-3">
                                <div class="service-icon-wrapper">
                                    <img src="{{ asset('images/corporate_fare.svg') }}" alt="Registration Icon"
                                        class="service-logo-img">
                                </div>
                                <div class="service_title">
                                    <h3 class="service-card-title">Registrations</h3>
                                </div>
                            </div>
                            <p class="service-card-description">
                                Ensure your business stays legally sound with our registration services. We manage
                                complex regulatory requirements with precision, handling filings, renewals, and
                                documentation with zero hassle. Our experts ensure you're always up to date with the
                                latest statutory norms, maintaining uninterrupted compliance and operational
                                integrity.
                            </p>
                        </div>
                    </div>

                    <!-- Start a Business Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service_box d-flex align-items-center gap-3">
                                <div class="service-icon-wrapper">
                                    <img src="{{ asset('images/enterprise.svg') }}" alt="Start a Business Icon"
                                        class="service-logo-img">
                                </div>
                                <div class="service_title">
                                    <h3 class="service-card-title">Start a Business</h3>
                                </div>
                            </div>
                            <p class="service-card-description">
                                Turn your business idea into reality with our Start a Business service. From
                                choosing the right legal structure to completing legal formalities, we provide
                                expert guidance and seamless execution at every step. Our end-to-end support ensures
                                your business is built on a compliant, secure foundation ready to operate from day
                                one.
                            </p>
                        </div>
                    </div>

                    <!-- IPR Card -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service_box d-flex align-items-center gap-3">
                                <div class="service-icon-wrapper">
                                    <img src="{{ asset('images/security.svg') }}" alt="IPR Icon"
                                        class="service-logo-img">
                                </div>
                                <div class="service_title">
                                    <h3 class="service-card-title">IPR</h3>
                                </div>
                            </div>
                            <p class="service-card-description">
                                Safeguard your intellectual property with our IPR services. We handle the filing,
                                registration, and compliance process with precision, ensuring every aspect of your
                                rights remains legally protected. Our expert support makes the journey seamless,
                                empowering your business to maintain a strong, enforceable position in today's
                                competitive market.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accounting & Payroll Tab Content -->
            <div class="tab-content-services" id="accounting-tab">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-calculator"></i>
                            </div>
                            <h3 class="service-card-title">Accounting Services</h3>
                            <p class="service-card-description">
                                Professional accounting services to keep your financial records accurate and
                                up-to-date. We handle bookkeeping, financial statements, and tax preparation with
                                expertise.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="service-card-title">Payroll Management</h3>
                            <p class="service-card-description">
                                Comprehensive payroll solutions ensuring timely and accurate salary processing, tax
                                compliance, and employee benefits management.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h3 class="service-card-title">Financial Planning</h3>
                            <p class="service-card-description">
                                Strategic financial planning and analysis to help your business grow sustainably and
                                achieve long-term financial goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regulatory Compliance Tab Content -->
            <div class="tab-content-services" id="regulatory-tab">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <h3 class="service-card-title">Compliance Management</h3>
                            <p class="service-card-description">
                                Stay compliant with all regulatory requirements. We manage annual filings, statutory
                                audits, and regulatory documentation.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-receipt"></i>
                            </div>
                            <h3 class="service-card-title">Tax Compliance</h3>
                            <p class="service-card-description">
                                Complete tax compliance services including GST, income tax, and other statutory tax
                                obligations with expert guidance.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <h3 class="service-card-title">Audit Support</h3>
                            <p class="service-card-description">
                                Professional audit support services to ensure your business meets all compliance
                                standards and regulatory requirements.
                            </p>
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
            <!-- Step 1: Fill up the Application form -->
            <div class="process-card">
                <div class="process-icon">
                    <img src="{{ asset('images/grid.svg') }}" alt="Application Form Icon" class="process-logo-img">
                </div>
                <h3 class="process-card-title">Fill up the Application form</h3>
            </div>

            <!-- Step 2: Make online payment (Active/Highlighted) -->
            <div class="process-card">
                <div class="process-icon">
                    <img src="{{ asset('images/dollar-sign.svg') }}" alt="Online Payment Icon" class="process-logo-img">
                </div>
                <h3 class="process-card-title">Make online payment</h3>
            </div>

            <!-- Step 3: Executive will process Application -->
            <div class="process-card">
                <div class="process-icon">
                    <img src="{{ asset('images/zap.svg') }}" alt="Application Processing Icon" class="process-logo-img">
                </div>
                <h3 class="process-card-title">Executive will process Application</h3>
            </div>

            <!-- Step 4: Get Confirmation on Mail -->
            <div class="process-card">
                <div class="process-icon">
                    <img src="{{ asset('images/briefcase.svg') }}" alt="Confirmation Icon" class="process-logo-img">
                </div>
                <h3 class="process-card-title">Get Confirmation on Mail</h3>
            </div>
        </div>

        <p class="process-description">
            Getting started with Patron Accounting is quick and hassle-free. Just fill out a simple application form,
            make your payment securely online, and our expert team takes over from there. We handle the documentation,
            processing, and filings while keeping you updated throughout. Once everything is approved, you receive
            instant confirmation.
        </p>
    </div>
</section>

<!-- CTA Section - Start your Compliance Journey -->
<section class="cta-compliance-section">
    <div class="container">
        <h2 class="cta-compliance-title">Start your Compliance Journey With Patron</h2>
        <a href="#" class="cta-get-started-btn">
            GET STARTED
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>

<!-- Comparison Section - Patron vs Others -->
<section class="comparison-section">
    <div class="container">
        <div class="comparison-header">
            <h2 class="comparison-main-title">How Patron Accounting Out Performs Traditional Service Providers</h2>
            <p class="comparison-subtitle">
                Discover the key differences that make Registration Park the smarter, faster, and more reliable choice
                for modern entrepreneurs and growing businesses.
            </p>
        </div>

        <div class="comparison-table-wrapper">
            <!-- Patron Accounting Column -->
            <div class="comparison-column patron">
                <div class="comparison-column-header">
                    <h3 class="comparison-column-title">Patron Accounting</h3>
                </div>

                <div class="comparison-row">
                    <h4 class="comparison-feature-title">Proactive Compliance Alerts</h4>
                    <p class="comparison-feature-desc">
                        We track deadlines and send timely reminders so you're never late.
                    </p>
                </div>

                <div class="comparison-row">
                    <h4 class="comparison-feature-title">Transparent Approval Tracking</h4>
                    <p class="comparison-feature-desc">
                        Real-time status updates for every application submitted.
                    </p>
                </div>

                <div class="comparison-row">
                    <h4 class="comparison-feature-title">Expert Review Before Submission</h4>
                    <p class="comparison-feature-desc">
                        Every document is reviewed by professionals to minimize rejections.
                    </p>
                </div>

                <div class="comparison-row">
                    <h4 class="comparison-feature-title">Dedicated Post-Service Support</h4>
                    <p class="comparison-feature-desc">
                        We assist with renewals, amendments, and future compliance needs.
                    </p>
                </div>
            </div>

            <!-- Others Column -->
            <div class="comparison-column others">
                <div class="comparison-column-header">
                    <h3 class="comparison-column-title">Others</h3>
                </div>

                <div class="comparison-row">
                    <h4 class="comparison-feature-title">Reactive Support Only</h4>
                    <p class="comparison-feature-desc">
                        You chase deadlines with no automated reminders.
                    </p>
                </div>

                <div class="comparison-row">
                    <h4 class="comparison-feature-title">Lack of Visibility</h4>
                    <p class="comparison-feature-desc">
                        You have to follow up constantly for status updates.
                    </p>
                </div>

                <div class="comparison-row">
                    <h4 class="comparison-feature-title">Automated Submissions</h4>
                    <p class="comparison-feature-desc">
                        No human review—higher chances of errors or rejection.
                    </p>
                </div>

                <div class="comparison-row">
                    <h4 class="comparison-feature-title">One-Time Interaction</h4>
                    <p class="comparison-feature-desc">
                        Support ends once the service is delivered.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who We Are Section -->
<section class="who-we-are-section">
    <div class="container">
        <h2 class="who-we-are-title">Who we are</h2>

        <div class="who-we-are-content">
            <div class="who-we-are-text-content">
                <h3 class="who-we-are-subtitle">A business consulting company that constitutes faith.</h3>

                <p class="who-we-are-description">
                    Patron Accounting is a tech-enabled legal and compliance partner built to simplify every stage of
                    your business journey. Backed by a network of chartered accountants, company secretaries, and legal
                    experts, we provide end-to-end services from company formation and registrations to filings,
                    licenses, and ongoing compliance. We combine automated workflows for speed and accuracy with
                    personalized support so you always have a real expert guiding you. Transparent pricing, proactive
                    monitoring, and a secure digital document vault mean fewer surprises and uninterrupted operations.
                </p>

                <a href="#" class="know-more-link">
                    Know more
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="who-we-are-image-wrapper">
                <img src="{{ asset('images/who-we-are.jpg') }}" alt="Professional consulting at Patron Accounting"
                    class="who-we-are-image"
                    onerror="this.src='https://images.unsplash.com/photo-1556761175-b413da4baf72?w=600'">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Patron Accounting Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="why-choose-header">
            <p class="why-choose-label">Why Choose</p>
            <h2 class="why-choose-title">Patron Accounting</h2>
        </div>

        <p class="why-choose-description">
            Registration Park is a tech-enabled legal and compliance partner built to simplify every stage of your
            business journey. Backed by a network of chartered accountants, company secretaries, and legal experts, we
            provide end-to-end services from company formation and registrations to filings, licenses, and ongoing
            compliance. We combine automated workflows for speed and accuracy with personalized support so you always
            have a real expert guiding you. Transparent pricing, proactive monitoring, and a secure digital document
            vault mean fewer surprises and uninterrupted operations.
        </p>

        <div class="why-choose-features">
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="One-Stop Solution Icon"
                            class="feature-logo-img">
                    </div>
                    <div class="feature-content">
                        <h4>One-Stop solution for<br>all your business needs</h4>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Private Limited Company Registration Icon"
                            class="feature-logo-img">
                    </div>
                    <div class="feature-content">
                        <h4>Private Limited Company<br>Registration</h4>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Timer Icon" class="feature-logo-img">
                    </div>
                    <div class="feature-content">
                        <h4>Affordable Pricing</h4>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Timer Icon" class="feature-logo-img">
                    </div>
                    <div class="feature-content">
                        <h4>India's Largest Legal Tech<br>Company</h4>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Timer Icon" class="feature-logo-img">
                    </div>
                    <div class="feature-content">
                        <h4>On time commitment</h4>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ asset('images/timer.svg') }}" alt="Timer Icon"
                            class="feature-logo-img">
                    </div>
                    <div class="feature-content">
                        <h4>24X7 Support</h4>
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
                        No delays, no unanswered messages, our team is built for speed. Every query is acknowledged
                        promptly, and we keep communication clear, consistent, and responsive from start to finish.
                    </p>
                    <a href="#" class="book-consultation-btn">
                        Book a free consultation
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="client-communication-image">
                    <img src="{{ asset('images/patron_1.png') }}" alt="Responsive Client Communication">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proactive Compliance Monitoring Section -->
<section class="client-communication-section">
    <div class="container">
        <div class="client-communication-card">
            <div class="client-communication-content">

            <div class="client-communication-image">
                    <img src="{{ asset('images/patron_2.png') }}" alt="Proactive Compliance Monitoring">
                </div>


                <div class="client-communication-text">
                    <h2 class="client-communication-title">Proactive Compliance Monitoring</h2>
                    <p class="client-communication-description">
                        We stay ahead of deadlines so you don't have to. Our team tracks upcoming renewals, filings, and
                        regulatory changes to help your business maintain uninterrupted compliance.
                    </p>
                    <a href="#" class="book-consultation-btn">
                        Book a free consultation
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
                        From filings to follow-ups, we manage the full process so you don't have to. Focus on your
                        business while we handle the paperwork and procedures.
                    </p>
                    <a href="#" class="book-consultation-btn">
                        Book a free consultation
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="client-communication-image">
                    <img src="{{ asset('images/patron_2.png') }}" alt="End-to-End Process Management">
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
                <h2 class="more-than-legal-title">More Than Legal – We Build Your Business Backbone</h2>
                <p class="more-than-legal-description">
                    At Patron Accounting, we're not here to just complete tasks; we're here to build trust. That's why every service we provide comes with a layer of insight, foresight, and partnership you won't find elsewhere. We don't just guide you through the setup; we help future-proof your business. Our team monitors upcoming compliance needs, offers quarterly business health reviews, and ensures your legal foundation stays strong as you grow. You'll also get lifetime access to a digital document vault, early reminders for renewals, and practical advice when business laws change, all without extra charges. Whether you're launching your startup or managing a multi-state expansion, we bring structure, clarity, and strategic foresight to your journey. Registration Park isn't just a service. It's your built-in legal ecosystem, dependable, responsive, and always aligned with your growth.
                </p>
                <a href="#" class="book-consultation-btn">
                    Book a free consultation
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="more-than-legal-image">
                <img src="{{ asset('images/patron_3.png') }}" alt="More Than Legal - Business Backbone">
            </div>
        </div>
    </div>
</section>

<!-- Real Stories from Real People Section -->
<section class="real-stories-section">
    <div class="container">
        <div class="real-stories-header">
            <h2 class="real-stories-title">Real Stories from Real People</h2>
            <p class="real-stories-subtitle">
                Hear how teams across industries use ottermap to save time, cut costs, & stay in control.
            </p>
        </div>

        <div class="testimonials-grid">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    Patron Accounting exceptional communication kept us on track. They're focused on our needs,
                    respecting our time and business. Invaluable support, ensuring smooth operations.
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="{{ asset('images/real-1.svg') }}" alt="Author Avatar" class="author-image">
                    </div>
                    <div class="author-info">
                        <h4 class="author-name">Bill Jacobson</h4>
                        <p class="author-position">VP-Business Development</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    Patron Accounting has been great for our company! Their accuracy and speed for site maps are like
                    none other. Any suggestions for how to make our experience better have been taken into consideration
                    and implemented thoroughly.
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="{{ asset('images/real-2.svg') }}" alt="Author Avatar" class="author-image">
                    </div>
                    <div class="author-info">
                        <h4 class="author-name">David Sobel</h4>
                        <p class="author-position">Business Development</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    Patron Accounting exceptional communication kept us on track. They're focused on our needs,
                    respecting our time and business. Invaluable support, ensuring smooth operations.
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="{{ asset('images/real-1.svg') }}" alt="Author Avatar" class="author-image">
                    </div>
                    <div class="author-info">
                        <h4 class="author-name">Bill Jacobson</h4>
                        <p class="author-position">VP-Business Development</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    Patron Accountingexceptional communication kept us on track. They're focused on our needs,
                    respecting our time and business. Invaluable support, ensuring smooth operations.
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="{{ asset('images/real-1.svg') }}" alt="Author Avatar" class="author-image">   
                    </div>
                    <div class="author-info">
                        <h4 class="author-name">Bill Jacobson</h4>
                        <p class="author-position">VP-Business Development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
});
</script>

@endsection