@extends('layouts.app')

@section('title', 'Privacy Policy - Patron Accounting LLP')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <h1 class="mb-4">Privacy Policy</h1>
            
            <div class="content-section">
                <p class="lead">This privacy policy outlines how Patron Accounting (PA) collects, uses, and protects any information you provide when using this website. PA is committed to ensuring your privacy is protected. Should we ask you to provide certain information by which you can be identified while using this website, rest assured that it will only be used in accordance with this privacy statement.</p>

                <p>PA may update this policy from time to time by revising this page. You are encouraged to check this page periodically to ensure you are happy with any changes. This policy is effective as of 04.01.2019.</p>

                <h2 class="mt-5 mb-3">Information We Collect</h2>
                <p>We may collect the following information:</p>
                
                <ul class="info-list">
                    <li class="mb-2">Name and job title</li>
                    <li class="mb-2">Contact information, including email address and phone number</li>
                    <li class="mb-2">Demographic information, such as city, postcode, preferences, and interests</li>
                    <li class="mb-2">Other information relevant to service inquiries, customer surveys, and offers</li>
                </ul>

                <h2 class="mt-5 mb-3">How We Use the Information</h2>
                <p>We require this information to understand your needs and provide you with the best service. Specifically, we use it for the following reasons:</p>
                
                <ul class="info-list">
                    <li class="mb-2">Internal record keeping</li>
                    <li class="mb-2">Improving our products and services</li>
                    <li class="mb-2">Periodically sending promotional emails about new products, special offers, or other information that may interest you, using the email address you have provided</li>
                    <li class="mb-2">Contacting you for feedback or market research purposes via email, phone, fax, or mail</li>
                    <li class="mb-2">Customizing the website according to your interests</li>
                </ul>

                <h2 class="mt-5 mb-3">Security</h2>
                <p>We are committed to ensuring that your information is secure. To prevent unauthorized access or disclosure, we have implemented suitable physical, electronic, and managerial procedures to safeguard and secure the information we collect online.</p>

                <h2 class="mt-5 mb-3">Use of Cookies</h2>
                <p>A cookie is a small file that asks permission to be placed on your computer's hard drive. Once you agree, the file is added, and the cookie helps analyze web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual, tailoring operations to your preferences by remembering information about your likes and dislikes.</p>
                
                <p>We use traffic log cookies to identify which pages are being used, helping us analyze data about webpage traffic and improve our website to better meet customer needs. This information is used solely for statistical analysis and is removed from the system afterward.</p>
                
                <p>Overall, cookies help us provide you with a better website by enabling us to monitor which pages are useful and which are not. A cookie does not grant us access to your computer or any information about you, other than the data you choose to share with us.</p>
                
                <p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can modify your browser settings to decline them if you prefer. However, this may prevent you from taking full advantage of the website.</p>

                <h2 class="mt-5 mb-3">Links to Other Websites</h2>
                <p>Our website may contain links to other websites of interest. However, once you leave our site using these links, please note that we do not have control over those external websites. Therefore, we cannot be responsible for the protection and privacy of any information you provide while visiting such sites, as they are not governed by this privacy statement. You should exercise caution and review the privacy policies of the websites in question.</p>

                <h2 class="mt-5 mb-3">Controlling Your Personal Information</h2>
                <p>You may choose to restrict the collection or use of your personal information in the following ways:</p>
                
                <ul class="info-list">
                    <li class="mb-3">When filling out a form on the website, look for the option to indicate that you do not want the information to be used for promotional purposes. If such an option is not available, you may choose not to fill in the form. However, by submitting an inquiry form, you acknowledge that PA may send you promotional emails and materials from time to time.</li>
                    <li class="mb-3">If you previously agreed to allow us to use your personal information for promotional purposes, you may change your preference at any time by writing to or emailing us at <a href="mailto:sales@patronaccounting.com">sales@patronaccounting.com</a>.</li>
                </ul>
                
                <p>We will not sell, distribute, or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties we believe you may find interesting.</p>

                <h2 class="mt-5 mb-3">Inquiries Regarding Our Privacy Policy</h2>
                <p>If you have any questions about this privacy policy, feel free to <a href="{{ route('contact.show') }}">contact us</a>.</p>

                <div class="alert alert-info mt-5">
                    <p class="mb-0"><strong>Note:</strong> This privacy policy is effective as of 04.01.2019. We may update this policy periodically, and any changes will be reflected on this page.</p>
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
    
    .info-list {
        list-style: none;
        padding-left: 0;
    }
    
    .info-list li {
        padding-left: 30px;
        position: relative;
    }
    
    .info-list li:before {
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
        border-bottom: 2px solid #007bff;
        padding-bottom: 10px;
    }
    
    a {
        color: #007bff;
        text-decoration: none;
    }
    
    a:hover {
        text-decoration: underline;
    }
</style>
@endsection
