 @extends('layouts.app')

@section('title', $page->title)

@push('styles')
<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<style>
.about-hero {
    background: linear-gradient(135deg, #1e3a5f 0%, #2d5278 100%);
    color: white;
    padding: 5rem 0;
    position: relative;
    overflow: hidden;
}

.about-hero h1 {
    font-size: 2.75rem;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 1.5rem;
}

.about-hero p.lead {
    font-size: 1.1rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2rem;
}

.about-hero .btn-join {
    background: #F26522;
    color: white;
    padding: 0.875rem 3rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    border: none;
    transition: all 0.3s ease;
}

.about-hero .btn-join:hover {
    background: #d9551a;
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(242, 101, 34, 0.4);
}

.hero-images-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 1rem;
    position: relative;
}

div#teamTabsContent {
    width: 75%;
    margin: 0 auto;
}

.hero-image-item {
    border-radius: 1rem;
    overflow: hidden;
    /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); */
    transition: transform 0.3s ease;
}

.hero-image-item:hover {
    transform: scale(1.05);
}

.hero-image-item img {
    width: 100%;
    /* height: 200px; */
    object-fit: cover;
}

.hero-image-item:nth-child(1) {
    grid-row: 1;
    grid-column: 1;
}

.hero-image-item:nth-child(2) {
    grid-row: 1 / 3;
    grid-column: 2;
}

.hero-image-item:nth-child(2) img {
    height: 100%;
}

.hero-image-item:nth-child(3) {
    grid-row: 2;
    grid-column: 1;
}

.hero-image-item:nth-child(4) {
    grid-row: 3;
    grid-column: 1 / 3;
}

@media (max-width: 991px) {
    .about-hero {
        padding: 3rem 0;
    }

    .about-hero h1 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
    }

    .about-hero p.lead {
        font-size: 1rem;
        margin-bottom: 1.5rem;
    }

    .about-hero .btn-join {
        padding: 0.75rem 2rem;
        font-size: 0.95rem;
    }

    .hero-images-grid {
        margin-top: 2rem;
        grid-template-columns: 1fr;
        justify-content: center !important;
    }

    .hero-image-item:nth-child(1),
    .hero-image-item:nth-child(2),
    .hero-image-item:nth-child(3),
    .hero-image-item:nth-child(4) {
        grid-row: auto;
        grid-column: auto;
    }

    .hero-image-item img {
        height: auto !important;
        width: 100% !important;
        max-width: 100% !important;
    }

    .hero-image-item:nth-child(2) img {
        height: auto !important;
    }

    /* Team Section Mobile */
    div#teamTabsContent {
        width: 100%;
        padding: 0 15px;
    }

    .nav-tabs {
        overflow-x: auto;
        overflow-y: hidden;
        flex-wrap: nowrap !important;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: thin;
        display: flex !important;
    }

    .nav-tabs::-webkit-scrollbar {
        height: 4px;
    }

    .nav-tabs::-webkit-scrollbar-thumb {
        background-color: #1e3a5f;
        border-radius: 4px;
    }

    .nav-tabs .nav-item {
        flex: 0 0 auto;
    }

    .nav-tabs .nav-link {
        white-space: nowrap;
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }

    .nav-tabs .nav-link.active {
        border-bottom-width: 5px !important;
    }

    /* Timeline Mobile */
    .timeline {
        gap: 2rem;
    }

    .timeline-row {
        flex-direction: column;
        gap: 2rem;
        padding-left: 0 !important;
        align-items: center;
    }

    .timeline-row-2 {
        padding-left: 0 !important;
        align-items: center;
    }

    .timeline-item {
        width: 100%;
        max-width: 100%;
        text-align: center;
    }

    .timeline-year {
        font-size: 1.25rem;
        padding: 0.5rem 1.5rem;
    }

    /* Trusted By Section Mobile */
    .d-flex.align-items-center.justify-content-between.flex-wrap {
        justify-content: center !important;
        gap: 1.5rem !important;
    }

    .d-flex.align-items-center.justify-content-between.flex-wrap img {
        max-height: 40px !important;
    }

    /* Buttons Mobile */
    .d-flex.justify-content-center.gap-3 {
        flex-direction: column;
        align-items: stretch;
    }

    .d-flex.justify-content-center.gap-3 .btn {
        width: 100%;
        padding: 0.75rem 2rem !important;
    }

    /* Office Images Mobile */
    .office-image img {
        height: 250px !important;
    }

    /* Memory Slider Mobile */
    .memory-card {
        height: 250px;
    }

    .memory-card img {
        height: 250px !important;
    }

    /* Team Cards Mobile */
    .team-card .card-body {
        width: 140px !important;
        height: 50px !important;
        font-size: 12px;
    }

    .team-card .card-body h5 {
        font-size: 12px !important;
    }

    .team-card .card-body p {
        font-size: 9px !important;
    }

    /* Tab Pane Mobile Styles */
    h5.tab_pane_mobile,
    .tab_pane_mobile {
        font-size: 11px !important;
    }

    p.tab_pane_mobile_para,
    .tab_pane_mobile_para {
        font-size: 7px !important;
    }

    /* Section Headings Mobile */
    h2.fw-bold {
        font-size: 1.5rem !important;
    }

    section .text-muted {
        font-size: 0.9rem !important;
    }

    /* Values/Features Cards Mobile */
    .values-card,
    .card {
        margin-bottom: 1rem;
    }

    /* Office Section Mobile - Stack properly */
    .office-card .row {
        margin-bottom: 2rem;
    }

    .office-info h5 {
        font-size: 1.1rem;
    }

    .office-info p {
        font-size: 0.9rem;
    }

    /* Button Groups Mobile */
    .button-group {
        flex-direction: column !important;
        gap: 1rem !important;
    }

    .button-group .btn {
        width: 100% !important;
    }

    /* Delivering Value Images Mobile */
    .delivering-value-section .row img,
    .trust-section .row img {
        height: 300px !important;
    }

    /* Legal Solutions Section Mobile */
    .legal-solutions-section {
        margin: 0 0 2rem 0 !important;
        padding: 2rem 15px !important;
        border-radius: 1rem !important;
    }

    .legal-solutions-section .container {
        padding: 0 !important;
        max-width: 100% !important;
    }

    .legal-solutions-section h2 {
        font-size: 1.5rem !important;
        padding: 0;
        margin-bottom: 1.5rem !important;
    }

    .legal-solutions-section .card-body {
        padding: 1.5rem !important;
    }
    
    .legal-solutions-section .button-group {
        padding: 0 !important;
        margin-bottom: 2rem !important;
    }

    .legal-solutions-section .bi {
        font-size: 2.5rem !important;
    }

    .legal-solutions-section h5 {
        font-size: 1rem !important;
    }

    .legal-solutions-section p {
        font-size: 0.85rem !important;
    }

    /* Team Section Button Mobile */
    #team .btn-lg {
        display: block;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }

    .team-header {
        padding: 2rem 1rem !important;
        margin-bottom: 2rem !important;
    }

    .team-header h2 {
        font-size: 1.5rem !important;
    }

    .team-header p {
        font-size: 0.9rem !important;
        padding: 0 10px;
    }

    /* Padding Adjustments for Mobile */
    .py-5 {
        padding-top: 2.5rem !important;
        padding-bottom: 2.5rem !important;
    }

    section .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    /* Text Content Mobile Adjustments */
    section p.text-muted {
        padding: 0 10px;
    }

    /* Hero Section Text on Mobile */
    .about-hero .col-lg-6 {
        text-align: center;
    }

    .about-hero .btn-join {
        display: block;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
}

