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

    <p style="font-size:14px;line-height:1.8;">
<strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}</p>
    <p style="font-size:14px;line-height:1.8;">
<strong>Time:</strong> {{ $meeting_time }} (Hours)</p>
    <p style="font-size:14px;">
        <strong>Venue:</strong> Registered Office of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: INCREASE IN PAID UP SHARE CAPITAL BY WAY OF RIGHTS ISSUE
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Chairman informed the Board about the requirement for additional capital to meet the business needs of the Company. After thorough deliberation, the Board decided to proceed with a further allotment of shares by way of Rights Issue to the existing members of the Company. The following resolution was passed unanimously:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 62 of the Companies Act, 2013 read with the Companies (Share Capital and Debentures) Rules, 2014 and other applicable provisions (including any statutory modification(s) or re-enactment thereof for the time being in force), and subject to the approval of the members of the Company, the Board hereby approves the issue and allotment of:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>Number of Equity Shares:</strong> {{ $number_of_shares }}</p>
<p style="font-size:14px;line-height:1">
        <strong>Face Value per Share:</strong> Rs. {{ $face_value }}</p>
    <p style="font-size:14px;">        
        <strong>Aggregate Nominal Value:</strong> Rs. {{ $aggregate_value_number }} (Rupees {{ $aggregate_value_words }} only)
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        (hereinafter referred to as "New Shares"), such issue to be made on the following terms and conditions:
    </p>

    <ol style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li>The issue of shares shall be made in proportion to the total equity shares held by each member as on the record date, being <strong>{{ $formatted_record_date }}</strong>.</li>
        <li>The offer to members shall be made by way of a Letter of Offer indicating the number of shares held by each member, the number of shares to which each member is entitled as rights shares, the price per share, and the total amount payable if the offer is accepted in full.</li>
        <li>The offer shall remain valid for a maximum period of <strong>{{ $offer_period }} days</strong> from the date of opening of the offer, and shall include the right for the person to whom the offer is made to renounce the shares offered in favour of any other person.</li>
        <li>Upon expiry of the offer period or upon receipt of earlier intimation from any person declining to accept the shares offered, the Board of Directors shall be authorised to dispose of the unsubscribed portion of the New Shares in such manner as they consider most beneficial to the Company.</li>
        <li>The equity shares so issued shall, upon allotment, rank pari passu with the existing equity shares of the Company in all respects, including voting rights, and shall be entitled to dividend, if any, proportionately for the year of allotment.</li>
        <li>Share certificates shall be issued to the allottees within the time prescribed under the Companies Act, 2013.</li>
    </ol>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to take all necessary steps to implement the above resolution, finalise and issue the Letter of Offer, execute all documents, and take all actions in connection with the further issue and allotment of shares to the members and others, as applicable.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;margin-top:24px;">
         Certified to be a True Copy
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
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