@extends('layouts.app')

@section('title', '404 - Page Not Found')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-8 text-center">
            <div class="error-content">
                <!-- 404 Number -->
                <h1 class="display-1 fw-bold" style="font-size: 120px; color: #F26522; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
                    404
                </h1>
                
                <!-- Error Message -->
                <h2 class="mb-4" style="font-family: 'Barlow', sans-serif; font-weight: 700; color: #14365F;">
                    Oops! Page Not Found
                </h2>
                
                <p class="lead mb-4" style="font-family: 'DM Sans', sans-serif; color: #587485; font-size: 18px;">
                    The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
                </p>
                
                <!-- Illustration or Icon -->
                <div class="mb-5">
                    <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="80" fill="#F9F6EE"/>
                        <path d="M70 85C70 79.4772 74.4772 75 80 75C85.5228 75 90 79.4772 90 85C90 90.5228 85.5228 95 80 95C74.4772 95 70 90.5228 70 85Z" fill="#14365F"/>
                        <path d="M110 85C110 79.4772 114.477 75 120 75C125.523 75 130 79.4772 130 85C130 90.5228 125.523 95 120 95C114.477 95 110 90.5228 110 85Z" fill="#14365F"/>
                        <path d="M70 120C70 120 80 135 100 135C120 135 130 120 130 120" stroke="#14365F" stroke-width="4" stroke-linecap="round"/>
                        <circle cx="100" cy="100" r="80" stroke="#F26522" stroke-width="3"/>
                    </svg>
                </div>
                
                <!-- Action Buttons -->
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ url('/') }}" class="btn btn-lg" 
                       style="background-color: #F26522; color: white; font-family: 'DM Sans', sans-serif; font-weight: 600; padding: 12px 30px; border-radius: 50px; border: none; transition: all 0.3s ease;">
                        <i class="bi bi-house-door me-2"></i>Go to Homepage
                    </a>
                    
                    <button onclick="history.back()" class="btn btn-lg" 
                            style="background-color: transparent; color: #14365F; font-family: 'DM Sans', sans-serif; font-weight: 600; padding: 12px 30px; border-radius: 50px; border: 2px solid #14365F; transition: all 0.3s ease;">
                        <i class="bi bi-arrow-left me-2"></i>Go Back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(242, 101, 34, 0.3);
    }
    
    .error-content a:hover {
        text-decoration: underline !important;
    }
    
    @media (max-width: 768px) {
        h1.display-1 {
            font-size: 80px !important;
        }
        
        svg {
            width: 150px;
            height: 150px;
        }
    }
</style>
@endsection