@media (max-width: 576px) {
    .about-hero {
        padding: 2rem 0;
    }

    .about-hero h1 {
        font-size: 1.5rem;
    }

    .about-hero p.lead {
        font-size: 0.95rem;
    }

    .about-hero .btn-join {
        width: 100%;
        padding: 0.75rem 1.5rem;
    }

    h2.fw-bold {
        font-size: 1.25rem !important;
    }

    .team-header {
        padding: 1.5rem 1rem !important;
    }

    .team-header h2 {
        font-size: 1.25rem !important;
    }

    .team-header p {
        font-size: 0.85rem !important;
    }

    .timeline-year {
        font-size: 1.1rem;
        padding: 0.4rem 1.2rem;
    }

    .timeline-content p {
        font-size: 0.85rem;
    }

    .office-image img {
        height: 200px !important;
    }

    .memory-card,
    .memory-card img {
        height: 200px !important;
    }

    .delivering-value-section .row img,
    .trust-section .row img {
        height: 250px !important;
    }

    /* Extra small button adjustments */
    .btn-lg {
        font-size: 0.9rem !important;
        padding: 0.65rem 1.5rem !important;
    }

    /* Trusted by logos even smaller */
    .d-flex.align-items-center.justify-content-between.flex-wrap img {
        max-height: 35px !important;
    }

    /* Reduce padding on smallest screens */
    .py-5 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }

    .py-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .mb-5 {
        margin-bottom: 2rem !important;
    }

    .mb-4 {
        margin-bottom: 1.5rem !important;
    }

    /* Legal Solutions even more compact */
    .legal-solutions-section h2 {
        font-size: 1.25rem !important;
    }

    .legal-solutions-section .card-body {
        padding: 1.25rem !important;
    }
}

