<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;font-family:Arial,sans-serif;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $company_name ?? '[Company Name]' }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN:</strong> {{ $cin ?? '[CIN Number]' }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Registered Office:</strong> {{ $registered_office ?? '[Registered Office Address]' }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Email:</strong> {{ $company_email ?? '[Company Email]' }}
    </p>

    <div style="text-align:center;margin-bottom:24px;">
        <p style="font-size:16px;font-weight:bold;line-height:1.8;margin-bottom:8px;">
            CERTIFIED TRUE COPY OF THE SPECIAL RESOLUTION
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
            Passed at the Extraordinary General Meeting (EGM) of the Members of the Company
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date of Meeting:</strong> {{ $formatted_meeting_date ?? '__.__.______' }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Time:</strong> {{ $meeting_time ?? '______' }} (Hours)
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> {{ $meeting_venue ?? 'Registered Office of the Company at ________________' }}
    </p>

    <p style="font-size:14px;font-weight:bold;line-height:1.8;margin-bottom:16px;color:#333;">
        SUBJECT: CONVERSION OF ONE PERSON COMPANY INTO PRIVATE LIMITED COMPANY
        <span style="font-size:12px;color:#666;font-weight:normal;">{{ $conversion_reason_text ?? '' }}</span>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 18 read with Section 13 and Section 14 and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force) and the Companies (Incorporation) Rules, 2014, and subject to the approval of the Registrar of Companies or any other authority as may be necessary, the consent of the Member(s) be and is hereby accorded for the conversion of the Company from a One Person Company (OPC) into a Private Limited Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> consequent upon the conversion of the Company into a Private Limited Company, Clause I (Name Clause) of the Memorandum of Association of the Company be and is hereby altered by substituting the existing clause with the following new clause:
    </p>

    <div style="margin:16px 0;padding:16px;background-color:#f8f9fa;border-left:4px solid #007bff;border-radius:4px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Existing Name:</strong> "<span style="color:#333;">{{ $existing_opc_name ?? '________________________ (OPC) Private Limited' }}</span>"
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>To be substituted with:</strong>
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>New Name:</strong> "<span style="color:#333;">{{ $proposed_private_name ?? '________________________ Private Limited' }}</span>"
        </p>
        <p style="font-size:13px;line-height:1.8;margin-bottom:0;color:#6c757d;font-style:italic;">
            or such other name as may be approved by the Registrar of Companies.
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> consequent upon the conversion of the Company into a Private Limited Company, the Articles of Association of the Company be and are hereby altered in the manner following:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li style="margin-bottom:8px;">The name of the Company wherever appearing in the Articles of Association be changed from the existing name to the new name as approved;</li>
        <li style="margin-bottom:8px;">All clauses specific to One Person Company be suitably amended or deleted as required for a Private Limited Company;</li>
        <li>All other consequential amendments necessary for the conversion be made in accordance with the Companies Act, 2013.</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li style="margin-bottom:8px;">Make necessary application in Form INC-6 for obtaining approval for the conversion from the Registrar of Companies;</li>
        <li style="margin-bottom:8px;">File amended Memorandum of Association and Articles of Association with the ROC;</li>
        <li style="margin-bottom:8px;">Appoint additional director(s) and allot shares to new member(s) as required for a Private Limited Company;</li>
        <li style="margin-bottom:8px;">Obtain fresh Certificate of Incorporation reflecting the conversion;</li>
        <li style="margin-bottom:8px;">Update the company details with all statutory authorities, banks, and other stakeholders;</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."</li>
    </ul>

    <div style="margin-top:32px;padding-top:16px;border-top:1px solid #dee2e6;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            For <strong>{{ $company_name ?? '[Company Name]' }}</strong>
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Signature:</strong> _________________________
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Name:</strong> {{ $authorized_director ?? '[Director/Member Name]' }}
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Designation:</strong> {{ $designation ?? '[Designation]' }}
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>DIN:</strong> {{ $din ?? '[DIN Number]' }}
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Place:</strong> {{ $place ?? '[Place]' }}
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            <strong>Date:</strong> {{ $formatted_footer_date ?? '__.__.______' }}
        </p>
    </div>

</div>