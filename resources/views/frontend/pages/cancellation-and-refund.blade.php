@extends('layouts.app')

@section('title', 'Cancellation & Refund Policy | Patron Accounting LLP')

@push('styles')
<meta name="robots" content="index, follow">
<meta name="description" content="Cancellation & Refund Policy for Patron Accounting LLP. Learn about our fair refund process, cancellation timelines, and service-specific refund eligibility for all CA, tax, and compliance services.">
<link rel="canonical" href="/cancellation-and-refund">
<meta property="og:title" content="Cancellation & Refund Policy | Patron Accounting LLP">
<meta property="og:description" content="Cancellation & Refund Policy for Patron Accounting LLP. Learn about our fair refund process, cancellation timelines, and service-specific refund eligibility.">
<meta property="og:url" content="/cancellation-and-refund">
<meta property="og:type" content="website">
<meta property="og:image" content="/images/site-logo.svg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cancellation &amp; Refund Policy | Patron Accounting LLP">
<meta name="twitter:description" content="Fair refund process, cancellation timelines, and service-specific refund eligibility.">
<meta name="twitter:image" content="/images/site-logo.svg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cancellation &amp; Refund Policy | Patron Accounting LLP">
<meta name="twitter:description" content="Fair refund process, cancellation timelines, and service-specific refund eligibility.">
<meta name="twitter:image" content="/images/site-logo.svg">
<meta http-equiv="content-language" content="en-IN">
<meta http-equiv="content-language" content="en-IN">
@endpush

@push('scripts-head')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Patron Accounting",
        "url": "/",
        "logo": "/images/site-logo.svg",
        "description": "Chartered Accountancy firm offering accounting, tax, compliance & registration services across India.",
        "founder": {
            "@type": "Person",
            "name": "CA Sundram Gupta",
            "jobTitle": "Chartered Accountant"
        }
    }
    </script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Cancellation & Refund Policy", "item": "/cancellation-and-refund" }
        ]
    }
    </script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            { "@type": "Question", "name": "How do I request a cancellation or refund?", "acceptedAnswer": { "@type": "Answer", "text": "Send an email to sales@patronaccounting.com or call +91 945 945 6700 with your order ID, registered name, and reason for cancellation. Our team will acknowledge within 24 business hours." } },
            { "@type": "Question", "name": "How long does a refund take to process?", "acceptedAnswer": { "@type": "Answer", "text": "Approved refunds are processed within 7–10 business days from the date of approval. Bank processing may take an additional 3–5 business days." } },
            { "@type": "Question", "name": "Are government fees refundable?", "acceptedAnswer": { "@type": "Answer", "text": "No. Government fees, challan payments, stamp duty, and statutory charges paid to any government body are non-refundable under any circumstances, as these are third-party payments outside our control." } },
            { "@type": "Question", "name": "What if my application is rejected by the government?", "acceptedAnswer": { "@type": "Answer", "text": "If a government application is rejected due to reasons within our control, we will re-file at no additional professional fee. If rejection is due to client-provided incorrect information or documents, re-filing fees may apply." } },
            { "@type": "Question", "name": "Can I cancel after work has already started?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, but the refund will be prorated. We will deduct charges for work already completed and any non-recoverable third-party costs. The remaining amount will be refunded." } },
            { "@type": "Question", "name": "Is there a cancellation fee?", "acceptedAnswer": { "@type": "Answer", "text": "A cancellation/processing fee of up to 20% of the professional fee may apply depending on the stage of service delivery. If no work has commenced, 100% of the professional fee is refundable." } }
        ]
    }
    </script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebPage","name":"Cancellation and Refund Policy","url":"/cancellation-and-refund","description":"Cancellation and Refund Policy for Patron Accounting LLP.","dateModified":"2026-02-28","inLanguage":"en-IN","isPartOf":{"@type":"WebSite","name":"Patron Accounting","url":"/"}}
</script>
@endpush

@section('content')
<main>

<!-- ========================================
     BREADCRUMB NAVIGATION
     ======================================== -->

<!-- ========================================
     HERO SECTION
     ======================================== -->
<section class="policy-hero">
    <div class="policy-hero-inner">

        <div class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Client Protection Policy
        </div>

        <h1>Cancellation & Refund Policy</h1>

        <p class="hero-subtitle">
            At Patron Accounting LLP, we believe in full transparency and fair treatment. This policy outlines when and how you can cancel a service, request a refund, and what to expect at every stage. Your trust is our priority.
        </p>

        <div class="policy-meta">
            <div class="policy-meta-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <strong>Effective Date:</strong> 1 January 2025
            </div>
            <div class="policy-meta-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                <strong>Last Reviewed:</strong> 26 February 2026
            </div>
            <div class="policy-meta-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                <strong>Applies to:</strong> All Services
            </div>
        </div>
    </div>
</section>

<!-- ======================================== 

 TL;DR - AEO Direct Answer Block -->
<div style="max-width:1140px;margin:0 auto;padding:24px 32px 0;">
    <div style="background:#F0F5FA;border-left:4px solid var(--orange,#E8712C);padding:16px 20px;border-radius:0 8px 8px 0;">
        <p style="font-weight:700;color:var(--blue,#1B365D);font-size:14px;margin-bottom:6px;">📌 Policy Summary</p>
        <p style="font-size:14px;color:var(--text-secondary,#4B5563);line-height:1.7;margin:0;">Full refund if cancelled before work begins. Partial refund for partially completed work. No refund once government filings are submitted. Government fees (stamp duty, challan, statutory charges) are always non-refundable. Approved refunds are processed within 7–10 business days.</p>
    </div>
