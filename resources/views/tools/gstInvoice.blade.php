@extends('tools.tool-master')
@section('title')
{{_(' GST Invoice Format')}}
@endsection

@section('content')
<div class="download-format-body">
    <!-- Hero Section -->
    <div class="download-format-banner">
        <div class="hero-content">
            <div class="hero-badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Free Document Generator
            </div>
            <h1 class="hero-title"> <span> GST Invoice Format</span></h1>
            <p class="hero-subtitle">
                Generate a certified GST Invoice Format in under 60 seconds.
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>
<!-- Form and Live Preview section -->
<div class="download-format-grid">
    <!-- Form Section -->
    <div class="form-card">
        <div class="form-header">
            <div class="form-step-indicator">
                <span class="step-dot active"></span>
                <span class="step-dot"></span>
                <span class="step-dot"></span>
            </div>
            <h2 class="form-title">Enter GST Invoice Details</h2>
            <p class="form-description">
                Fill in the details below to generate a GST-compliant Tax Invoice.
            </p>
        </div>

        <form id="gstInvoiceForm" method="POST" action="{{ route('br.gst.invoice') }}">
            @csrf

            <div class="form-grid">
                <!-- Supplier Details -->
                <div class="form-group full-width">
                    <label class="form-label">Supplier Name <span class="required">*</span></label>
                    <input type="text" name="supplier_name" class="form-control" placeholder="Enter supplier name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Supplier Address <span class="required">*</span></label>
                    <textarea name="supplier_address" class="form-control" placeholder="Enter complete address" required></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Supplier State <span class="required">*</span></label>
                        <input type="text" name="supplier_state" class="form-control" placeholder="e.g., Maharashtra" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">State Code <span class="required">*</span></label>
                        <input type="text" name="supplier_state_code" class="form-control" placeholder="e.g., 27" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">GSTIN <span class="required">*</span></label>
                        <input type="text" name="supplier_gstin" class="form-control" placeholder="e.g., 27AAACB1234E1Z5" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">PAN <span class="required">*</span></label>
                        <input type="text" name="supplier_pan" class="form-control" placeholder="e.g., AAACB1234E" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Contact No. <span class="required">*</span></label>
                        <input type="text" name="supplier_contact" class="form-control" placeholder="Contact number" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email <span class="required">*</span></label>
                        <input type="email" name="supplier_email" class="form-control" placeholder="Email address" required>
                    </div>
                </div>

                <!-- Invoice Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Invoice Number <span class="required">*</span></label>
                        <input type="text" name="invoice_number" class="form-control" placeholder="e.g., INV-001" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Invoice Date <span class="required">*</span></label>
                        <input type="date" name="invoice_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place of Supply <span class="required">*</span></label>
                        <input type="text" name="place_of_supply" class="form-control" placeholder="e.g., Maharashtra" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">State Code <span class="required">*</span></label>
                        <input type="text" name="supply_state_code" class="form-control" placeholder="e.g., 27" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Due Date <span class="required">*</span></label>
                        <input type="date" name="due_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Reverse Charge <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="reverse_charge" class="form-control form-select" required>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Recipient Details -->
                <div class="form-group full-width">
                    <label class="form-label">Recipient Name <span class="required">*</span></label>
                    <input type="text" name="recipient_name" class="form-control" placeholder="Enter recipient name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Recipient Address <span class="required">*</span></label>
                    <textarea name="recipient_address" class="form-control" placeholder="Enter address" required></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Recipient State <span class="required">*</span></label>
                        <input type="text" name="recipient_state" class="form-control" placeholder="e.g., Maharashtra" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">State Code <span class="required">*</span></label>
                        <input type="text" name="recipient_state_code" class="form-control" placeholder="e.g., 27" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Recipient GSTIN (if registered)</label>
                    <input type="text" name="recipient_gstin" class="form-control" placeholder="Enter GSTIN (optional)">
                </div>

                <!-- Invoice Items (dynamic rows) -->
                <div class="form-group full-width">
                    <label class="form-label">Invoice Items <span class="required">*</span></label>
                    <div id="invoiceItemsContainer">
                        <div class="item-row" data-index="0">
                            <div class="form-row">
                                <div class="form-group"><input type="text" name="items[0][desc]" class="form-control" placeholder="Description" required></div>
                                <div class="form-group"><input type="text" name="items[0][hsn]" class="form-control" placeholder="HSN/SAC" required></div>
                                <div class="form-group"><input type="text" name="items[0][qty]" class="form-control" placeholder="Qty" required></div>
                                <div class="form-group"><input type="text" name="items[0][unit]" class="form-control" placeholder="Unit" required></div>
                                <div class="form-group"><input type="text" name="items[0][rate]" class="form-control" placeholder="Rate (₹)" required></div>
                                <div class="form-group"><input type="text" name="items[0][cgst_percent]" class="form-control" placeholder="CGST %" required></div>
                                <div class="form-group"><input type="text" name="items[0][sgst_percent]" class="form-control" placeholder="SGST %" required></div>
                                <div class="form-group"><input type="text" name="items[0][igst_percent]" class="form-control" placeholder="IGST %" required></div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-secondary" id="addItemBtn" style="margin-top:10px;">+ Add Item</button>
                </div>

                <!-- Bank Details -->
                <div class="form-group full-width">
                    <label class="form-label">Bank Name <span class="required">*</span></label>
                    <input type="text" name="bank_name" class="form-control" placeholder="Bank name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Account Number <span class="required">*</span></label>
                        <input type="text" name="account_number" class="form-control" placeholder="Account number" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">IFSC Code <span class="required">*</span></label>
                        <input type="text" name="ifsc" class="form-control" placeholder="IFSC code" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Branch <span class="required">*</span></label>
                    <input type="text" name="branch" class="form-control" placeholder="Branch name" required>
                </div>

                <!-- Terms -->
                <div class="form-group full-width">
                    <label class="form-label">Jurisdiction Place <span class="required">*</span></label>
                    <input type="text" name="jurisdiction" class="form-control" placeholder="City for legal jurisdiction" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Authorised Signatory Name <span class="required">*</span></label>
                    <input type="text" name="signatory_name" class="form-control" placeholder="Name" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Invoice</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="btn-icon">
                    <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/>
                </svg>
                <div class="spinner d-none"></div>
            </button>
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
                        </svg>
                    </div>
                    <div>
                        <h3 class="preview-title">Document Preview</h3>
                        <p class="preview-subtitle">GST Invoice</p>
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
                    <h2 class="certificate-doc-title">TAX INVOICE</h2>
                </div>

                <div class="certificate-body">
                    <!-- Supplier Details -->
                    <div style="display:flex; justify-content:space-between; margin-bottom:16px;">
                        <div style="width:48%;">
                            <p><strong>SUPPLIER DETAILS</strong></p>
                            <p><strong>Name:</strong> <span id="previewSupplierName">________________</span></p>
                            <p><strong>Address:</strong> <span id="previewSupplierAddress">________________</span></p>
                            <p><strong>State:</strong> <span id="previewSupplierState">________________</span></p>
                            <p><strong>State Code:</strong> <span id="previewSupplierStateCode">________________</span></p>
                            <p><strong>GSTIN:</strong> <span id="previewSupplierGSTIN">________________</span></p>
                            <p><strong>PAN:</strong> <span id="previewSupplierPAN">________________</span></p>
                            <p><strong>Contact No.:</strong> <span id="previewSupplierContact">________________</span></p>
                            <p><strong>Email:</strong> <span id="previewSupplierEmail">________________</span></p>
                        </div>
                        <div style="width:48%;">
                            <p><strong>INVOICE DETAILS</strong></p>
                            <p><strong>Invoice Number:</strong> <span id="previewInvoiceNumber">________________</span></p>
                            <p><strong>Invoice Date:</strong> <span id="previewInvoiceDate">________________</span></p>
                            <p><strong>Place of Supply:</strong> <span id="previewPlaceOfSupply">________________</span></p>
                            <p><strong>State Code:</strong> <span id="previewSupplyStateCode">________________</span></p>
                            <p><strong>Due Date:</strong> <span id="previewDueDate">________________</span></p>
                            <p><strong>Reverse Charge:</strong> <span id="previewReverseCharge">No</span></p>
                        </div>
                    </div>

                    <!-- Recipient Details -->
                    <p><strong>RECIPIENT DETAILS (Bill To)</strong></p>
                    <p><strong>Name:</strong> <span id="previewRecipientName">________________</span></p>
                    <p><strong>Address:</strong> <span id="previewRecipientAddress">________________</span></p>
                    <p><strong>State:</strong> <span id="previewRecipientState">________________</span> <strong>State Code:</strong> <span id="previewRecipientStateCode">________________</span></p>
                    <p><strong>GSTIN:</strong> <span id="previewRecipientGSTIN">________________</span></p>

                    <!-- Items Table -->
                    <p><strong>PARTICULARS OF GOODS/SERVICES</strong></p>
                    <table style="width:100%; border-collapse:collapse; margin-bottom:16px;">
                        <thead>
                            <tr style="background:#f5f5f5;">
                                <th style="border:1px solid #ddd; padding:8px;">S.No.</th>
                                <th style="border:1px solid #ddd; padding:8px;">Description</th>
                                <th style="border:1px solid #ddd; padding:8px;">HSN/SAC</th>
                                <th style="border:1px solid #ddd; padding:8px;">Qty</th>
                                <th style="border:1px solid #ddd; padding:8px;">Unit</th>
                                <th style="border:1px solid #ddd; padding:8px;">Rate (₹)</th>
                                <th style="border:1px solid #ddd; padding:8px;">Taxable Value</th>
                                <th style="border:1px solid #ddd; padding:8px;">CGST %</th>
                                <th style="border:1px solid #ddd; padding:8px;">SGST %</th>
                                <th style="border:1px solid #ddd; padding:8px;">IGST %</th>
                                <th style="border:1px solid #ddd; padding:8px;">Total (₹)</th>
                            </tr>
                        </thead>
                        <tbody id="previewItemsBody">
                            <tr><td colspan="11" style="text-align:center;">No items added</td></tr>
                        </tbody>
                    </table>

                    <!-- Tax Summary (calculated dynamically) -->
                    <div style="margin-bottom:16px;">
                        <p><strong>TAX SUMMARY</strong></p>
                        <p><strong>Total Taxable Value:</strong> Rs. <span id="previewTotalTaxable">0</span></p>
                        <p><strong>CGST Amount:</strong> Rs. <span id="previewCGSTAmount">0</span></p>
                        <p><strong>SGST Amount:</strong> Rs. <span id="previewSGSTAmount">0</span></p>
                        <p><strong>IGST Amount:</strong> Rs. <span id="previewIGSTAmount">0</span></p>
                        <p><strong>GRAND TOTAL:</strong> Rs. <span id="previewGrandTotal">0</span></p>
                        <p><strong>Amount in Words:</strong> <span id="previewAmountWords">Rupees Zero only</span></p>
                    </div>

                    <!-- Bank Details -->
                    <p><strong>BANK DETAILS FOR PAYMENT</strong></p>
                    <p><strong>Bank Name:</strong> <span id="previewBankName">________________</span></p>
                    <p><strong>Account Number:</strong> <span id="previewAccountNumber">________________</span></p>
                    <p><strong>IFSC Code:</strong> <span id="previewIFSC">________________</span></p>
                    <p><strong>Branch:</strong> <span id="previewBranch">________________</span></p>

                    <!-- Terms -->
                    <p><strong>TERMS AND CONDITIONS</strong></p>
                    <p>1. Payment is due within the specified due date.</p>
                    <p>2. Goods once sold will not be taken back or exchanged.</p>
                    <p>3. Subject to <span id="previewJurisdiction">________________</span> jurisdiction.</p>

                    <!-- Signatory -->
                    <div style="margin-top:20px; text-align:right;">
                        <p>For <strong id="previewSupplierNameFooter">________________</strong></p>
                        <p>_________________________</p>
                        <p><span id="previewSignatoryName">________________</span><br>Authorised Signatory</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.local-addition-table .table-row {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}
