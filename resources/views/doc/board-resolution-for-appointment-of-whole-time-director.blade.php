<!-- Doc file template -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Registered Office:</strong> {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Email:</strong> {{ $company_email }}
    </p>

    <p style="font-size:16px;line-height:1.8;margin-bottom:24px;text-align:center;font-weight:bold;">
        CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
    </p>

    <p style="font-size:14px;line-height:0.8;margin-bottom:16px;text-align:center;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}</p>
<p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Time:</strong> {{ $meeting_time }} (Hours)</p>
<p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> {{ $meeting_venue }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: APPOINTMENT OF WHOLE TIME DIRECTOR</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        <strong>Name of Director:</strong> {{ $director_name }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        <strong>DIN:</strong> {{ $director_din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 196, 197, and 203 read with Schedule V and other applicable provisions of the Companies Act, 2013 and the Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014 (including any statutory modification(s) or re-enactment thereof for the time being in force), and in accordance with the Articles of Association of the Company, and subject to the approval of shareholders in the next general meeting and such other approvals as may be required from the Central Government or any other authority, the consent of the Board of Directors be and is hereby accorded for the appointment of:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Mr./Ms. <strong>{{ $director_name }}</strong> (DIN: {{ $director_din }})
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        as Whole Time Director of the Company, whose office shall be liable to determination by retirement by rotation, for a period of:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>Tenure:</strong> {{ $tenure_words }}</p>
<p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>From:</strong> {{ $formatted_from_date }}</p>
<p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>To:</strong> {{ $formatted_to_date }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The remuneration for the aforesaid period shall be paid on such terms and conditions as approved by the Nomination and Remuneration Committee in its meeting.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> in the event of loss or inadequacy of profits in any financial year during the tenure of appointment, the Whole Time Director shall be entitled to receive salary, perquisites, and other allowances subject to the ceiling limits specified in Schedule V of the Companies Act, 2013 as amended from time to time, and subject to the approval of the Central Government, if so required, in accordance with the provisions of the Companies Act, 2013.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to sign and submit the necessary forms, papers, and documents with the Registrar of Companies to give effect to this resolution, and to do all such acts, deeds, and things as may be necessary or expedient in this regard.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;margin-top:24px;">
For <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>Name:</strong> {{ $signatory_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>Designation:</strong> {{ $signatory_designation }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>DIN:</strong> {{ $signatory_din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
<strong>Date:</strong> {{ $formatted_meeting_date }}
    </p>

</div>