.team-card {
    border: none;
    border-radius: 1rem;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.team-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.team-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #fff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    margin: -60px auto 0;
    position: relative;
    z-index: 2;
}

.team-header {
    /* background: linear-gradient(45deg, #667eea, #764ba2);
    height: 120px;
    position: relative; */
}

.stats-counter {
    font-size: 2.5rem;
    font-weight: bold;
    color: #6c5ce7;
}

.timeline {
    display: flex;
    flex-direction: column;
    gap: 3rem;
    padding: 2rem 0;
}

.timeline-row {
    display: flex;
    gap: 2rem;
    justify-content: space-between;
    flex-wrap: wrap;
}

.timeline-row-2 {
    justify-content: center;
    gap: 3rem;
}

.timeline-item {
    flex: 0 0 auto;
    max-width: 226px;
    text-align: left;
}

.timeline-year {
    display: inline-block;
    padding: 0.6rem 2rem;
    font-size: 1.5rem;
    font-weight: bold;
    color: white;
    margin-bottom: 1rem;
    position: relative;
    clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 50%, calc(100% - 15px) 100%, 0 100%);
}

.timeline-year.year-2019 {
    background: #1e3a5f;
}

.timeline-year.year-2020 {
    background: #F26522;
}

.timeline-year.year-2021 {
    background: #999999;
}

.timeline-year.year-2022 {
    background: #F5A623;
}

.timeline-year.year-2023 {
    background: #4A90E2;
}

.timeline-year.year-2024 {
    background: #F26522;
}

.timeline-year.year-2025 {
    background: #999999;
}

.timeline-content h5 {
    font-size: 1.1rem;
    color: #1e3a5f;
}

.timeline-content p {
    font-size: 0.9rem;
    line-height: 1.6;
    color: #666;
    margin-bottom: 0;
}

/* Team Tabs Styling */
.tabs-wrapper {
    position: relative;
}

.nav-tabs {
    border-bottom: 2px solid #e0e0e0 !important;
}

