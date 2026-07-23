<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Registered Office Address: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Email: {{ $company_email }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
<strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

<p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">Passed at the Meeting of the Board of Directors of the Company held on <strong>{{ $formatted_meeting_date }}</strong> at <strong>{{ $meeting_time }}</strong> at the Registered Office of the Company at <strong>{{ $registered_office }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>CONSTITUTION OF INTERNAL COMMITTEE UNDER THE POSH ACT, 2013</strong>
    </p>

<p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:justify;">
<strong>RESOLVED THAT</strong> pursuant to the provisions of Section 4 of The Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013, and the rules framed thereunder, the approval of the Board of Directors of the Company be and is hereby accorded for the constitution/reconstitution of an Internal Committee to provide protection against sexual harassment of women at the workplace and for the prevention and redressal of complaints of sexual harassment and for matters connected therewith or incidental thereto.
    </p>

<p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> the Internal Committee shall comprise of the following members, with Mr./Ms. <strong>{{ $presiding_officer_name }}</strong> being nominated as the Presiding Officer of the Committee:
    </p>

    <table style="width:100%;border-collapse:collapse;margin-bottom:16px;font-size:14px;">
        <thead>
            <tr style="background-color:#f8f9fa;">
                <th style="border:1px solid #dee2e6;padding:8px;text-align:left;">S. No.</th>
                <th style="border:1px solid #dee2e6;padding:8px;text-align:left;">Name</th>
                <th style="border:1px solid #dee2e6;padding:8px;text-align:left;">Designation/Role</th>
                <th style="border:1px solid #dee2e6;padding:8px;text-align:left;">Contact No.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border:1px solid #dee2e6;padding:8px;">1</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $presiding_officer_name }}</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $presiding_officer_designation }}</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $presiding_officer_contact }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #dee2e6;padding:8px;">2</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $internal_member1_name }}</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $internal_member1_designation }}</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $internal_member1_contact }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #dee2e6;padding:8px;">3</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $internal_member2_name }}</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $internal_member2_designation }}</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $internal_member2_contact }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #dee2e6;padding:8px;">4</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $external_member_name }}</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $external_member_designation }}</td>
                <td style="border:1px solid #dee2e6;padding:8px;">{{ $external_member_contact }}</td>
            </tr>
        </tbody>
    </table>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:justify;">
 <strong>RESOLVED FURTHER THAT</strong> the Internal Committee shall function, hear, and redress complaints in accordance with and subject to the provisions of The Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013, and the rules framed thereunder.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <strong>{{ $authorized_person_name }}</strong>, <strong>{{ $authorized_designation }}</strong> of the Company, be and is hereby authorised to take all such steps as may be necessary, proper, or expedient to give effect to this resolution, including executing, signing, and filing necessary documents and e-forms with the Registrar of Companies or any other statutory authority as may be required.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;">
<strong>For {{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Name:</strong> {{ $authorized_person_name }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Designation:</strong> {{ $authorized_designation }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:0;">
<strong>Date:</strong> {{ $formatted_resolution_date }}
    </p>

</div>