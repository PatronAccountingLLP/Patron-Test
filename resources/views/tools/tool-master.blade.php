@extends('layouts.app')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Serif+Display&display=swap');

    :root {
        --primary-orange: #FF6B35;
        --primary-orange-dark: #E85A2A;
        --primary-orange-light: #FFF4F0;
        --navy: #1E2A4A;
        --navy-light: #2D3E66;
        --text-dark: #1A1D26;
        --text-muted: #6B7280;
        --text-light: #9CA3AF;
        --bg-cream: #FDFBF7;
        --bg-white: #FFFFFF;
        --border-light: #E8E8E8;
        --success-green: #10B981;
        --error-red: #EF4444;
        --shadow-sm: 0 1px 3px rgba(30, 42, 74, 0.06);
        --shadow-md: 0 4px 20px rgba(30, 42, 74, 0.08);
        --shadow-lg: 0 12px 40px rgba(30, 42, 74, 0.12);
        --shadow-orange: 0 8px 30px rgba(255, 107, 53, 0.25);
        --radius-sm: 8px;
        --radius-md: 12px;
        --radius-lg: 20px;
        --radius-xl: 28px;
    }

    * {
        box-sizing: border-box;
    }

    .download-format-body {
        font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        background: var(--bg-cream);
        min-height: 100vh;
        padding-bottom: 80px;
    }

    /* Hero Banner */
    .download-format-banner {
        background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%);
        padding: 60px 20px 80px;
        position: relative;
        overflow: hidden;
    }

    .download-format-banner::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(255, 107, 53, 0.15) 0%, transparent 70%);
        pointer-events: none;
    }

    .download-format-banner::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -10%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255, 107, 53, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }

   .download-format-body .hero-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 1;
    }

  .download-format-body .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 107, 53, 0.15);
        color: var(--primary-orange);
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
        backdrop-filter: blur(10px);
    }

   .download-format-body .hero-badge svg {
        width: 16px;
        height: 16px;
    }

  .download-format-body .hero-title {
        font-family: 'DM Serif Display', Georgia, serif;
        font-size: clamp(32px, 5vw, 48px);
        font-weight: 400;
        color: #FFFFFF;
        margin-bottom: 16px;
        line-height: 1.2;
    }

   .download-format-body .hero-title span {
        color: var(--primary-orange);
    }

   .download-format-body .hero-subtitle {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.7);
        max-width: 500px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Main Container */
   .download-format-body .download-format-container {
        max-width: 1280px;
        margin: -40px auto 0;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    /* Alert Container */
   .download-format-body .alert-wrapper {
        max-width: 600px;
        margin: 0 auto 20px;
    }

   .download-format-body .alert {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px 20px;
        border-radius: var(--radius-md);
        font-size: 14px;
        font-weight: 500;
        animation: slideDown 0.4s ease;
    }

   .download-format-body .alert-success {
        background: #ECFDF5;
        color: #065F46;
        border: 1px solid #A7F3D0;
    }

    .download-format-body .alert-error {
        background: #FEF2F2;
        color: #991B1B;
        border: 1px solid #FECACA;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Main Grid Layout */
   .download-format-body .download-format-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 32px;
        align-items: start;
    }

    /* Form Card */
   .download-format-body .form-card {
        background: var(--bg-white);
        border-radius: var(--radius-xl);
        padding: 40px;
        box-shadow: var(--shadow-lg);
        border: 1px solid rgba(0, 0, 0, 0.04);
    }

   .download-format-body .form-header {
        margin-bottom: 32px;
    }

   .download-format-body .form-step-indicator {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 16px;
    }

   .download-format-body .step-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--border-light);
        transition: all 0.3s ease;
    }

   .download-format-body .step-dot.active {
        background: var(--primary-orange);
        width: 24px;
        border-radius: 4px;
    }

    .download-format-body .form-title {
        font-size: 22px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

   .download-format-body .form-description {
        font-size: 14px;
        color: var(--text-muted);
        line-height: 1.5;
    }

    /* Form Groups */
   .download-format-body .form-grid {
        display: grid;
        gap: 20px;
    }
     .download-format-body .form-grid h3{
            font-size: 20px !important; 
            font-weight: 600;
        }

   .download-format-body .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

   .download-format-body .form-group {
        position: relative;
    }

   .download-format-body .form-group.full-width {
        grid-column: 1 / -1;
    }

   .download-format-body .form-label {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

   .download-format-body .form-label .required {
        color: var(--error-red);
        font-size: 14px;
    }

   .download-format-body .form-label .label-icon {
        width: 16px;
        height: 16px;
        color: var(--text-light);
    }

   .download-format-body .form-control {
        width: 100%;
        padding: 14px 16px;
        font-family: inherit;
        font-size: 14px;
        color: var(--text-dark);
        background: #F9FAFB;
        border: 2px solid transparent;
        border-radius: var(--radius-md);
        transition: all 0.25s ease;
    }

   .download-format-body .form-control::placeholder {
        color: var(--text-light);
    }

   .download-format-body .form-control:hover {
        background: #F3F4F6;
    }

   .download-format-body .form-control:focus {
        outline: none;
        background: var(--bg-white);
        border-color: var(--primary-orange);
        box-shadow: 0 0 0 4px rgba(255, 107, 53, 0.1);
    }

   .download-format-body .form-control.has-error {
        border-color: var(--error-red);
        background: #FEF2F2;
    }

   .download-format-body textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }

   .download-format-body .error-message {
        display: none;
        align-items: center;
        gap: 6px;
        margin-top: 6px;
        font-size: 12px;
        color: var(--error-red);
    }

  .download-format-body  .error-message.show {
        display: flex;
    }

   .download-format-body .error-message svg {
        width: 14px;
        height: 14px;
        flex-shrink: 0;
    }

    /* Select Dropdown */
  .download-format-body  .select-wrapper {
        position: relative;
    }

   .download-format-body .select-wrapper::after {
        content: '';
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 6px solid var(--text-light);
        pointer-events: none;
    }

  .download-format-body  .form-select {
        appearance: none;
        cursor: pointer;
        padding-right: 40px;
    }

    /* Submit Button */
  .download-format-body  .btn-submit {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 18px 32px;
        margin-top: 12px;
        font-family: inherit;
        font-size: 16px;
        font-weight: 700;
        color: #FFFFFF;
        background: linear-gradient(135deg, var(--primary-orange) 0%, var(--primary-orange-dark) 100%);
        border: none;
        border-radius: var(--radius-lg);
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: var(--shadow-orange);
    }

  .download-format-body  .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 35px rgba(255, 107, 53, 0.35);
    }

   .download-format-body .btn-submit:active {
        transform: translateY(0);
    }

  .download-format-body  .btn-submit:disabled {
        background: #D1D5DB;
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
    }

  .download-format-body  .btn-submit svg {
        width: 20px;
        height: 20px;
    }

   .download-format-body .spinner {
        width: 20px;
        height: 20px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-top-color: #FFFFFF;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Download Options */
  .download-format-body  .download-options {
        display: flex;
        gap: 12px;
        margin-top: 16px;
    }

   .download-format-body .download-option {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 14px 16px;
        font-family: inherit;
        font-size: 14px;
        font-weight: 600;
        background: var(--bg-white);
        border: 2px solid var(--border-light);
        border-radius: var(--radius-md);
        cursor: pointer;
        transition: all 0.25s ease;
    }

  .download-format-body  .download-option:hover {
        border-color: var(--primary-orange);
        background: var(--primary-orange-light);
    }

   .download-format-body .download-option svg {
        width: 18px;
        height: 18px;
    }

    .download-option.pdf svg { color: #EF4444; }
    .download-option.word svg { color: #2563EB; }

    /* Preview Card */
   .download-format-body .preview-card {
        position: sticky;
        top: 24px;
    }

   .download-format-body .preview-wrapper {
        background: var(--bg-white);
        border-radius: var(--radius-xl);
        padding: 32px;
        box-shadow: var(--shadow-lg);
        border: 1px solid rgba(0, 0, 0, 0.04);
    }

  .download-format-body  .preview-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px;
        padding-bottom: 16px;
        border-bottom: 1px solid var(--border-light);
    }

  .download-format-body  .preview-title-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }

  .download-format-body  .preview-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-orange-light);
        border-radius: var(--radius-sm);
    }

  .download-format-body  .preview-icon svg {
        width: 20px;
        height: 20px;
        color: var(--primary-orange);
    }

   .download-format-body .preview-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
    }

   .download-format-body .preview-subtitle {
        font-size: 12px;
        color: var(--text-muted);
    }

   .download-format-body .live-badge {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 6px 12px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--success-green);
        background: #ECFDF5;
        border-radius: 50px;
    }

   .download-format-body .live-dot {
        width: 6px;
        height: 6px;
        background: var(--success-green);
        border-radius: 50%;
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    /* Certificate Preview */
   .download-format-body .certificate-preview {
        background: linear-gradient(180deg, #FAFAFA 0%, #F5F5F5 100%);
        border: 1px solid #E5E5E5;
        border-radius: var(--radius-md);
        padding: 28px;
        position: relative;
    }

   .download-format-body .certificate-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-30deg);
        font-size: 60px;
        font-weight: 800;
        color: rgba(0, 0, 0, 0.03);
        pointer-events: none;
        white-space: nowrap;
    }

   .download-format-body .certificate-doc-header {
        text-align: center;
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 2px solid var(--navy);
        position: relative;
    }

   .download-format-body .certificate-doc-title {
        font-family: 'DM Serif Display', Georgia, serif;
        font-size: 18px;
        font-weight: 400;
        color: var(--navy);
        margin-bottom: 4px;
    }

   .download-format-body .certificate-doc-subtitle {
        font-size: 13px;
        color: var(--text-muted);
    }

   .download-format-body .certificate-doc-subtitle strong {
        color: var(--text-dark);
    }

   .download-format-body .certificate-body {
        position: relative;
        z-index: 1;
    }

   .download-format-body .certificate-paragraph {
        font-size: 13px;
        line-height: 1.8;
        color: var(--text-dark);
        margin-bottom: 16px;
        text-align: justify;
    }

   .download-format-body .certificate-paragraph strong {
        color: var(--navy);
        font-weight: 600;
        background: linear-gradient(180deg, transparent 60%, rgba(255, 107, 53, 0.15) 60%);
        padding: 0 2px;
    }

   .download-format-body .certificate-signature {
        margin-top: 28px;
        padding-top: 20px;
        border-top: 1px dashed var(--border-light);
    }

   .download-format-body .signature-label {
        font-size: 12px;
        font-weight: 600;
        color: var(--text-muted);
        margin-bottom: 4px;
    }

   .download-format-body .signature-line {
        width: 120px;
        height: 1px;
        background: var(--text-dark);
        margin-top: 40px;
    }

   .download-format-body .certificate-footer {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-top: 24px;
        padding-top: 16px;
        border-top: 1px solid var(--border-light);
    }

   .download-format-body .footer-item {
        text-align: center;
    }

   .download-format-body .footer-item-label {
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--text-light);
        margin-bottom: 4px;
    }

   .download-format-body .footer-item-value {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
    }

    /* WhatsApp Modal */
   .download-format-body .modal-overlay {
        display: none;
        position: fixed;
        z-index: 1000;
        inset: 0;
        background: rgba(30, 42, 74, 0.6);
        backdrop-filter: blur(4px);
        animation: fadeIn 0.3s ease;
    }

   .download-format-body .modal-overlay.show {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

   .download-format-body .modal-content {
        width: 100%;
        max-width: 420px;
        background: var(--bg-white);
        border-radius: var(--radius-xl);
        padding: 40px;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
        animation: modalSlide 0.3s ease;
        position: relative;
    }

    @keyframes modalSlide {
        from {
            opacity: 0;
            transform: scale(0.95) translateY(20px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

   .download-format-body .modal-close {
        position: absolute;
        top: 16px;
        right: 16px;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #F3F4F6;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.2s ease;
    }

   .download-format-body .modal-close:hover {
        background: #E5E7EB;
    }

    .download-format-body .modal-close svg {
        width: 18px;
        height: 18px;
        color: var(--text-muted);
    }

   .download-format-body .modal-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        border-radius: 50%;
        box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
    }

   .download-format-body .modal-icon svg {
        width: 32px;
        height: 32px;
        color: #FFFFFF;
    }

   .download-format-body .modal-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--text-dark);
        text-align: center;
        margin-bottom: 8px;
    }

   .download-format-body .modal-description {
        font-size: 14px;
        color: var(--text-muted);
        text-align: center;
        margin-bottom: 28px;
    }

   .download-format-body .phone-input-group {
        display: flex;
        align-items: center;
        background: #F9FAFB;
        border: 2px solid transparent;
        border-radius: var(--radius-md);
        overflow: hidden;
        transition: all 0.25s ease;
    }

   .download-format-body .phone-input-group:focus-within {
        background: var(--bg-white);
        border-color: #25D366;
        box-shadow: 0 0 0 4px rgba(37, 211, 102, 0.1);
    }

   .download-format-body .phone-prefix {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 14px 16px;
        font-size: 14px;
        font-weight: 600;
        color: var(--text-dark);
        background: #F3F4F6;
        border-right: 1px solid #E5E7EB;
    }

   .download-format-body .phone-prefix img {
        width: 20px;
        height: 14px;
        border-radius: 2px;
        object-fit: cover;
    }

   .download-format-body .phone-input {
        flex: 1;
        padding: 14px 16px;
        font-family: inherit;
        font-size: 16px;
        color: var(--text-dark);
        border: none;
        background: transparent;
        outline: none;
    }

   .download-format-body .phone-input::placeholder {
        color: var(--text-light);
    }

   .download-format-body .phone-error {
        display: block;
        margin-top: 8px;
        font-size: 13px;
        color: var(--error-red);
        min-height: 20px;
    }

   .download-format-body.download-format-body .modal-submit {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        margin-top: 20px;
        padding: 16px 24px;
        font-family: inherit;
        font-size: 16px;
        font-weight: 700;
        color: #FFFFFF;
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        border: none;
        border-radius: var(--radius-md);
        cursor: pointer;
        transition: all 0.3s ease;
    }

   .download-format-body .modal-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.35);
    }

   .download-format-body .modal-submit:disabled {
        background: #D1D5DB;
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
    }

    /* Info Section */
   .download-format-body .info-section {
        margin-top: 48px;
    }

   .download-format-body .info-card {
        background: var(--bg-white);
        border-radius: var(--radius-xl);
        padding: 48px;
        box-shadow: var(--shadow-md);
    }

   .download-format-body .info-header {
        text-align: center;
        margin-bottom: 40px;
    }

   .download-format-body .info-header-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 14px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--primary-orange);
        background: var(--primary-orange-light);
        border-radius: 50px;
        margin-bottom: 16px;
    }

   .download-format-body .info-title {
        font-family: 'DM Serif Display', Georgia, serif;
        font-size: 32px;
        color: var(--text-dark);
        margin-bottom: 12px;
    }

   .download-format-body .info-subtitle {
        font-size: 16px;
        color: var(--text-muted);
        max-width: 600px;
        margin: 0 auto;
    }

   .download-format-body .info-content {
        display: grid;
        gap: 24px;
    }

   .download-format-body .info-text {
        font-size: 15px;
        line-height: 1.8;
        color: var(--text-dark);
    }

    /* Format Box */
   .download-format-body .format-section {
        margin-top: 40px;
        padding: 32px;
        background: linear-gradient(180deg, #FAFAFA 0%, #F5F5F5 100%);
        border: 1px solid #E5E5E5;
        border-radius: var(--radius-lg);
    }

  .download-format-body  .format-title {
        text-align: center;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--navy);
        margin-bottom: 28px;
        padding-bottom: 16px;
        border-bottom: 2px solid var(--navy);
    }

  .download-format-body  .format-text {
        font-size: 14px;
        line-height: 1.8;
        color: var(--text-dark);
        margin-bottom: 16px;
    }

  .download-format-body  .format-text:last-child {
        margin-bottom: 0;
    }

    /* FAQ Section */
  .download-format-body  .faq-section {
        margin-top: 48px;
    }

  .download-format-body  .faq-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

   .download-format-body .faq-item {
        background: var(--bg-white);
        border-radius: var(--radius-lg);
        padding: 28px;
        box-shadow: var(--shadow-sm);
        border: 1px solid rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
    }

  .download-format-body  .faq-item:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-2px);
    }

   .download-format-body .faq-question {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 12px;
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

   .download-format-body .faq-question::before {
        content: 'Q';
        flex-shrink: 0;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: 700;
        color: var(--primary-orange);
        background: var(--primary-orange-light);
        border-radius: 6px;
    }

   .download-format-body .faq-answer {
        font-size: 14px;
        line-height: 1.7;
        color: var(--text-muted);
        padding-left: 40px;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .download-format-body  .download-format-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .preview-card {
            position: relative;
            top: 0;
        }

        .form-card,
        .preview-wrapper {
            padding: 28px;
        }

        .faq-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 640px) {
     .download-format-body   .download-format-banner {
            padding: 40px 16px 60px;
        }
        
        .download-format-container {
            padding: 0 16px;
        }
        .download-format-body .form-grid h3{
            font-size: 18px !important; 
            font-weight: 600;
        }
        .form-row {
            grid-template-columns: 1fr;
        }
        .download-format-body .info-title{
            font-size: 21px !important;
        }
        .download-format-body .info-content .info-subheading{
            font-size: 20px !important;
            font-weight: 600 !important;
        }
        .download-format-body .preview-card {
            display: none;
        }
        .download-format-body .form-card{
            padding:15px;
        }
        
        .info-card {
            padding: 14px !important;
            border-radius: var(--radius-lg);
        }

        .certificate-preview {
            padding: 15px !important;
        }
        .download-format-body .format-section{
            padding: 10px;
        }
        .download-format-body .faq-item {
            padding: 15px;
        }
        .download-format-body .faq-question{
            font-size: 15px !important;
        }
        .certificate-footer {
            grid-template-columns: 1fr;
            gap: 12px;
        }

      .download-format-body  .footer-item {
            text-align: left;
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid var(--border-light);
        }

       .download-format-body .footer-item:last-child {
            border-bottom: none;
        }

        .modal-content {
            padding: 28px 20px;
        }

        .download-options {
            flex-direction: column;
        }
    }
    /*@media*/


</style>
@endpush