.nav-tabs .nav-link {
    color: #6c757d;
    border: none;
    border-bottom: 3px solid transparent;
    background: transparent;
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.nav-tabs .nav-link:hover {
    color: #1e3a5f;
    border-bottom-color: #1e3a5f;
}

.nav-tabs .nav-link.active {
    color: #1e3a5f !important;
    border-bottom: 10px solid #1e3a5f !important;
    background: transparent !important;
    border-radius: 10px 10px;
}

@media (max-width: 991px) {
    .team-tabs {
        flex-direction: column !important;
        align-items: stretch !important;
        border-bottom: none !important;
    }
    
    .team-tabs .nav-item {
        width: 100%;
    }
    
    .team-tabs .nav-link {
        width: 100%;
        text-align: left;
        padding: 1rem 1.5rem;
        font-size: 1rem;
        border-bottom: 1px solid #e0e0e0 !important;
        border-left: 4px solid transparent;
        transition: all 0.3s ease;
    }
    
    .team-tabs .nav-link:hover {
        background: #f8f9fa;
        border-left-color: #1e3a5f;
    }
    
    .team-tabs .nav-link.active {
        background: #f8f9fa;
        border-bottom: 1px solid #e0e0e0 !important;
        border-left: 4px solid #1e3a5f !important;
        color: #1e3a5f !important;
    }
}

@media (max-width: 576px) {
    .team-tabs .nav-link {
        padding: 0.85rem 1.2rem;
        font-size: 0.95rem;
    }
}

/* Memory Wall Slider */
.memory-slider .slick-slide {
    padding: 0 10px;
}

.memory-card {
    position: relative;
    border-radius: 1.5rem;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    height: 350px;
}

.memory-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.memory-card img {
    width: 100%;
    height: 350px;
    /* object-fit: cover; */
    object-fit: contain;
}

.memory-card.featured {
    border: 4px solid #4A90E2;
}

.slick-prev,
.slick-next {
    width: 45px;
    height: 45px;
    background: white !important;
    border-radius: 50%;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
    z-index: 10;
}

.slick-prev:before,
.slick-next:before {
    color: #1e3a5f !important;
    font-size: 20px;
    opacity: 1;
}

.slick-prev {
    left: -20px;
}

.slick-next {
    right: -20px;
}

.slick-prev:hover,
.slick-next:hover {
    background: #1e3a5f !important;
}

.slick-prev:hover:before,
.slick-next:hover:before {
    color: white !important;
}

/* Office Cards */
.office-card {
    margin-bottom: 4rem;
}

.office-image {
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.office-image img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.office-info h5 {
    font-weight: 600;
    color: #1e3a5f;
    margin-bottom: 0.5rem;
}

.office-info p {
    font-size: 0.95rem;
    color: #333;
    line-height: 1.6;
    margin-bottom: 0.25rem;
}

.office-info strong {
    font-weight: 600;
}

.values-card {
    background: white;
    border-radius: 1rem;
    padding: 2rem;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    height: 100%;
    position: relative;
    overflow: hidden;
}

.values-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(45deg, #6c5ce7, #a29bfe);
}

.feature-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 2rem;
    color: white;
}

/* Trusted Companies Slider */
.trusted-companies-slider .slick-slide {
    padding: 0 15px;
    display: flex !important;
    align-items: center;
    justify-content: center;
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
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="about-hero position-relative">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="fw-bold mb-4">Simplifying accounting and compliance for modern Indian businesses</h1>
                <p class="lead mb-4">Patron Accounting curates bespoke financial stewardship for discerning individuals, pioneering startups, and growth-focused enterprises across India.  Leveraging streamlined processes, intelligent automation, and seasoned expertise, we deliver clarity and precision at every stage.By ensuring obligations are met seamlessly, we empower businesses to stay agile, strategically focused, and primed for exponential growth.</p>
                <a href="/contact-page" class="btn btn-join">Join us today!</a>
            </div>
            <div class="col-lg-6">
                <div class="hero-images-grid" style="display: flex; justify-content: flex-end;">
                    <div class="hero-image-item">
                        <img src="{{ asset('images/about-banner.png') }}" alt="Business workspace"
                            style="width: 416px; height: 416px; object-fit: cover;"
                            onerror="this.src='https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&h=200&fit=crop'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted By Section -->
<section class="pt-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <p class="text-uppercase fw-semibold mb-4"
                style="color: #F26522; letter-spacing: 2px; font-size: 0.875rem;">TRUSTED BY +25,000 BUSINESSES</p>
        </div>
        <div class="trusted-companies-slider">
            <div class="slider-item">
                <img src="{{ asset('images/houte.png') }}" alt="Hyundai" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Hyundai'">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/hyundai.png') }}" alt="Asian Paints" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Asian+Paints'">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/asianpant.png') }}" alt="Infinova" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Infinova'">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/infinova.png') }}" alt="Bridgestone" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Bridgestone'">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/digisecure.png') }}" alt="Intellias" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Intellias'">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/intellias.png') }}" alt="Demandify Media" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Demandify'">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/demandify.png') }}" alt="Acquia" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=Acquia'">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/acavua.png') }}" alt="SB NRI" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=SB+NRI'">
            </div>
            <div class="slider-item">
                <img src="{{ asset('images/sbnri.png') }}" alt="SB NRI" class="img-fluid"
                    style="max-height: 104px; max-width: 104px;"
                    onerror="this.src='https://via.placeholder.com/104x104/cccccc/666666?text=SB+NRI'">
            </div>
        </div>
    </div>
</section>

<!-- Delivering Value Section -->
<section class="py-5 bg-white delivering-value-section">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-4" style="color: #1e3a5f; font-size: 2.25rem;">Delivering Real Value to Our Clients</h2>
            <p class="text-muted mx-auto" style="max-width: 900px; font-size: 1rem; line-height: 1.8;">
               From business incorporation to annual filings and ongoing compliance, Patron Accounting supports clients through every stage of their business journey. We simplify complex requirements through structured processes, timely execution, and expert guidance—so you don’t have to worry about missed deadlines or unclear rules.</p>
<p class="text-muted mx-auto" style="max-width: 900px; font-size: 1rem; line-height: 1.8;">
Whether you’re launching a new venture or managing compliance at scale, we work as a dependable partner who understands Indian regulations and business realities. Our services adapt as your needs grow, offering clarity, accountability, and consistent support at every stage.
            </p>
        </div>

        <div class="d-flex justify-content-center gap-3 mb-5 button-group">
            <a href="/contact-page" class="btn btn-lg px-5 py-3"
                style="background: #F26522; color: white; border-radius: 50px; font-weight: 600; border: none;">
                Request a consultation
            </a>
            <a href="/contact-page" class="btn btn-outline-dark btn-lg px-5 py-3"
                style="border-radius: 50px; font-weight: 600; border: 2px solid #333;">
                Contact us
            </a>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <div style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/office-1.png') }}" alt="Office workspace" class="img-fluid w-100"
                        style="height: 400px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6">
                <div style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/office-2.png') }}" alt="Team workspace" class="img-fluid w-100"
                        style="height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Delivering Value Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-4" style="color: #1e3a5f; font-size: 2.25rem;">Expert Support, When and Where You Need It</h2>
            <p class="text-muted mx-auto" style="max-width: 900px; font-size: 1rem; line-height: 1.8;">