</div>

<!-- ========================================
     SECTION 1: SCOPE & APPLICABILITY
     ======================================== -->
<section class="content-section" id="scope-section">
    <div class="content-container">
        <h2 class="section-title">1. Scope & Applicability</h2>
        <div class="content-text">
            <p>This Cancellation & Refund Policy applies to all professional services offered by <strong>Patron Accounting LLP</strong> ("we", "us", "our") through our website <a href="/" target="_blank">www.patronaccounting.com</a>, over phone, WhatsApp, email, or in-person engagements. This includes, but is not limited to:</p>

            <ul class="policy-list">
                <li>
                    <span class="list-icon info"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                    <span>Business registration services (Private Limited, LLP, OPC, Partnership, Proprietorship, etc.)</span>
                </li>
                <li>
                    <span class="list-icon info"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                    <span>Government registrations (GST, PAN, TAN, IEC, FSSAI, PF, ESI, MSME/Udyam, Shop Act, etc.)</span>
                </li>
                <li>
                    <span class="list-icon info"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                    <span>Tax return filing (ITR, GST returns, TDS returns)</span>
                </li>
                <li>
                    <span class="list-icon info"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                    <span>Trademark, copyright, and patent registration services</span>
                </li>
                <li>
                    <span class="list-icon info"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                    <span>Accounting, bookkeeping, payroll management, and compliance services</span>
                </li>
                <li>
                    <span class="list-icon info"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                    <span>Audit, secretarial (ROC), and legal drafting services</span>
                </li>
            </ul>

            <p>By purchasing or engaging any of our services, you acknowledge that you have read, understood, and agree to abide by this policy.</p>
        </div>
    </div>
</section>

<!-- ========================================
     SECTION 2: CANCELLATION POLICY
     ======================================== -->
<section class="content-section" id="cancellation-section">
    <div class="content-container">
        <h2 class="section-title">2. Cancellation Policy</h2>
        <div class="content-text">
            <p>You may request cancellation of any service at any time. However, the eligibility and amount of refund depend on the stage of service delivery at the time of your cancellation request.</p>

            <h3 style="margin-top:24px;margin-bottom:16px;">2.1 Cancellation Before Work Commences</h3>
            <p>If you cancel <strong>before any work has been initiated</strong> by our team, you are eligible for a <strong>100% refund of the professional fee</strong> (excluding government fees and third-party costs, if already paid).</p>

            <h3 style="margin-top:24px;margin-bottom:16px;">2.2 Cancellation After Work Has Commenced</h3>
            <p>If work has already begun on your engagement, cancellation will be subject to a prorated deduction. The refund will be calculated as follows:</p>

            <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Stage of Delivery</th>
                            <th>Refund Eligibility</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No work started (order placed only)</td>
                            <td>100% of professional fee refunded</td>
                        </tr>
                        <tr>
                            <td>Document review / initial consultation done</td>
                            <td>Up to 80% of professional fee refunded</td>
                        </tr>
                        <tr>
                            <td>Application drafted / forms prepared</td>
                            <td>Up to 50% of professional fee refunded</td>
                        </tr>
                        <tr>
                            <td>Application filed with government authority</td>
                            <td>No refund (service substantially delivered)</td>
                        </tr>
                        <tr>
                            <td>Service fully completed / certificate issued</td>
                            <td>No refund</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3 style="margin-top:24px;margin-bottom:16px;">2.3 Cancellation Timeframe</h3>
            <p>We strongly recommend that cancellation requests be made <strong>within 48 hours of payment</strong> for the most favorable refund outcome. Requests received after <strong>30 business days</strong> from the date of payment, without a valid reason for delay, may be treated at the firm's discretion.</p>
        </div>
    </div>
</section>

<!-- ========================================
     SECTION 3: REFUND POLICY
     ======================================== -->
<section class="content-section" id="refund-section">
    <div class="content-container">
        <h2 class="section-title">3. Refund Policy</h2>
        <div class="content-text">

            <h3 style="margin-bottom:16px;">3.1 Eligible for Full Refund</h3>
            <div class="highlight-box-green">
                <p><strong>You are eligible for a 100% refund when:</strong></p>
                <p>• You cancel before any work is initiated by our team.</p>
                <p>• We are unable to assign an expert or process your order within the committed timeframe.</p>
                <p>• Duplicate payment has been made by error.</p>
                <p>• Patron Accounting is unable to deliver the service due to internal limitations.</p>
            </div>

            <h3 style="margin-top:24px;margin-bottom:16px;">3.2 Eligible for Partial Refund</h3>
            <div class="highlight-box">
                <p><strong>A prorated refund will be issued when:</strong></p>
                <p>• Work has commenced but the service is not yet substantially delivered.</p>
                <p>• You choose to switch to a different service — the unused portion of the original fee will be adjusted.</p>
                <p>• A cancellation/processing fee of up to <strong>20% of the professional fee</strong> may be deducted based on the stage of delivery.</p>
            </div>

            <h3 style="margin-top:24px;margin-bottom:16px;">3.3 Not Eligible for Refund</h3>
            <div class="highlight-box-red">
                <p><strong>No refund will be issued under the following circumstances:</strong></p>
                <p>• Government fees, challan payments, stamp duty, DSC costs, and statutory charges paid to any government body or authorized third party — these are non-refundable as they are beyond our control.</p>
                <p>• The application has already been filed or submitted to the relevant government authority.</p>
                <p>• The service has been fully completed and the deliverable (certificate, report, filing acknowledgment) has been provided.</p>
                <p>• You fail to provide required documents or information within 30 days of purchase and do not respond to our team's follow-ups via phone or email.</p>
                <p>• You withhold material information that prevents us from completing the engagement.</p>
                <p>• Subscription or recurring services (accounting, payroll, compliance retainers) — cancellation stops future billing but past periods are non-refundable.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECTION 4: HOW TO REQUEST
     ======================================== -->
