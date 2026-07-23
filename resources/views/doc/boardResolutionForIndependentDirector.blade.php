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
            CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
            Passed at the Meeting of the Board of Directors of the Company
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
        SUBJECT: APPOINTMENT OF INDEPENDENT DIRECTOR
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 149, 150, 152 read with Schedule IV and other applicable provisions, if any, of the Companies Act, 2013 ("the Act") and the Companies (Appointment and Qualification of Directors) Rules, 2014 (including any statutory modification(s) or re-enactment(s) thereof, for the time being in force), and subject to the approval of the Members of the Company at the ensuing General Meeting:
    </p>

    <div style="margin:16px 0;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Name of Director:</strong> {{ $full_director_name ?? '________________________' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>DIN:</strong> {{ $director_din ?? '________________________' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            who meets the criteria for independence as provided in Section 149(6) of the Act and who has submitted a declaration to that effect, and in respect of whom the Company 
            @if(($section_160_notice ?? 'received') == 'received')
                has received a notice in writing under Section 160 of the Act from a member proposing his/her candidature
            @else
                has not received a notice in writing under Section 160 of the Act
            @endif
            for the office of Director, be and is hereby appointed as a Non-Executive Independent Director of the Company, not liable to retire by rotation, and to hold office for a term of:
        </p>
    </div>

    <div style="margin:16px 0;padding:16px;background-color:#fff;border:1px dashed #007bff;border-radius:4px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Term:</strong> {{ $term_text ?? 'Five (5) consecutive years' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Commencement Date:</strong> {{ $formatted_commencement_date ?? '________________________' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            <strong>End Date:</strong> {{ $end_date ?? '________________________' }}
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the terms and conditions of appointment of the Independent Director shall be in accordance with Schedule IV of the Companies Act, 2013 and the letter of appointment issued to the Independent Director, which shall be open for inspection by members at the Registered Office of the Company during normal business hours.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li style="margin-bottom:8px;">File Form DIR-12 (Particulars of appointment of Directors and the Key Managerial Personnel and the changes among them) with the Registrar of Companies within the prescribed time;</li>
        <li style="margin-bottom:8px;">Make necessary entries in the Register of Directors and Key Managerial Personnel and their Shareholding;</li>
        <li style="margin-bottom:8px;">Issue the letter of appointment to the Independent Director in accordance with Schedule IV;</li>
        <li style="margin-bottom:8px;">Convene the General Meeting for seeking approval of members for the appointment;</li>
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
            <strong>DIN:</strong> {{ $authorized_din ?? '[DIN Number]' }}
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Place:</strong> {{ $place ?? '[Place]' }}
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            <strong>Date:</strong> {{ $formatted_footer_date ?? '__.__.______' }}
        </p>
    </div>

    <!-- Additional Information Section -->
    <div style="margin-top:24px;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;font-size:12px;line-height:1.6;">
        <p style="margin-bottom:8px;"><strong>Additional Information:</strong></p>
        <p style="margin-bottom:4px;"><strong>Professional Qualifications:</strong> {{ $professional_qualifications ?? '[Qualifications]' }}</p>
        <p style="margin-bottom:4px;"><strong>Area of Expertise:</strong> {{ $area_of_expertise ?? '[Expertise]' }}</p>
        <p style="margin-bottom:0;"><strong>Note:</strong> Independent Director declaration of independence under Section 149(7) and consent in Form DIR-2 must be obtained prior to appointment. Form DIR-12 must be filed within 30 days of appointment.</p>
    </div>

</div>