With technology-enabled workflows and expert oversight, Patron Accounting supports businesses across India and beyond. Wherever you operate, our team remains accessible during critical compliance moments—delivering timely insights, clear direction, and dependable execution, without delays or complexity.
            </p>
        </div>

        <div class="d-flex justify-content-center gap-3 mb-5">
            <a href="/contact-page" class="btn btn-lg px-5 py-3"
                style="background: #F26522; color: white; border-radius: 50px; font-weight: 600; border: none;">
                Get expert guidance now
            </a>
            <a href="/contact-page" class="btn btn-outline-dark btn-lg px-5 py-3"
                style="border-radius: 50px; font-weight: 600; border: 2px solid #333;">
                Contact us
            </a>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <div style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/office-3.png') }}" alt="Office workspace" class="img-fluid w-100"
                        style="height: 400px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6">
                <div style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <img src="{{ asset('images/office-4.png') }}" alt="Team workspace" class="img-fluid w-100"
                        style="height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Legal Solutions Section -->
<section class="container legal-solutions-section" style="background: #2b2d33; border-radius: 2rem; margin-bottom: 3rem;">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white mb-4" style="font-size: 2.5rem;">Built on trust, backed by expertise, delivering reliable accounting and compliance across India.</h2>
            <div class="d-flex justify-content-center gap-3 mb-5 button-group">
                <a href="/contact-page" class="btn btn-lg px-5 py-3"
                    style="background: #F26522; color: white; border-radius: 50px; font-weight: 600; border: none;">
                    Get Expert Guidance
                </a>
                <a href="/contact-page" class="btn btn-outline-light btn-lg px-5 py-3"
                    style="border-radius: 50px; font-weight: 600; border: 2px solid white;">
                    Contact us
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0" style="border-radius: 1rem; background: #f5f5f5;">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="bi bi-calendar-check" style="font-size: 3rem; color: #4a90e2;"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #2b2d33;">Understand What Applies to Your Business</h5>
                        <p class="text-muted mb-0" style="font-size: 0.95rem;">
                            Not sure which registrations, filings, or compliances are required? We help you identify exactly what applies to your business and why.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0" style="border-radius: 1rem; background: #f5f5f5;">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="bi bi-chat-left-text" style="font-size: 3rem; color: #4a90e2;"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #2b2d33;">Get Clear, Practical Guidance</h5>
                        <p class="text-muted mb-0" style="font-size: 0.95rem;">
                            Receive easy-to-understand advice on tax, accounting, and compliance—without jargon or unnecessary complexity.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0" style="border-radius: 1rem; background: #f5f5f5;">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="bi bi-person-check" style="font-size: 3rem; color: #4a90e2;"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #2b2d33;">Connect With the Right Expert</h5>
                        <p class="text-muted mb-0" style="font-size: 0.95rem;">
                            Share your requirement and get guidance from experienced professionals like CAs, CS, etc. who handle similar business needs every day.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="mb-5">
            <h2 class="fw-bold mb-3" style="color: #1e3a5f; font-size: 2rem;">Our journey</h2>
        </div>

        <div class="timeline">
            <!-- Row 1: 2019, 2020, 2021, 2022, 2023 -->
            <div class="timeline-row">
                <div class="timeline-item">
                    <div class="timeline-year year-2019">2019</div>
                    <div class="timeline-content">
                        <h5 class="fw-bold mb-2">The Beginning</h5>
                        <p>From an idea to a bold vision to simplify compliance and empower businesses Pan-India. Where the dream began.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year year-2020">2020</div>
                    <div class="timeline-content">
                        <h5 class="fw-bold mb-2">Building the Base</h5>
                        <p>We strengthened our foundation and scaled operations, leading tech technology at the core. Laying the groundwork for growth.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year year-2021">2021</div>
                    <div class="timeline-content">
                        <h5 class="fw-bold mb-2">Expanding Reach</h5>
                        <p>Growth accelerated as we diversified services and expanded across India. Innovating for impact.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year year-2022">2022</div>
                    <div class="timeline-content">
                        <h5 class="fw-bold mb-2">Driving Innovation</h5>
                        <p>Automation and a sharper customer focus transformed our execution. Innovating for efficiency.</p>
                    </div>
                </div>
            </div>

            <!-- Row 2: 2024, 2025 -->
            <div class="timeline-row timeline-row-2">
                <div class="timeline-item">
                    <div class="timeline-year year-2023">2023</div>
                    <div class="timeline-content">
                        <h5 class="fw-bold mb-2">Becoming a Leader</h5>
                        <p>Recognized as trusted advisory platform with nationwide scale and Leadership through trust.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year year-2024">2024</div>
                    <div class="timeline-content">
                        <h5 class="fw-bold mb-2">Nationwide Impact</h5>
                        <p>Launched new tools and MSME initiatives, deepening our Pan-India presence. Strengthening India's business ecosystem.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year year-2025">2025</div>
                    <div class="timeline-content">
                        <h5 class="fw-bold mb-2">Global Vision</h5>
                        <p>On track to become a global advisory powerhouse built on trust and innovation. Scaling beyond borders.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5 team-header">
            <h2 class="fw-bold mb-3" style="color: #1e3a5f; font-size: 2.5rem;">Delivering Unparalleled Value to Our
                Customers</h2>
            <p class="mx-auto mb-4" style="max-width: 800px; font-size: 1.1rem; color: #6c757d;">
                At Patron Accounting, we are dedicated to simplifying legal and business solutions for SMEs, entrepreneurs,
                and individuals alike.
            </p>
            <a href="/contact-page" class="btn btn-lg px-5 py-3 mb-4"
                style="background: #F26522; color: white; border-radius: 50px; font-weight: 600; border: none;">
                Get in touch with us
            </a>
        </div>

        <!-- Tabs -->
        <div class="tabs-wrapper" style="margin-bottom: 1.5rem;">
            <ul class="nav nav-tabs border-0 mb-0 d-flex justify-content-center team-tabs" id="teamTabs" role="tablist"
                style="border-bottom: 2px solid #e0e0e0 !important; gap: 1rem;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active fw-semibold" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                        type="button" role="tab" aria-controls="all" aria-selected="true"
                        style="color: #1e3a5f; border: none; border-bottom: 3px solid transparent; background: transparent; padding: 0.75rem 1.5rem;">
                        All
                    </button>
                </li>
                 <li class="nav-item" role="presentation">
                    <button class="nav-link fw-semibold" id="founders-tab" data-bs-toggle="tab"
                        data-bs-target="#founders" type="button" role="tab" aria-controls="founders"
                        aria-selected="false"
                        style="color: #6c757d; border: none; border-bottom: 3px solid transparent; background: transparent; padding: 0.75rem 1.5rem;">
                        Our Founders
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-semibold" id="executives-tab" data-bs-toggle="tab"
                        data-bs-target="#executives" type="button" role="tab" aria-controls="executives"
                        aria-selected="false"
                        style="color: #6c757d; border: none; border-bottom: 3px solid transparent; background: transparent; padding: 0.75rem 1.5rem;">
                        Executive Leaders
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-semibold" id="nextgen-tab" data-bs-toggle="tab" data-bs-target="#nextgen"
                        type="button" role="tab" aria-controls="nextgen" aria-selected="false"
                        style="color: #6c757d; border: none; border-bottom: 3px solid transparent; background: transparent; padding: 0.75rem 1.5rem;">
                        Next-Gen Professionals
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="teamTabsContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="row g-4">
                    <!-- Row 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/ceo.png') }}" alt="Sundaram Gupta" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Sundaram Gupta, FCA & FRM (GARP Level 1)</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Founder & Visionary — Leading Virtual CFO services, business setup, tax planning, scalable financial insights and innovation for 17+ years.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-2.png') }}" alt="Poonam Kadge" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Poonam Kadge, CA & Diploma in IFRS (ACCA)</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Digital & Operations Leader — Driving marketing, process, and project excellence for 12+ years.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-3.png') }}" alt="Aashima Goel" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Aashima Goel, CS, B.Com, LLB</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Corporate Governance & Compliance Expert— driving legal integrity, statutory excellence, and regulatory mastery for 6+ years</p>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-4.png') }}" alt="Rohit Kumar Tiwari" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Rohit Kumar Tiwari, FCA</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Tax & Compliance Strategist — Expert in direct, international, and indirect taxation with RERA guidance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-5.png') }}" alt="Puja Pradhan" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Puja Pradhan, CA</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Finance & Compliance Specialist — Delivering accounting precision and regulatory excellence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-6.png') }}" alt="Subham Jhunjhunwala" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Subham Jhunjhunwala, CA Finalist | Graduate</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Accounting & Tax Professional — Mastering accounting, taxation, and compliance.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-7.png') }}" alt="Sai Chaudhuri" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Sai Chaudhuri, CA Finalist</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-8.png') }}" alt="Ashish Sachan" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Ashish Sachan, CA Finalist</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-9.png') }}" alt="Krishika Kushwaha" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Krishika Kushwaha, CA Intermediate</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-10.png') }}" alt="Anushka Tourwade" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Anushka Tourwade, Associate Accountant</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-11.png') }}" alt="Tanisha Wasale" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Tanisha Wasale, Associate Accountant</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Founders Tab -->
            <div class="tab-pane fade" id="founders" role="tabpanel" aria-labelledby="founders-tab">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/ceo.png') }}" alt="Sundaram Gupta" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Sundaram Gupta, FCA & FRM (GARP Level 1)</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Founder & Visionary — Leading Virtual CFO services, business setup, tax planning, scalable financial insights and innovation for 17+ years.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Executive Leaders Tab -->
            <div class="tab-pane fade" id="executives" role="tabpanel" aria-labelledby="executives-tab">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-2.png') }}" alt="Poonam Kadge" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Poonam Kadge, CA & Diploma in IFRS (ACCA)</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Expertise in Company Registration, Tax services including GST, Income Tax, ROC and project experience for 2+ years</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-3.png') }}" alt="Aashima Goel" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Aashima Goel, CS, B.Com, LLB</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Companies incorporation & Compliance Expert—specializing in ROC annual filings, audit and regulatory scrutiny for 4+ years</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-4.png') }}" alt="Rohit Kumar Tiwari" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Rohit Kumar Tiwari, FCA</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">He is Compliance Strategist - expert in direct taxes including GST, Income Tax, and all ROC-related legal guidance</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-5.png') }}" alt="Puja Pradhan" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Puja Pradhan, CA</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Expertise in Company Services — Delivering streamlined registration and industry compliance workflow</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-6.png') }}" alt="Subham Jhunjhunwala" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Subham Jhunjhunwala, CA Finalist | Graduate</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">Experience in Company Registration, taxation - accounting, taxation and compliance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nextgen" role="tabpanel" aria-labelledby="nextgen-tab">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-7.png') }}" alt="Sai Chaudhuri" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Sai Chaudhuri, CA Finalist</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-8.png') }}" alt="Ashish Sachan" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Ashish Sachan, CA Finalist</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-9.png') }}" alt="Krishika Kushwaha" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Krishika Kushwaha, CA Intermediate</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-10.png') }}" alt="Anushka Tourwade" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Anushka Tourwade, Associate Accountant</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 h-100" style="border-radius: 1rem; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <img src="{{ asset('images/p-11.png') }}" alt="Tanisha Wasale" class="card-img-top" style="height: 300px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=350&fit=crop'">
                            <div class="card-body text-start p-3" style="background: white;">
                                <h6 class="fw-bold mb-1" style="color: #1e3a5f; font-size: 0.9rem;">Tanisha Wasale, Associate Accountant</h6>
                                <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Wall of Memories -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="mb-5">
            <h2 class="fw-bold" style="color: #1e3a5f; font-size: 2rem;">Our wall of memories</h2>
        </div>

        <div class="memory-slider">
            <div class="memory-item">
                <div class="memory-card featured">
                    <img src="{{ asset('images/o-1.jpeg') }}" alt="Christmas celebration"
                        onerror="this.src='https://images.unsplash.com/photo-1513569771920-c9e1d31714af?w=600&h=400&fit=crop'">
                </div>
            </div>
            <div class="memory-item">
                <div class="memory-card">
                    <img src="{{ asset('images/o-4.jpeg') }}" alt="Holi celebration"
                        onerror="this.src='https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=600&h=400&fit=crop'">
                </div>
            </div>
            <div class="memory-item">
                <div class="memory-card">
                    <img src="{{ asset('images/o-2.jpeg') }}" alt="Team event"
                        onerror="this.src='https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=600&h=400&fit=crop'">
                </div>
            </div>
            <div class="memory-item">
                <div class="memory-card">
                    <img src="{{ asset('images/o-3.jpeg') }}" alt="Office celebration"
                        onerror="this.src='https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=600&h=400&fit=crop'">
                </div>
            </div>
            <div class="memory-item">
                <div class="memory-card">
                    <img src="{{ asset('images/o-4.jpeg') }}" alt="Team gathering"
                        onerror="this.src='https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=600&h=400&fit=crop'">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Offices -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="mb-5">
            <h2 class="fw-bold" style="color: #1e3a5f; font-size: 2rem;">Our Offices</h2>
        </div>

        <!-- Pune Office -->
        <div class="office-card">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="office-image" style="border-radius: 1rem; overflow: hidden;">
                        <img src="{{ asset('images/ofcimg.png') }}" alt="Pune Office" class="img-fluid w-100"
                            style="height: 100%; object-fit: cover;"
                            onerror="this.src='https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=400&fit=crop'">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="office-info">
                        <p class="mb-2" style="font-size: 1rem; color: #000000;"><strong>Location:</strong> Pune</p>
                        <p class="mb-2" style="font-size: 1rem; color: #000000;"><strong>Office Address:</strong> Office No B4, RTC Silver, Wagholi, Pune, Maharashtra-412207</p>
                        <p class="mb-2" style="font-size: 1rem; color: #000000;"><strong>GST Number:</strong> 06AAMCB5068L1Z8</p>
                        <p class="mb-0" style="font-size: 1rem; color: #000000;"><strong>Google Location:</strong> <a href="https://www.google.com/maps/search/?api=1&query=Office+No+B4%2C+RTC+Silver%2C+Wagholi%2C+Pune%2C+Maharashtra+412207" style="color: #4A90E2; text-decoration: none;">Click to reach our office</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Our Other Office locations -->
