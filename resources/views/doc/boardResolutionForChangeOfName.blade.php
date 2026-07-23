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

    <p style="font-size:16px;line-height:1.8;margin-bottom:24px;text-align:center;font-weight:bold;">
        CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}
        <strong>Time:</strong> {{ $meeting_time }} (Hours)
        <strong>Venue:</strong> Registered Office of the Company at {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: CHANGE OF NAME OF THE COMPANY
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 13 and other applicable provisions of the Companies Act, 2013 and the rules framed thereunder (including any statutory modification or re-enactment thereof for the time being in force), and subject to the approval of the Registrar of Companies and/or any other competent authority as may be required, and subject further to the approval of the members of the Company by way of special resolution, the consent of the Board of Directors be and is hereby accorded to change the existing name of the Company from <strong>"{{ $existing_name }}"</strong> to <strong>"{{ $proposed_name }}"</strong>, or such other name as may be approved by the Registrar of Companies."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED FURTHER THAT</strong> any Director of the Company, either individually or jointly, be and is hereby authorised to make the necessary application for obtaining approval for the change of name from the Registrar of Companies or any other authority as may be required, and to sign, execute, and submit all such forms, documents, applications, and papers as may be necessary or expedient for the purpose of giving effect to the aforesaid resolution."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED FURTHER THAT</strong> upon receipt of approval from the Registrar of Companies, the Directors be and are hereby authorised to convene an Extraordinary General Meeting or seek approval through postal ballot to obtain the consent of the members by way of special resolution for the change of name of the Company."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED FURTHER THAT</strong> the Board of Directors be and is hereby authorised to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions and to comply with all statutory and regulatory requirements in connection therewith."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
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
        <strong>Date:</strong> {{ $formatted_meeting_date }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>