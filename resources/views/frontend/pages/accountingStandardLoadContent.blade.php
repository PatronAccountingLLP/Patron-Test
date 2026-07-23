@extends('layouts.app')

@section('content')
  
<div class="banner">      
    <div class="hero-section">
        <h1 class="main-title mb-3">
            Accounting Standard {{ $content->std_no }} - 
            {{ \Illuminate\Support\Str::title($content->std_name) }}
        </h1>

        <div class="search-container ">
            <div class="search-bar">
                <i class="fas fa-search search-icon-banner"></i>
                <input type="text" placeholder="Search Accounting Standard or Number" id="contentsearchInput">
                <button class="search-btn-main" id="searchBtn">Search</button>
            </div>
            
            <div class="filter-buttons">
                <button class="filter-btn">
                    <a href="/gst-registration">GST Registration</a>
                </button>
                <button class="filter-btn">
                    <a href="/trademark-registration">Trademark Registration</a>
                </button>
                <button class="filter-btn">
                    <a href="/iec-registration">IEC Registration</a>
                </button>
                <button class="filter-btn">
                    <a href="/private-limited-company-registration">Private Limited Registration</a>
                </button>
            </div>

            <!-- Search Results -->
            <div id="searchResultsContainer" 
                 style="display: none;width: 100%;margin-top: 1rem;position: absolute;top: 60px;left: 0;">
                
                <div class="table-container" 
                     style="width: 100%; max-height: 300px; overflow-y: auto; background: white; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                    
                    <table class="data-table" style="width: 100%; margin: 0;">
                        <thead>
                            <tr>
                                <th>Standard Name</th>
                                <th>Standard No</th>
                            </tr>
                        </thead>
                        <tbody id="searchResultsBody">
                            <!-- Dynamic Results -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="originalContent">
    {!! $content->content !!}
      @isset($content->{'interlink_page'})
        <div class="interlink-page main-content">
            {!! $content->{'interlink_page'} !!}
        </div>
    @endisset
</div>

@endsection

@push('meta-content')
    {!! $content->meta_title !!}
    {!! $content->canonical !!}
@endpush
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
 }

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #fff;
}
:root{
    --primary-color:#14365F;
}
.main-content p{
    color: var(--primary-color);
    text-align: justify;
}
.main-content ul li{
    color: var(--primary-color);
}
.main-content strong{
    color: var(--primary-color);
}

/* Header Styles */
.banner {
    background: var(--primary-color);
    color: white;
    padding: 0;
}

.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    max-width: 1400px;
    margin: 0 auto;
}

.logo {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.5rem;
    font-weight: bold;
}

.logo i {
    font-size: 1.8rem;
}

button a{
    color:white;
    text-decoration: none;
}


.hero-section {
    padding: 3rem 2rem 4rem;
    text-align: center;
    max-width: 1200px;
    margin: 0 auto;
    /* background-color: var(--primary-color); */
}

.main-title {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.hero-description {
    font-size: 1.2rem;
    margin-bottom: 2.5rem;
    opacity: 0.95;
}

.search-container {
    background: rgba(255, 255, 255, 0.15);
    padding: 2rem;
    border-radius: 10px;
    position: relative;
}

#searchResultsContainer {
    width: 100%;
    margin-top: 1rem;
    position: relative;
    z-index: 10;
}

#searchResultsContainer .table-container {
    max-height: 500px;
    overflow-y: auto;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

#searchResultsContainer .table-container::-webkit-scrollbar {
    width: 8px;
}

#searchResultsContainer .table-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

#searchResultsContainer .table-container::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 4px;
}

#searchResultsContainer .table-container::-webkit-scrollbar-thumb:hover {
    background: #0f2a4a;
}

#searchResultsContainer .data-table {
    margin: 0;
    border-radius: 8px;
}

#searchResultsContainer .data-table thead th {
    position: sticky;
    top: 0;
    z-index: 5;
}

/* Hide original content when search is active */
#originalContent.hidden-by-search {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
    height: 0 !important;
    overflow: hidden !important;
}

.search-bar {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 8px;
    padding: 0.5rem 1rem;
    margin-bottom: 1.5rem;
    gap: 1rem;
}

.search-icon-banner {
    color: #666;
    font-size: 1.2rem;
}

.search-bar input {
    flex: 1;
    border: none;
    outline: none;
    font-size: 1rem;
    padding: 0.5rem;
    color: #333;
}

.search-btn-main {
    background: #f97316;
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.3s;
}

.search-btn-main:hover {
    background: #ea580c;
}

.filter-buttons {
    display: flex;
    gap: 0.75rem;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 1.5rem;
}

.filter-btn {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 0.5rem 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.filter-btn:hover,
.filter-btn.active {
    background: rgba(255, 255, 255, 0.3);
    border-color: rgba(255, 255, 255, 0.5);
}

.action-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
}

