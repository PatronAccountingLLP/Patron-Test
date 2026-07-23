@extends('layouts.app')

@section('title', $page->meta_title ?? $page->title ?? 'NOC')
<!--@section('meta_description', $page->meta_description ?? $page->excerpt ?? '')-->

@section('content')
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

    .registration-page {
        font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        background: var(--bg-cream);
        min-height: 100vh;
        padding-bottom: 80px;
    }

    /* Hero Banner */
    .registration-hero {
        background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%);
        padding: 60px 20px 80px;
        position: relative;
        overflow: hidden;
    }

    .registration-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(255, 107, 53, 0.15) 0%, transparent 70%);
        pointer-events: none;
    }

    .registration-hero::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -10%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255, 107, 53, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .hero-badge {
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

    .hero-badge svg {
        width: 16px;
        height: 16px;
    }

    .hero-title {
        font-family: 'DM Serif Display', Georgia, serif;
        font-size: clamp(32px, 5vw, 48px);
        font-weight: 400;
        color: #FFFFFF;
        margin-bottom: 16px;
        line-height: 1.2;
    }

    .hero-title span {
        color: var(--primary-orange);
    }

    .hero-subtitle {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.7);
        max-width: 500px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Main Container */
    .registration-container {
        max-width: 1280px;
        margin: -40px auto 0;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    /* Alert Container */
    .alert-wrapper {
        max-width: 600px;
        margin: 0 auto 20px;
    }

    .alert {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px 20px;
        border-radius: var(--radius-md);
        font-size: 14px;
        font-weight: 500;
        animation: slideDown 0.4s ease;
    }

    .alert-success {
        background: #ECFDF5;
        color: #065F46;
        border: 1px solid #A7F3D0;
    }

    .alert-error {
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
    .registration-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 32px;
        align-items: start;
    }

    /* Form Card */
    .form-card {
        background: var(--bg-white);
        border-radius: var(--radius-xl);
        padding: 40px;
        box-shadow: var(--shadow-lg);
        border: 1px solid rgba(0, 0, 0, 0.04);
    }

    .form-header {
        margin-bottom: 32px;
    }

    .form-step-indicator {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 16px;
    }

    .step-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--border-light);
        transition: all 0.3s ease;
    }

    .step-dot.active {
        background: var(--primary-orange);
        width: 24px;
        border-radius: 4px;
    }

    .form-title {
        font-size: 22px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

    .form-description {
        font-size: 14px;
        color: var(--text-muted);
        line-height: 1.5;
    }

    /* Form Groups */
    .form-grid {
        display: grid;
        gap: 20px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .form-group {
        position: relative;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-label {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

    .form-label .required {
        color: var(--error-red);
        font-size: 14px;
    }

    .form-label .label-icon {
        width: 16px;
        height: 16px;
        color: var(--text-light);
    }

    .form-control {
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

    .form-control::placeholder {
        color: var(--text-light);
    }

    .form-control:hover {
        background: #F3F4F6;
    }

    .form-control:focus {
        outline: none;
        background: var(--bg-white);
        border-color: var(--primary-orange);
        box-shadow: 0 0 0 4px rgba(255, 107, 53, 0.1);
    }

    .form-control.has-error {
        border-color: var(--error-red);
        background: #FEF2F2;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }

    .error-message {
        display: none;
        align-items: center;
        gap: 6px;
        margin-top: 6px;
        font-size: 12px;
        color: var(--error-red);
    }

    .error-message.show {
        display: flex;
    }

    .error-message svg {
        width: 14px;
        height: 14px;
        flex-shrink: 0;
    }

    /* Select Dropdown */
    .select-wrapper {
        position: relative;
    }

    .select-wrapper::after {
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

    .form-select {
        appearance: none;
        cursor: pointer;
        padding-right: 40px;
    }

    /* Submit Button */
    .btn-submit {
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

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 35px rgba(255, 107, 53, 0.35);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    .btn-submit:disabled {
        background: #D1D5DB;
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
    }

    .btn-submit svg {
        width: 20px;
        height: 20px;
    }

    .spinner {
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
    .download-options {
        display: flex;
        gap: 12px;
        margin-top: 16px;
    }

    .download-option {
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

    .download-option:hover {
        border-color: var(--primary-orange);
        background: var(--primary-orange-light);
    }

    .download-option svg {
        width: 18px;
        height: 18px;
    }

    .download-option.pdf svg { color: #EF4444; }
    .download-option.word svg { color: #2563EB; }

    /* Preview Card */
    .preview-card {
        position: sticky;
        top: 24px;
    }

    .preview-wrapper {
        background: var(--bg-white);
        border-radius: var(--radius-xl);
        padding: 32px;
        box-shadow: var(--shadow-lg);
        border: 1px solid rgba(0, 0, 0, 0.04);
    }

    .preview-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px;
        padding-bottom: 16px;
        border-bottom: 1px solid var(--border-light);
    }

    .preview-title-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .preview-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-orange-light);
        border-radius: var(--radius-sm);
    }

    .preview-icon svg {
        width: 20px;
        height: 20px;
        color: var(--primary-orange);
    }

    .preview-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
    }

    .preview-subtitle {
        font-size: 12px;
        color: var(--text-muted);
    }

    .live-badge {
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

    .live-dot {
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
    .certificate-preview {
        background: linear-gradient(180deg, #FAFAFA 0%, #F5F5F5 100%);
        border: 1px solid #E5E5E5;
        border-radius: var(--radius-md);
        padding: 28px;
        position: relative;
    }

    .certificate-watermark {
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

    .certificate-doc-header {
        text-align: center;
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 2px solid var(--navy);
        position: relative;
    }

    .certificate-doc-title {
        font-family: 'DM Serif Display', Georgia, serif;
        font-size: 18px;
        font-weight: 400;
        color: var(--navy);
        margin-bottom: 4px;
    }

    .certificate-doc-subtitle {
        font-size: 13px;
        color: var(--text-muted);
    }

    .certificate-doc-subtitle strong {
        color: var(--text-dark);
    }

    .certificate-body {
        position: relative;
        z-index: 1;
    }

    .certificate-paragraph {
        font-size: 13px;
        line-height: 1.8;
        color: var(--text-dark);
        margin-bottom: 16px;
        text-align: justify;
    }

    .certificate-paragraph strong {
        color: var(--navy);
        font-weight: 600;
        background: linear-gradient(180deg, transparent 60%, rgba(255, 107, 53, 0.15) 60%);
        padding: 0 2px;
    }

    .certificate-signature {
        margin-top: 28px;
        padding-top: 20px;
        border-top: 1px dashed var(--border-light);
    }

    .signature-label {
        font-size: 12px;
        font-weight: 600;
        color: var(--text-muted);
        margin-bottom: 4px;
    }

    .signature-line {
        width: 120px;
        height: 1px;
        background: var(--text-dark);
        margin-top: 40px;
    }

    .certificate-footer {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-top: 24px;
        padding-top: 16px;
        border-top: 1px solid var(--border-light);
    }

    .footer-item {
        text-align: center;
    }

    .footer-item-label {
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: var(--text-light);
        margin-bottom: 4px;
    }

    .footer-item-value {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
    }

    /* WhatsApp Modal */
    .modal-overlay {
        display: none;
        position: fixed;
        z-index: 1000;
        inset: 0;
        background: rgba(30, 42, 74, 0.6);
        backdrop-filter: blur(4px);
        animation: fadeIn 0.3s ease;
    }

    .modal-overlay.show {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .modal-content {
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

    .modal-close {
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

    .modal-close:hover {
        background: #E5E7EB;
    }

    .modal-close svg {
        width: 18px;
        height: 18px;
        color: var(--text-muted);
    }

    .modal-icon {
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

    .modal-icon svg {
        width: 32px;
        height: 32px;
        color: #FFFFFF;
    }

    .modal-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--text-dark);
        text-align: center;
        margin-bottom: 8px;
    }

    .modal-description {
        font-size: 14px;
        color: var(--text-muted);
        text-align: center;
        margin-bottom: 28px;
    }

    .phone-input-group {
        display: flex;
        align-items: center;
        background: #F9FAFB;
        border: 2px solid transparent;
        border-radius: var(--radius-md);
        overflow: hidden;
        transition: all 0.25s ease;
    }

    .phone-input-group:focus-within {
        background: var(--bg-white);
        border-color: #25D366;
        box-shadow: 0 0 0 4px rgba(37, 211, 102, 0.1);
    }

    .phone-prefix {
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

    .phone-prefix img {
        width: 20px;
        height: 14px;
        border-radius: 2px;
        object-fit: cover;
    }

    .phone-input {
        flex: 1;
        padding: 14px 16px;
        font-family: inherit;
        font-size: 16px;
        color: var(--text-dark);
        border: none;
        background: transparent;
        outline: none;
    }

    .phone-input::placeholder {
        color: var(--text-light);
    }

    .phone-error {
        display: block;
        margin-top: 8px;
        font-size: 13px;
        color: var(--error-red);
        min-height: 20px;
    }

    .modal-submit {
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

    .modal-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.35);
    }

    .modal-submit:disabled {
        background: #D1D5DB;
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
    }

    /* Info Section */
    .info-section {
        margin-top: 48px;
    }

    .info-card {
        background: var(--bg-white);
        border-radius: var(--radius-xl);
        padding: 48px;
        box-shadow: var(--shadow-md);
    }

    .info-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .info-header-badge {
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

    .info-title {
        font-family: 'DM Serif Display', Georgia, serif;
        font-size: 32px;
        color: var(--text-dark);
        margin-bottom: 12px;
    }

    .info-subtitle {
        font-size: 16px;
        color: var(--text-muted);
        max-width: 600px;
        margin: 0 auto;
    }

    .info-content {
        display: grid;
        gap: 24px;
    }

    .info-text {
        font-size: 15px;
        line-height: 1.8;
        color: var(--text-dark);
    }

    /* Format Box */
    .format-section {
        margin-top: 40px;
        padding: 32px;
        background: linear-gradient(180deg, #FAFAFA 0%, #F5F5F5 100%);
        border: 1px solid #E5E5E5;
        border-radius: var(--radius-lg);
    }

    .format-title {
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

    .format-text {
        font-size: 14px;
        line-height: 1.8;
        color: var(--text-dark);
        margin-bottom: 16px;
    }

    .format-text:last-child {
        margin-bottom: 0;
    }

    /* FAQ Section */
    .faq-section {
        margin-top: 48px;
    }

    .faq-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .faq-item {
        background: var(--bg-white);
        border-radius: var(--radius-lg);
        padding: 28px;
        box-shadow: var(--shadow-sm);
        border: 1px solid rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
    }

    .faq-item:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-2px);
    }

    .faq-question {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 12px;
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .faq-question::before {
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

    .faq-answer {
        font-size: 14px;
        line-height: 1.7;
        color: var(--text-muted);
        padding-left: 40px;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .registration-grid {
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
        .registration-hero {
            padding: 40px 16px 60px;
        }

        .registration-container {
            padding: 0 16px;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .form-card,
        .preview-wrapper,
        .info-card {
            padding: 24px;
            border-radius: var(--radius-lg);
        }

        .certificate-preview {
            padding: 20px;
        }

        .certificate-footer {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .footer-item {
            text-align: left;
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid var(--border-light);
        }

        .footer-item:last-child {
            border-bottom: none;
        }

        .modal-content {
            padding: 28px 20px;
        }

        .download-options {
            flex-direction: column;
        }
    }

    /* Utility Classes */
    /*.d-none { display: none !important; }*/
    /*.d-flex { display: flex !important; }*/
</style>

<div class="registration-page">
    <!-- Hero Section -->
    <div class="registration-hero">
        <div class="hero-content">
            <div class="hero-badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Free Document Generator
            </div>
            <h1 class="hero-title">NOC Format for <span>GST Registration</span></h1>
            <p class="hero-subtitle">Generate your No Objection Certificate in under 60 seconds. Fill in the details and download instantly.</p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="registration-container">
        <div class="alert-wrapper" id="alertContainer"></div>

        <div class="registration-grid">
            <!-- Form Section -->
            <div class="form-card">
                <div class="form-header">
                    <div class="form-step-indicator">
                        <span class="step-dot active"></span>
                        <span class="step-dot"></span>
                        <span class="step-dot"></span>
                    </div>
                    <h2 class="form-title">Enter Your Details</h2>
                    <p class="form-description">Complete the form below to generate your NOC certificate. All fields are required.</p>
                </div>

                <form id="nocRegistrationForm">
                    @csrf
                    
                    <div class="form-grid">
                        <!-- Property Owner Name -->
                        <div class="form-group full-width">
                            <label class="form-label">
                                Property Owner Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" name="property_owner_name" class="form-control" placeholder="Enter property owner's full name" required>
                            <div class="error-message">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 8v4m0 4h.01"/>
                                </svg>
                                <span></span>
                            </div>
                        </div>

                        <!-- Property Address -->
                        <div class="form-group full-width">
                            <label class="form-label">
                                Complete Property Address
                                <span class="required">*</span>
                            </label>
                            <textarea name="property_address" class="form-control" placeholder="Enter full address including city, state and pincode" required></textarea>
                            <div class="error-message">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 8v4m0 4h.01"/>
                                </svg>
                                <span></span>
                            </div>
                        </div>

                        <!-- Business Name -->
                        <div class="form-group full-width">
                            <label class="form-label">
                                Business / Company / LLP Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" name="business_name" class="form-control" placeholder="Enter business name for GST registration" required>
                            <div class="error-message">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 8v4m0 4h.01"/>
                                </svg>
                                <span></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <!-- Authorized Person Name -->
                            <div class="form-group">
                                <label class="form-label">
                                    Authorized Person
                                    <span class="required">*</span>
                                </label>
                                <input type="text" name="authorized_person_name" class="form-control" placeholder="Person's name" required>
                                <div class="error-message">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 8v4m0 4h.01"/>
                                    </svg>
                                    <span></span>
                                </div>
                            </div>

                            <!-- Owner/Director/Partner -->
                            <div class="form-group">
                                <label class="form-label">
                                    Designation
                                    <span class="required">*</span>
                                </label>
                                <div class="select-wrapper">
                                    <select name="owner_director_partner" class="form-control form-select" required>
                                        <option value="">Select role</option>
                                        <option value="Owner">Owner</option>
                                        <option value="Director">Director</option>
                                        <option value="Partner">Partner</option>
                                        <option value="Proprietor">Proprietor</option>
                                    </select>
                                </div>
                                <div class="error-message">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 8v4m0 4h.01"/>
                                    </svg>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <!-- Relation -->
                            <div class="form-group">
                                <label class="form-label">
                                    Relation with Owner
                                    <span class="required">*</span>
                                </label>
                                <div class="select-wrapper">
                                    <select name="relation" class="form-control form-select" required>
                                        <option value="">Select relation</option>
                                        <option value="Son">Son</option>
                                        <option value="Daughter">Daughter</option>
                                        <option value="Spouse">Spouse</option>
                                        <option value="Self">Self</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                    </select>
                                </div>
                                <div class="error-message">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 8v4m0 4h.01"/>
                                    </svg>
                                    <span></span>
                                </div>
                            </div>

                            <!-- Bill Type -->
                            <div class="form-group">
                                <label class="form-label">
                                    Address Proof Type
                                    <span class="required">*</span>
                                </label>
                                <div class="select-wrapper">
                                    <select name="bill_type" class="form-control form-select" required>
                                        <option value="">Select bill type</option>
                                        <option value="Electricity Bill">Electricity Bill</option>
                                        <option value="BSNL Bill">BSNL Bill</option>
                                        <option value="Water Bill">Water Bill</option>
                                        <option value="Gas Bill">Gas Bill</option>
                                        <option value="Property Tax Receipt">Property Tax Receipt</option>
                                        <option value="Rent Agreement">Rent Agreement</option>
                                    </select>
                                </div>
                                <div class="error-message">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 8v4m0 4h.01"/>
                                    </svg>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <!-- State -->
                            <div class="form-group">
                                <label class="form-label">
                                    State
                                    <span class="required">*</span>
                                </label>
                                <input type="text" name="state" class="form-control" placeholder="e.g., Delhi" required>
                                <div class="error-message">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 8v4m0 4h.01"/>
                                    </svg>
                                    <span></span>
                                </div>
                            </div>

                            <!-- Sign Date -->
                            <div class="form-group">
                                <label class="form-label">
                                    NOC Sign Date
                                    <span class="required">*</span>
                                </label>
                                <input type="date" name="noc_sign_date" class="form-control" required>
                                <div class="error-message">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 8v4m0 4h.01"/>
                                    </svg>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn-submit" id="downloadPdfBtn">
                        <span class="btn-text">Generate & Download NOC</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="btn-icon">
                            <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/>
                        </svg>
                        <div class="spinner d-none"></div>
                    </button>

                    <!--<div class="download-options">-->
                    <!--    <button type="button" class="download-option pdf" id="downloadPdfDirect">-->
                    <!--        <svg viewBox="0 0 24 24" fill="currentColor">-->
                    <!--            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zm-1 2l5 5h-5V4zM8.5 13H10v5H8.5v-5zm2.5 0h1.5v2H13v1h-1.5v2H10v-5h1.5v5H13v-2h-1.5v-1H13v-2h-1.5v-3z"/>-->
                    <!--        </svg>-->
                    <!--        Download PDF-->
                    <!--    </button>-->
                    <!--    <button type="button" class="download-option word" id="downloadWordDirect">-->
                    <!--        <svg viewBox="0 0 24 24" fill="currentColor">-->
                    <!--            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zm-1 2l5 5h-5V4zM9 13l1.5 5 1.5-5 1.5 5L15 13h1.5l-2.25 7h-1.5L12 15l-1.25 5h-1.5L7 13H9z"/>-->
                    <!--        </svg>-->
                    <!--        Download Word-->
                    <!--    </button>-->
                    <!--</div>-->
                </form>
            </div>

            <!-- Preview Section -->
            <div class="preview-card">
                <div class="preview-wrapper">
                    <div class="preview-header">
                        <div class="preview-title-group">
                            <div class="preview-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                                    <polyline points="14,2 14,8 20,8"/>
                                    <line x1="16" y1="13" x2="8" y2="13"/>
                                    <line x1="16" y1="17" x2="8" y2="17"/>
                                    <polyline points="10,9 9,9 8,9"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="preview-title">Document Preview</h3>
                                <p class="preview-subtitle">NOC Certificate</p>
                            </div>
                        </div>
                        <div class="live-badge">
                            <span class="live-dot"></span>
                            Live Preview
                        </div>
                    </div>

                    <div class="certificate-preview">
                        <div class="certificate-watermark">PREVIEW</div>
                        
                        <div class="certificate-doc-header">
                            <h2 class="certificate-doc-title">TO WHOMSOEVER IT MAY CONCERN</h2>
                            <p class="certificate-doc-subtitle"><strong>Subject:</strong> No Objection Certificate</p>
                        </div>

                        <div class="certificate-body">
                            <p class="certificate-paragraph" id="previewPara1">
                                I, <strong id="prevOwnerName">Aaryan Kumar</strong> owner of the property situated at <strong id="prevAddress">6-146 Saket, New-Delhi</strong>, hereby declare and confirm that I have owned the said property, also providing the latest <strong id="prevBillType">BSNL Bill</strong> issued by the <strong id="prevState">Delhi</strong> state.
                            </p>
                            
                            <p class="certificate-paragraph">
                                I give my consent to business named <strong id="prevBusinessName">Patron Accounting</strong> where my <strong id="prevRelation">Son</strong> named <strong id="prevAuthPerson">AK</strong> acting as <strong id="prevDesignation">Director</strong> to use this premises for the office purposes.
                            </p>

                            <p class="certificate-paragraph">
                                I hereby convey that I have no objection for <strong id="prevAuthPerson2">AK</strong> getting GST Registration Number on my premises for business named <strong id="prevBusinessName2">Patron Accounting</strong>. I hereby declare that I have given this No Objection Certificate with my free consent.
                            </p>

                            <div class="certificate-signature">
                                <p class="signature-label">Signature</p>
                                <div class="signature-line"></div>
                            </div>
                        </div>

                        <div class="certificate-footer">
                            <div class="footer-item">
                                <span class="footer-item-label">Name of Owner</span>
                                <span class="footer-item-value" id="footerOwnerName">Aaryan Kumar</span>
                            </div>
                            <div class="footer-item">
                                <span class="footer-item-label">Place</span>
                                <span class="footer-item-value" id="footerPlace">Delhi</span>
                            </div>
                            <div class="footer-item">
                                <span class="footer-item-label">Date</span>
                                <span class="footer-item-value" id="footerDate">08 October 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- WhatsApp Modal -->
        <div class="modal-overlay" id="whatsappModal">
            <div class="modal-content">
                <button class="modal-close" id="closeModal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 6L6 18M6 6l12 12"/>
                    </svg>
                </button>

                <div class="modal-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                </div>

                <h3 class="modal-title">Get Document on WhatsApp</h3>
                <p class="modal-description">Enter your WhatsApp number to receive the NOC certificate directly on your phone.</p>

                <div class="phone-input-group">
                    <div class="phone-prefix">
                        <img src="https://flagcdn.com/w40/in.png" alt="India">
                        +91
                    </div>
                    <input type="tel" id="whatsappNumber" class="phone-input" placeholder="Enter 10-digit number" maxlength="10">
                </div>
                <span class="phone-error" id="whatsappError"></span>

                <button type="button" class="modal-submit" id="sendWhatsAppBtn">
                    <span class="whatsapp-btn-text">Send to WhatsApp</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
                        <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
                    </svg>
                    <div class="spinner d-none"></div>
                </button>
            </div>
        </div>

        <!-- Info Section -->
        <div class="info-section">
            <div class="info-card">
                <div class="info-header">
                    <span class="info-header-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 16v-4M12 8h.01"/>
                        </svg>
                        Learn More
                    </span>
                    <h2 class="info-title">What is NOC for GST Registration?</h2>
                    <p class="info-subtitle">Everything you need to know about No Objection Certificate for GST registration in India</p>
                </div>

                <div class="info-content">
                    <p class="info-text">
                        Patron Accounting provides a free NOC format for GST registration which will assist you to generate it in less than one minute. It will save time and reduce the chances of error.
                    </p>
                    
                    <p class="info-text">
                        NOC for GST registration is an important document required for GST registration. Normally, companies operate from premises owned by directors or shareholders. As a company is a separate legal entity, it needs a NOC from the owner of the premises while doing GST registration. The NOC acts as a document by which the owner gives permission to the company to operate from the said premises.
                    </p>

                    <p class="info-text">
                        The NOC format for GST registration contains details of the owner of premises, PAN of owner, name of company, address of the premises, proof of ownership, relation with company, date, city & signature of the owner.
                    </p>
                </div>

                <div class="format-section">
                    <h3 class="format-title">Standard NOC Format Template</h3>
                    
                    <p class="format-text">I, _____________ having PAN _____________ hereby declare that I am owner of following address:</p>
                    
                    <p class="format-text"><strong>Address:</strong> _____________</p>
                    
                    <p class="format-text">We hereby confirm that we have "No Objection" in giving full consent for using the above address as the Principal Place of Business Address referred in Companies Act for GST Registrations and licenses with statutory authorities in the course of its business.</p>
                    
                    <p class="format-text">Being one of the _____________ and the Company the above premises has been provided without any consideration to the company.</p>
                    
                    <p class="format-text">This however does not confer any title in favour of this company. The client agrees to indemnify us for any/all claims made by the statutory or any other authorities arising out of the client's use of the address.</p>
                    
                    <p class="format-text">
                        Yours faithfully,<br><br>
                        <strong>Signature:</strong> _____________<br>
                        <strong>Name of Owner:</strong> _____________<br>
                        <strong>Place:</strong> _____________<br>
                        <strong>Date:</strong> _____________
                    </p>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section">
            <div class="info-header" style="margin-bottom: 32px;">
                <span class="info-header-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3M12 17h.01"/>
                    </svg>
                    FAQ
                </span>
                <h2 class="info-title">Frequently Asked Questions</h2>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h4 class="faq-question">What is the purpose of NOC for GST?</h4>
                    <p class="faq-answer">The NOC (No Objection Certificate) is required when the business premises is not owned by the GST applicant. It proves that the property owner has no objection to the business operating from their premises.</p>
                </div>
                
                <div class="faq-item">
                    <h4 class="faq-question">Who should sign the NOC document?</h4>
                    <p class="faq-answer">The NOC should be signed by the property owner. The signature should match the name mentioned in the property documents or utility bills being submitted as address proof.</p>
                </div>
                
                <div class="faq-item">
                    <h4 class="faq-question">What documents are needed with NOC?</h4>
                    <p class="faq-answer">Along with NOC, you need to submit address proof of the property (like electricity bill, property tax receipt), ID proof of the owner, and sometimes property ownership documents.</p>
                </div>
                
                <div class="faq-item">
                    <h4 class="faq-question">Is NOC mandatory for all GST registrations?</h4>
                    <p class="faq-answer">NOC is required only when the business operates from premises not owned by the applicant. If you own the property, you don't need an NOC but need to provide ownership proof.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('nocRegistrationForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const btnText = downloadPdfBtn.querySelector('.btn-text');
    const btnIcon = downloadPdfBtn.querySelector('.btn-icon');
    const spinner = downloadPdfBtn.querySelector('.spinner');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date to today
    const today = new Date().toISOString().split('T')[0];
    form.querySelector('[name="noc_sign_date"]').value = today;

    // Real-time certificate preview update
    const formInputs = form.querySelectorAll('input, textarea, select');
    formInputs.forEach(input => {
        input.addEventListener('input', updateCertificatePreview);
        input.addEventListener('change', updateCertificatePreview);
    });

    // Initial preview update
    updateCertificatePreview();

    function updateCertificatePreview() {
        const propertyOwnerName = form.querySelector('[name="property_owner_name"]').value || 'Aaryan Kumar';
        const propertyAddress = form.querySelector('[name="property_address"]').value || '6-146 Saket, New-Delhi';
        const businessName = form.querySelector('[name="business_name"]').value || 'Patron Accounting';
        const authorizedPerson = form.querySelector('[name="authorized_person_name"]').value || 'AK';
        const ownerDirectorPartner = form.querySelector('[name="owner_director_partner"]').value || 'Director';
        const relation = form.querySelector('[name="relation"]').value || 'Son';
        const billType = form.querySelector('[name="bill_type"]').value || 'BSNL Bill';
        const state = form.querySelector('[name="state"]').value || 'Delhi';
        const nocSignDate = form.querySelector('[name="noc_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevOwnerName').textContent = propertyOwnerName;
        document.getElementById('prevAddress').textContent = propertyAddress;
        document.getElementById('prevBillType').textContent = billType;
        document.getElementById('prevState').textContent = state;
        document.getElementById('prevBusinessName').textContent = businessName;
        document.getElementById('prevBusinessName2').textContent = businessName;
        document.getElementById('prevRelation').textContent = relation;
        document.getElementById('prevAuthPerson').textContent = authorizedPerson;
        document.getElementById('prevAuthPerson2').textContent = authorizedPerson;
        document.getElementById('prevDesignation').textContent = ownerDirectorPartner;

        // Update footer
        document.getElementById('footerOwnerName').textContent = propertyOwnerName;
        document.getElementById('footerPlace').textContent = state || 'Delhi';
        
        if (nocSignDate) {
            const formattedDate = new Date(nocSignDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('footerDate').textContent = formattedDate;
        }

        // Update step indicator based on form completion
        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
        const totalFields = inputs.length;
        let filledFields = 0;

        inputs.forEach(input => {
            if (input.value.trim() !== '') filledFields++;
        });

        const progress = filledFields / totalFields;

        steps.forEach((step, index) => {
            step.classList.remove('active');
            if (index === 0 && progress >= 0) step.classList.add('active');
            if (index === 1 && progress >= 0.5) step.classList.add('active');
            if (index === 2 && progress >= 1) step.classList.add('active');
        });
    }

    // WhatsApp Modal Elements
    const whatsappModal = document.getElementById('whatsappModal');
    const closeModal = document.getElementById('closeModal');
    const whatsappNumber = document.getElementById('whatsappNumber');
    const whatsappError = document.getElementById('whatsappError');
    const sendWhatsAppBtn = document.getElementById('sendWhatsAppBtn');
    const whatsappBtnText = sendWhatsAppBtn.querySelector('.whatsapp-btn-text');
    const whatsappBtnIcon = sendWhatsAppBtn.querySelector('svg');
    const whatsappSpinner = sendWhatsAppBtn.querySelector('.spinner');

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
        });
        document.querySelectorAll('.form-control').forEach(el => {
            el.classList.remove('has-error');
        });

        // Show WhatsApp modal
        whatsappModal.classList.add('show');
        whatsappNumber.value = '';
        whatsappError.textContent = '';
        setTimeout(() => whatsappNumber.focus(), 300);
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

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && whatsappModal.classList.contains('show')) {
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
        whatsappBtnIcon.classList.add('d-none');
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
                        input.classList.add('has-error');
                        const errorMsg = input.parentElement.querySelector('.error-message');
                        if (errorMsg) {
                            errorMsg.querySelector('span').textContent = error.errors[field][0];
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
            whatsappBtnIcon.classList.remove('d-none');
            whatsappSpinner.classList.add('d-none');
        });
    });

    function showAlert(type, message) {
        const icon = type === 'success' 
            ? '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
            : '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><circle cx="12" cy="12" r="10"/><path d="M12 8v4m0 4h.01"/></svg>';
        
        const alertHTML = `
            <div class="alert alert-${type}">
                ${icon}
                ${message}
            </div>
        `;
        alertContainer.innerHTML = alertHTML;

        // Scroll to alert
        alertContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });

        // Auto-hide after 5 seconds
        setTimeout(() => {
            alertContainer.innerHTML = '';
        }, 5000);
    }

    // Direct download buttons (optional - if you want to add direct download without WhatsApp)
    document.getElementById('downloadPdfDirect')?.addEventListener('click', function() {
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }
        // Show WhatsApp modal for PDF
        whatsappModal.classList.add('show');
    });

    document.getElementById('downloadWordDirect')?.addEventListener('click', function() {
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }
        // Show WhatsApp modal for Word
        whatsappModal.classList.add('show');
    });
});
</script>
@endsection