<section class="content-section" id="process-section">
    <div class="content-container">
        <h2 class="section-title">4. How to Request a Cancellation or Refund</h2>
        <div class="content-text">
            <p>Follow these steps to initiate your cancellation or refund request:</p>
        </div>

        <div class="policy-step-grid">
            <div class="policy-step-card">
                <div class="policy-step-number">1</div>
                <h4>Submit Request</h4>
                <p>Email us at <a href="mailto:sales@patronaccounting.com" style="color:inherit;">sales@patronaccounting.com</a> or call <a href="tel:+919459456700">+91 945 945 6700</a> with your order ID, registered name, and reason for cancellation.</p>
            </div>
            <div class="policy-step-card">
                <div class="policy-step-number">2</div>
                <h4>Review & Acknowledgment</h4>
                <p>Our team will acknowledge your request within <strong>24 business hours</strong> and review the stage of service delivery to determine refund eligibility.</p>
            </div>
            <div class="policy-step-card">
                <div class="policy-step-number">3</div>
                <h4>Refund Processing</h4>
                <p>Approved refunds are processed within <strong>7–10 business days</strong>. The refund will be credited to the original payment method (bank account, UPI, or card).</p>
            </div>
        </div>

        <div class="highlight-box" style="margin-top:24px;">
            <p><strong>Important:</strong> Please include your <strong>Order ID / Invoice Number</strong> and <strong>registered mobile number</strong> in all refund communications. This helps us locate your records and process your request faster.</p>
        </div>
    </div>
</section>

<!-- ========================================
     SECTION 5: SERVICE-SPECIFIC TERMS
     ======================================== -->
<section class="content-section" id="service-terms-section">
    <div class="content-container">
        <h2 class="section-title">5. Service-Specific Cancellation Terms</h2>
        <div class="content-text">
            <p>Certain services have additional conditions that apply beyond the general policy:</p>

            <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Service Category</th>
                            <th>Special Conditions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Company / LLP Registration</td>
                            <td>No refund once Name Approval (RUN/SPICe+) is filed with MCA. Government fees (MCA, stamp duty) are non-refundable at any stage.</td>
                        </tr>
                        <tr>
                            <td>GST / PAN / TAN Registration</td>
                            <td>No refund after the application is submitted on the government portal. Government processing fees are non-refundable.</td>
                        </tr>
                        <tr>
                            <td>Trademark Registration</td>
                            <td>No refund after TM-A application is filed with the IP India Registry. Government fees (₹4,500/₹9,000) are non-refundable.</td>
                        </tr>
                        <tr>
                            <td>Income Tax / GST Return Filing</td>
                            <td>No refund after the return is filed and acknowledgment (ITR-V / ARN) is generated. Partial refund if work is cancelled before filing.</td>
                        </tr>
                        <tr>
                            <td>Accounting & Bookkeeping (Monthly/Quarterly)</td>
                            <td>Cancellation applies to future billing cycles only. No refund for the current or past billed periods.</td>
                        </tr>
                        <tr>
                            <td>Payroll Services</td>
                            <td>30-day notice period required for cancellation. Payroll processed for the notice month is non-refundable.</td>
                        </tr>
                        <tr>
                            <td>Digital Signature Certificate (DSC)</td>
                            <td>Non-refundable once DSC is issued, as it is issued by a licensed Certifying Authority.</td>
                        </tr>
                        <tr>
                            <td>Audit Services</td>
                            <td>Cancellation fee of up to 30% applies if cancelled after fieldwork has commenced.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECTION 6: GOVERNMENT FEES DISCLAIMER
     ======================================== -->
<section class="content-section" id="government-fees-section">
    <div class="content-container">
        <h2 class="section-title">6. Government Fees & Third-Party Charges</h2>
        <div class="content-text">
            <div class="highlight-box-red">
                <p><strong>Non-Refundable:</strong> All government fees, statutory charges, challan payments, stamp duty, MCA fees, DSC costs, and any payments made to government portals or authorized third parties on your behalf are strictly non-refundable.</p>
                <p>These payments are made directly to government bodies and are outside the control of Patron Accounting LLP. This applies irrespective of whether the application is approved, rejected, or withdrawn.</p>
            </div>

            <p>Examples of non-refundable government/third-party charges include (but are not limited to):</p>

            <ul class="policy-list">
                <li>
                    <span class="list-icon cross"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
                    <span>MCA filing fees (SPICe+, RUN, AOC-4, MGT-7, etc.)</span>
                </li>
                <li>
                    <span class="list-icon cross"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
                    <span>State stamp duty for company/LLP incorporation</span>
                </li>
                <li>
                    <span class="list-icon cross"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
                    <span>Trademark Office fees (₹4,500 / ₹9,000 per class)</span>
                </li>
                <li>
                    <span class="list-icon cross"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
                    <span>PAN/TAN processing fees paid to NSDL/UTIITSL</span>
                </li>
                <li>
                    <span class="list-icon cross"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
                    <span>DSC issuance charges (eMudhra, Capricorn, etc.)</span>
                </li>
                <li>
                    <span class="list-icon cross"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
                    <span>FSSAI license fees, IEC application fees, DGFT charges</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- ========================================
     SECTION 7: REJECTED APPLICATIONS
     ======================================== -->
