@extends('layouts.app')

@section('title', 'Terms and Conditions - Patron Accounting LLP')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <h1 class="mb-4">Terms and Conditions</h1>
            
            <div class="content-section">
                <p class="lead">Welcome to PatronAccounting.com. PatronAccounting.com is owned and managed by Patron Accounting LLP (hereinafter referred to as PA). If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern PatronAccounting.com/PA relationship with you in relation to this website.</p>

                <p>The term 'PA' or 'us' or 'we' refers to the owner of the website whose registered office is Unit No. 221, II Floor, JMD Megapolis, Sohna Rd, Sector 48, Gurugram, Haryana 122018, India. Our company registration number is AAN-9334. The term 'you' refers to the user or viewer of our website.</p>

                <h2 class="mt-5 mb-3">Terms of Use</h2>
                
                <ul class="terms-list">
                    <li class="mb-3">This website is governed by its terms of use.</li>
                    
                    <li class="mb-3">The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
                    
                    <li class="mb-3">Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
                    
                    <li class="mb-3">Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
                    
                    <li class="mb-3">This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions. All trademarks reproduced in this website which are not the property of, or licensed to PA are acknowledged on the website.</li>
                    
                    <li class="mb-3">Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence. From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li>
                    
                    <li class="mb-3">You may not create a link to this website from another website or document without PA's prior written consent. Your use of this website and any dispute arising out of such use of the website is subject to the laws of India or regulatory authority within the country of India.</li>
                </ul>

                <div class="alert alert-info mt-5">
                    <p class="mb-0">If you have any questions about the terms and conditions, feel free to <a href="{{ route('contact.show') }}" class="alert-link">contact us</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .content-section {
        font-size: 1.05rem;
        line-height: 1.8;
    }
    
    .terms-list {
        list-style: none;
        padding-left: 0;
    }
    
    .terms-list li {
        padding-left: 30px;
        position: relative;
    }
    
    .terms-list li:before {
        content: "•";
        position: absolute;
        left: 10px;
        color: #007bff;
        font-size: 1.5rem;
        line-height: 1.2;
    }
    
    h2 {
        color: #333;
        font-weight: 600;
    }
</style>
@endsection
