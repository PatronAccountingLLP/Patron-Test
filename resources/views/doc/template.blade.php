

<body style="font-family: Times New Roman, serif; font-size: 14px; line-height: 1.6; color: #000;">

    <p style="text-align: center; font-weight: bold; text-transform: uppercase; margin-bottom: 20px;">
        CERTIFIED TRUE COPY OF THE RESOLUTION PASSED AT THE MEETING OF THE BOARD OF DIRECTORS OF
        <span style="font-weight: bold;">{{ $company_name }}</span>
        HELD ON {{ $formatted_date }} AT 11:00 A.M. AT THE REGISTERED OFFICE OF THE COMPANY,
        {{ $company_address }}, {{ $city }}.
    </p>

    <p style="margin-bottom: 15px; text-align: justify;">
        <strong>RESOLVED THAT</strong> the Board of Directors do hereby appoint
        <strong>{{ $first_director }}</strong>, Director of the Company as Authorised Signatory for
        registration of the Company on the Goods and Service Tax (GST) System Portal and to sign and
        submit various documents electronically and/or physically on behalf of the Company before
        GST authorities.
    </p>

    <p style="margin-bottom: 15px; text-align: justify;">
        <strong>FURTHER RESOLVED THAT</strong>
        <strong>{{ $first_director }}</strong>, Director of the Company be and is hereby authorized
        to represent the Company and take necessary actions on all GST-related issues.
    </p>

    <p style="margin-bottom: 25px; text-align: justify;">
        <strong>FURTHER RESOLVED THAT</strong>
        <strong>{{ $first_director }}</strong>, Director of the Company be and is hereby authorized
        on behalf of the Company to sign returns, documents, letters and to represent the Company
        for assessments, appeals, or any GST matters.
    </p>

    <p style="margin-bottom: 30px;">
        <strong>For:</strong> {{ $company_name }}
    </p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 40px;">
        <tr>
            <td style="width: 50%; vertical-align: top;">
                <p style="margin-bottom: 40px;">
                    <strong>Director Name:</strong> {{ $first_director }}
                </p>
                <p>
                    <strong>Signature:</strong> ______________________
                </p>
            </td>

            <td style="width: 50%; vertical-align: top;">
                <p style="margin-bottom: 40px;">
                    <strong>Director Name:</strong> {{ $second_director }}
                </p>
                <p>
                    <strong>Signature:</strong> ______________________
                </p>
            </td>
        </tr>
    </table>

</body>