.local-addition-table .table-cell {
    flex: 1;
}
.item-row .form-row {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}
.item-row .form-group {
    flex: 1;
}
.btn-secondary {
    background: #6c757d;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    cursor: pointer;
}
.btn-secondary:hover {
    background: #5a6268;
}
</style>



<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">GST Invoice Format</h2>
            <p class="info-subtitle">
                Standard GST Invoice Format for Businesses in India
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A GST Invoice is a tax document issued by a registered supplier at the time of sale of goods or rendering of services. Under the Goods and Services Tax (GST) regime, issuing a proper tax invoice is mandatory for every taxable supply made by a registered person. The invoice serves as evidence of the supply, forms the basis for the recipient to claim Input Tax Credit (ITC), and is essential for maintaining accurate records for GST compliance. The invoice must contain specific particulars as prescribed under the GST Rules.
            </p>

            <p class="info-text">
                A GST-compliant invoice must include details such as the supplier's name, address, and GSTIN, the recipient's name, address, and GSTIN (if registered), a unique invoice number, invoice date, description of goods or services, HSN/SAC codes, quantity, unit price, taxable value, applicable GST rates, and the amount of CGST, SGST, or IGST as applicable. For intra-state supplies, CGST and SGST are charged, while for inter-state supplies, IGST is applicable. The invoice must be issued before or at the time of supply.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally designed GST invoice format ensures that all mandatory fields required under GST law are properly included. A ready-to-use template saves valuable time in invoice preparation, reduces the risk of errors that could lead to ITC rejection or compliance issues, and provides a consistent, professional appearance for all business transactions.
            </p>

            <p class="info-text">
                Standardised formats help businesses maintain proper documentation for audit and assessment purposes.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to GST Compliance</h3>

            <p class="info-text">
                Following GST Registration, issuing proper tax invoices is one of the fundamental compliance requirements. Registered businesses must issue GST invoices for every taxable supply and maintain these records for the prescribed period. The invoice details must match with GST returns filed, particularly GSTR-1 where outward supplies are reported.
            </p>

            <p class="info-text">
                Businesses should ensure their invoicing system captures all mandatory fields to avoid discrepancies during reconciliation and assessment.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                GST Invoice – Sample Format
            </h3>

            <p class="format-text"><strong>TAX INVOICE</strong></p>

            <p class="format-text"><strong>SUPPLIER DETAILS</strong></p>
            <p class="format-text">Supplier Name: ________________________</p>
            <p class="format-text">Address: ________________________</p>
            <p class="format-text">State: ________________________ &nbsp;&nbsp; State Code: ________</p>
            <p class="format-text">GSTIN: ________________________</p>
            <p class="format-text">PAN: ________________________</p>
            <p class="format-text">Contact No.: ________________________ &nbsp;&nbsp; Email: ________________________</p>

            <p class="format-text"><strong>INVOICE DETAILS</strong></p>
            <p class="format-text">Invoice Number: ________________________ &nbsp;&nbsp; Invoice Date: ________________________</p>
            <p class="format-text">Place of Supply: ________________________ &nbsp;&nbsp; State Code: ________</p>
            <p class="format-text">Due Date: ________________________ &nbsp;&nbsp; Reverse Charge: Yes / No</p>

            <p class="format-text"><strong>RECIPIENT DETAILS (Bill To)</strong></p>
            <p class="format-text">Recipient Name: ________________________</p>
            <p class="format-text">Address: ________________________</p>
            <p class="format-text">State: ________________________ &nbsp;&nbsp; State Code: ________</p>
            <p class="format-text">GSTIN: ________________________ (if registered)</p>

            <p class="format-text"><strong>PARTICULARS OF GOODS/SERVICES</strong></p>
            <p class="format-text">
                S.No. | Description | HSN/SAC | Qty | Unit | Rate | Taxable Value | CGST % | SGST % | IGST % | Total
            </p>

            <p class="format-text"><strong>TAX SUMMARY</strong></p>
            <p class="format-text">Total Taxable Value: Rs. ____________</p>
            <p class="format-text">CGST Amount: Rs. ____________</p>
            <p class="format-text">SGST Amount: Rs. ____________</p>
            <p class="format-text">IGST Amount: Rs. ____________</p>
            <p class="format-text"><strong>GRAND TOTAL: Rs. ____________</strong></p>

            <p class="format-text">Amount in Words: Rupees __________________________ only</p>

            <p class="format-text"><strong>BANK DETAILS FOR PAYMENT</strong></p>
            <p class="format-text">Bank Name: ________________________</p>
            <p class="format-text">Account Number: ________________________</p>
            <p class="format-text">IFSC Code: ________________________</p>
            <p class="format-text">Branch: ________________________</p>

            <p class="format-text"><strong>TERMS AND CONDITIONS</strong></p>
            <p class="format-text">1. Payment is due within the specified due date.</p>
            <p class="format-text">2. Goods once sold will not be taken back or exchanged.</p>
            <p class="format-text">3. Subject to ________________________ jurisdiction.</p>

            <p class="format-text">For ________________________ (Supplier Name)</p>
            <p class="format-text">________________________</p>
            <p class="format-text">Authorised Signatory</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. What is the difference between the invoice date and the due date?</h4>
                <p class="faq-answer">
                    The invoice date is the date on which the GST invoice is issued and determines the tax period. The due date is the deadline for payment as per agreed credit terms.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Can GST invoice be handwritten?</h4>
                <p class="faq-answer">
                    Yes, provided all mandatory details are included. However, printed or digital invoices are preferred for accuracy and professionalism.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Is it compulsory to maintain a serial number on GST invoices?</h4>
                <p class="faq-answer">
                    Yes, GST invoices must have a unique consecutive serial number for each financial year, not exceeding 16 characters.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Can I digitally sign a GST invoice using a DSC?</h4>
                <p class="faq-answer">
                    Yes, GST invoices can be digitally signed using a Digital Signature Certificate (DSC), ensuring authenticity and integrity.
                </p>
            </div>

        </div>

    </div>
