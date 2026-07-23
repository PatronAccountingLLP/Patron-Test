<!-- Doc file template (no <br> tags, only p tags and lists) -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <h2 style="text-align:center; margin-bottom:10px;">CERTIFICATE</h2>
    <p style="text-align:center; margin-bottom:30px;">
        <strong>(As per Public Procurement (Preference to Make in India) Order and its amendments)</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        In compliance with the Government of India Public Procurement (Preference to Make in India) Order and its subsequent amendments, we hereby certify that we, M/s <strong>{{ $company_name }}</strong>, are a Local Supplier meeting the requirement of minimum local content as defined under the said Order.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We confirm that the local content in the goods/services offered against GeM Bid No./Tender No.: <strong>{{ $bid_no }}</strong> is <strong>{{ $local_content_percent }}</strong>% (percentage of local content), which meets or exceeds the minimum local content requirement prescribed for this procurement.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Details of Location(s) at which Local Value Addition is Made:</strong>
    </p>
    <table style="width:100%; border-collapse: collapse; margin-bottom:20px; font-size:14px;">
        <thead>
            <tr style="background:#f5f5f5;">
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">S.No.</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Manufacturing/Service Location Address</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Nature of Value Addition</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Percentage Contribution</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border:1px solid #ddd; padding:8px;">1</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $location1 }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $nature1 }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $percent1 }}</td>
            </tr>
            @if($location2 || $nature2 || $percent2)
            <tr>
                <td style="border:1px solid #ddd; padding:8px;">2</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $location2 ?: '________________' }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $nature2 ?: '________________' }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $percent2 ?: '________________' }}</td>
            </tr>
            @endif
            @if($location3 || $nature3 || $percent3)
            <tr>
                <td style="border:1px solid #ddd; padding:8px;">3</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $location3 ?: '________________' }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $nature3 ?: '________________' }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $percent3 ?: '________________' }}</td>
            </tr>
            @endif
        </tbody>
    </table>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We understand and acknowledge that false declarations shall constitute a breach of the Code of Integrity under Rule 175(1)(i)(h) of the General Financial Rules, for which a bidder or its successors may be debarred for up to two years as per Rule 151(iii) of the General Financial Rules, along with such other actions as may be permissible under law.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We hereby declare that the information provided above is true and correct to the best of our knowledge and belief, and we accept full responsibility for the accuracy of this self-certification.
    </p>

    <div style="margin-top:30px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">For <strong>{{ $company_name }}</strong></p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Signature:</strong> _________________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Name of Authorised Signatory:</strong> {{ $signatory_name }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Designation:</strong> {{ $designation }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Company Seal/Stamp:</strong> {{ $seal ?: 'Not Provided' }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Date:</strong> {{ $formatted_cert_date }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;"><strong>Place:</strong> {{ $place }}</p>
    </div>

</div>