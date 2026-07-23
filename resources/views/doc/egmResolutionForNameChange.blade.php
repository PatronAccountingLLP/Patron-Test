<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;font-family:Arial,sans-serif;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $company_name ?? '[Company Name]' }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN:</strong> {{ $cin ?? '[CIN Number]' }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Registered Office:</strong> {{ $registered_office ?? '[Registered Office Address]' }}
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
        SUBJECT: CHANGE OF NAME OF THE COMPANY
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 13 and Section 14 read with Section 4(4) and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force) and the Companies (Incorporation) Rules, 2014, and subject to the approval of the Registrar of Companies, Central Registration Centre (CRC), Ministry of Corporate Affairs, or any other authority as may be necessary, the approval of the Members be and is hereby accorded to change the existing name of the Company from:
    </p>

    <div style="margin:16px 0;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;text-align:center;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Existing Name:</strong> "<span style="color:#333;">{{ $existing_name ?? '________________________' }}</span>"
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>To</strong>
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Proposed New Name:</strong> "<span style="color:#333;">{{ $proposed_new_name ?? '________________________' }}</span>"
        </p>
        <p style="font-size:13px;line-height:1.8;margin-bottom:0;color:#6c757d;font-style:italic;">
            or any other name as may be approved by the Central Registration Centre (CRC), Ministry of Corporate Affairs.
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> consequent upon the change of name of the Company, the Memorandum of Association of the Company be and is hereby altered by substituting the existing Clause I (Name Clause) with the following new Clause I:
    </p>

    <div style="margin:16px 0;padding:16px;background-color:#fff;border:2px solid #007bff;border-radius:4px;font-family:monospace;">
        <p style="margin:0;font-size:14px;">
            <strong>"Clause I:</strong> The name of the Company shall be <strong>{{ $proposed_new_name ?? '________________________' }}</strong> (New Name of the Company)."
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> consequent upon the change of name of the Company, the Articles of Association of the Company be and is hereby altered by substituting all references to the existing name of the Company with the new name as approved:
    </p>

    <div style="margin:16px 0;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Existing Name:</strong> "<span style="color:#333;">{{ $existing_name ?? '________________________' }}</span>"
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            <strong>New Name:</strong> "<span style="color:#333;">{{ $proposed_new_name ?? '________________________' }}</span>"
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li style="margin-bottom:8px;">Make necessary application in Form INC-24 for obtaining approval to the change of name from the Registrar of Companies, Central Registration Centre (CRC);</li>
        <li style="margin-bottom:8px;">Apply for fresh name reservation through RUN (Reserve Unique Name) service, if required;</li>
        <li style="margin-bottom:8px;">File amended Memorandum of Association and Articles of Association with the ROC;</li>
        <li style="margin-bottom:8px;">Obtain fresh Certificate of Incorporation reflecting the new name of the Company;</li>
        <li style="margin-bottom:8px;">Update the company name with all statutory authorities, banks, and other stakeholders;</li>
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
            <strong>Name:</strong> {{ $authorized_director ?? '[Authorized Director Name]' }}
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
            <strong>Date:</strong> {{ $formatted_resolution_date ?? '__.__.______' }}
        </p>
    </div>

    <!-- Additional Information Section -->
    <div style="margin-top:24px;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;font-size:12px;line-height:1.6;">
        <p style="margin-bottom:8px;font-weight:bold;color:#333;">IMPORTANT PROCEDURAL INFORMATION:</p>
        <ul style="margin-bottom:8px;padding-left:15px;">
            <li style="margin-bottom:4px;"><strong>Reason for Name Change:</strong> {{ $change_reason_text ?? '[Reason for name change]' }}</li>
            <li style="margin-bottom:4px;">Name availability must be checked through RUN (Reserve Unique Name) service</li>
            <li style="margin-bottom:4px;">Form INC-24 must be filed with Central Registration Centre (CRC)</li>
            <li style="margin-bottom:4px;">Fresh Certificate of Incorporation will be issued with new name</li>
            <li style="margin-bottom:4px;">All statutory registrations (GST, Bank, etc.) must be updated after name change</li>
            <li>Board resolution must be passed before convening EGM for name change</li>
        </ul>
        <p style="margin-bottom:0;font-style:italic;color:#666;">
            <strong>Note:</strong> This resolution requires 3/4th majority of members entitled to vote (Special Resolution).
        </p>
    </div>

</div>