<section class="content-section" id="rejection-section">
    <div class="content-container">
        <h2 class="section-title">7. Rejected or Delayed Applications</h2>
        <div class="content-text">
            <p>Sometimes government applications may be rejected, require clarification, or experience processing delays. Here's how we handle each scenario:</p>

            <h3 style="margin-top:24px;margin-bottom:16px;">7.1 Rejection Due to Our Error</h3>
            <p>If a government application is rejected due to an error or omission on our part, we will <strong>re-file the application at no additional professional fee</strong>. However, if the government body charges a re-filing fee, the client will bear that cost.</p>

            <h3 style="margin-top:24px;margin-bottom:16px;">7.2 Rejection Due to Client-Side Issues</h3>
            <p>If the rejection is due to incorrect, incomplete, or fraudulent information/documents provided by the client, the client is responsible for providing corrected information. Re-filing fees (both professional and government) may apply.</p>

            <h3 style="margin-top:24px;margin-bottom:16px;">7.3 Government Processing Delays</h3>
            <p>We do not guarantee government processing timelines as they are outside our control. Delays from government portals, audits, or verifications do not constitute grounds for cancellation or refund after an application has been filed.</p>
        </div>
    </div>
</section>

<!-- ========================================
     SECTION 8: FAQ
     ======================================== -->
@php
    $faqExpandedItems = [
        ['question' => 'How do I request a cancellation or refund?', 'answer' => 'Send an email to <strong><a href="mailto:sales@patronaccounting.com" style="color:inherit;">sales@patronaccounting.com</a></strong> or call <strong>+91 945 945 6700</strong> with your order ID, registered name, and reason for cancellation. Our team will acknowledge your request within 24 business hours and guide you through the next steps.'],
        ['question' => 'How long does a refund take to process?', 'answer' => 'Once approved, refunds are processed within <strong>7–10 business days</strong>. Depending on your bank or payment provider, it may take an additional 3–5 business days for the amount to reflect in your account. UPI refunds are typically faster.'],
        ['question' => 'Are government fees refundable?', 'answer' => 'No. Government fees, challan payments, stamp duty, and statutory charges paid to any government body are strictly non-refundable under any circumstances. These are third-party payments made on your behalf and are outside the control of Patron Accounting LLP.'],
        ['question' => 'What if my application is rejected by the government?', 'answer' => 'If the application is rejected due to an error on our part, we will re-file at no extra professional fee. If the rejection is caused by incorrect or incomplete information provided by you, re-filing charges (professional and government fees) may apply. In both cases, we will notify you and explain the reason for rejection.'],
        ['question' => 'Can I cancel after work has already started?', 'answer' => 'Yes, you can cancel at any stage. However, the refund will be prorated based on the work already completed. We will deduct charges for work done and any non-recoverable third-party costs. The remaining amount, if any, will be refunded to you.'],
        ['question' => 'Is there a cancellation fee?', 'answer' => 'A processing/cancellation fee of up to 20% of the professional fee may apply depending on the stage of service delivery. If no work has been started, the full professional fee is refundable with no cancellation charge.'],
        ['question' => 'Can I switch to a different service instead of cancelling?', 'answer' => 'Yes. If you wish to change your service order within 7 days of payment, the unused fee will be adjusted towards the new service. If the new service costs more, you pay the difference. If it costs less, the balance is refunded.'],
        ['question' => 'What if I don\'t respond to the team\'s requests for documents?', 'answer' => 'If you do not provide the required documents or respond to our team\'s follow-up calls and emails within 30 days of purchase, Patron Accounting reserves the right to close the engagement. In such cases, no refund will be issued as the delay is attributable to the client.']
    ];
@endphp
@include('partials.faq-section', ['faqs' => $faqExpandedItems, 'heading' => 'Frequently Asked Questions', 'lead' => 'Answers to common questions about cancellations and refunds.', 'includeSchema' => true, 'showForm' => false])

<!-- ========================================
     SECTION 9: CONTACT & GRIEVANCE
     ======================================== -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">8. Contact & Grievance Redressal</h2>
            <div class="content-text" style="text-align:justify;">
                <p style="color:rgba(255,255,255,0.85);">If you have any questions, concerns, or disputes regarding this Cancellation & Refund Policy, please reach out to us. We are committed to resolving all grievances fairly and promptly.</p>
                <p style="color:rgba(255,255,255,0.85);"><strong style="color:#FFFFFF;">Grievance Officer:</strong> CA Sundram Gupta, Founder — Patron Accounting LLP</p>
                <p style="color:rgba(255,255,255,0.85);">Grievances will be acknowledged within 24 hours and resolved within 15 business days of receipt.</p>
            </div>

            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:12px 24px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:14px;text-decoration:none;transition:all 0.25s;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                    Call +91 945 945 6700
                </a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20a%20cancellation%20or%20refund%20request." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:12px 24px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:14px;text-decoration:none;transition:all 0.25s;">
                    <svg viewBox="0 0 24 24" fill="currentColor" style="width:16px;height:16px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                    WhatsApp Us
                </a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:12px 24px;background:transparent;border:1.5px solid rgba(255,255,255,0.3);color:#fff;border-radius:50px;font-weight:700;font-size:14px;text-decoration:none;transition:all 0.25s;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    sales@patronaccounting.com
                </a>
            </div>

            <p style="color:rgba(255,255,255,0.6);font-size:13px;margin-top:24px;"><strong style="color:rgba(255,255,255,0.8);">Registered Office:</strong> Office No. B4-708, RTC Silver, Sai Satyam Park, Wagholi, Pune, Maharashtra – 412207</p>
        </div>
    </div>
