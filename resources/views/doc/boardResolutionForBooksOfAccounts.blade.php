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

    <p style="font-size:14px;font-weight:bold;line-height:1.8;margin-bottom:16px;">
        SUBJECT: CHANGE OF PLACE FOR KEEPING THE BOOKS OF ACCOUNTS
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 128 and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force) and the rules made thereunder, the consent of the Board of Directors of the Company be and is hereby accorded for keeping the Books of Accounts of the Company, required to be maintained under the Companies Act, 2013, at the following address:
    </p>

    <div style="margin:16px 0;padding:12px;border-left:3px solid #333;">
        <p style="font-size:14px;font-weight:bold;line-height:1.8;margin-bottom:8px;">
            New Address for Books of Accounts:
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            {{ $new_books_address ?? '[New Address for Books of Accounts]' }}
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        with effect from <strong>{{ $formatted_effective_date ?? '[Effective Date]' }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> if the new place for keeping the books of accounts is situated in a city, town, or village other than where the registered office of the Company is situated, Form AOC-5 be filed with the Registrar of Companies within the prescribed time to intimate the change in the place of keeping the books of accounts.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li style="margin-bottom:8px;">Sign, execute, and deliver all necessary documents and forms;</li>
        <li style="margin-bottom:8px;">File Form AOC-5 and any other requisite e-forms with the Registrar of Companies;</li>
        <li style="margin-bottom:8px;">Update the records with banks, statutory authorities, and other stakeholders;</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."</li>
    </ul>

    <div style="margin-top:32px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            For <strong>{{ $company_name ?? '[Company Name]' }}</strong>
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Signature:</strong> _________________________
        </p>
        
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Name:</strong> {{ $authorized_director ?? '[Authorised Director Name]' }}
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
            <strong>Date:</strong> {{ $formatted_footer_date ?? '[Date]' }}
        </p>
    </div>

</div>