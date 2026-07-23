<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>{{ $company_name }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>CIN: {{ $cin }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Registered Office:</strong> {{ $registered_office }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Email:</strong> {{ $email }}</p>

    <p style="font-size:16px;line-height:1.8;margin-bottom:24px;text-align:center;font-weight:bold;">
        CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
        <strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
        <strong>Time:</strong> {{ $meeting_time }} (Hours)
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> Registered Office of the Company at {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: CONVERSION OF PRIVATE LIMITED COMPANY INTO PUBLIC LIMITED COMPANY
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Director, Mr./Ms. <strong>{{ $director_name }}</strong>, informed the Board that for better management of the company's business operations, expansion of business activities, access to capital markets, and to enable a wider shareholding base, it is proposed to convert the Company from a Private Limited Company to a Public Limited Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 14 of the Companies Act, 2013 read with the rules made thereunder, and any other applicable provisions as amended from time to time, subject to such approvals and permissions from appropriate authorities and subject to the approval of the members/shareholders of the Company at a General Meeting by way of passing a Special Resolution, the consent of the Board of Directors of the Company be and is hereby accorded to convert this Company from a Private Limited Company to a Public Limited Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the name of the Company be and is hereby proposed to be changed from:
    </p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">
        <strong>Existing Name:</strong> {{ $company_name }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:16px;">
        <strong>Proposed Name:</strong> {{ $proposed_name }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        by removing the word "Private" from the existing name of the Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the word "Private" be and is hereby proposed to be deleted from the name of the Company wherever appearing in the Memorandum of Association and Articles of Association of the Company, subject to the approval of the members at the General Meeting.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the Articles of Association of the Company be and are hereby proposed to be altered to remove the restrictions applicable to a Private Limited Company and to include provisions applicable to a Public Limited Company, subject to the approval of the members at the General Meeting.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
    </p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">1. Convene the General Meeting of the members for passing the Special Resolution;</p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">2. File all necessary forms, applications, and documents with the Registrar of Companies;</p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">3. Make necessary amendments to the Memorandum and Articles of Association;</p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">4. Apply for fresh Certificate of Incorporation consequent to conversion;</p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:16px;">5. Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        <strong>CERTIFIED TO BE TRUE</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        For <strong>{{ $company_name }}</strong>
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        (Name of the Company)
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
        <strong>DIN:</strong> {{ $din }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>