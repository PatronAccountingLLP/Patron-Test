<!-- Doc file template (no <br> tags) -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <h2 style="text-align:center; margin-bottom:20px;">TAX INVOICE</h2>

    <div style="display:flex; justify-content:space-between; margin-bottom:20px;">
        <div style="width:48%;">
            <p><strong>SUPPLIER DETAILS</strong></p>
            <p><strong>Name:</strong> {{ $supplier_name }}</p>
            <p><strong>Address:</strong> {{ $supplier_address }}</p>
            <p><strong>State:</strong> {{ $supplier_state }}</p>
            <p><strong>State Code:</strong> {{ $supplier_state_code }}</p>
            <p><strong>GSTIN:</strong> {{ $supplier_gstin }}</p>
            <p><strong>PAN:</strong> {{ $supplier_pan }}</p>
            <p><strong>Contact No.:</strong> {{ $supplier_contact }}</p>
            <p><strong>Email:</strong> {{ $supplier_email }}</p>
        </div>
        <div style="width:48%;">
            <p><strong>INVOICE DETAILS</strong></p>
            <p><strong>Invoice Number:</strong> {{ $invoice_number }}</p>
            <p><strong>Invoice Date:</strong> {{ $formatted_invoice_date }}</p>
            <p><strong>Place of Supply:</strong> {{ $place_of_supply }}</p>
            <p><strong>State Code:</strong> {{ $supply_state_code }}</p>
            <p><strong>Due Date:</strong> {{ $formatted_due_date }}</p>
            <p><strong>Reverse Charge:</strong> {{ $reverse_charge }}</p>
        </div>
    </div>

    <p><strong>RECIPIENT DETAILS (Bill To)</strong></p>
    <p><strong>Name:</strong> {{ $recipient_name }}</p>
    <p><strong>Address:</strong> {{ $recipient_address }}</p>
    <p><strong>State:</strong> {{ $recipient_state }} <strong>State Code:</strong> {{ $recipient_state_code }}</p>
    <p><strong>GSTIN:</strong> {{ $recipient_gstin ?: 'Not Registered' }}</p>

    <p><strong>PARTICULARS OF GOODS/SERVICES</strong></p>
    <table style="width:100%; border-collapse:collapse; margin-bottom:20px;">
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
        <tbody>
            @forelse($items as $index => $item)
            <tr>
                <td style="border:1px solid #ddd; padding:8px;">{{ $index+1 }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $item['desc'] }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $item['hsn'] }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $item['qty'] }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $item['unit'] }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ number_format($item['rate'], 2) }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ number_format($item['taxable'], 2) }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $item['cgst_percent'] }}%</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $item['sgst_percent'] }}%</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $item['igst_percent'] }}%</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ number_format($item['total'], 2) }}</td>
            </tr>
            @empty
            <tr><td colspan="11" style="text-align:center;">No items</td></tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-bottom:20px;">
        <p><strong>TAX SUMMARY</strong></p>
        <p><strong>Total Taxable Value:</strong> Rs. {{ number_format($total_taxable, 2) }}</p>
        <p><strong>CGST Amount:</strong> Rs. {{ number_format($total_cgst, 2) }}</p>
        <p><strong>SGST Amount:</strong> Rs. {{ number_format($total_sgst, 2) }}</p>
        <p><strong>IGST Amount:</strong> Rs. {{ number_format($total_igst, 2) }}</p>
        <p><strong>GRAND TOTAL:</strong> Rs. {{ number_format($grand_total, 2) }}</p>
        <p><strong>Amount in Words:</strong> {{ $amount_in_words }}</p>
    </div>

    <p><strong>BANK DETAILS FOR PAYMENT</strong></p>
    <p><strong>Bank Name:</strong> {{ $bank_name }}</p>
    <p><strong>Account Number:</strong> {{ $account_number }}</p>
    <p><strong>IFSC Code:</strong> {{ $ifsc }}</p>
    <p><strong>Branch:</strong> {{ $branch }}</p>

    <p><strong>TERMS AND CONDITIONS</strong></p>
    <p>1. Payment is due within the specified due date.</p>
    <p>2. Goods once sold will not be taken back or exchanged.</p>
    <p>3. Subject to {{ $jurisdiction }} jurisdiction.</p>

    <div style="margin-top:20px; text-align:right;">
        <p>For <strong>{{ $supplier_name }}</strong></p>
        <p>_________________________</p>
        <p>{{ $signatory_name }}</p><p>   Authorised Signatory</p>
    </div>

</div>