<!-- Doc file template (no <br> tags, all <p> and tables) -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <h2 style="text-align:center; margin-bottom:20px;">RENT AGREEMENT</h2>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        This Rent Agreement is executed on this <strong>{{ $agreement_day }}</strong> day of <strong>{{ $agreement_month }}</strong> <strong>{{ $agreement_year }}</strong> at <strong>{{ $place }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>BETWEEN</strong><br>
        Mr./Ms. <strong>{{ $lessor_name }}</strong>, residing at <strong>{{ $lessor_address }}</strong>, hereinafter referred to as the <strong>"LESSOR"</strong> (which expression shall, unless repugnant to the context or meaning thereof, include his/her heirs, executors, administrators, legal representatives, and assigns) of the FIRST PART;
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>AND</strong><br>
        <strong>{{ $company_name }}</strong>, a Private Limited Company incorporated under the Companies Act, 2013, having its registered office at <strong>{{ $premises_address }}</strong>, represented by its Director Mr./Ms. <strong>{{ $director_name }}</strong>, hereinafter referred to as the <strong>"LESSEE"</strong> (which expression shall, unless repugnant to the context or meaning thereof, include its successors and permitted assigns) of the SECOND PART.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>WHEREAS</strong><br>
        The Lessor is the absolute owner and in lawful possession of the premises situated at:<br>
        <strong>{{ $premises_address }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>AND WHEREAS</strong> the Lessee has approached the Lessor with a request to permit the use of the said premises as the registered office of the Company, and the Lessor has agreed to the same on the terms and conditions set forth herein.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>NOW THEREFORE, THIS AGREEMENT WITNESSETH AS FOLLOWS:</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        1. <strong>TERM:</strong> The Lessor hereby grants to the Lessee the right to use the above-mentioned premises as the registered office of the Company for a period of <strong>{{ $term_duration }}</strong> commencing from <strong>{{ $formatted_commencement_date }}</strong> to <strong>{{ $formatted_expiry_date }}</strong>, unless terminated earlier in accordance with the terms hereof.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        2. <strong>RENT:</strong> The Lessee shall pay to the Lessor a monthly rent of Rs. <strong>{{ $rent_amount }}</strong>/‑ (Rupees <strong>{{ $rent_words }}</strong> only), payable on or before the <strong>{{ $payable_day }}</strong> of each calendar month.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        3. <strong>SECURITY DEPOSIT:</strong> The Lessee has paid to the Lessor a sum of Rs. <strong>{{ $deposit_amount }}</strong>/‑ (Rupees <strong>{{ $deposit_words }}</strong> only) as security deposit, which shall be refundable at the time of termination of this Agreement, subject to deductions for any outstanding dues or damages, if any.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        4. <strong>PURPOSE:</strong> The premises shall be used solely for the purpose of registering and operating the registered office of the Lessee Company. The Lessee shall not use the premises for any unlawful or prohibited activities.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        5. <strong>MAINTENANCE:</strong> The Lessee shall maintain the premises in good condition and shall be responsible for any damages caused during the period of occupancy, fair wear and tear excepted.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        6. <strong>TERMINATION:</strong> Either party may terminate this Agreement by providing <strong>{{ $notice_period }}</strong> written notice to the other party. Upon termination, the Lessee shall vacate the premises and update its registered office records with the Registrar of Companies.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        7. <strong>STATUTORY COMPLIANCE:</strong> The Lessor consents to the Lessee using the address of the premises for all statutory registrations, including but not limited to registration with the Ministry of Corporate Affairs, Goods and Services Tax authorities, and other regulatory bodies as may be required.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        8. <strong>JURISDICTION:</strong> Any disputes arising out of or in connection with this Agreement shall be subject to the exclusive jurisdiction of the courts at <strong>{{ $jurisdiction }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>IN WITNESS WHEREOF</strong>, the parties hereto have set their hands on the day and year first above written.
    </p>

    <div style="margin-top:20px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:12px;"><strong>LESSOR:</strong><br>
        Signature: _________________________<br>
        Name: <strong>{{ $lessor_signatory }}</strong><br>
        Date: <strong>{{ $formatted_agreement_date }}</strong><br>
        Place: <strong>{{ $place }}</strong></p>

        <p style="font-size:14px;line-height:1.8;margin-bottom:12px;"><strong>LESSEE:</strong><br>
        For and on behalf of <strong>{{ $company_name }}</strong><br>
        Signature: _________________________<br>
        Name of Authorised Signatory: <strong>{{ $company_signatory }}</strong><br>
        Designation: <strong>{{ $signatory_designation }}</strong><br>
        Date: <strong>{{ $formatted_agreement_date }}</strong><br>
        Place: <strong>{{ $place }}</strong></p>

        <p style="font-size:14px;line-height:1.8;margin-bottom:0;"><strong>WITNESSES:</strong><br>
        1. Signature: _________________ Name: <strong>{{ $witness1_name ?: '________________' }}</strong> Address: <strong>{{ $witness1_address ?: '________________' }}</strong><br>
        2. Signature: _________________ Name: <strong>{{ $witness2_name ?: '________________' }}</strong> Address: <strong>{{ $witness2_address ?: '________________' }}</strong></p>
    </div>

</div>