</section>

<!-- ========================================

    <div style="background:#ECFDF5;border-left:4px solid var(--green,#10B981);padding:16px 20px;border-radius:0 8px 8px 0;margin:20px 0 32px;">
        <p style="font-size:14px;color:var(--text-secondary,#4B5563);line-height:1.7;margin:0;"><strong style="color:#065F46;">Our Commitment:</strong> We aim to make the refund process as straightforward as our onboarding. Rated 4.9★ on Google across 446 reviews — our clients trust us to be fair and responsive, even when things don't go as planned.</p>
    </div>

 ========================================
     SECTION 10: ADDITIONAL TERMS
     ======================================== -->
<section class="content-section" id="additional-section">
    <div class="content-container">
        <h2 class="section-title">9. Additional Terms</h2>
        <div class="content-text">
            <p><strong>9.1 Refund Mode:</strong> All refunds will be credited to the original payment method used at the time of purchase. If paid via UPI, refunds go to the same UPI ID. If paid by credit/debit card or net banking, the refund will be issued to the same card or bank account.</p>

            <p><strong>9.2 GST on Refunds:</strong> Any GST charged on the professional fee will be refunded proportionally along with the refund amount. GST paid on government fees is non-refundable.</p>

            <p><strong>9.3 Force Majeure:</strong> Patron Accounting shall not be liable for delays or inability to provide services due to events beyond reasonable control, including natural disasters, pandemics, government shutdowns, internet outages, or changes in law. In such cases, delivery timelines will be extended and no refund will be due on account of the delay alone.</p>

            <p><strong>9.4 Policy Amendments:</strong> Patron Accounting LLP reserves the right to modify this policy at any time. Updated versions will be published on this page with the revised effective date. We recommend reviewing this page periodically.</p>

            <p><strong>9.5 Governing Law:</strong> This policy is governed by and construed in accordance with the laws of India. Any disputes arising under or in connection with this policy shall be subject to the exclusive jurisdiction of the courts in Pune, Maharashtra.</p>
        </div>

        <!-- Content Freshness Footer -->
        <div style="margin-top:40px;padding-top:20px;border-top:1px solid var(--gray-200);display:flex;align-items:center;gap:8px;flex-wrap:wrap;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:var(--green);flex-shrink:0;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <span style="font-size:12px;color:var(--text-muted);">This policy was last reviewed by Patron Accounting's legal team on <strong style="color:var(--text-primary);">26 February 2026</strong>.</span>
            <span style="font-size:12px;color:var(--text-muted);margin-left:auto;">
                <a href="/terms-and-conditions" style="color:var(--orange);font-weight:600;font-size:12px;">Terms & Conditions</a>
                &nbsp;·&nbsp;
                <a href="/privacy-policy" style="color:var(--orange);font-weight:600;font-size:12px;">Privacy Policy</a>
            </span>
        </div>
    </div>
</section>

</main>

<!-- ========================================
     GOOGLE BADGE

<div style="text-align:center;padding:12px;font-size:12px;color:var(--text-muted,#6B7280);">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:4px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
    Last updated: 28 February 2026
</div>
<div class="google-rating-badge">
    <svg class="grb-icon" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC04" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
    <div>
        <div class="grb-stars" style="display:flex;gap:2px;"><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24" width="16" height="16" style="fill:#FBBC04;opacity:0.7;flex-shrink:0;"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <div class="grb-text"><strong>4.9</strong> out of 5 · Based on <strong>446 Google Reviews</strong> across 4 offices</div>
    </div>
</div>


 ========================================
     OFFICE LOCATIONS STRIP
     ======================================== -->

<!-- OFFICE STRIP -->
<div class="office-locations-strip">
    <div class="ols-container">
        <span class="ols-label">📍 Our Offices</span>
        <div class="ols-offices">
            <a href="https://www.google.com/maps/place/?q=place_id:ChIJV6BM7FnBwjsRyyAfaIsfMqM" target="_blank" class="ols-office active">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Pune
            </a>
            <a href="https://www.google.com/maps/place/?q=place_id:ChIJ83f7WkHP5zsRUEuc4_l1RVw" target="_blank" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Mumbai
            </a>
            <a href="https://www.google.com/maps/place/?q=place_id:ChIJr804ewcBDTkRBlaNBTnipcY" target="_blank" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Delhi
            </a>
            <a href="https://www.google.com/maps/place/?q=place_id:ChIJt0L8I5QZDTkRiRCJ6rXQj6g" target="_blank" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Gurugram
            </a>
        </div>
        <a href="/about-us" class="ols-trust-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Why Trust Us
        </a>
    </div>
</div>

<!-- WHATSAPP BAR -->
<div class="whatsapp-sticky-bar" id="whatsappStickyBar">
    <svg class="wsb-icon" viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
    <span class="wsb-text">
        Join 5,000+ business owners. <span>Get compliance due date alerts on WhatsApp.</span>
    </span>
    <a href="https://wa.me/919459456700" target="_blank" class="wsb-btn">Join Free →</a>
    <button class="wsb-close" onclick="document.getElementById('whatsappStickyBar').style.display='none'" aria-label="Close">×</button>
</div>

