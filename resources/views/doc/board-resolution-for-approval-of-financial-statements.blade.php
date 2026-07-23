<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Registered Office Address: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Email: {{ $company_email }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Passed at the Meeting of the Board of Directors of the Company held on 
        <strong>{{ $formatted_meeting_date }}</strong> at 
        <strong>{{ $meeting_time }}</strong> at the Registered Office of the Company at 
        <strong>{{ $registered_office }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>APPROVAL OF FINANCIAL STATEMENTS FOR THE FINANCIAL YEAR {{ $financial_year_text }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 134 of the Companies Act, 2013, read with the Companies (Accounts) Rules, 2014, and other applicable provisions, if any, (including any statutory modifications, amendments, or re-enactments thereto for the time being in force), the Financial Statements of the Company for the financial year ended 
        <strong>{{ $formatted_financial_year_end }}</strong>, comprising the Balance Sheet as at 
        <strong>{{ $formatted_financial_year_end }}</strong>, the Statement of Profit and Loss, the Cash Flow Statement, the Statement of Changes in Equity for the year ended on that date, and the Notes forming part thereof, together with the Board's Report and the draft Auditor's Report placed before the Board, be and are hereby considered, approved, and taken on record.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
        <strong>{{ $director1_name }}</strong>, Director (DIN: 
        <strong>{{ $director1_din }}</strong>) and Mr./Ms. 
        <strong>{{ $director2_name }}</strong>, Director (DIN: 
        <strong>{{ $director2_din }}</strong>), be and are hereby authorised to sign the Financial Statements and the Board's Report on behalf of the Board of Directors, and to forward the same along with the Annual Report to the shareholders of the Company for the financial year ended 
        <strong>{{ $formatted_financial_year_end }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company, either severally or jointly, be and is hereby authorised to sign the requisite e-forms including Form AOC-4 and Form MGT-7, and to file the same with the Registrar of Companies within the prescribed time, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        For <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name:</strong> {{ $authorized_person_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Designation:</strong> {{ $authorized_designation }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Date:</strong> {{ $formatted_resolution_date }}
    </p>

</div>