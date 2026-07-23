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
        <strong>Venue:</strong> {{ $meeting_venue ?? 'Registered Office of the Company' }}
    </p>

    <p style="font-size:14px;font-weight:bold;line-height:1.8;margin-bottom:16px;color:#333;">
        SUBJECT: ISSUANCE OF SHARES PURSUANT TO ACQUISITION OF BUSINESS FOR CONSIDERATION OTHER THAN CASH
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Chairman placed before the Board the proposal to create, offer for subscription, and to issue and allot Equity Shares to the proprietor/transferor in respect of the {{ $consideration_type_text ?? 'acquisition of business/assets' }} for consideration other than cash. The Board discussed the proposal in detail and passed the following resolutions unanimously:
    </p>

    <div style="margin:16px 0;padding:16px;background-color:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;">
        <p style="font-size:14px;font-weight:bold;line-height:1.8;margin-bottom:8px;">
            Details of the Business Being Acquired:
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
            <strong>Name of the Proprietor/Transferor:</strong> {{ $transferor_name ?? '[Transferor Name]' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
            <strong>Name of the Proprietorship/Business:</strong> {{ $business_name ?? '[Business Name]' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            <strong>Nature of Business:</strong> {{ $business_nature ?? '[Nature of Business]' }}
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 42 and Section 62(1)(c) of the Companies Act, 2013 read with the Companies (Share Capital and Debentures) Rules, 2014 and the Companies (Prospectus and Allotment of Securities) Rules, 2014 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force), and subject to the approval of the members of the Company by way of Special Resolution and the Articles of Association of the Company, and subject to such other approvals as may be required under the Companies Act, 2013 or any other applicable law, consent of the Board of Directors of the Company be and is hereby accorded to create, offer for subscription, and to issue and allot:
    </p>

    <div style="margin:16px 0;padding:16px;background-color:#fff;border:2px solid #28a745;border-radius:4px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Number of Equity Shares:</strong> {{ $formatted_share_quantity ?? '________________' }} ({{ $share_quantity_words ?? '________________' }} in words)
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Face Value per Share:</strong> Rs. {{ $formatted_face_value ?? '________________' }}/-
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Total Consideration Value:</strong> Rs. {{ $formatted_total_value ?? '________________' }}/- (Rupees {{ $total_value_words ?? '________________ Only' }})
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            to the following person:
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
            <strong>Name of the Allottee:</strong> {{ $allottee_name ?? '[Allottee Name]' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
            <strong>PAN:</strong> {{ $pan ?? '[PAN Number]' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Address:</strong> {{ $allottee_address ?? '[Allottee Address]' }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            in respect of the acquisition of the proprietorship business namely <strong>{{ $business_name ?? '[Business Name]' }}</strong> (Name of Business) for consideration other than cash.
        </p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> all the Equity Shares to be issued and allotted pursuant to this resolution shall rank pari passu in all respects with the existing Equity Shares of the Company, including rights to dividend, voting rights, and other entitlements.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the valuation report obtained from <strong>{{ $valuer_name ?? '[Registered Valuer Name]' }}</strong> (Name of Registered Valuer), a Registered Valuer, for determining the value of the business/assets being acquired and the consideration payable therefor, be and is hereby noted and approved.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li style="margin-bottom:8px;">Issue and allot the said Equity Shares to the allottee;</li>
        <li style="margin-bottom:8px;">Convene General Meeting of members to seek approval for the proposed issue and allotment;</li>
        <li style="margin-bottom:8px;">Execute the Business Transfer Agreement and other necessary documents;</li>
        <li style="margin-bottom:8px;">File Form PAS-3 (Return of Allotment) and other requisite forms with the Registrar of Companies;</li>
        <li style="margin-bottom:8px;">Make necessary entries in the Register of Members and other statutory registers;</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution, with power to settle any question, difficulty, or doubt that may arise in regard to such issue and/or allotment."</li>
    </ul>

    <div style="text-align:center;margin:24px 0;padding:16px;font-weight:bold;border-top:1px solid #dee2e6;border-bottom:1px solid #dee2e6;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            Certified to be True
        </p>
    </div>

    <div style="margin-top:32px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            For <strong>{{ $company_name ?? '[Company Name]' }}</strong>
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;font-weight:bold;">
            (Name of the Company)
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
        <p style="margin-bottom:8px;font-weight:bold;color:#333;">IMPORTANT STATUTORY REQUIREMENTS:</p>
        <ul style="margin-bottom:8px;padding-left:15px;">
            <li style="margin-bottom:4px;"><strong>Legal Provisions:</strong> Section 42 (Private Placement) and Section 62(1)(c) (Issue of shares for consideration other than cash) of Companies Act, 2013</li>
            <li style="margin-bottom:4px;"><strong>Valuation:</strong> Mandatory valuation report from Registered Valuer required under Rule 16 of Companies (Share Capital and Debentures) Rules, 2014</li>
            <li style="margin-bottom:4px;"><strong>Shareholder Approval:</strong> Special Resolution required under Section 62(1)(c) within 12 months of Board resolution</li>
            <li style="margin-bottom:4px;"><strong>ROC Filing:</strong> Form PAS-3 must be filed within 30 days of allotment</li>
            <li style="margin-bottom:4px;"><strong>Share Rights:</strong> Shares must rank pari passu with existing shares</li>
            <li><strong>Compliance:</strong> Must comply with Companies (Prospectus and Allotment of Securities) Rules, 2014</li>
        </ul>
        <p style="margin-bottom:0;font-style:italic;color:#666;">
            <strong>Note:</strong> This resolution is subject to shareholder approval through Special Resolution. Business Transfer Agreement must be executed before share allotment.
        </p>
    </div>

</div>