.btn-primary {
    background: #f97316;
    color: white;
    border: none;
    padding: 0.75rem 2rem;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    font-size: 1rem;
    transition: background 0.3s;
}

.btn-primary:hover {
    background: #ea580c;
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
    padding: 0.75rem 2rem;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s;
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
}

.scroll-indicator {
    margin-top: 2rem;
    font-size: 1.5rem;
    opacity: 0.7;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

/* Main Content Styles */
.main-content {
    max-width: 1200px;
    margin: 0 auto;
    padding:  3rem 2rem;
}
.main-content h1{
 color: var(--primary-color);
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 41px;

}
.main-content h3{
 font-size:26px ; 
 line-height:34px;
 color:var(--primary-color);
}
.content-section {
    margin-bottom: 4rem;
}

.section-title {
    color: var(--primary-color);
    font-size: 2rem;
    font-weight:700;
    margin-bottom: 1.5rem;
    line-height:41px;
}

.section-content {
    margin-bottom: 2rem;
}

.section-content p {
    margin-bottom: 1rem;
    line-height: 1.8;
    color: #555;
}

.section-content ul {
    margin-left: 2rem;
    margin-bottom: 1rem;
}

.section-content ul li {
    margin-bottom: 0.5rem;
    color: #555;
}

.benefits-list {
    list-style: none;
    margin-left: 0;
}

.benefits-list li {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    font-size: 1.1rem;
}

.benefits-list li i {
    color: var(--primary-color);
    font-size: 1.3rem;
}

/* Table Styles */
.table-container {
    overflow-x: auto;
    margin: 2rem 0;
}


.data-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1.5rem;
    border-radius: 8px;
    overflow: hidden;
    background-color: rgba(56, 92, 149, 1);
    /* box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); */
    color:white;
}

.data-table thead {
    background: #1e3a8a;
    color: white;
}

.data-table th {
    padding: 1rem;
    text-align: left;
    font-weight: 600;
}

.data-table td {
    padding: 1rem;
    border-bottom: 1px solid #e5e7eb;
    color: white;
    background: linear-gradient(0deg, rgba(25, 58, 106, 0.28), rgba(25, 58, 106, 0.28)),linear-gradient(0deg, rgba(25, 58, 106, 0), rgba(25, 58, 106, 0));

    /* background: white; */
}

.data-table tbody tr:hover td {
    /* background: #f9fafb; */
}

.data-table tbody tr:last-child td {
    border-bottom: none;
}

.disclaimer {
    color: #dc2626;
    font-weight: 500;
    margin-top: 1rem;
    padding: 1rem;
    background: #fef2f2;
    border-left: 4px solid #dc2626;
    border-radius: 4px;
}

.btn-view-more {
    background: #f97316;
    color: white;
    border: none;
    padding: 0.75rem 2rem;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.3s;
    display: block;
    margin: 1rem auto 0;
}

.btn-view-more:hover {
    background: #ea580c;
}

/* FAQ Styles */
.faq-section {
    margin-bottom: 2rem;
}

.faq-title-img{
    display: flex;
    justify-content: space-between;

}
.faq-section .faq-title-img .faq-image{
    background-image: url('/images/oc-on-the-laptop.png');
    background-size: cover;
    height: 130px;
    width: 150px;
    /* background-color: #333; */
}
.faq-container {
    margin-top: 2rem;
}

.faq-item {
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    margin-bottom: 1rem;
    overflow: hidden;
    transition: box-shadow 0.3s;
}

.faq-item:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.25rem;
    background: #f9fafb;
    cursor: pointer;
    font-weight: 600;
    color: var(--primary-color);
}

.faq-question i {
    color: var(--primary-color);
    transition: transform 0.3s;
}

