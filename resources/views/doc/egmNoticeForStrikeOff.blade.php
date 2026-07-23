<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;font-family:Arial,sans-serif;">

    <div style="text-align:center;margin-bottom:32px;">
        <h2 style="font-size:18px;font-weight:bold;text-transform:uppercase;margin-bottom:8px;color:#333;">
            NOTICE OF EXTRAORDINARY GENERAL MEETING
        </h2>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        NOTICE is hereby given that an Extraordinary General Meeting (EGM) of the Members of 
        <strong>{{ $company_name ?? '[Company Name]' }}</strong> (Name of the Company) 
        will be held as follows:
    </p>
    
    <div style="margin:16px 0;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Date:</strong> {{ $formatted_meeting_date ?? '________________________' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Day:</strong> {{ $meeting_day ?? '________________________' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Time:</strong> {{ $formatted_meeting_time ?? '________________________' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            <strong>Venue:</strong> {{ $meeting_venue ?? 'Registered Office of the Company at ________________________' }}
        </p>
    </div>
    
    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        to transact the following business:
    </p>
    
    <div style="margin:24px 0;">
        <p style="font-size:14px;line-height:1.6;margin-bottom:8px;color:#333;font-weight:bold;">
            ITEM NO. 1: CLOSURE OF COMPANY AND FILING FORM STK-2 WITH THE REGISTRAR OF COMPANIES FOR STRIKING OFF THE NAME OF THE COMPANY FROM THE REGISTER OF COMPANIES
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:16px;color:#555;">
            To consider and, if thought fit, to pass with or without modification(s), the following resolution as a Special Resolution:
        </p>
        
        <div style="margin:16px 0;padding:16px;background-color:#fff;border:1px solid #dee2e6;border-radius:4px;font-size:13px;line-height:1.6;">
            <p style="margin-bottom:12px;">
                <strong>"RESOLVED THAT</strong> considering that {{ $strike_off_reason_text ?? 'the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years' }}, and in accordance with the provisions of Section 248 of the Companies Act, 2013 read with the Companies (Removal of Names of Companies from the Register of Companies) Rules, 2016 (including any statutory modification or re-enactment thereof for the time being in force), the consent of the Members of the Company be and is hereby accorded to the Board of Directors to make an application in Form STK-2 to the Registrar of Companies for striking off the name of the Company:
            </p>
            
            <div style="margin:12px 0;padding:12px;background-color:#f8f9fa;border-left:3px solid #dc3545;border-radius:4px;">
                <p style="margin-bottom:4px;font-size:13px;">
                    <strong>Company Name:</strong> {{ $company_name ?? '[Company Name]' }}
                </p>
                <p style="margin-bottom:0;font-size:13px;">
                    <strong>CIN:</strong> {{ $cin ?? '[CIN Number]' }}
                </p>
            </div>
            
            <p style="margin-top:12px;margin-bottom:0;">
                <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to do all such acts, deeds, matters, and things as may be required under the provisions of the Companies Act, 2013 and the rules made thereunder, including but not limited to executing indemnity bonds, affidavits, and other documents required for the strike-off process."
            </p>
        </div>
    </div>
    
    <div style="margin:24px 0;padding:16px;background-color:#fff3cd;border:1px solid #ffc107;border-radius:4px;">
        <p style="font-size:14px;margin-bottom:12px;color:#856404;font-weight:bold;">
            NOTES:
        </p>
        <ol style="padding-left:20px;margin-bottom:0;">
            <li style="font-size:13px;line-height:1.6;margin-bottom:8px;color:#856404;">
                A Member entitled to attend and vote at the meeting is entitled to appoint a proxy to attend and vote instead of himself/herself. A proxy need not be a Member of the Company. The instrument of proxy, in order to be effective, should be deposited at the Registered Office of the Company not later than forty-eight (48) hours before the commencement of the meeting.
            </li>
            <li style="font-size:13px;line-height:1.6;margin-bottom:8px;color:#856404;">
                Corporate Members intending to send their authorised representatives to attend the meeting are requested to send a certified copy of the Board Resolution authorising their representative to attend and vote on their behalf at the meeting.
            </li>
            <li style="font-size:13px;line-height:1.6;margin-bottom:0;color:#856404;">
                An Explanatory Statement pursuant to Section 102 of the Companies Act, 2013 relating to the business to be transacted at the meeting is annexed hereto.
            </li>
        </ol>
    </div>
    
    <div style="margin-top:32px;">
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            For and on behalf of the Board of Directors
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            For <strong>{{ $company_name ?? '[Company Name]' }}</strong>
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;font-weight:bold;">
            (Name of the Company)
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>Signature:</strong> _________________________
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>Name:</strong> {{ $authorized_director ?? '[Authorized Director Name]' }}
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>Designation:</strong> {{ $designation ?? '[Designation]' }}
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>DIN:</strong> {{ $din ?? '[DIN Number]' }}
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>Date:</strong> {{ $formatted_notice_date ?? '________________________' }}
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:0;">
            <strong>Place:</strong> {{ $place ?? '[Place]' }}
        </p>
    </div>
    
    <div style="text-align:center;margin:32px 0 16px 0;padding-top:16px;border-top:2px solid #dee2e6;">
        <h3 style="font-size:16px;font-weight:bold;margin-bottom:4px;color:#333;">
            EXPLANATORY STATEMENT
        </h3>
        <p style="font-size:12px;color:#666;font-style:italic;margin-bottom:0;">
            (Pursuant to Section 102 of the Companies Act, 2013)
        </p>
    </div>
    
    <div style="font-size:13px;line-height:1.6;margin-bottom:24px;">
        <p style="margin-bottom:16px;">
            The following Explanatory Statement, pursuant to Section 102 of the Companies Act, 2013, sets out all material facts relating to the business mentioned under Item No. 1 of the accompanying Notice:
        </p>
        
        <div style="margin:16px 0;">
            <p style="font-size:14px;font-weight:bold;margin-bottom:8px;color:#333;">
                Item No. 1:
            </p>
            <p style="margin-bottom:12px;">
                {{ $explanatory_text ?? 'The Company has not been carrying on any business operations for more than two immediately preceding financial years. Even in the earlier years, the Company could not achieve the desired business results. Further, the Company continues to incur annual compliance costs without any corresponding business activity.' }}
            </p>
            
            @if(!empty($additional_explanation))
            <p style="margin-bottom:12px;">
                {{ $additional_explanation }}
            </p>
            @endif
            
            <p style="margin-bottom:12px;">
                In view of the above circumstances, it is proposed to strike off the name of the Company from the Register of Companies maintained by the Registrar of Companies.
            </p>
            
            <p style="margin-bottom:12px;">
                As per the requirements of the Companies Act, 2013 and the Companies (Removal of Names of Companies from the Register of Companies) Rules, 2016, the Board of Directors recommends the Special Resolution as set out in Item No. 1 of the Notice for approval of the Members.
            </p>
            
            <p style="margin-bottom:0;">
                None of the Directors, Key Managerial Personnel, or any of their relatives are, in any way, concerned or interested, financially or otherwise, in passing of the said resolution except to the extent of their interest as shareholders of the Company.
            </p>
        </div>
    </div>
    
    <div style="margin-top:24px;padding-top:16px;border-top:1px solid #dee2e6;">
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            For and on behalf of the Board of Directors
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            For <strong>{{ $company_name ?? '[Company Name]' }}</strong>
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;font-weight:bold;">
            (Name of the Company)
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>Signature:</strong> _________________________
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>Name:</strong> {{ $authorized_director ?? '[Authorized Director Name]' }}
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>Designation:</strong> {{ $designation ?? '[Designation]' }}
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>DIN:</strong> {{ $din ?? '[DIN Number]' }}
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:8px;">
            <strong>Date:</strong> {{ $formatted_notice_date ?? '________________________' }}
        </p>
        <p style="font-size:13px;line-height:1.6;margin-bottom:0;">
            <strong>Place:</strong> {{ $place ?? '[Place]' }}
        </p>
    </div>

    <!-- Compliance Requirements Section -->
    <div style="margin-top:24px;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;font-size:12px;line-height:1.6;">
        <p style="margin-bottom:8px;font-weight:bold;color:#333;">IMPORTANT: Pre-conditions for filing Form STK-2 (Section 248)</p>
        <ul style="margin-bottom:8px;padding-left:15px;">
            <li style="margin-bottom:4px;">Notice must be sent to all members at least 21 clear days before the meeting</li>
            <li style="margin-bottom:4px;">Special resolution requires 3/4th majority of members entitled to vote</li>
            <li style="margin-bottom:4px;">All pending returns must be filed with Registrar of Companies (ROC)</li>
            <li style="margin-bottom:4px;">GST Registration cancelled (if registered)</li>
            <li style="margin-bottom:4px;">Income tax returns filed and assessments completed</li>
            <li>Bank accounts closed and all liabilities settled</li>
        </ul>
        <p style="margin-bottom:0;font-style:italic;color:#666;">
            <strong>Note:</strong> The notice period is mandatory under Section 101 of the Companies Act, 2013. Proxy forms must be deposited 48 hours before the meeting.
        </p>
    </div>

</div>