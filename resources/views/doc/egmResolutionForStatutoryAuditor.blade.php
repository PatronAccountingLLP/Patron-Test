<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>CIN:</strong> {{ $cin }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Registered Office:</strong> {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Passed at the Extraordinary General Meeting (EGM) of the Members of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date of Meeting:</strong> {{ $formattedMeetingDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Time:</strong> {{ $formattedMeetingTime }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> {{ $meeting_venue }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>SUBJECT: APPOINTMENT OF STATUTORY AUDITOR</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
    <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 139 read with the Companies (Audit and Auditors) Rules, 2014 and other applicable provisions of the Companies Act, 2013 (including any statutory modification(s) or re-enactment thereof for the time being in force), and based on the recommendation of the Board of Directors, the members of the Company hereby approve the {{ strtolower($appointment_type) }} of:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name of Auditor / Audit Firm:</strong> {{ $auditor_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Firm Registration Number:</strong> {{ $firm_registration_no }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Address:</strong> {{ $auditor_address }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        as the Statutory Auditors of the Company, to hold office for a term of:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Tenure:</strong> {{ $tenureText }} consecutive years
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>From:</strong> Conclusion of this Extraordinary General Meeting
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>To:</strong> Conclusion of the {{ $agm_conclude }} Annual General Meeting
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Financial Years Covered:</strong> FY {{ $fy_from }} to FY {{ $fy_to }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
at such remuneration plus applicable taxes and reimbursement of out-of-pocket expenses as may be mutually agreed upon between the Statutory Auditors and the Board of Directors of the Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
 <strong>RESOLVED FURTHER THAT</strong> all directors of the Company, either severally or jointly, be and are hereby authorised to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution, including but not limited to filing necessary forms with the Registrar of Companies."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
<strong>CERTIFIED TRUE COPY</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
For <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name:</strong> {{ $signatory_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Designation:</strong> {{ $designation }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date:</strong> {{ $formattedResolutionDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>