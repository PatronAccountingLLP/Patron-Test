@extends('layouts.app')

@section('title', $page->meta_title ?? $page->title ?? 'Registration')
@section('meta_description', $page->meta_description ?? $page->excerpt ?? '')

@section('content')
<style>
    .noc-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .noc-form-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .noc-form-section {
        display: flex;
        flex-direction: column;
    }

    .noc-title {
        font-size: 24px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 10px;
    }

    .noc-subtitle {
        font-size: 14px;
        color: #666;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        font-weight: 500;
        color: #333;
        margin-bottom: 8px;
    }

    .form-group label .required {
        color: #ff0000;
        margin-left: 2px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: #ff6633;
        box-shadow: 0 0 0 3px rgba(255, 102, 51, 0.1);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 80px;
    }

    .noc-certificate {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        border: 1px solid #e0e0e0;
    }

    .certificate-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .certificate-title {
        font-size: 20px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 5px;
    }

    .certificate-subtitle {
        font-size: 14px;
        color: #666;
    }

    .certificate-content {
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 14px;
        line-height: 1.8;
        color: #333;
    }

    .certificate-content p {
        margin-bottom: 15px;
    }

    .certificate-content strong {
        color: #000;
        font-weight: 600;
    }

    .signature-section {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 30px;
    }

    .signature-item {
        text-align: left;
    }

    .signature-label {
        font-size: 13px;
        font-weight: 600;
        color: #333;
        margin-bottom: 5px;
    }

    .signature-value {
        font-size: 13px;
        color: #666;
    }

    .btn-submit {
        background: #ff6633;
        color: #fff;
        padding: 15px 40px;
        border: none;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        margin-top: 20px;
    }

    .btn-submit:hover {
        background: #ff5522;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 102, 51, 0.3);
    }

    .btn-submit:disabled {
        background: #ccc;
        cursor: not-allowed;
        transform: none;
    }

    .alert {
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert-error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .error-message {
        color: #dc3545;
        font-size: 12px;
        margin-top: 5px;
        display: none;
    }

    .error-message.show {
        display: block;
    }

    /* WhatsApp Modal Styles */
    .whatsapp-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        animation: fadeIn 0.3s ease;
    }

    .whatsapp-modal.show {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whatsapp-modal-content {
        background-color: #fff;
        border-radius: 15px;
        padding: 40px;
        max-width: 450px;
        width: 90%;
        position: relative;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        animation: slideUp 0.3s ease;
    }

    .whatsapp-modal-close {
        position: absolute;
        right: 20px;
        top: 20px;
        font-size: 28px;
        font-weight: 300;
        color: #999;
        background: none;
        border: none;
        cursor: pointer;
        line-height: 1;
        transition: color 0.3s ease;
    }

    .whatsapp-modal-close:hover {
        color: #333;
    }

    .whatsapp-modal-title {
        font-size: 18px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 30px;
        text-align: center;
        padding-right: 20px;
    }

    .whatsapp-input-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
        background: #f5f5f5;
        border-radius: 10px;
        padding: 15px 20px;
        margin-bottom: 10px;
    }

    .whatsapp-icon {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whatsapp-input {
        flex: 1;
        border: none;
        background: transparent;
        font-size: 16px;
        color: #333;
        outline: none;
    }

    .whatsapp-input::placeholder {
        color: #999;
    }

    .whatsapp-error {
        display: block;
        color: #dc3545;
        font-size: 13px;
        margin-bottom: 20px;
        min-height: 18px;
    }

    .whatsapp-submit-btn {
        width: 100%;
        background: #ff6633;
        color: #fff;
        padding: 15px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .whatsapp-submit-btn:hover {
        background: #ff5522;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 102, 51, 0.3);
    }

    .whatsapp-submit-btn:disabled {
        background: #ccc;
        cursor: not-allowed;
        transform: none;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .noc-info-section {
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    .noc-info-content {
        max-width: 100%;
    }

    .noc-info-content p {
        font-size: 14px;
        line-height: 1.8;
        color: #333;
        margin-bottom: 20px;
    }

    .noc-info-heading {
        font-size: 20px;
        font-weight: 600;
        color: #1a1a1a;
        margin: 30px 0 20px 0;
    }

    .noc-format-box {
        background: #f9f9f9;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 30px;
        margin-top: 20px;
    }

    .noc-format-title {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 25px;
    }

    .noc-format-text {
        font-size: 14px;
        line-height: 1.8;
        color: #333;
        margin-bottom: 15px;
    }

    @media (max-width: 991px) {
        .noc-form-wrapper {
            grid-template-columns: 1fr;
        }

        .signature-section {
            grid-template-columns: 1fr;
        }

        .noc-info-section {
            padding: 20px;
        }

        .noc-format-box {
            padding: 20px;
        }

        .whatsapp-modal-content {
            max-width: 90%;
            padding: 30px 20px;
        }

        .whatsapp-modal-title {
            font-size: 16px;
        }
    }
</style>

<div class="noc-container">
    <div id="alertContainer"></div>

    <div class="noc-form-wrapper">
        <!-- Left Section - Form -->
        <div class="noc-form-section">
            <h1 class="noc-title">Download NOC Format for GST registration</h1>
            <p class="noc-subtitle">Create and download free rent NOC format for GST registration in India.</p>

            <form id="nocRegistrationForm">
                @csrf
                
                <div class="form-group">
                    <label>Property Owner Name<span class="required">*</span></label>
                    <input type="text" name="property_owner_name" class="form-control" required>
                    <span class="error-message"></span>
                </div>

                <div class="form-group">
                    <label>Completed Address of the property<span class="required">*</span></label>
                    <textarea name="property_address" class="form-control" required></textarea>
                    <span class="error-message"></span>
                </div>

                <div class="form-group">
                    <label>Business name/ LLP/Company name for which GST number is required<span class="required">*</span></label>
                    <input type="text" name="business_name" class="form-control" required>
                    <span class="error-message"></span>
                </div>

                <div class="form-group">
                    <label>Authorized person name<span class="required">*</span></label>
                    <input type="text" name="authorized_person_name" class="form-control" required>
                    <span class="error-message"></span>
                </div>

                <div class="form-group">
                    <label>Owner/Director/Partner<span class="required">*</span></label>
                    <input type="text" name="owner_director_partner" class="form-control" required>
                    <span class="error-message"></span>
                </div>

                <div class="form-group">
                    <label>Relation (like son/daughter)<span class="required">*</span></label>
                    <input type="text" name="relation" class="form-control" required>
                    <span class="error-message"></span>
                </div>

                <div class="form-group">
                    <label>Bill to be supplied to GST authorities (like BSNL bill, Electricity bill)<span class="required">*</span></label>
                    <input type="text" name="bill_type" class="form-control" required>
                    <span class="error-message"></span>
                </div>

                <div class="form-group">
                    <label>State<span class="required">*</span></label>
                    <input type="text" name="state" class="form-control" required>
                    <span class="error-message"></span>
                </div>

                <div class="form-group">
                    <label>Date on which NOC will be signed<span class="required">*</span></label>
                    <input type="date" name="noc_sign_date" class="form-control" required>
                    <span class="error-message"></span>
                </div>

                <button type="button" class="btn-submit" id="downloadPdfBtn">
                    <span class="btn-text">Download your document</span>
                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                </button>
            </form>
        </div>

        <!-- Right Section - Certificate Preview -->
        <div class="noc-form-section">
            <div class="noc-certificate">
                <div class="certificate-header">
                    <h2 class="certificate-title">TO WHOMSOEVER IT MAY CONCERN</h2>
                    <p class="certificate-subtitle"><strong>Sub:</strong> No Objection Certificate</p>
                </div>

                <div class="certificate-content">
                    <p>I, <strong>Aaryan Kumar</strong> owner of the property situated at <strong>6-146 Saket, New-Delhi</strong>, hereby declare and confirm that I have owned the said property, also providing the latest <strong>BSNL</strong> issued by the New Delhi state. I give my consent to business named <strong>Patron Accounting</strong> where my Son named <strong>AK</strong> acting as Director to use this premises for the office purposes.</p>

                    <p>I hereby convey that I have no objection for AK getting GST Registration Number on my premises for business named Dash Dot Elisa. I hereby declare that I have given this No Objection Certificate with my free consent.</p>

                    <p><strong>Signature:</strong></p>
                </div>

                <div class="signature-section">
                    <div class="signature-item">
                        <div class="signature-label">Name of Owner:</div>
                        <div class="signature-value">Aaryan Kumar</div>
                    </div>
                    <div class="signature-item">
                        <div class="signature-label">Place:</div>
                        <div class="signature-value">New Delhi</div>
                    </div>
                    <div class="signature-item">
                        <div class="signature-label">Date:</div>
                        <div class="signature-value">08 October 2025</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp Number Modal -->
    <div class="whatsapp-modal" id="whatsappModal">
        <div class="whatsapp-modal-content">
            <button class="whatsapp-modal-close" id="closeModal">&times;</button>
            <h3 class="whatsapp-modal-title">Enter WhatsApp number to get your document</h3>
            
            <div class="whatsapp-input-wrapper">
                <div class="whatsapp-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#25D366">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                </div>
                <input type="tel" id="whatsappNumber" class="whatsapp-input" placeholder="Enter your WhatsApp no." maxlength="10">
            </div>
            <span class="whatsapp-error" id="whatsappError"></span>
            
            <button type="button" class="whatsapp-submit-btn" id="sendWhatsAppBtn">
                <span class="whatsapp-btn-text">Send Document</span>
                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <!-- NOC Format Information Section -->
    <div class="noc-info-section">
        <div class="noc-info-content">
            <p>Bizfoc provides noc fromat for GST registration which will assit you to generate it in less than one minutes. It will save time and reduce the chances of error.</p>
            
            <p>NOC for GST registration is an important document which is required for GST registration. Normally, company operate from premises which is owned by director or shareholders of the company. As company is a separate legal entity which needs a noc from the owner of premises while doing GST registration. The NOC act as document by which owner gives permission to the company to operate from the said premises. The noc format for GST registration contains details of owner of premises, pan of owner, name of company, address of the premises, proof of ownership, relation with company, date, city & signature of the owner.</p>
            
            <h3 class="noc-info-heading">NOC Format for GST registration</h3>
            
            <div class="noc-format-box">
                <h4 class="noc-format-title">TO WHOMSOEVER IT MAY CONCERN</h4>
                
                <p class="noc-format-text">I, _____________ having PAN _____________ hereby declare that I am owner of following address:</p>
                
                <p class="noc-format-text">Address: _____________</p>
                
                <p class="noc-format-text">We hereby confirm that we have "No Objection" in giving full consent for using the above address as the Principle Place of Business Address referred in Companies Act for GST Registrations and licenses with statutory authorities in the course of its business. Being one of the _____________ and the Company the above premises has been provided without any consideration to the company.</p>
                
                <p class="noc-format-text">This however does not confer any title in favour of this company, as being the owner of the property /premises the Client is not permitted to sub-let the address of the designated centre as their registered/principle address, except as provided in the registered rent agreement and/or letter from client arrangements done by the Client with any other party whatsoever. Any defaults towards all statutory and /or other compliances under Indian law and/or the local regulations are the sole responsibility of the Client.</p>
                
                <p class="noc-format-text">The client clearly agrees to indemnify us for any/all claims made by the statutory or any other authorities arising out of the client's use/misuse/divulge/arrangement of and to clear all dues (utility bill name/ ownership proof document name) in my name is submitted as the proof of address.</p>
                
                <p class="noc-format-text">That the use of address shall be discontinued by the client immediately pursuant to the expiry or termination of the agreement. A copy of the (utility bill name/ ownership proof document name) in my name is submitted as the proof of address.</p>
                
                <p class="noc-format-text">Yours faithfully<br>Signature:</p>
                
                <p class="noc-format-text">Name of Owner: _____________<br>Place: _____________<br>Date: _____________</p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('nocRegistrationForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const btnText = downloadPdfBtn.querySelector('.btn-text');
    const spinner = downloadPdfBtn.querySelector('.spinner-border');
    const alertContainer = document.getElementById('alertContainer');

    // Real-time certificate preview update
    const formInputs = form.querySelectorAll('input, textarea');
    formInputs.forEach(input => {
        input.addEventListener('input', updateCertificatePreview);
    });

    function updateCertificatePreview() {
        const propertyOwnerName = form.querySelector('[name="property_owner_name"]').value || 'Aaryan Kumar';
        const propertyAddress = form.querySelector('[name="property_address"]').value || '6-146 Saket, New-Delhi';
        const businessName = form.querySelector('[name="business_name"]').value || 'Patron Accounting';
        const authorizedPerson = form.querySelector('[name="authorized_person_name"]').value || 'AK';
        const ownerDirectorPartner = form.querySelector('[name="owner_director_partner"]').value || 'Director';
        const relation = form.querySelector('[name="relation"]').value || 'Son';
        const billType = form.querySelector('[name="bill_type"]').value || 'BSNL';
        const state = form.querySelector('[name="state"]').value || 'New Delhi';
        const nocSignDate = form.querySelector('[name="noc_sign_date"]').value;
        
        // Update certificate content
        const certificateContent = document.querySelector('.certificate-content');
        const formattedDate = nocSignDate ? new Date(nocSignDate).toLocaleDateString('en-IN', { 
            day: '2-digit', 
            month: 'long', 
            year: 'numeric' 
        }) : '08 October 2025';

        certificateContent.innerHTML = `
            <p>I, <strong>${propertyOwnerName}</strong> owner of the property situated at <strong>${propertyAddress}</strong>, hereby declare and confirm that I have owned the said property, also providing the latest <strong>${billType}</strong> issued by the ${state} state. I give my consent to business named <strong>${businessName}</strong> where my ${relation} named <strong>${authorizedPerson}</strong> acting as ${ownerDirectorPartner} to use this premises for the office purposes.</p>

            <p>I hereby convey that I have no objection for ${authorizedPerson} getting GST Registration Number on my premises for business named ${businessName}. I hereby declare that I have given this No Objection Certificate with my free consent.</p>

            <p><strong>Signature:</strong></p>
        `;

        // Update signature section
        document.querySelectorAll('.signature-value')[0].textContent = propertyOwnerName;
        document.querySelectorAll('.signature-value')[1].textContent = state || 'New Delhi';
        document.querySelectorAll('.signature-value')[2].textContent = formattedDate;
    }

    // WhatsApp Modal Elements
    const whatsappModal = document.getElementById('whatsappModal');
    const closeModal = document.getElementById('closeModal');
    const whatsappNumber = document.getElementById('whatsappNumber');
    const whatsappError = document.getElementById('whatsappError');
    const sendWhatsAppBtn = document.getElementById('sendWhatsAppBtn');
    const whatsappBtnText = sendWhatsAppBtn.querySelector('.whatsapp-btn-text');
    const whatsappSpinner = sendWhatsAppBtn.querySelector('.spinner-border');

    // Show modal when clicking download button
    downloadPdfBtn.addEventListener('click', function() {
        // Validate form first
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // Clear previous errors
        document.querySelectorAll('.error-message').forEach(el => {
            el.classList.remove('show');
            el.textContent = '';
        });
        document.querySelectorAll('.form-control').forEach(el => {
            el.style.borderColor = '#ddd';
        });

        // Show WhatsApp modal
        whatsappModal.classList.add('show');
        whatsappNumber.value = '';
        whatsappError.textContent = '';
    });

    // Close modal
    closeModal.addEventListener('click', function() {
        whatsappModal.classList.remove('show');
    });

    // Close modal when clicking outside
    whatsappModal.addEventListener('click', function(e) {
        if (e.target === whatsappModal) {
            whatsappModal.classList.remove('show');
        }
    });

    // Only allow numbers in WhatsApp input
    whatsappNumber.addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
        whatsappError.textContent = '';
    });

    // Send document to WhatsApp
    sendWhatsAppBtn.addEventListener('click', function() {
        const phoneNumber = whatsappNumber.value.trim();

        // Validate WhatsApp number
        if (!phoneNumber) {
            whatsappError.textContent = 'Please enter your WhatsApp number';
            return;
        }

        if (phoneNumber.length !== 10) {
            whatsappError.textContent = 'Please enter a valid 10-digit mobile number';
            return;
        }

        // Show loading state
        sendWhatsAppBtn.disabled = true;
        whatsappBtnText.classList.add('d-none');
        whatsappSpinner.classList.remove('d-none');

        // Prepare form data with WhatsApp number
        const formData = new FormData(form);
        formData.append('whatsapp_number', phoneNumber);
        
        // Send request to send PDF via WhatsApp
        fetch('{{ route('frontend.noc-certificate-download') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Close modal
                whatsappModal.classList.remove('show');
                
                // Show success message
                showAlert('success', data.message || 'NOC Certificate has been sent to your WhatsApp number successfully!');
            } else {
                throw data;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            
            if (error.errors) {
                // Display validation errors
                Object.keys(error.errors).forEach(field => {
                    const input = form.querySelector(`[name="${field}"]`);
                    if (input) {
                        input.style.borderColor = '#dc3545';
                        const errorMsg = input.parentElement.querySelector('.error-message');
                        if (errorMsg) {
                            errorMsg.textContent = error.errors[field][0];
                            errorMsg.classList.add('show');
                        }
                    }
                });
                whatsappModal.classList.remove('show');
                showAlert('error', 'Please correct the errors in the form.');
            } else {
                whatsappError.textContent = error.message || 'An error occurred. Please try again.';
            }
        })
        .finally(() => {
            // Reset button state
            sendWhatsAppBtn.disabled = false;
            whatsappBtnText.classList.remove('d-none');
            whatsappSpinner.classList.add('d-none');
        });
    });

    function showAlert(type, message) {
        const alertClass = type === 'success' ? 'alert-success' : 'alert-error';
        const alertHTML = `
            <div class="alert ${alertClass}">
                ${message}
            </div>
        `;
        alertContainer.innerHTML = alertHTML;

        // Auto-hide after 5 seconds
        setTimeout(() => {
            alertContainer.innerHTML = '';
        }, 5000);
    }
});
</script>
@endsection