<section class="pb-5 bg-white">
    <div class="container">
        <div class="mb-5">
            <h2 class="fw-bold" style="color: #1e3a5f; font-size: 2rem;">Our Other Office locations</h2>
        </div>

        <div class="row g-5">
            <!-- Mumbai Office -->
            <div class="col-lg-6">
                <div class="office-location-card">
                    <h5 class="fw-bold mb-3" style="color: #1e3a5f; font-size: 1.25rem;">Location: Mumbai</h5>
                    <p class="mb-2" style="font-size: 1rem; color: #333; line-height: 1.8;">
                        <strong style="color: #000;">Office Address:</strong> 1st Floor, Rajshila Building, 104, Jagannath Shankar Seth Rd, Marine Lines, Mumbai, Maharashtra–400002
                    </p>
                    <p class="mb-2" style="font-size: 1rem; color: #333; line-height: 1.8;">
                        <strong style="color: #000;">GST Number:</strong> 06AAMCB5068L1Z8
                    </p>
                    <p class="mb-0" style="font-size: 1rem; color: #333; line-height: 1.8;">
                        <strong style="color: #000;">Google Location:</strong> 
                        <a href="https://www.google.com/maps/search/?api=1&query=1st+Floor,+Rajshila+Building,+104,+Jagannath+Shankar+Seth+Rd,+Marine+Lines,+Mumbai,+Maharashtra+400002" 
                           target="_blank"
                           style="color: #4A90E2; text-decoration: underline;">Click to reach our office</a>
                    </p>
                </div>
            </div>

            <!-- New Delhi Office -->
            <div class="col-lg-6">
                <div class="office-location-card">
                    <h5 class="fw-bold mb-3" style="color: #1e3a5f; font-size: 1.25rem;">Location: New Delhi</h5>
                    <p class="mb-2" style="font-size: 1rem; color: #333; line-height: 1.8;">
                        <strong style="color: #000;">Office Address:</strong> Shop No A91, Nawada, opposite Metro Pillar No 745, Delhi, 110059
                    </p>
                    <p class="mb-2" style="font-size: 1rem; color: #333; line-height: 1.8;">
                        <strong style="color: #000;">GST Number:</strong> 06AAMCB5068L1Z8
                    </p>
                    <p class="mb-0" style="font-size: 1rem; color: #333; line-height: 1.8;">
                        <strong style="color: #000;">Google Location:</strong> 
                        <a href="https://www.google.com/maps/search/?api=1&query=Shop+No+A91,+Nawada,+opposite+Metro+Pillar+No+745,+Delhi,+110059" 
                           target="_blank"
                           style="color: #4A90E2; text-decoration: underline;">Click to reach our office</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories -->