<script>
/* Accordion — pure JS fallback that always works */
document.addEventListener('DOMContentLoaded', function() {
    /* Initialize collapsed panels */
    document.querySelectorAll('.accordion-collapse').forEach(function(el) {
        if (!el.classList.contains('show')) {
            el.style.display = 'none';
        }
    });
    
    document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function(btn) {
        btn.style.cursor = 'pointer';
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var targetSel = btn.getAttribute('data-bs-target');
            var target = document.querySelector(targetSel);
            if (!target) return;
            
            var parentSel = btn.getAttribute('data-bs-parent') || btn.closest('.accordion');
            var parent = typeof parentSel === 'string' ? document.querySelector(parentSel) : parentSel;
            var icon = btn.querySelector('.accordion-icon');
            var isOpen = target.style.display !== 'none';
            
            /* Close siblings */
            if (parent) {
                parent.querySelectorAll('.accordion-collapse').forEach(function(panel) {
                    if (panel !== target) {
                        panel.style.display = 'none';
                        panel.classList.remove('show');
                        var sib = panel.closest('.accordion-item');
                        if (sib) {
                            var sibBtn = sib.querySelector('[data-bs-toggle="collapse"]');
                            if (sibBtn) {
                                sibBtn.classList.add('collapsed');
                                var si = sibBtn.querySelector('.accordion-icon');
                                if (si) si.style.transform = 'rotate(0deg)';
                            }
                        }
                    }
                });
            }
            
            /* Toggle */
            if (isOpen) {
                target.style.display = 'none';
                target.classList.remove('show');
                btn.classList.add('collapsed');
                if (icon) icon.style.transform = 'rotate(0deg)';
            } else {
                target.style.display = 'block';
                target.classList.add('show');
                btn.classList.remove('collapsed');
                if (icon) icon.style.transform = 'rotate(45deg)';
            }
        });
    });
});
</script>

