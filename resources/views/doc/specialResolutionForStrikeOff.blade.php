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
        SUBJECT: APPLICATION FOR STRIKE OFF THE NAME OF THE COMPANY UNDER SECTION 248 OF THE COMPANIES ACT, 2013
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 248(2) of the Companies Act, 2013 read with the Companies (Removal of Names of Companies from the Register of Companies) Rules, 2016 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force), {{ $strike_off_reason_text ?? 'and considering that the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years' }}, the consent of the Members of the Company be and is hereby accorded to the Board of Directors to make an application in Form STK-2 to the Registrar of Companies for striking off the name of the Company:
    </p>

    <div style="margin:16px 0;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Company Name:</strong> {{ $company_name ?? '[Company Name]' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>CIN:</strong> {{ $cin ?? '[CIN Number]' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            from the Register of Companies maintained by the Registrar of Companies.
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li style="margin-bottom:8px;">Execute indemnity bonds, affidavits, and declarations as required for the strike-off application;</li>
        <li style="margin-bottom:8px;">File Form STK-2 and other requisite forms with the Registrar of Companies;</li>
        <li style="margin-bottom:8px;">Provide any information, clarifications, or explanations as may be required by the Registrar of Companies;</li>
        <li style="margin-bottom:8px;">Settle all liabilities and distribute any remaining assets in accordance with applicable laws;</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient under the provisions of the Companies Act, 2013 and the rules made thereunder to give effect to this resolution.</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> {{ $full_director_name ?? '[Director Name]' }} (Name), holding DIN: <strong>{{ $din ?? '[DIN Number]' }}</strong>, Director of the Company, be and is hereby specifically authorised to make the application for strike-off, sign and execute all necessary documents, provide any information or clarifications, and to do all such acts and deeds as may be required under the Companies Act, 2013 and the rules made thereunder to implement the above resolutions.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> a certified copy of this resolution be filed with the Registrar of Companies along with Form STK-2 and other requisite documents."
    </p>

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

    <!-- Compliance Requirements Section -->
    <div style="margin-top:24px;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;font-size:12px;line-height:1.6;">
        <p style="margin-bottom:8px;font-weight:bold;color:#333;">IMPORTANT: Pre-conditions for filing Form STK-2 (Section 248)</p>
        <ul style="margin-bottom:8px;padding-left:15px;">
            <li style="margin-bottom:4px;">All pending returns filed with Registrar of Companies (ROC)</li>
            <li style="margin-bottom:4px;">GST Registration cancelled (if registered)</li>
            <li style="margin-bottom:4px;">Income tax returns filed and assessments completed</li>
            <li style="margin-bottom:4px;">Bank accounts closed</li>
            <li>No assets or liabilities (or all settled)</li>
        </ul>
        <p style="margin-bottom:0;font-style:italic;color:#666;">
            <strong>Note:</strong> The company must have remained inactive for at least two financial years or not commenced business within one year of incorporation to be eligible for strike-off under Section 248.
        </p>
    </div>

</div>