</div>
    </div>
</div>

<!-- JavaScript for dynamic rows and preview -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('gstInvoiceForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const invoiceDate = form.querySelector('[name="invoice_date"]');
    const dueDate = form.querySelector('[name="due_date"]');
    if (invoiceDate) invoiceDate.value = today;
    if (dueDate) dueDate.value = today;

    // Dynamic item rows
    let itemIndex = 1;
    const container = document.getElementById('invoiceItemsContainer');
    document.getElementById('addItemBtn').addEventListener('click', function() {
        const newRow = document.createElement('div');
        newRow.className = 'item-row';
        newRow.setAttribute('data-index', itemIndex);
        newRow.innerHTML = `
            <div class="form-row">
                <div class="form-group"><input type="text" name="items[${itemIndex}][desc]" class="form-control" placeholder="Description" required></div>
                <div class="form-group"><input type="text" name="items[${itemIndex}][hsn]" class="form-control" placeholder="HSN/SAC" required></div>
                <div class="form-group"><input type="text" name="items[${itemIndex}][qty]" class="form-control" placeholder="Qty" required></div>
                <div class="form-group"><input type="text" name="items[${itemIndex}][unit]" class="form-control" placeholder="Unit" required></div>
                <div class="form-group"><input type="text" name="items[${itemIndex}][rate]" class="form-control" placeholder="Rate (₹)" required></div>
                <div class="form-group"><input type="text" name="items[${itemIndex}][cgst_percent]" class="form-control" placeholder="CGST %" required></div>
                <div class="form-group"><input type="text" name="items[${itemIndex}][sgst_percent]" class="form-control" placeholder="SGST %" required></div>
                <div class="form-group"><input type="text" name="items[${itemIndex}][igst_percent]" class="form-control" placeholder="IGST %" required></div>
            </div>
        `;
        // Add event listeners for new inputs
        const inputs = newRow.querySelectorAll('input');
        inputs.forEach(inp => inp.addEventListener('input', updatePreview));
        container.appendChild(newRow);
        itemIndex++;
    });

    // Function to get all item data from the form
    function getItems() {
        const items = [];
        const rows = container.querySelectorAll('.item-row');
        rows.forEach((row, idx) => {
            const desc = row.querySelector('input[name*="[desc]"]')?.value || '';
            const hsn = row.querySelector('input[name*="[hsn]"]')?.value || '';
            const qty = parseFloat(row.querySelector('input[name*="[qty]"]')?.value) || 0;
            const unit = row.querySelector('input[name*="[unit]"]')?.value || '';
            const rate = parseFloat(row.querySelector('input[name*="[rate]"]')?.value) || 0;
            const cgstPercent = parseFloat(row.querySelector('input[name*="[cgst_percent]"]')?.value) || 0;
            const sgstPercent = parseFloat(row.querySelector('input[name*="[sgst_percent]"]')?.value) || 0;
            const igstPercent = parseFloat(row.querySelector('input[name*="[igst_percent]"]')?.value) || 0;
            if (desc.trim() !== '') {
                items.push({ desc, hsn, qty, unit, rate, cgstPercent, sgstPercent, igstPercent });
            }
        });
        return items;
    }

    // Helper to format numbers
    function formatNumber(num) {
        return num.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    }

    // Convert number to words (simple implementation)
    function numberToWords(num) {
        if (num === 0) return 'Zero';
        const ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
        const tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
        const teens = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
        function convert(n) {
            if (n < 10) return ones[n];
            if (n < 20) return teens[n - 10];
            if (n < 100) return tens[Math.floor(n / 10)] + (n % 10 ? ' ' + ones[n % 10] : '');
            if (n < 1000) return ones[Math.floor(n / 100)] + ' Hundred' + (n % 100 ? ' ' + convert(n % 100) : '');
            if (n < 100000) return convert(Math.floor(n / 1000)) + ' Thousand' + (n % 1000 ? ' ' + convert(n % 1000) : '');
            if (n < 10000000) return convert(Math.floor(n / 100000)) + ' Lakh' + (n % 100000 ? ' ' + convert(n % 100000) : '');
            return convert(Math.floor(n / 10000000)) + ' Crore' + (n % 10000000 ? ' ' + convert(n % 10000000) : '');
        }
        const rupees = Math.floor(num);
        const paise = Math.round((num - rupees) * 100);
        let words = convert(rupees);
        if (rupees === 1) words += ' Rupee';
        else words += ' Rupees';
        if (paise > 0) {
            words += ' and ' + convert(paise);
            if (paise === 1) words += ' Paise';
            else words += ' Paise';
        }
        return words.charAt(0).toUpperCase() + words.slice(1);
    }

    function updatePreview() {
        // Basic fields
        const supplierName = form.querySelector('[name="supplier_name"]').value || '________________';
        const supplierAddress = form.querySelector('[name="supplier_address"]').value || '________________';
        const supplierState = form.querySelector('[name="supplier_state"]').value || '________________';
        const supplierStateCode = form.querySelector('[name="supplier_state_code"]').value || '________________';
        const supplierGSTIN = form.querySelector('[name="supplier_gstin"]').value || '________________';
        const supplierPAN = form.querySelector('[name="supplier_pan"]').value || '________________';
        const supplierContact = form.querySelector('[name="supplier_contact"]').value || '________________';
        const supplierEmail = form.querySelector('[name="supplier_email"]').value || '________________';

        const invoiceNumber = form.querySelector('[name="invoice_number"]').value || '________________';
        const invoiceDate = form.querySelector('[name="invoice_date"]').value;
        const placeOfSupply = form.querySelector('[name="place_of_supply"]').value || '________________';
        const supplyStateCode = form.querySelector('[name="supply_state_code"]').value || '________________';
        const dueDate = form.querySelector('[name="due_date"]').value;
        const reverseCharge = form.querySelector('[name="reverse_charge"]').value || 'No';

        const recipientName = form.querySelector('[name="recipient_name"]').value || '________________';
        const recipientAddress = form.querySelector('[name="recipient_address"]').value || '________________';
        const recipientState = form.querySelector('[name="recipient_state"]').value || '________________';
        const recipientStateCode = form.querySelector('[name="recipient_state_code"]').value || '________________';
        const recipientGSTIN = form.querySelector('[name="recipient_gstin"]').value || '________________';

        const bankName = form.querySelector('[name="bank_name"]').value || '________________';
        const accountNumber = form.querySelector('[name="account_number"]').value || '________________';
        const ifsc = form.querySelector('[name="ifsc"]').value || '________________';
        const branch = form.querySelector('[name="branch"]').value || '________________';

        const jurisdiction = form.querySelector('[name="jurisdiction"]').value || '________________';
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';

        // Format dates
        const formattedInvoiceDate = invoiceDate ? formatDate(invoiceDate) : '________________';
        const formattedDueDate = dueDate ? formatDate(dueDate) : '________________';

        // Update supplier section
        document.getElementById('previewSupplierName').textContent = supplierName;
        document.getElementById('previewSupplierAddress').textContent = supplierAddress;
        document.getElementById('previewSupplierState').textContent = supplierState;
        document.getElementById('previewSupplierStateCode').textContent = supplierStateCode;
        document.getElementById('previewSupplierGSTIN').textContent = supplierGSTIN;
        document.getElementById('previewSupplierPAN').textContent = supplierPAN;
        document.getElementById('previewSupplierContact').textContent = supplierContact;
        document.getElementById('previewSupplierEmail').textContent = supplierEmail;
        document.getElementById('previewSupplierNameFooter').textContent = supplierName;

        document.getElementById('previewInvoiceNumber').textContent = invoiceNumber;
        document.getElementById('previewInvoiceDate').textContent = formattedInvoiceDate;
        document.getElementById('previewPlaceOfSupply').textContent = placeOfSupply;
        document.getElementById('previewSupplyStateCode').textContent = supplyStateCode;
        document.getElementById('previewDueDate').textContent = formattedDueDate;
        document.getElementById('previewReverseCharge').textContent = reverseCharge;

        document.getElementById('previewRecipientName').textContent = recipientName;
        document.getElementById('previewRecipientAddress').textContent = recipientAddress;
        document.getElementById('previewRecipientState').textContent = recipientState;
        document.getElementById('previewRecipientStateCode').textContent = recipientStateCode;
        document.getElementById('previewRecipientGSTIN').textContent = recipientGSTIN;

        document.getElementById('previewBankName').textContent = bankName;
        document.getElementById('previewAccountNumber').textContent = accountNumber;
        document.getElementById('previewIFSC').textContent = ifsc;
        document.getElementById('previewBranch').textContent = branch;

        document.getElementById('previewJurisdiction').textContent = jurisdiction;
        document.getElementById('previewSignatoryName').textContent = signatoryName;

        // Items
        const items = getItems();
        const tbody = document.getElementById('previewItemsBody');
        tbody.innerHTML = '';
        let totalTaxable = 0;
        let totalCGST = 0;
        let totalSGST = 0;
        let totalIGST = 0;
        let grandTotal = 0;

        items.forEach((item, idx) => {
            const taxable = item.qty * item.rate;
            let cgst = 0, sgst = 0, igst = 0, totalTax = 0;
            if (item.cgstPercent > 0 && item.sgstPercent > 0) {
                cgst = taxable * item.cgstPercent / 100;
                sgst = taxable * item.sgstPercent / 100;
                totalTax = cgst + sgst;
                totalCGST += cgst;
                totalSGST += sgst;
            } else if (item.igstPercent > 0) {
                igst = taxable * item.igstPercent / 100;
                totalTax = igst;
                totalIGST += igst;
            }
            const total = taxable + totalTax;
            totalTaxable += taxable;
            grandTotal += total;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td style="border:1px solid #ddd; padding:8px;">${idx+1}</td>
                <td style="border:1px solid #ddd; padding:8px;">${item.desc}</td>
                <td style="border:1px solid #ddd; padding:8px;">${item.hsn}</td>
                <td style="border:1px solid #ddd; padding:8px;">${item.qty}</td>
                <td style="border:1px solid #ddd; padding:8px;">${item.unit}</td>
                <td style="border:1px solid #ddd; padding:8px;">${formatNumber(item.rate)}</td>
                <td style="border:1px solid #ddd; padding:8px;">${formatNumber(taxable)}</td>
                <td style="border:1px solid #ddd; padding:8px;">${item.cgstPercent}%</td>
                <td style="border:1px solid #ddd; padding:8px;">${item.sgstPercent}%</td>
                <td style="border:1px solid #ddd; padding:8px;">${item.igstPercent}%</td>
                <td style="border:1px solid #ddd; padding:8px;">${formatNumber(total)}</td>
            `;
            tbody.appendChild(row);
        });

        if (items.length === 0) {
            const emptyRow = document.createElement('tr');
            emptyRow.innerHTML = '<td colspan="11" style="text-align:center;">No items added</td>';
            tbody.appendChild(emptyRow);
        }

        document.getElementById('previewTotalTaxable').textContent = formatNumber(totalTaxable);
        document.getElementById('previewCGSTAmount').textContent = formatNumber(totalCGST);
        document.getElementById('previewSGSTAmount').textContent = formatNumber(totalSGST);
        document.getElementById('previewIGSTAmount').textContent = formatNumber(totalIGST);
        document.getElementById('previewGrandTotal').textContent = formatNumber(grandTotal);
        document.getElementById('previewAmountWords').textContent = numberToWords(grandTotal);

        updateStepIndicator();
    }

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required], select[required]');
        let filled = 0;
        requiredInputs.forEach(input => {
            if (input.value.trim() !== '') filled++;
        });
        const progress = filled / requiredInputs.length;
        steps.forEach((step, index) => {
            step.classList.remove('active');
            if (index === 0 && progress >= 0) step.classList.add('active');
            if (index === 1 && progress >= 0.5) step.classList.add('active');
            if (index === 2 && progress >= 1) step.classList.add('active');
        });
    }

    // Attach event listeners to all existing inputs
    const allInputs = form.querySelectorAll('input, textarea, select');
    allInputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });
    // Also attach to the container for new rows (event delegation)
    container.addEventListener('input', function(e) {
        if (e.target.matches('input')) updatePreview();
    });

    // Initial preview
    updatePreview();

   
});
</script>

@endsection
