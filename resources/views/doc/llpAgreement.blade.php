<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <h2 style="text-align:center; margin-bottom:20px;">LIMITED LIABILITY PARTNERSHIP AGREEMENT</h2>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        This Limited Liability Partnership Agreement is made and executed on this <strong>{{ $agreement_day }}</strong> day of <strong>{{ $agreement_month }}</strong>, <strong>{{ $agreement_year }}</strong> at <strong>{{ $place }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>BETWEEN:</strong></p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        1. <strong>{{ $partner1_name }}</strong>, Son/Daughter of <strong>{{ $partner1_father }}</strong>, aged {{ $partner1_age }} years, residing at {{ $partner1_address }}, having PAN {{ $partner1_pan }} and DPIN {{ $partner1_dpin }}, hereinafter referred to as the "First Party" / "Designated Partner";
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        2. <strong>{{ $partner2_name }}</strong>, Son/Daughter of <strong>{{ $partner2_father }}</strong>, aged {{ $partner2_age }} years, residing at {{ $partner2_address }}, having PAN {{ $partner2_pan }} and DPIN {{ $partner2_dpin }}, hereinafter referred to as the "Second Party" / "Designated Partner";
    </p>
    @if($partner3_name)
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        3. <strong>{{ $partner3_name }}</strong>, Son/Daughter of <strong>{{ $partner3_father }}</strong>, aged {{ $partner3_age }} years, residing at {{ $partner3_address }}, having PAN {{ $partner3_pan }} and DPIN {{ $partner3_dpin }}, hereinafter referred to as the "Third Party" / "Partner";
    </p>
    @endif

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>DETAILS OF THE LLP:</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Name of LLP:</strong> {{ $llp_name }} LLP</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>LLPIN:</strong> {{ $llpin }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Date of Incorporation:</strong> {{ $formatted_inc_date }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>Registered Office:</strong> {{ $reg_office }}</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>WHEREAS:</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">A. The parties hereto have agreed to carry on the business of <strong>{{ $business_nature }}</strong> and other allied activities as a Limited Liability Partnership under the name and style of '<strong>{{ $llp_name }} LLP</strong>'.</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">B. The LLP was incorporated under the Limited Liability Partnership Act, 2008 on <strong>{{ $formatted_inc_date }}</strong> and was allotted LLPIN <strong>{{ $llpin }}</strong>.</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">C. The parties have agreed to reduce their mutual rights, duties, and obligations into writing in the form of this Agreement.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>NOW THIS AGREEMENT WITNESSETH AS FOLLOWS:</strong></p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">1. <strong>NAME OF THE LLP</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">The name of the Limited Liability Partnership shall be '<strong>{{ $llp_name }} LLP</strong>' and shall continue to be so called unless changed in accordance with the provisions of the LLP Act, 2008.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">2. <strong>REGISTERED OFFICE</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">The Registered Office of the LLP shall be situated at <strong>{{ $reg_office }}</strong>, or at such other place as may be decided by the Partners from time to time.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">3. <strong>NATURE OF BUSINESS</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">The LLP shall carry on the business of <strong>{{ $business_nature }}</strong> and such other business activities as may be decided by the Partners from time to time, subject to applicable laws and regulations.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">4. <strong>COMMENCEMENT AND DURATION</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">The LLP shall be deemed to have commenced business from <strong>{{ $formatted_commencement_date }}</strong> and shall continue until dissolved in accordance with the provisions of the LLP Act, 2008 and this Agreement.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">5. <strong>CAPITAL CONTRIBUTION</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">The initial capital contribution of the Partners shall be as follows:</p>
    @foreach($partners as $partner)
   <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">
    <strong>{{ $partner['name'] }}:</strong> Rs. {{ number_format($partner['capital'], 2) }}/- (Rupees {{ number_format($partner['capital'], 2) }} only)
</p>
    @endforeach
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:12px;"><strong>Total Capital:</strong> Rs. {{ number_format($total_capital, 2) }}/- (Rupees {{ number_format($total_capital, 2) }} only)</p>
    
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">The Partners may, by mutual consent, increase or decrease the capital contribution from time to time as may be required for the business of the LLP.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">6. <strong>PROFIT AND LOSS SHARING RATIO</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">The net profits or losses of the LLP shall be shared among the Partners in the following ratio:</p>
    @foreach($partners as $partner)
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;"><strong>{{ $partner['name'] }}:</strong> {{ $partner['profit_share'] }}%</p>
    @endforeach

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">7. <strong>DESIGNATED PARTNERS</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">The following Partners shall be the Designated Partners of the LLP and shall be responsible for compliance with the provisions of the LLP Act, 2008 and Rules made thereunder: <strong>{{ $designated_partners }}</strong></p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">8. <strong>MANAGEMENT AND DECISION MAKING</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">The management and affairs of the LLP shall be conducted by the Designated Partners. All major decisions affecting the LLP shall be taken by mutual consent of all Partners. Day-to-day operational decisions may be taken by any Designated Partner.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">9. <strong>ADMISSION, RETIREMENT, AND CESSATION OF PARTNERS</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">A new Partner may be admitted with the consent of all existing Partners. A Partner may retire from the LLP by giving <strong>{{ $notice_period }}</strong> notice in writing to the other Partners, subject to settlement of accounts and fulfillment of obligations.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">10. <strong>WINDING UP</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">The LLP may be wound up in accordance with the provisions of the LLP Act, 2008 and Rules made thereunder, upon the mutual consent of all Partners or as otherwise provided under law.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">11. <strong>GENERAL PROVISIONS</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">a) This Agreement shall be governed by and construed in accordance with the laws of India.</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">b) Any disputes arising out of or in connection with this Agreement shall be resolved through mutual discussion, failing which through arbitration in accordance with the Arbitration and Conciliation Act, 1996.</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:20px;">c) This Agreement may be amended only by written consent of all the Partners.</p>

    <div style="margin-top:30px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>PARTNERS:</strong></p>
        @foreach($partners as $partner)
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>{{ $partner['name'] }}</strong></p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">Signature: _________________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">DPIN: {{ $partner['name'] === $partner1_name ? $partner1_dpin : ($partner['name'] === $partner2_name ? $partner2_dpin : $partner3_dpin) }}</p>
        @endforeach

        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>WITNESSES:</strong></p>
        @if($witness1_name)
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">1. Signature: _________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">Name: {{ $witness1_name }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:12px;">Address: {{ $witness1_address ?: '________________' }}</p>
        @endif
        @if($witness2_name)
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">2. Signature: _________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">Name: {{ $witness2_name }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">Address: {{ $witness2_address ?: '________________' }}</p>
        @endif
    </div>

</div>