.faq-item.active .faq-question i {
    transform: rotate(45deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
    padding: 0 1.25rem;
}

.faq-item.active .faq-answer {
    max-height: 500px;
    padding: 1.25rem;
}

.faq-answer p {
    color: #555;
    line-height: 1.8;
}

.faq-item .faq-answer {
    display: none;
}

.faq-item.active .faq-answer {
    display: block;
}
.interlink{
    background-color:var(--primary-color);
    padding:.5rem;
    border-radius:8px;
}
.interlink button{
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border: 1px solid rgba(255, 255, 255, 0.3);
    padding: 0.5rem 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 0.9rem;
    margin-bottom:.5rem;
}
@media (max-width: 768px) {
    .top-bar {
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
    }
    
    .nav-menu {
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
    }
    
    .header-icons {
        gap: 1rem;
    }
    
    .hero-section {
        padding: 2rem 1rem 3rem;
    }
    
    .main-title {
        font-size: 1.8rem;
    }
    
    .hero-description {
        font-size: 1rem;
    }
    
    .search-container {
        padding: 1.5rem;
    }
    
    .search-bar {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .search-bar input {
        width: 100%;
    }
    
    .search-btn-main {
        width: 100%;
    }
    
    .filter-buttons {
        gap: 0.5rem;
    }
    
    .filter-btn {
        padding: 0.4rem 0.8rem;
        font-size: 0.85rem;
    }
    
    .action-buttons {
        flex-direction: column;
        width: 100%;
    }
    
    .btn-primary,
    .btn-secondary {
        width: 100%;
    }
    
    .main-content {
        padding: 2rem 1rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    .data-table {
        font-size: 0.9rem;
    }
    
    .data-table th,
    .data-table td {
        padding: 0.75rem 0.5rem;
    }
    
    
     .faq-image{
        display: none;
    }
    .interlink button{
        padding: .5rem .8rem;
    }
}

@media (max-width: 480px) {
    .interlink button{
        padding: .5rem .8rem;
    }
    .main-title {
        font-size: 1.5rem;
    }
    
    .hero-description {
        font-size: 0.9rem;
    }
    
    .section-title {
        font-size: 1.25rem;
    }
    
    .data-table {
        font-size: 0.8rem;
    }
    
    .data-table th,
    .data-table td {
        padding: 0.5rem 0.25rem;
    }
    
    .filter-buttons {
        justify-content: flex-start;
    }
    
    .filter-btn {
        font-size: 0.7rem;
        padding: 0.35rem 0.5rem;
    }
}


</style>
@endpush
@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

<script>
$(document).ready(function () {

    // FAQ Toggle
    $('.faq-item .faq-question').on('click', function () {
        $('.faq-item').removeClass('active');
        $(this).closest('.faq-item').addClass('active');
    });

    let searchTimeout;
    const searchUrl = '/accounting-standards/search';

    // Search Button
    $(document).on('click', '#searchBtn, #searchBtnAction', function(e) {
        e.preventDefault();
        const searchTerm = $('#contentsearchInput').val().trim();
        clearTimeout(searchTimeout);

        if (searchTerm === '') {
            $('#searchResultsContainer').hide();
            $('#searchResultsBody').empty();
            $('.scroll-indicator').show();
            return;
        }

        performSearch(searchTerm);
    });

    // Clear Button
    $(document).on('click', '#clearBtn', function(e) {
        e.preventDefault();
        $('#contentsearchInput').val('').focus();
        $('#searchResultsContainer').hide();
        $('#searchResultsBody').empty();
        $('.scroll-indicator').show();
        clearTimeout(searchTimeout);
    });

    // Enter Key
    $(document).on('keypress', '#contentsearchInput', function(e) {
        if (e.which === 13) {
            e.preventDefault();
            const searchTerm = $(this).val().trim();
            clearTimeout(searchTimeout);

            if (searchTerm === '') {
                $('#searchResultsContainer').hide();
                $('#searchResultsBody').empty();
                $('.scroll-indicator').show();
                return;
            }

            performSearch(searchTerm);
        }
    });

    function performSearch(searchTerm) {
        const resultsBody = $('#searchResultsBody');
        const resultsContainer = $('#searchResultsContainer');

        if (!searchTerm) {
            resultsContainer.hide();
            resultsBody.empty();
            $('.scroll-indicator').show();
            return;
        }

        // Loading
        resultsBody.html('<tr><td colspan="2" style="text-align:center;padding:1.5rem;color:#666;">Loading...</td></tr>');
        resultsContainer.show();
        $('.scroll-indicator').hide();

        $.ajax({
            url: searchUrl,
            method: 'GET',
            data: { search: searchTerm },
            dataType: 'json',

            success: function(response) {

                if (response.success && response.data.length > 0) {
                    resultsBody.empty();

                    response.data.forEach(function(item) {

                        const name = item['Standard Name'] || '';
                        const number = item['Standard No'] || '';
                        const slug = item['Slug'] || '';

                        if (name || number) {
                            const row = `
                                <tr>
                                     <td>
                                        <a href="/accounting-standards/${slug}">
                                            ${escapeHtml(number)}
                                        </a>
                                    </td>
                                    <td>${escapeHtml(name)}</td>
                                   
                                </tr>
                            `;
                            resultsBody.append(row);
                        }
                    });

                    resultsContainer.show();

                    $('html, body').animate({
                        scrollTop: resultsContainer.offset().top - 100
                    }, 300);

                } else {
                    resultsBody.html(
                        '<tr><td colspan="2" style="text-align:center;padding:1.5rem;color:#666;">No results found for "' 
                        + escapeHtml(searchTerm) + '"</td></tr>'
                    );
                    resultsContainer.show();
                }
            },

            error: function(xhr) {
                let errorMsg = 'Error loading results. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg = xhr.responseJSON.message;
                }

                resultsBody.html(
                    '<tr><td colspan="2" style="text-align:center;padding:2rem;color:#dc2626;">' 
                    + errorMsg + '</td></tr>'
                );

                resultsContainer.show();
            }
        });
    }

    function escapeHtml(text) {
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.toString().replace(/[&<>"']/g, m => map[m]);
    }

});
</script>
@endpush