@if($page->categories->count() > 0)
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h6 class="text-muted mb-3">Related Categories</h6>
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    @foreach($page->categories as $category)
                    <a href="{{ url('/page-categories/' . $category->slug) }}" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-tag"></i> {{ $category->name }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection

@push('scripts')
<script>
// Counter Animation
function animateCounters() {
    const counters = document.querySelectorAll('.stats-counter');

    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const step = target / (duration / 16); // 60fps
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            counter.textContent = Math.floor(current) + '+';
        }, 16);
    });
}

// Intersection Observer for animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            if (entry.target.classList.contains('stats-counter')) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        }
    });
});

// Observe stats section
document.addEventListener('DOMContentLoaded', () => {
    const statsSection = document.querySelector('.stats-counter');
    if (statsSection) {
        observer.observe(statsSection);
    }

    // Animate timeline items on scroll
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'all 0.6s ease';
        item.style.transitionDelay = `${index * 0.1}s`;

        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, 500 + (index * 100));
    });

    // Initialize Memory Slider
    if ($('.memory-slider').length) {
        $('.memory-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });
    }

    // Initialize Trusted Companies Slider
    if ($('.trusted-companies-slider').length) {
        $('.trusted-companies-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,        // important
            speed: 3000,             // higher = slower smooth flow
            cssEase: 'linear',
            arrows: false,
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

<!-- Slick Slider JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endpush