<style>

        /* ============================================
           CSS VARIABLES
           ============================================ */
        :root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --red: #EF4444;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
        }

        h2 {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }
        h3 { color: var(--blue); font-size: 1.35rem; font-weight: 700; }
        p { color: var(--text-secondary); }
        a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        a:hover { color: var(--orange-dark); }

        /* ============================================
           HERO SECTION
           ============================================ */
        .policy-hero {
            background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);
            padding: 48px 32px 40px;
        }
        .policy-hero-inner {
            max-width: 1140px;
            margin: 0 auto;
        }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--orange-light); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px;
        }
        .hero-badge svg { width: 14px; height: 14px; }
        .policy-hero h1 {
            font-family: 'Barlow', sans-serif;
            font-weight: 700;
            font-size: clamp(32px, 4vw, 44px);
            line-height: 1.15;
            color: var(--blue);
            margin-bottom: 16px;
        }
        .policy-hero .hero-subtitle {
            font-size: 16px;
            color: var(--text-secondary);
            line-height: 1.7;
            max-width: 700px;
        }
        .policy-meta {
            display: flex; align-items: center; gap: 20px; flex-wrap: wrap;
            margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--gray-200);
        }
        .policy-meta-item {
            display: flex; align-items: center; gap: 6px;
            font-size: 13px; color: var(--text-muted); font-weight: 500;
        }
        .policy-meta-item svg { width: 16px; height: 16px; color: var(--orange); }
        .policy-meta-item strong { color: var(--text-primary); }

        /* ============================================
           CONTENT SECTIONS
           ============================================ */
        .content-section { padding: 56px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1140px; margin: 0 auto; }

        .section-title {
            font-size: clamp(22px, 2.5vw, 28px); font-weight: 800;
            color: var(--blue); margin-bottom: 20px; line-height: 1.25;
        }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: justify; }
        .content-text p { margin-bottom: 16px; text-align: justify; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: justify; }
        .highlight-box p:last-child { margin-bottom: 0; }

        .highlight-box-red {
            background: #FEF2F2; border-left: 4px solid var(--red);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box-red p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: justify; }
        .highlight-box-red p:last-child { margin-bottom: 0; }

        .highlight-box-green {
            background: #ECFDF5; border-left: 4px solid var(--green);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box-green p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: justify; }
        .highlight-box-green p:last-child { margin-bottom: 0; }

        /* Policy List Items */
        .policy-list { list-style: none; padding-left: 0; margin: 16px 0; }
        .policy-list li {
            display: flex; align-items: flex-start; gap: 12px;
            color: var(--text-secondary); line-height: 1.7; margin-bottom: 12px; font-size: 15px;
        }
        .policy-list li .list-icon {
            width: 22px; height: 22px; border-radius: 50%; flex-shrink: 0; margin-top: 2px;
            display: flex; align-items: center; justify-content: center;
        }
        .policy-list li .list-icon.check { background: rgba(16, 185, 129, 0.12); }
        .policy-list li .list-icon.check svg { width: 12px; height: 12px; color: var(--green); }
        .policy-list li .list-icon.cross { background: rgba(239, 68, 68, 0.12); }
        .policy-list li .list-icon.cross svg { width: 12px; height: 12px; color: var(--red); }
        .policy-list li .list-icon.info { background: var(--orange-light); }
        .policy-list li .list-icon.info svg { width: 12px; height: 12px; color: var(--orange); }

        /* Tables */
        .table-responsive-wrapper {
            width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0;
            border-radius: var(--radius-md); border: 1px solid var(--gray-200);
        }
        .table-responsive-wrapper table { width: 100%; font-family: 'Barlow', sans-serif; border-collapse: collapse; margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th {
            border: 1px solid #14365F; color: #fff; font-size: 14px; font-weight: 700;
            background-color: #14365F; padding: 14px 18px; text-align: left;
        }
        .table-responsive-wrapper table tbody tr td {
            border: 1px solid var(--gray-200); padding: 12px 18px; font-size: 14px;
            color: var(--text-secondary); background: var(--white);
        }
        .table-responsive-wrapper table tbody tr:nth-child(even) td { background: var(--gray-50); }
        .table-responsive-wrapper table tbody tr:hover td { background: var(--orange-lighter); }
        .table-responsive-wrapper table tbody tr td:first-child { font-weight: 600; color: var(--text-primary); }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

        /* Policy Number Cards */
        .policy-step-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 24px 0;
        }
        .policy-step-card {
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg); padding: 24px; transition: all 0.25s ease;
            text-align: center;
        }
        .policy-step-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .policy-step-number {
            width: 44px; height: 44px; background: var(--orange); color: white;
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 18px; font-weight: 800; margin: 0 auto 14px;
        }
        .policy-step-card h4 { font-size: 15px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .policy-step-card p { font-size: 13px; color: var(--text-muted); line-height: 1.6; margin: 0; }

        /* FAQ Accordion */
        .accordion-button:not(.collapsed)::after, .accordion-button::after { display: none !important; }
        .accordion-button, .accordion-button:hover, .accordion-button:active, .accordion-button:visited { color: #14365F !important; font-size: 15px !important; text-decoration: none !important; }
        .accordion-button:focus { border-color: transparent !important; box-shadow: none !important; color: #14365F !important; }
        .accordion-button:not(.collapsed) { background-color: transparent !important; color: #14365F !important; }
        .accordion-button:not(.collapsed) .accordion-icon { transform: rotate(45deg); }
        .accordion-button.collapsed { color: #14365F !important; }
        .accordion-item { border: 1px solid var(--gray-200) !important; }

        /* ============================================
           OFFICE LOCATIONS FOOTER STRIP
           ============================================ */
        .office-locations-strip {
            background: var(--blue); padding: 20px 32px; border-top: 3px solid var(--orange);
        }
        .office-locations-strip .ols-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap;
        }
        .office-locations-strip .ols-label {
            font-size: 13px; font-weight: 700; color: white;
            text-transform: uppercase; letter-spacing: 0.5px; flex-shrink: 0;
        }
        .office-locations-strip .ols-offices { display: flex; align-items: center; gap: 24px; flex-wrap: wrap; }
        .office-locations-strip .ols-office {
            display: flex; align-items: center; gap: 6px;
            color: rgba(255,255,255,0.85); font-size: 13px; font-weight: 500;
            cursor: pointer; transition: color 0.2s; text-decoration: none;
        }
        .office-locations-strip .ols-office:hover { color: var(--orange); }
        .office-locations-strip .ols-office svg { width: 14px; height: 14px; color: var(--orange); flex-shrink: 0; }
        .office-locations-strip .ols-office.active { color: white; font-weight: 700; }
        .office-locations-strip .ols-trust-link {
            margin-left: auto; display: flex; align-items: center; gap: 6px;
            color: var(--orange); font-size: 13px; font-weight: 600; text-decoration: none; transition: all 0.2s;
        }
        .office-locations-strip .ols-trust-link:hover { color: white; }
        .office-locations-strip .ols-trust-link svg { width: 14px; height: 14px; }

        /* ============================================
           WHATSAPP COMMUNITY STICKY BAR
           ============================================ */
        .whatsapp-sticky-bar {
            position: fixed; bottom: 0; left: 0; right: 0;
            background: #25D366; color: white; padding: 10px 20px;
            display: flex; align-items: center; justify-content: center; gap: 12px;
            z-index: 999; box-shadow: 0 -4px 16px rgba(0,0,0,0.15);
            transform: translateY(100%); animation: slideUpBar 0.5s ease 2s forwards;
        }
        @keyframes slideUpBar { to { transform: translateY(0); } }
        .whatsapp-sticky-bar .wsb-icon { width: 24px; height: 24px; flex-shrink: 0; }
        .whatsapp-sticky-bar .wsb-text { font-size: 14px; font-weight: 600; }
        .whatsapp-sticky-bar .wsb-text span { font-weight: 400; opacity: 0.9; }
        .whatsapp-sticky-bar .wsb-btn {
            background: white; color: #25D366; border: none; padding: 6px 18px;
            border-radius: 50px; font-size: 13px; font-weight: 700; cursor: pointer; transition: all 0.2s; text-decoration: none;
        }
        .whatsapp-sticky-bar .wsb-btn:hover { background: #f0f0f0; }
        .whatsapp-sticky-bar .wsb-close {
            background: none; border: none; color: white; font-size: 20px; cursor: pointer;
            padding: 0 4px; opacity: 0.7; transition: opacity 0.2s;
        }
        .whatsapp-sticky-bar .wsb-close:hover { opacity: 1; }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 768px) {
            .content-section { padding: 40px 16px; }
            .policy-hero { padding: 32px 16px 28px; }
            .policy-hero h1 { font-size: 28px; }
            .policy-step-grid { grid-template-columns: 1fr; }
            .policy-meta { flex-direction: column; gap: 10px; }
            .office-locations-strip .ols-container { flex-direction: column; gap: 10px; }
            .office-locations-strip .ols-trust-link { margin-left: 0; }
            .whatsapp-sticky-bar { padding: 8px 12px; gap: 8px; }
            .whatsapp-sticky-bar .wsb-text { font-size: 12px; }
            .whatsapp-sticky-bar .wsb-text span { display: none; }
        }

        .content-section[id] { scroll-margin-top: 80px; }
    

/* ============================================
   RESPONSIVE FIXES FOR ADDED COMPONENTS
   ============================================ */

/* Google Rating Badge */
.google-rating-badge {
    display: flex; align-items: center; gap: 12px;
    background: #fff; border: 1px solid #E5E7EB; border-radius: 12px;
    padding: 12px 20px; max-width: 420px; margin: 24px auto 0;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.google-rating-badge .grb-icon { width: 28px; height: 28px; flex-shrink: 0; }
.google-rating-badge .grb-text { font-size: 13px; color: #6B7280; line-height: 1.4; }
.google-rating-badge .grb-text strong { color: #1F2937; font-weight: 700; }

/* Quote Cards */
.quotes-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;
}
.quote-card {
    background: #fff; border: 1px solid #E5E7EB; border-radius: 12px;
    padding: 20px; position: relative; box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.quote-card::before {
    content: open-quote; position: absolute; top: 8px; left: 16px;
    font-size: 48px; line-height: 1; color: #E8712C; opacity: 0.15; font-family: Georgia, serif;
}
.quote-card p { font-size: 14px; line-height: 1.7; color: #4B5563; margin-bottom: 12px; font-style: italic; padding-top: 8px; }
.quote-card .quote-author { display: flex; align-items: center; gap: 8px; font-size: 13px; flex-wrap: wrap; }
.quote-card .quote-author strong { color: #1F2937; }
.quote-card .quote-author span { color: #6B7280; }

/* Office Strip */
.office-locations-strip { background: #14365F; padding: 20px 32px; border-top: 3px solid #E8712C; }
.office-locations-strip .ols-container { max-width: 1320px; margin: 0 auto; display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap; }
.office-locations-strip .ols-label { font-size: 13px; font-weight: 700; color: white; text-transform: uppercase; letter-spacing: 0.5px; flex-shrink: 0; }
.office-locations-strip .ols-offices { display: flex; align-items: center; gap: 24px; flex-wrap: wrap; }
.office-locations-strip .ols-office { display: flex; align-items: center; gap: 6px; color: rgba(255,255,255,0.85); font-size: 13px; font-weight: 500; text-decoration: none; transition: color 0.2s; }
.office-locations-strip .ols-office:hover { color: #E8712C; }
.office-locations-strip .ols-office svg { width: 14px; height: 14px; color: #E8712C; flex-shrink: 0; }
.office-locations-strip .ols-office.active { color: white; font-weight: 700; }
.office-locations-strip .ols-trust-link { margin-left: auto; display: flex; align-items: center; gap: 6px; color: #E8712C; font-size: 13px; font-weight: 600; text-decoration: none; }
.office-locations-strip .ols-trust-link svg { width: 14px; height: 14px; }

/* WhatsApp Bar */
.whatsapp-sticky-bar { position: fixed; bottom: 0; left: 0; right: 0; background: #25D366; display: flex; align-items: center; justify-content: center; gap: 12px; padding: 10px 24px; z-index: 1000; box-shadow: 0 -2px 10px rgba(0,0,0,0.15); }
.whatsapp-sticky-bar .wsb-icon { width: 22px; height: 22px; fill: white; flex-shrink: 0; }
.whatsapp-sticky-bar .wsb-text { color: white; font-size: 13px; font-weight: 500; }
.whatsapp-sticky-bar .wsb-text span { font-weight: 400; }
.whatsapp-sticky-bar .wsb-btn { background: white; color: #25D366; padding: 6px 16px; border-radius: 50px; font-size: 13px; font-weight: 700; text-decoration: none; white-space: nowrap; }
.whatsapp-sticky-bar .wsb-close { background: none; border: none; color: white; font-size: 20px; cursor: pointer; padding: 0 4px; margin-left: 8px; }

/* ---- MOBILE 768px ---- */
@media (max-width: 768px) {
    .google-rating-badge { max-width: 100%; margin: 16px 16px 0; }
    .office-locations-strip { padding: 16px; }
    .office-locations-strip .ols-container { flex-direction: column; gap: 10px; }
    .office-locations-strip .ols-offices { justify-content: center; gap: 16px; }
    .office-locations-strip .ols-trust-link { margin-left: 0; }
    .whatsapp-sticky-bar { padding: 8px 16px; gap: 8px; }
    .whatsapp-sticky-bar .wsb-text span { display: none; }
}

/* ---- MOBILE 480px ---- */
@media (max-width: 480px) {
    .google-rating-badge { flex-direction: column; text-align: center; gap: 8px; padding: 16px; }
    .quotes-grid { grid-template-columns: 1fr; }
    .quote-card { padding: 16px; }
    .office-locations-strip .ols-offices { flex-direction: column; gap: 8px; }
    .whatsapp-sticky-bar .wsb-icon { width: 18px; height: 18px; }
    .whatsapp-sticky-bar .wsb-text { font-size: 12px; }
    .whatsapp-sticky-bar .wsb-btn { padding: 5px 12px; font-size: 12px; }
}


/* Google Rating Badge */
.google-rating-badge{display:flex;align-items:center;gap:12px;background:#fff;border:1px solid var(--gray-200);border-radius:var(--radius-md,12px);padding:12px 20px;max-width:420px;margin:24px auto 0;box-shadow:0 2px 8px rgba(0,0,0,0.04)}
.google-rating-badge .grb-icon{width:28px;height:28px;flex-shrink:0}
.google-rating-badge .grb-stars{display:flex;gap:2px}
.google-rating-badge .grb-stars svg{width:16px;height:16px;fill:#FBBC04}
.google-rating-badge .grb-text{font-size:13px;color:var(--text-muted,#6B7280);line-height:1.4}
.google-rating-badge .grb-text strong{color:var(--text-primary,#1F2937);font-weight:700}
@media(max-width:480px){.google-rating-badge{flex-direction:column;text-align:center;gap:8px;padding:16px}}

</style>
@endsection