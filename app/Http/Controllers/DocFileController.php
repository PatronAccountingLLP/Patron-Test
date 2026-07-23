<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HtmlToDocService;

class DocFileController extends Controller
{
    
    protected $docService;

    public function __construct(HtmlToDocService $docService)
    {
        $this->docService = $docService;
    }

   public function index()
    {
        return view('tools.board-Resolution');
    }
      public function downloadDoc(Request $request)
    {
      
        $data = [
            'first_director'  => $request->input('first_director'),
            'second_director' => $request->input('second_director'),
            'company_name'    => $request->input('company_name'),
            'company_address' => $request->input('company_address'),
            'city'            => $request->input('city'),
            'br_date'         => $request->input('br_date'),
        ];
    
        $data['formatted_date'] = $data['br_date'] ? date('d M Y', strtotime($data['br_date'])): null;

        $html = view('doc.template', $data)->render();

        $filePath = $this->docService->convert($html, 'board-resolution.docx');
    
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
    
 
    
    // boardResolutionForSaleProperty
    
       public function noc(){
          return view('tools.noc');
      }
    public function boardResolutionForProperty(){
        return view('tools.boardResolutionForSaleProperty');
    }
    public function boardResolutionForPropertyDownloadDoc(Request $request){

    $data = [
        'company_name'        => $request->business_name,
        'cin'                => $request->cin,    
        'registered_office'   => $request->register_address,
        'authorized_director' => $request->authorized_person_name,
        'minimum_sale'       => $request->minimum_sale,    
        'maximum_sale'       => $request->minimum_price,    
        'survey_no'       => $request->survey_no,    
        'property_address'       => $request->property_address,    
        'property_area'       => $request->property_area,    
        'din'       => $request->din,    
        'state'       => $request->state,    
        'resolution_sign_date'       => $request->state,    
            
    ];
      $data['resolutionDate'] = $data['resolution_sign_date'] ? date('d M Y', strtotime($data['resolution_sign_date'])): null;

    $html = view('doc.boardResolutionforSaleProperty', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Sale-of-Property.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
    }
    // jvnkjsfjfnksdkfsdkf
    
      public function boardResolutionForLoanBank(){
        return view('tools.boardResolutionforLoanfromBank');
        // return "hello";
    }
    public function boardResolutionForLoanDownloadDoc(Request $request)
{
    // Validate input (recommended)
    $request->validate([
        'business_name'              => 'required|string',
        'cin'                        => 'required|string',
        'register_address'           => 'required|string',
        'bank_name'                  => 'required|string',
        'loan_amount'                => 'required|string',
        'loan_purpose'               => 'required|string',
        'authorized_person_name'     => 'required|string',
        'designation'                => 'required|string',
        'din'                        => 'required|string',
        'place'                      => 'required|string',
        'resolution_date'            => 'required|date',
    ]);

    // Prepare data for Word view
    $data = [
        'company_name'        => $request->business_name,
        'cin'                 => $request->cin,
        'registered_office'   => $request->register_address,

        'bank_name'           => $request->bank_name,
        'branch_name'         => $request->branch_name,
        'branch_address'      => $request->branch_address,

        'loan_amount'         => $request->loan_amount,
        'loan_purpose'        => $request->loan_purpose,
        'interest_rate'       => $request->interest_rate,
        'repayment_period'    => $request->repayment_period,

        'authorized_director' => $request->authorized_person_name,
        'designation'         => $request->designation,
        'din'                 => $request->din,

        'place'               => $request->place,
        'resolution_sign_date'=> $request->resolution_date,
    ];

    // Formatted date for Word document
    $data['resolutionDate'] = $data['resolution_sign_date']
        ? date('d F Y', strtotime($data['resolution_sign_date']))
        : null;

    // Load Word HTML view
    $html = view('doc.boardResolutionForLoanBank', $data)->render();

    // Convert to DOCX
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Loan-from-Bank.docx'
    );

    // Download file
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// 3

   public function boardResolutionForRentAgreement(){
        return view('tools.resolution-for-authorisation-to-sign-rent-agreement');
        // return "hello";
    }
public function boardResolutionForRentDownloadDoc(Request $request)
{
    $data = [
        'company_name'      => $request->company_name,
        'cin'               => $request->cin,
        'registered_office' => $request->registered_office,
        'email'             => $request->email,
        'leased_address'    => $request->leased_address,
        'monthly_rent'      => $request->monthly_rent,
        'rent_words'        => $request->rent_words,
        'authorized_person' => $request->authorized_person,
        'designation'       => $request->designation,
        'din'               => $request->din,
        'place'             => $request->place,
        'resolutionDate'    => date('d F Y', strtotime($request->resolution_date)),
    ];

    $html = view('doc.boardResolutionForRentAgreement', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Authorisation-to-Sign-Rent-Agreement.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// 4

public function boardResolutionForCCRenewal()
{
    return view('tools.board-resolution-cc-renewal');
}

public function boardResolutionForCCRenewalDownloadDoc(Request $request)
{
    $data = [
        'company_name'       => $request->company_name,
        'cin'                => $request->cin,
        'registered_office'  => $request->registered_office,
        'email'              => $request->email,
        'bank_name'          => $request->bank_name,
        'branch_name'        => $request->branch_name,
        'cc_amount'          => $request->cc_amount,
        'cc_amount_words'    => $request->cc_amount_words,
        'authorized_person'  => $request->authorized_person,
        'designation'        => $request->designation,
        'din'                => $request->din,
        'place'              => $request->place,
        'resolutionDate'     => date('d F Y', strtotime($request->resolution_date)),
    ];

    $html = view('doc.boardResolutionForCCRenewal', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Renewal-of-Cash-Credit-Limit.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// 5
public function boardResolutionDirectorRemuneration()
{
    return view('tools.board-resolution-for-increase-in-director-remuneration');
}
public function boardResolutionDirectorRemunerationDownloadDoc(Request $request)
{
    // Validation (optional but recommended)
    $request->validate([
        'company_name' => 'required|string',
        'director_name' => 'required|string',
        'director_din' => 'required|string',
        'director_desig' => 'required|string',
        'authorized_person' => 'required|string',
        'authorized_desig' => 'required|string',
        'place' => 'required|string',
        'resolution_date' => 'required|date',
    ]);

    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'email' => $request->email,
        'resolution_date' => $request->resolution_date, // Blade expects this variable
        'director_name' => $request->director_name,
        'director_din' => $request->director_din,
        'director_desig' => $request->director_desig,
        'authorized_person' => $request->authorized_person,
        'authorized_desig' => $request->authorized_desig,
        'place' => $request->place,
        'basic_salary' => $request->basic_salary,
        'basic_salary_effective' => $request->basic_salary_effective,
        'commission_percent' => $request->commission_percent,
        'commission_fy' => $request->commission_fy,
        'hra' => $request->hra,
        'medical' => $request->medical,
        'lta' => $request->lta,
        'pf_gratuity' => $request->pf_gratuity,
        'vehicle' => $request->vehicle,
        'other_perquisites' => $request->other_perquisites,
    ];

    // Render the HTML view
    $html = view('doc.boardResolutionDirectorRemu', $data)->render();

    // Generate DOCX using your service
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Increase-Director-Remuneration.docx'
    );

    return response()->download($filePath)->deleteFileAfterSend(true);
}
// 6

public function boardResolutionLoanToEquity()
{
    return view('tools.boardResolutionForLoanToEquity');
}

public function boardResolutionLoanToEquityDownload(Request $request)
{
    $data = [
        'company_name'       => $request->company_name,
        'cin'                => $request->cin,
        'registered_office'  => $request->registered_office,
        'email'              => $request->email,
        'meeting_date'       => $request->meeting_date,
        'loan_date'          => $request->loan_date,
        'loan_amount'        => $request->loan_amount,
        'interest_rate'      => $request->interest_rate,
        'conversion_date'    => $request->conversion_date,
        'equity_shares'      => $request->equity_shares,
        'face_value'         => $request->face_value,
        'issue_price'        => $request->issue_price,
        'premium'            => $request->premium,
        'director_name'      => $request->director_name,
        'din'                => $request->din,
    ];

    $data['formattedMeetingDate'] = date('d M Y', strtotime($data['meeting_date']));
    $data['formattedLoanDate']    = date('d M Y', strtotime($data['loan_date']));
    $data['formattedConvDate']    = date('d M Y', strtotime($data['conversion_date']));

    $html = view('doc.boardResolutionLoanToEquity', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Conversion-of-Loan-into-Equity.docx'
    );

    return response()->download($filePath)->deleteFileAfterSend(true);
}


public function resignationLetterDesignatedPartner()
{    
    return view('tools.resignationLetterDesignatedPartnerLLP');
}

public function resignationLetterDesignatedPartnerDownloadDoc(Request $request)
{
    $data = [
        'llp_name'          => $request->llp_name,
        'registered_office'=> $request->registered_office,
        'resignation_date' => $request->resignation_date,
        'partner_name'     => $request->partner_name,
        'dpin'             => $request->dpin,
        'place'            => $request->place,
    ];

    $data['formatted_date'] = $data['resignation_date']
        ? date('d F Y', strtotime($data['resignation_date']))
        : null;

//   return $data;
    $html = view('doc.resignationLetterDesignatedPartnerLLPs', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Resignation-Letter-Designated-Partner-LLP.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// ==========================================
public function boardResolutionForPOSH(){
    return view('tools.board-resolution-format-for-posh-committee');
}

public function boardResolutionForPOSHDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'company_email' => $request->company_email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'presiding_officer_name' => $request->presiding_officer_name,
        'presiding_officer_designation' => $request->presiding_officer_designation,
        'presiding_officer_contact' => $request->presiding_officer_contact,
        'internal_member1_name' => $request->internal_member1_name,
        'internal_member1_designation' => $request->internal_member1_designation,
        'internal_member1_contact' => $request->internal_member1_contact,
        'internal_member2_name' => $request->internal_member2_name,
        'internal_member2_designation' => $request->internal_member2_designation,
        'internal_member2_contact' => $request->internal_member2_contact,
        'external_member_name' => $request->external_member_name,
        'external_member_designation' => $request->external_member_designation,
        'external_member_contact' => $request->external_member_contact,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.board-resolution-format-for-posh-committee', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Constitution-of-Internal-Committee-POSH.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// ===================================
public function boardResolutionForGSTRegistration(){
    return view('tools.board-resolution-for-gst-registration');
}

public function boardResolutionForGSTRegistrationDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.board-resolution-for-gst-registration', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-GST-Registration.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// =======================================
public function boardResolutionForAuditorResignation(){
    return view('tools.board-resolution-for-resignation-of-statutory-auditor');
}

public function boardResolutionForAuditorResignationDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'company_email' => $request->company_email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'auditor_firm_name' => $request->auditor_firm_name,
        'firm_registration_number' => $request->firm_registration_number,
        'resignation_letter_date' => $request->resignation_letter_date,
        'effective_resignation_date' => $request->effective_resignation_date,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resignation_date'] = $data['resignation_letter_date'] ? date('d F Y', strtotime($data['resignation_letter_date'])) : null;
    $data['formatted_effective_date'] = $data['effective_resignation_date'] ? date('d F Y', strtotime($data['effective_resignation_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.board-resolution-for-resignation-of-statutory-auditor', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Resignation-of-Statutory-Auditor.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// ========================================
public function boardResolutionForNOC(){
    return view('tools.resolution-for-noc-office-use');
}

public function boardResolutionForNOCDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'requesting_company_name' => $request->requesting_company_name,
        'requesting_company_type' => $request->requesting_company_type,
        'premises_address' => $request->premises_address,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.resolution-for-noc-office-use', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-No-Objection-Certificate.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// ===============================

public function boardResolutionForStrikeOff(){
    return view('tools.board-resolution-for-striking-off-the-company');
}

public function boardResolutionForStrikeOffDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'application_director_name' => $request->application_director_name,
        'application_director_din' => $request->application_director_din,
        'authorization_director_name' => $request->authorization_director_name,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.board-resolution-for-striking-off-the-company', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Striking-Off-the-Company.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

public function boardResolutionForAOAAlteration(){
    return view('tools.board-resolution-for-alteration-of-aoa');
}

public function boardResolutionForAOAAlterationDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'company_email' => $request->company_email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'amendments' => $request->amendments,
        'authorized_person_name_1' => $request->authorized_person_name,
        'authorized_designation_1' => $request->owner_director_partner,
        'din_1' => $request->din,
        'address_1' => $request->address_1,
        'authorized_person_name_2' => $request->authorized_person_name_2,
        'authorized_designation_2' => $request->designation_2,
        'din_2' => $request->din_2,
        'address_2' => $request->address_2,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    // Process amendments - convert to array
    $data['amendments_array'] = array_filter(
        array_map('trim', explode("\n", $data['amendments'])),
        function($line) {
            return !empty($line);
        }
    );
    
    $html = view('doc.board-resolution-for-alteration-of-aoa', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Alteration-of-Articles-of-Association.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

public function boardResolutionForLLPDesignatedPartner(){
    return view('tools.resolution-for-appointment-of-designated-partner-in-llp');
}

public function boardResolutionForLLPDesignatedPartnerDownloadDoc(Request $request){
    $data = [
        'llp_name' => $request->llp_name,
        'llpin' => $request->llpin,
        'registered_office' => $request->register_address,
        'company_email' => $request->company_email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'llp_agreement_date' => $request->llp_agreement_date,
        'supplemental_agreement_date' => $request->supplemental_agreement_date,
        'new_dp_name' => $request->new_dp_name,
        'new_dp_dpin' => $request->new_dp_dpin,
        'effective_date' => $request->effective_date,
        'authorized_dp_name' => $request->authorized_dp_name,
        'authorized_dp_dpin' => $request->authorized_dp_dpin,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_llp_agreement_date'] = $data['llp_agreement_date'] ? date('d F Y', strtotime($data['llp_agreement_date'])) : null;
    $data['formatted_supplemental_date'] = $data['supplemental_agreement_date'] ? date('d F Y', strtotime($data['supplemental_agreement_date'])) : null;
    $data['formatted_effective_date'] = $data['effective_date'] ? date('d F Y', strtotime($data['effective_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.resolution-for-appointment-of-designated-partner-in-llp', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Resolution-for-Appointment-of-Designated-Partner-in-LLP.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
public function boardResolutionForFinancialStatements(){
    return view('tools.board-resolution-for-approval-of-financial-statements');
}

public function boardResolutionForFinancialStatementsDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'company_email' => $request->company_email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'financial_year_end' => $request->financial_year_end,
        'director1_name' => $request->director1_name,
        'director1_din' => $request->director1_din,
        'director2_name' => $request->director2_name,
        'director2_din' => $request->director2_din,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_financial_year_end'] = $data['financial_year_end'] ? date('d F Y', strtotime($data['financial_year_end'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    // Calculate financial year text (e.g., 2022-2023)
    if ($data['financial_year_end']) {
        $yearEnd = date('Y', strtotime($data['financial_year_end']));
        $yearStart = $yearEnd - 1;
        $data['financial_year_text'] = $yearStart . '-' . $yearEnd;
    } else {
        $data['financial_year_text'] = '________________';
    }
    
    $html = view('doc.board-resolution-for-approval-of-financial-statements', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Approval-of-Financial-Statements.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

public function boardResolutionForBankAccount(){
    return view('tools.board-resolution-for-opening-bank-account');
}

public function boardResolutionForBankAccountDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'bank_name' => $request->bank_name,
        'branch_name' => $request->branch_name,
        'bank_city' => $request->bank_city,
        'authorized_person1_name' => $request->authorized_person1_name,
        'authorized_person1_designation' => $request->authorized_person1_designation,
        'authorized_person2_name' => $request->authorized_person2_name,
        'authorized_person2_designation' => $request->authorized_person2_designation,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d.m.Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.board-resolution-for-opening-bank-account', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Opening-a-Bank-Account.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

public function boardResolutionForBankAuthorization(){
    return view('tools.board-resolution-for-authorisation-to-operate-bank-account');
}

public function boardResolutionForBankAuthorizationDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'company_email' => $request->company_email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'bank_name' => $request->bank_name,
        'branch_name' => $request->branch_name,
        'branch_address' => $request->branch_address,
        'authorized_signatory_name' => $request->authorized_signatory_name,
        'authorized_signatory_designation' => $request->authorized_signatory_designation,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d.m.Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.board-resolution-for-authorisation-to-operate-bank-account', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Authorisation-to-Operate-Bank-Account.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
    
    // resolution-for-approval-of-related-party-transactions
    
    public function boardResolutionForRelatedParty(){
    return view('tools.resolution-for-approval-of-related-party-transactions');
}

public function boardResolutionForRelatedPartyDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->business_name,
        'cin' => $request->cin,
        'registered_office' => $request->register_address,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'meeting_venue' => $request->meeting_venue,
        'shareholder_approval_required' => $request->shareholder_approval,
        'shareholder_resolution_type' => $request->shareholder_resolution_type,
        'related_party_name' => $request->related_party_name,
        'relationship_nature' => $request->relationship_nature,
        'transaction_nature' => $request->transaction_nature,
        'register_authorized_name' => $request->register_authorized_name,
        'register_authorized_designation' => $request->register_authorized_designation,
        'authorized_person_name' => $request->authorized_person_name,
        'authorized_designation' => $request->owner_director_partner,
        'din' => $request->din,
        'place' => $request->state,
        'resolution_date' => $request->resolution_sign_date,
    ];
    
    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d.m.Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;
    
    $html = view('doc.resolution-for-approval-of-related-party-transactions', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Approval-of-Related-Party-Transactions.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// affidavit-for-closure-of-llp

public function boardResolutionForLLPClosureAffidavit(){
    return view('tools.affidavit-for-closure-of-llp');
}

public function boardResolutionForLLPClosureAffidavitDownloadDoc(Request $request){
    $data = [
        'designated_partner_name' => $request->designated_partner_name,
        'dpin_din' => $request->dpin_din,
        'designation' => $request->designation,
        'llp_name' => $request->llp_name,
        'llpin' => $request->llpin,
        'registered_office' => $request->register_address,
        'inactivity_date_type' => $request->inactivity_date_type,
        'specific_inactivity_date' => $request->specific_inactivity_date,
        'residual_amount' => $request->residual_amount,
        'affidavit_place' => $request->affidavit_place,
        'affidavit_date' => $request->affidavit_date,
    ];
    
    // Format dates
    if ($data['specific_inactivity_date']) {
        $data['formatted_inactivity_date'] = date('d F Y', strtotime($data['specific_inactivity_date']));
    } else if ($data['inactivity_date_type'] === 'incorporation') {
        $data['formatted_inactivity_date'] = 'Date of Incorporation';
    } else {
        $data['formatted_inactivity_date'] = 'Date of Last Activity';
    }
    
    $data['formatted_affidavit_date'] = $data['affidavit_date'] ? date('d F Y', strtotime($data['affidavit_date'])) : null;
    
    $html = view('doc.affidavit-for-closure-of-llp', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Affidavit-for-Closure-of-LLP.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller code
public function boardResolutionForESOP(){
    return view('tools.board-resolution-for-approval-of-esop-scheme');
}

public function boardResolutionForESOPDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'company_email' => $request->company_email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'meeting_venue' => $request->meeting_venue,
        'scheme_name' => $request->scheme_name,
        'max_options_number' => $request->max_options_number,
        'max_options_words' => $request->max_options_words,
        'option_name' => $request->option_name,
        'authorized_name' => $request->authorized_name,
        'designation' => $request->designation,
        'din' => $request->din,
        'place' => $request->place,
    ];
    
    // Format the meeting date
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d.m.Y', strtotime($data['meeting_date'])) : null;
    
    $html = view('doc.board-resolution-for-approval-of-esop-scheme', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Approval-of-ESOP-Scheme.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller code
public function boardResolutionForWholeTimeDirector(){
    return view('tools.board-resolution-for-appointment-of-whole-time-director');
}

public function boardResolutionForWholeTimeDirectorDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'company_email' => $request->company_email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'meeting_venue' => $request->meeting_venue,
        'director_name' => $request->director_name,
        'director_din' => $request->director_din,
        'tenure_years' => $request->tenure_years,
        'tenure_words' => $request->tenure_words,
        'appointment_from' => $request->appointment_from,
        'appointment_to' => $request->appointment_to,
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'signatory_din' => $request->signatory_din,
        'place' => $request->place,
    ];
    
    // Format the dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d.m.Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_from_date'] = $data['appointment_from'] ? date('d.m.Y', strtotime($data['appointment_from'])) : null;
    $data['formatted_to_date'] = $data['appointment_to'] ? date('d.m.Y', strtotime($data['appointment_to'])) : null;
    
    $html = view('doc.board-resolution-for-appointment-of-whole-time-director', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Appointment-of-Whole-Time-Director.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Controller code
public function boardResolutionForSubsidiary(){
    return view('tools.board-resolution-for-incorporating-a-subsidiary-company');
}

public function boardResolutionForSubsidiaryDownloadDoc(Request $request){
    $data = [
        // Parent Company Details
        'parent_company_name' => $request->parent_company_name,
        'parent_cin' => $request->parent_cin,
        'parent_registered_office' => $request->parent_registered_office,
        'parent_email' => $request->parent_email,
        
        // Meeting Details
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        
        // Authorized Persons
        'auth_person1_name' => $request->auth_person1_name,
        'auth_person1_designation' => $request->auth_person1_designation,
        'auth_person2_name' => $request->auth_person2_name,
        'auth_person2_designation' => $request->auth_person2_designation,
        
        // Subsidiary Details
        'proposed_name' => $request->proposed_name,
        'alternate_name' => $request->alternate_name,
        'authorised_capital_number' => $request->authorised_capital_number,
        'authorised_capital_words' => $request->authorised_capital_words,
        'equity_shares' => $request->equity_shares,
        'face_value' => $request->face_value,
        
        // Main Objects
        'main_object1' => $request->main_object1,
        'main_object2' => $request->main_object2,
        'main_object3' => $request->main_object3,
        
        // Signatory Details
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'signatory_din' => $request->signatory_din,
    ];
    
    // Format the meeting date
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d.m.Y', strtotime($data['meeting_date'])) : null;
    
    $html = view('doc.board-resolution-for-incorporating-a-subsidiary-company', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Incorporating-a-Subsidiary-Company.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller code
public function boardResolutionForShareCapital(){
    return view('tools.board-resolution-for-increase-in-paid-up-capital');
}

public function boardResolutionForShareCapitalDownloadDoc(Request $request){
    $data = [
        // Company Details
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        
        // Meeting Details
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        
        // Share Details
        'number_of_shares' => $request->number_of_shares,
        'face_value' => $request->face_value,
        'aggregate_value_number' => $request->aggregate_value_number,
        'aggregate_value_words' => $request->aggregate_value_words,
        
        // Terms
        'record_date' => $request->record_date,
        'offer_period' => $request->offer_period,
        
        // Signatory Details
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'signatory_din' => $request->signatory_din,
        'place' => $request->place,
    ];
    
    // Format the dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d.m.Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_record_date'] = $data['record_date'] ? date('d F Y', strtotime($data['record_date'])) : null;
    
    $html = view('doc.board-resolution-for-increase-in-paid-up-capital', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Increase-in-Paid-Up-Share-Capital.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


public function egmAuditorResolution(){
    return view('tools.egmResolutionForStatutoryAuditor');
}

public function egmAuditorResolutionDownloadDoc(Request $request){

    $data = [
        'company_name'        => $request->company_name,
        'cin'                 => $request->cin,
        'registered_office'   => $request->registered_office,
        'meeting_date'        => $request->meeting_date,
        'meeting_time'        => $request->meeting_time,
        'meeting_venue'       => $request->meeting_venue,
        'auditor_name'        => $request->auditor_name,
        'firm_registration_no'=> $request->firm_registration_no,
        'auditor_address'     => $request->auditor_address,
        'tenure_years'        => $request->tenure_years,
        'fy_from'             => $request->fy_from,
        'fy_to'               => $request->fy_to,
        'agm_conclude'        => $request->agm_conclude,
        'appointment_type'    => $request->appointment_type,
        'signatory_name'      => $request->signatory_name,
        'designation'         => $request->designation,
        'din'                 => $request->din,
        'place'               => $request->place,
        'resolution_date'     => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    // Tenure text mapping
    $tenureMapping = [
        '1' => 'One (1)',
        '2' => 'Two (2)',
        '3' => 'Three (3)',
        '4' => 'Four (4)',
        '5' => 'Five (5)'
    ];
    $data['tenureText'] = $tenureMapping[$data['tenure_years']] ?? 'Five (5)';

    $html = view('doc.egmResolutionForStatutoryAuditor', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'EGM-Resolution-for-Appointment-of-Statutory-Auditor.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Add these methods to your controller

public function boardResolutionAuthorisedSignatory(){
    return view('tools.boardResolutionForAuthorisedSignatory');
}

public function boardResolutionAuthorisedSignatoryDownloadDoc(Request $request){

    $data = [
        'company_name'              => $request->company_name,
        'cin'                       => $request->cin,
        'registered_office'         => $request->registered_office,
        'meeting_date'              => $request->meeting_date,
        'meeting_time'              => $request->meeting_time,
        'authorised_signatory_name' => $request->authorised_signatory_name,
        'authorised_signatory_pan'  => strtoupper($request->authorised_signatory_pan),
        'authority_purpose'         => $request->authority_purpose,
        'authority_department'      => $request->authority_department,
        'director_name'             => $request->director_name,
        'designation'               => $request->designation,
        'din'                       => $request->din,
        'place'                     => $request->place,
        'resolution_date'           => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    $html = view('doc.boardResolutionForAuthorisedSignatory', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Appointment-of-Authorised-Signatory.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Add these methods to your controller

public function subscriberSheetLLP(){
    return view('tools.subscriberSheetForLLP');
}

public function subscriberSheetLLPDownloadDoc(Request $request){

    $data = [
        'llp_name'                => $request->llp_name,
        'partner1_name'           => $request->partner1_name,
        'partner1_father_name'    => $request->partner1_father_name,
        'partner1_address'        => $request->partner1_address,
        'partner1_designation'    => $request->partner1_designation,
        'partner2_name'           => $request->partner2_name,
        'partner2_father_name'    => $request->partner2_father_name,
        'partner2_address'        => $request->partner2_address,
        'partner2_designation'    => $request->partner2_designation,
        'witness_name'            => $request->witness_name,
        'witness_profession'      => $request->witness_profession,
        'witness_membership_no'   => $request->witness_membership_no,
        'witness_address'         => $request->witness_address,
        'place'                   => $request->place,
        'document_date'           => $request->document_date,
    ];

    // Format date
    $data['formattedDate'] = $data['document_date'] ? date('d M Y', strtotime($data['document_date'])) : null;

    $html = view('doc.subscriberSheetForLLP', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Subscriber-Sheet-for-LLP-Registration.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Add these methods to your controller

public function boardResolutionConversionToLLP(){
    return view('tools.boardResolutionForConversionToLLP');
}

public function boardResolutionConversionToLLPDownloadDoc(Request $request){

    $data = [
        'company_name'       => $request->company_name,
        'cin'                => $request->cin,
        'registered_office'  => $request->registered_office,
        'email'              => $request->email,
        'meeting_date'       => $request->meeting_date,
        'meeting_time'       => $request->meeting_time,
        'proposed_llp_name'  => $request->proposed_llp_name,
        'director_name'      => $request->director_name,
        'designation'        => $request->designation,
        'din'                => $request->din,
        'place'              => $request->place,
        'resolution_date'    => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    $html = view('doc.boardResolutionForConversionToLLP', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Conversion-of-Pvt-Ltd-to-LLP.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Add these methods to your controller

public function boardResolutionSecretarialAuditor(){
    return view('tools.boardResolutionForSecretarialAuditor');
}

public function boardResolutionSecretarialAuditorDownloadDoc(Request $request){

    $data = [
        'company_name'       => $request->company_name,
        'cin'                => $request->cin,
        'registered_office'  => $request->registered_office,
        'email'              => $request->email,
        'meeting_date'       => $request->meeting_date,
        'meeting_time'       => $request->meeting_time,
        'financial_year'     => $request->financial_year,
        'auditor_name'       => $request->auditor_name,
        'cop_number'         => $request->cop_number,
        'auditor_address'    => $request->auditor_address,
        'director_name'      => $request->director_name,
        'designation'        => $request->designation,
        'din'                => $request->din,
        'place'              => $request->place,
        'resolution_date'    => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    $html = view('doc.boardResolutionForSecretarialAuditor', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Appointment-of-Secretarial-Auditor.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Add these methods to your controller

public function boardResolutionAuthSignDocuments(){
    return view('tools.boardResolutionForAuthSignDocuments');
}

public function boardResolutionAuthSignDocumentsDownloadDoc(Request $request){

    $data = [
        'company_name'                 => $request->company_name,
        'cin'                          => $request->cin,
        'registered_office'            => $request->registered_office,
        'meeting_date'                 => $request->meeting_date,
        'meeting_time'                 => $request->meeting_time,
        'authorised_person_name'       => $request->authorised_person_name,
        'authorised_person_designation'=> $request->authorised_person_designation,
        'authorised_person_pan'        => strtoupper($request->authorised_person_pan),
        'authority_purpose'            => $request->authority_purpose,
        'authority_department'         => $request->authority_department,
        'director_name'                => $request->director_name,
        'director_designation'         => $request->director_designation,
        'din'                          => $request->din,
        'place'                        => $request->place,
        'resolution_date'              => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    $html = view('doc.boardResolutionForAuthSignDocuments', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Authorisation-to-Sign-Documents.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Add these methods to your controller

public function boardResolutionAdditionalDirector(){
    return view('tools.boardResolutionForAdditionalDirector');
}

public function boardResolutionAdditionalDirectorDownloadDoc(Request $request){

    $data = [
        'company_name'                    => $request->company_name,
        'cin'                             => $request->cin,
        'registered_office'               => $request->registered_office,
        'email'                           => $request->email,
        'meeting_date'                    => $request->meeting_date,
        'meeting_time'                    => $request->meeting_time,
        'additional_director_name'        => $request->additional_director_name,
        'additional_director_din'         => $request->additional_director_din,
        'additional_director_address'     => $request->additional_director_address,
        'appointment_date'                => $request->appointment_date,
        'certifying_director_name'        => $request->certifying_director_name,
        'certifying_director_designation' => $request->certifying_director_designation,
        'certifying_director_din'         => $request->certifying_director_din,
        'place'                           => $request->place,
        'resolution_date'                 => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedAppointmentDate'] = $data['appointment_date'] ? date('d M Y', strtotime($data['appointment_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    $html = view('doc.boardResolutionForAdditionalDirector', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Appointment-of-Additional-Director.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
 
// Add these methods to your controller

public function boardResolutionChangeCompanyName(){
    return view('tools.boardResolutionForChangeCompanyName');
}

public function boardResolutionChangeCompanyNameDownloadDoc(Request $request){

    $data = [
        'existing_company_name'  => $request->existing_company_name,
        'cin'                    => $request->cin,
        'registered_office'      => $request->registered_office,
        'meeting_date'           => $request->meeting_date,
        'meeting_time'           => $request->meeting_time,
        'proposed_company_name'  => $request->proposed_company_name,
        'director_name'          => $request->director_name,
        'designation'            => $request->designation,
        'din'                    => $request->din,
        'place'                  => $request->place,
        'resolution_date'        => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    $html = view('doc.boardResolutionForChangeCompanyName', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Change-of-Company-Name.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}  


// Add these methods to your controller

public function boardResolutionMutualFundInvestment(){
    return view('tools.boardResolutionForMutualFundInvestment');
}

public function boardResolutionMutualFundInvestmentDownloadDoc(Request $request){

    $data = [
        'company_name'           => $request->company_name,
        'cin'                    => $request->cin,
        'registered_office'      => $request->registered_office,
        'meeting_date'           => $request->meeting_date,
        'meeting_time'           => $request->meeting_time,
        'rta_name'               => $request->rta_name,
        'signatory1_name'        => $request->signatory1_name,
        'signatory1_designation' => $request->signatory1_designation,
        'signatory2_name'        => $request->signatory2_name,
        'signatory2_designation' => $request->signatory2_designation,
        'signatory3_name'        => $request->signatory3_name,
        'signatory3_designation' => $request->signatory3_designation,
        'director_name'          => $request->director_name,
        'director_designation'   => $request->director_designation,
        'din'                    => $request->din,
        'place'                  => $request->place,
        'resolution_date'        => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    $html = view('doc.boardResolutionForMutualFundInvestment', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Mutual-Fund-Investment.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Add these methods to your controller

public function boardResolutionShareTransfer(){
    return view('tools.boardResolutionForShareTransfer');
}

public function boardResolutionShareTransferDownloadDoc(Request $request){

    $data = [
        'company_name'         => $request->company_name,
        'cin'                  => $request->cin,
        'registered_office'    => $request->registered_office,
        'meeting_date'         => $request->meeting_date,
        'meeting_time'         => $request->meeting_time,
        'transferor_name'      => $request->transferor_name,
        'transferor_folio'     => $request->transferor_folio,
        'transferee_name'      => $request->transferee_name,
        'transferee_folio'     => $request->transferee_folio,
        'number_of_shares'     => $request->number_of_shares,
        'share_certificate_no' => $request->share_certificate_no,
        'director_name'        => $request->director_name,
        'designation'          => $request->designation,
        'din'                  => $request->din,
        'place'                => $request->place,
        'resolution_date'      => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    $html = view('doc.boardResolutionForShareTransfer', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Share-Transfer.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}



// Add these methods to your controller

public function boardResolutionSittingFees(){
    return view('tools.boardResolutionForSittingFees');
}

public function boardResolutionSittingFeesDownloadDoc(Request $request){

    $data = [
        'company_name'           => $request->company_name,
        'cin'                    => $request->cin,
        'registered_office'      => $request->registered_office,
        'email'                  => $request->email,
        'meeting_date'           => $request->meeting_date,
        'meeting_time'           => $request->meeting_time,
        'financial_year'         => $request->financial_year,
        'sitting_fees_type'      => $request->sitting_fees_type,
        'board_meeting_fees'     => $request->board_meeting_fees,
        'committee_meeting_fees' => $request->committee_meeting_fees,
        'director_name'          => $request->director_name,
        'designation'            => $request->designation,
        'din'                    => $request->din,
        'place'                  => $request->place,
        'resolution_date'        => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }

    // Format fees amounts in words
    if ($data['board_meeting_fees']) {
        $data['board_meeting_fees_words'] = $this->convertNumberToWords($data['board_meeting_fees']);
    }
    if ($data['committee_meeting_fees']) {
        $data['committee_meeting_fees_words'] = $this->convertNumberToWords($data['committee_meeting_fees']);
    }

    $html = view('doc.boardResolutionForSittingFees', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Sitting-Fees-to-Directors.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Add these methods to your controller

public function boardResolutionDividendDeclaration(){
    
    return view('tools.boardResolutionForDividendDeclaration');
}

public function boardResolutionDividendDeclarationDownloadDoc(Request $request){

    $data = [
        'company_name'          => $request->company_name,
        'cin'                   => $request->cin,
        'registered_office'     => $request->registered_office,
        'email'                 => $request->email,
        'meeting_date'          => $request->meeting_date,
        'meeting_time'          => $request->meeting_time,
        'dividend_type'         => $request->dividend_type,
        'face_value'            => $request->face_value,
        'dividend_rate'         => $request->dividend_rate,
        'dividend_per_share'    => $request->dividend_per_share,
        'total_dividend_amount' => $request->total_dividend_amount,
        'financial_year'        => $request->financial_year,
        'record_date'           => $request->record_date,
        'bank_account_number'   => $request->bank_account_number,
        'bank_name'             => $request->bank_name,
        'bank_branch'           => $request->bank_branch,
        'director_name'         => $request->director_name,
        'designation'           => $request->designation,
        'din'                   => $request->din,
        'place'                 => $request->place,
        'resolution_date'       => $request->resolution_date,
    ];

    // Format dates
    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedRecordDate'] = $data['record_date'] ? date('d M Y', strtotime($data['record_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;
    
    // Format time
    if ($data['meeting_time']) {
        $data['formattedMeetingTime'] = date('h:i A', strtotime($data['meeting_time']));
    } else {
        $data['formattedMeetingTime'] = null;
    }
    
    // return $data;

    // Format amounts in words
    if ($data['dividend_per_share']) {
        $data['dividend_per_share_words'] = $this->convertNumberToWords($data['dividend_per_share']);
    }
    if ($data['face_value']) {
        $data['face_value_words'] = $this->convertNumberToWords($data['face_value']);
    }
    if ($data['total_dividend_amount']) {
        $data['total_dividend_amount_words'] = $this->convertNumberToWords($data['total_dividend_amount']);
    }

    //  return $data;
     
    $html = view('doc.boardResolutionForDividendDeclaration', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Declaration-of-Dividend.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Controller Methods for NOC from Landlord for Company Registration

public function nocFromLandlord(){
    return view('tools.nocFromLandlord');
}

public function nocFromLandlordDownloadDoc(Request $request){

    $data = [
        'property_owner_name'     => $request->property_owner_name,
        'relation_type'           => $request->relation_type,
        'relation_name'           => $request->relation_name,
        'owner_address'           => $request->owner_address,
        'rented_premises_address' => $request->rented_premises_address,
        'directors_names'         => $request->directors_names,
        'company_name'            => $request->company_name,
        'entity_type'             => $request->entity_type,
        'contact_no'              => $request->contact_no,
        'place'                   => $request->place,
        'noc_date'                => $request->noc_date,
    ];

    $data['formattedDate'] = $data['noc_date'] ? date('d M Y', strtotime($data['noc_date'])) : null;

    $html = view('doc.nocFromLandlord', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'NOC-from-Landlord-for-Company-Registration.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller Methods for Board Resolution for Issue and Allotment of NCDs on Private Placement Basis

public function boardResolutionNCDIssue(){
    return view('tools.boardResolutionNCDIssue');
}

public function boardResolutionNCDIssueDownloadDoc(Request $request){

    $allottees = [];
    $allotteeNames = $request->allottee_name ?? [];
    $allotteeNCDs = $request->allottee_ncds ?? [];
    $allotteeAmounts = $request->allottee_amount ?? [];
    $allotteeTenures = $request->allottee_tenure ?? [];
    $allotteeInterests = $request->allottee_interest ?? [];

    for ($i = 0; $i < count($allotteeNames); $i++) {
        $allottees[] = [
            'name' => $allotteeNames[$i] ?? '',
            'ncds' => $allotteeNCDs[$i] ?? '',
            'amount' => $allotteeAmounts[$i] ?? '',
            'tenure' => $allotteeTenures[$i] ?? '',
            'interest' => $allotteeInterests[$i] ?? '',
        ];
    }

    $data = [
        'company_name'        => $request->company_name,
        'cin'                 => $request->cin,
        'email'               => $request->email,
        'registered_office'   => $request->registered_office,
        'meeting_date'        => $request->meeting_date,
        'meeting_time'        => $request->meeting_time,
        'ncd_number'          => $request->ncd_number,
        'face_value'          => $request->face_value,
        'total_consideration' => $request->total_consideration,
        'interest_rate'       => $request->interest_rate,
        'tenure'              => $request->tenure,
        'allottees'           => $allottees,
        'director_name'       => $request->director_name,
        'designation'         => $request->designation,
        'din'                 => $request->din,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.boardResolutionNCDIssue', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-NCD-Issue-Private-Placement.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller Methods for Board Resolution for Appointment of Statutory Auditor to Fill Casual Vacancy

public function boardResolutionAuditorCasualVacancy(){
    return view('tools.boardResolutionAuditorCasualVacancy');
}

public function boardResolutionAuditorCasualVacancyDownloadDoc(Request $request){

    $data = [
        'company_name'            => $request->company_name,
        'cin'                     => $request->cin,
        'email'                   => $request->email,
        'registered_office'       => $request->registered_office,
        'meeting_date'            => $request->meeting_date,
        'meeting_time'            => $request->meeting_time,
        'new_auditor_name'        => $request->new_auditor_name,
        'new_auditor_frn'         => $request->new_auditor_frn,
        'resigning_auditor_name'  => $request->resigning_auditor_name,
        'resigning_auditor_frn'   => $request->resigning_auditor_frn,
        'financial_year'          => $request->financial_year,
        'director_name'           => $request->director_name,
        'designation'             => $request->designation,
        'din'                     => $request->din,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.boardResolutionAuditorCasualVacancy', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Statutory-Auditor-Casual-Vacancy.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller Methods for Board Resolution for Acquisition of Sole Proprietorship Business

public function boardResolutionAcquisitionSoleProprietorship(){
    return view('tools.boardResolutionAcquisitionSoleProprietorship');
}

public function boardResolutionAcquisitionSoleProprietorshipDownloadDoc(Request $request){

    $data = [
        'company_name'            => $request->company_name,
        'cin'                     => $request->cin,
        'email'                   => $request->email,
        'registered_office'       => $request->registered_office,
        'meeting_date'            => $request->meeting_date,
        'meeting_time'            => $request->meeting_time,
        'proprietorship_name'     => $request->proprietorship_name,
        'proprietorship_address'  => $request->proprietorship_address,
        'purchase_consideration'  => $request->purchase_consideration,
        'amount_in_words'         => $request->amount_in_words,
        'director_name'           => $request->director_name,
        'designation'             => $request->designation,
        'din'                     => $request->din,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.boardResolutionAcquisitionSoleProprietorship', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Acquisition-Sole-Proprietorship.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Controller Methods for Board Resolution for Conversion of OPC into Private Limited Company

public function boardResolutionOPCConversion(){
    return view('tools.boardResolutionOPCConversion');
}

public function boardResolutionOPCConversionDownloadDoc(Request $request){

    $data = [
        'company_name'      => $request->company_name,
        'cin'               => $request->cin,
        'email'             => $request->email,
        'registered_office' => $request->registered_office,
        'meeting_date'      => $request->meeting_date,
        'meeting_time'      => $request->meeting_time,
        'director_name'     => $request->director_name,
        'designation'       => $request->designation,
        'din'               => $request->din,
        'place'             => $request->place,
        'resolution_date'   => $request->resolution_date,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;

    $html = view('doc.boardResolutionOPCConversion', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-OPC-Conversion-Private-Limited.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Controller Methods for Board Resolution for Resignation of Director

public function boardResolutionDirectorResignation(){
    return view('tools.boardResolutionDirectorResignation');
}

public function boardResolutionDirectorResignationDownloadDoc(Request $request){

    $data = [
        'company_name'                    => $request->company_name,
        'cin'                             => $request->cin,
        'email'                           => $request->email,
        'registered_office'               => $request->registered_office,
        'meeting_date'                    => $request->meeting_date,
        'meeting_time'                    => $request->meeting_time,
        'resigning_director_name'         => $request->resigning_director_name,
        'resigning_director_din'          => $request->resigning_director_din,
        'resigning_director_designation'  => $request->resigning_director_designation,
        'resignation_date'                => $request->resignation_date,
        'director_name'                   => $request->director_name,
        'designation'                     => $request->designation,
        'din'                             => $request->din,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResignationDate'] = $data['resignation_date'] ? date('d M Y', strtotime($data['resignation_date'])) : null;

    $html = view('doc.boardResolutionDirectorResignation', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Resignation-of-Director.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller Methods for Board Resolution to Authorize Mortgage and Creation of Charge

public function boardResolutionMortgageCharge(){
    return view('tools.boardResolutionMortgageCharge');
}

public function boardResolutionMortgageChargeDownloadDoc(Request $request){

    $data = [
        'company_name'      => $request->company_name,
        'cin'               => $request->cin,
        'email'             => $request->email,
        'registered_office' => $request->registered_office,
        'meeting_date'      => $request->meeting_date,
        'meeting_time'      => $request->meeting_time,
        'director_name'     => $request->director_name,
        'designation'       => $request->designation,
        'din'               => $request->din,
        'place'             => $request->place,
        'resolution_date'   => $request->resolution_date,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedResolutionDate'] = $data['resolution_date'] ? date('d M Y', strtotime($data['resolution_date'])) : null;

    $html = view('doc.boardResolutionMortgageCharge', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Mortgage-Creation-of-Charge.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller Methods for Board Resolution for Issue and Allotment of Preference Shares on Private Placement Basis

public function boardResolutionPreferenceShares(){
    return view('tools.boardResolutionPreferenceShares');
}

public function boardResolutionPreferenceSharesDownloadDoc(Request $request){

    $allottees = [];
    $allotteeNames = $request->allottee_name ?? [];
    $allotteeShares = $request->allottee_shares ?? [];
    $allotteeAmounts = $request->allottee_amount ?? [];
    $allotteeDividends = $request->allottee_dividend ?? [];
    $allotteeTenures = $request->allottee_tenure ?? [];

    for ($i = 0; $i < count($allotteeNames); $i++) {
        $allottees[] = [
            'name' => $allotteeNames[$i] ?? '',
            'shares' => $allotteeShares[$i] ?? '',
            'amount' => $allotteeAmounts[$i] ?? '',
            'dividend' => $allotteeDividends[$i] ?? '',
            'tenure' => $allotteeTenures[$i] ?? '',
        ];
    }

    $data = [
        'company_name'        => $request->company_name,
        'cin'                 => $request->cin,
        'email'               => $request->email,
        'registered_office'   => $request->registered_office,
        'meeting_date'        => $request->meeting_date,
        'meeting_time'        => $request->meeting_time,
        'share_number'        => $request->share_number,
        'share_number_words'  => $request->share_number_words,
        'face_value'          => $request->face_value,
        'dividend_rate'       => $request->dividend_rate,
        'tenure'              => $request->tenure,
        'share_type'          => $request->share_type,
        'allottees'           => $allottees,
        'director_name'       => $request->director_name,
        'designation'         => $request->designation,
        'din'                 => $request->din,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.boardResolutionPreferenceShares', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Preference-Shares-Private-Placement.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Controller Methods for Board Resolution for Change in Registered Office of a Company

public function boardResolutionRegisteredOfficeChange(){
    return view('tools.boardResolutionRegisteredOfficeChange');
}

public function boardResolutionRegisteredOfficeChangeDownloadDoc(Request $request){

    $data = [
        'company_name'      => $request->company_name,
        'cin'               => $request->cin,
        'email'             => $request->email,
        'meeting_date'      => $request->meeting_date,
        'meeting_time'      => $request->meeting_time,
        'old_address'       => $request->old_address,
        'new_address'       => $request->new_address,
        'effective_date'    => $request->effective_date,
        'director_name'     => $request->director_name,
        'designation'       => $request->designation,
        'din'               => $request->din,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;
    $data['formattedEffectiveDate'] = $data['effective_date'] ? date('d M Y', strtotime($data['effective_date'])) : null;

    $html = view('doc.boardResolutionRegisteredOfficeChange', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Change-Registered-Office.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller Methods for Form-9: Consent to Act as Designated Partner

public function form9DesignatedPartner(){
    return view('tools.form9DesignatedPartner');
}

public function form9DesignatedPartnerDownloadDoc(Request $request){

    $data = [
        'llp_name'            => $request->llp_name,
        'llp_status'          => $request->llp_status,
        'llpin'               => $request->llpin,
        'registered_office'   => $request->registered_office,
        'dpin'                => $request->dpin,
        'full_name'           => $request->full_name,
        'relation_type'       => $request->relation_type,
        'relation_name'       => $request->relation_name,
        'residential_address' => $request->residential_address,
        'email'               => $request->email,
        'mobile'              => $request->mobile,
        'dob'                 => $request->dob,
        'pan'                 => $request->pan,
        'occupation'          => $request->occupation,
        'nationality'         => $request->nationality,
        'no_of_companies'     => $request->no_of_companies,
        'membership_no'       => $request->membership_no ?? 'NIL',
        'place'               => $request->place,
        'consent_date'        => $request->consent_date,
    ];

    $data['formattedDOB'] = $data['dob'] ? date('d M Y', strtotime($data['dob'])) : null;
    $data['formattedConsentDate'] = $data['consent_date'] ? date('d M Y', strtotime($data['consent_date'])) : null;

    $html = view('doc.form9DesignatedPartner', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Form-9-Consent-Designated-Partner.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// Controller Methods for Indemnity Bond by Director (Form STK-3)

public function formSTK3IndemnityBond(){
    return view('tools.formSTK3IndemnityBond');
}

public function formSTK3IndemnityBondDownloadDoc(Request $request){

    $data = [
        'roc_office'          => $request->roc_office,
        'company_name'        => $request->company_name,
        'cin'                 => $request->cin,
        'incorporation_date'  => $request->incorporation_date,
        'registered_office'   => $request->registered_office,
        'director_name'       => $request->director_name,
        'relation_type'       => $request->relation_type,
        'relation_name'       => $request->relation_name,
        'din'                 => $request->din,
        'company_status'      => $request->company_status,
        'director_address'    => $request->director_address,
        'witness1_name'       => $request->witness1_name,
        'witness1_father'     => $request->witness1_father,
        'witness1_address'    => $request->witness1_address,
        'witness1_city'       => $request->witness1_city,
        'witness1_occupation' => $request->witness1_occupation,
        'witness2_name'       => $request->witness2_name,
        'witness2_father'     => $request->witness2_father,
        'witness2_address'    => $request->witness2_address,
        'witness2_city'       => $request->witness2_city,
        'witness2_occupation' => $request->witness2_occupation,
        'bond_date'           => $request->bond_date,
    ];

    $data['formattedIncorporationDate'] = $data['incorporation_date'] ? date('d M Y', strtotime($data['incorporation_date'])) : null;
    $data['formattedBondDate'] = $data['bond_date'] ? date('d M Y', strtotime($data['bond_date'])) : null;

    $html = view('doc.formSTK3IndemnityBond', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Form-STK3-Indemnity-Bond-Director.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// Controller Methods for Indemnity Bond for Closure of LLP

public function indemnityBondLLPClosure(){
    return view('tools.indemnityBondLLPClosure');
}

public function indemnityBondLLPClosureDownloadDoc(Request $request){

    $data = [
        'roc_office'          => $request->roc_office,
        'llp_name'            => $request->llp_name,
        'llpin'               => $request->llpin,
        'incorporation_date'  => $request->incorporation_date,
        'registered_office'   => $request->registered_office,
        'affidavit_date'      => $request->affidavit_date,
        'inoperative_date'    => $request->inoperative_date,
        'dp1_name'            => $request->dp1_name,
        'dp1_relation_type'   => $request->dp1_relation_type,
        'dp1_relation_name'   => $request->dp1_relation_name,
        'dp1_dpin'            => $request->dp1_dpin,
        'dp1_address'         => $request->dp1_address,
        'dp2_name'            => $request->dp2_name,
        'dp2_relation_type'   => $request->dp2_relation_type,
        'dp2_relation_name'   => $request->dp2_relation_name,
        'dp2_dpin'            => $request->dp2_dpin,
        'dp2_address'         => $request->dp2_address,
        'witness1_name'       => $request->witness1_name,
        'witness1_father'     => $request->witness1_father,
        'witness1_address'    => $request->witness1_address,
        'witness1_occupation' => $request->witness1_occupation,
        'witness2_name'       => $request->witness2_name,
        'witness2_father'     => $request->witness2_father,
        'witness2_address'    => $request->witness2_address,
        'witness2_occupation' => $request->witness2_occupation,
        'place'               => $request->place,
        'bond_date'           => $request->bond_date,
    ];

    $data['formattedIncorporationDate'] = $data['incorporation_date'] ? date('d M Y', strtotime($data['incorporation_date'])) : null;
    $data['formattedAffidavitDate'] = $data['affidavit_date'] ? date('d M Y', strtotime($data['affidavit_date'])) : null;
    $data['formattedInoperativeDate'] = $data['inoperative_date'] ? date('d M Y', strtotime($data['inoperative_date'])) : null;
    $data['formattedBondDate'] = $data['bond_date'] ? date('d M Y', strtotime($data['bond_date'])) : null;

    $html = view('doc.indemnityBondLLPClosure', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Indemnity-Bond-Closure-LLP.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller Methods for Board Resolution for Increase in Authorised Share Capital

public function boardResolutionIncreaseAuthorisedCapital(){
    
    return view('tools.boardResolutionIncreaseAuthorisedCapital');
}

public function boardResolutionIncreaseAuthorisedCapitalDownloadDoc(Request $request){

    $data = [
        'company_name'              => $request->company_name,
        'cin'                       => $request->cin,
        'email'                     => $request->email,
        'registered_office'         => $request->registered_office,
        'meeting_date'              => $request->meeting_date,
        'meeting_time'              => $request->meeting_time,
        'existing_capital_amount'   => $request->existing_capital_amount,
        'existing_capital_words'    => $request->existing_capital_words,
        'existing_shares_number'    => $request->existing_shares_number,
        'existing_shares_words'     => $request->existing_shares_words,
        'face_value'                => $request->face_value,
        'proposed_capital_amount'   => $request->proposed_capital_amount,
        'proposed_capital_words'    => $request->proposed_capital_words,
        'proposed_shares_number'    => $request->proposed_shares_number,
        'proposed_shares_words'     => $request->proposed_shares_words,
        'additional_shares_number'  => $request->additional_shares_number,
        'additional_shares_words'   => $request->additional_shares_words,
        'director_name'             => $request->director_name,
        'designation'               => $request->designation,
        'din'                       => $request->din,
    ];

    $data['formattedMeetingDate'] = $data['meeting_date'] ? date('d M Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.boardResolutionIncreaseAuthorisedCapital', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-Increase-Authorised-Share-Capital.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
   
// ===================================
//start new document number 61

public function boardResolutionForBooksOfAccounts()
{
    return view('tools.boardResolutionForBooksOfAccounts');
}

public function boardResolutionForBooksOfAccountsDownloadDoc(Request $request)
{
    $data = [
        'company_name'        => $request->company_name,
        'cin'                 => $request->cin,
        'registered_office'   => $request->registered_office,
        'company_email'       => $request->company_email,
        'meeting_date'        => $request->meeting_date,
        'meeting_time'        => $request->meeting_time,
        'meeting_venue'       => $request->meeting_venue,
        'new_books_address'   => $request->new_books_address,
        'effective_date'      => $request->effective_date,
        'place'               => $request->place,
        'authorized_director' => $request->authorized_director,
        'designation'         => $request->designation,
        'din'                 => $request->din,
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? 
        date('d.m.Y', strtotime($data['meeting_date'])) : '';
    
    $data['formatted_effective_date'] = $data['effective_date'] ? 
        date('d M Y', strtotime($data['effective_date'])) : '';
    
    $data['formatted_footer_date'] = $data['effective_date'] ? 
        date('d M Y', strtotime($data['effective_date'])) : '';

    $html = view('doc.boardResolutionForBooksOfAccounts', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Change-of-Place-of-Books-of-Accounts.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


public function egmResolutionForOpcConversion()
{
    return view('tools.egmResolutionForOpcConversion');
}

public function egmResolutionForOpcConversionDownloadDoc(Request $request)
{
    $data = [
        'company_name'             => $request->company_name,
        'cin'                      => $request->cin,
        'registered_office'        => $request->registered_office,
        'company_email'            => $request->company_email,
        'meeting_date'             => $request->meeting_date,
        'meeting_time'             => $request->meeting_time,
        'meeting_venue'            => $request->meeting_venue,
        'existing_opc_name'        => $request->existing_opc_name,
        'proposed_private_name'    => $request->proposed_private_name,
        'place'                    => $request->place,
        'authorized_director'      => $request->authorized_director,
        'designation'              => $request->designation,
        'din'                      => $request->din,
        'conversion_reason'        => $request->conversion_reason,
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? 
        date('d.m.Y', strtotime($data['meeting_date'])) : '';
    
    $data['formatted_footer_date'] = $data['meeting_date'] ? 
        date('d.m.Y', strtotime($data['meeting_date'])) : '';

    // Set conversion reason text
    $data['conversion_reason_text'] = ($data['conversion_reason'] == 'mandatory') 
        ? ' (Mandatory Conversion - Exceeded prescribed thresholds)' 
        : ' (Voluntary Conversion)';

    $html = view('doc.egmResolutionForOpcConversion', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'EGM-Resolution-for-Conversion-of-OPC-into-Private-Limited-Company.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


public function boardResolutionForIndependentDirector()
{
    return view('tools.boardResolutionForIndependentDirector');
}

public function boardResolutionForIndependentDirectorDownloadDoc(Request $request)
{
    // Calculate end date
    $commencementDate = $request->commencement_date;
    $termYears = $request->term_duration;
    
    $endDate = '';
    if ($commencementDate && $termYears) {
        $endDateObj = new DateTime($commencementDate);
        $endDateObj->modify("+{$termYears} years");
        $endDateObj->modify("-1 day"); // One day before anniversary
        $endDate = $endDateObj->format('d F Y');
    }

    $data = [
        'company_name'                 => $request->company_name,
        'cin'                          => $request->cin,
        'registered_office'            => $request->registered_office,
        'company_email'                => $request->company_email,
        'meeting_date'                 => $request->meeting_date,
        'meeting_time'                 => $request->meeting_time,
        'meeting_venue'                => $request->meeting_venue,
        'director_title'               => $request->director_title,
        'independent_director_name'    => $request->independent_director_name,
        'director_din'                 => $request->director_din,
        'professional_qualifications'  => $request->professional_qualifications,
        'area_of_expertise'            => $request->area_of_expertise,
        'commencement_date'            => $request->commencement_date,
        'term_duration'                => $request->term_duration,
        'section_160_notice'           => $request->section_160_notice,
        'place'                        => $request->place,
        'authorized_director'          => $request->authorized_director,
        'designation'                  => $request->designation,
        'authorized_din'               => $request->authorized_din,
        'end_date'                     => $endDate,
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? 
        date('d.m.Y', strtotime($data['meeting_date'])) : '';
    
    $data['formatted_footer_date'] = $data['meeting_date'] ? 
        date('d.m.Y', strtotime($data['meeting_date'])) : '';
    
    $data['formatted_commencement_date'] = $data['commencement_date'] ? 
        date('d F Y', strtotime($data['commencement_date'])) : '';

    // Set term text
    $termText = '';
    if ($data['term_duration'] == '5') $termText = 'Five (5) consecutive years';
    elseif ($data['term_duration'] == '3') $termText = 'Three (3) consecutive years';
    elseif ($data['term_duration'] == '1') $termText = 'One (1) consecutive year';
    $data['term_text'] = $termText;

    // Set full director name
    $data['full_director_name'] = $data['director_title'] . ' ' . $data['independent_director_name'];

    $html = view('doc.boardResolutionForIndependentDirector', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Appointment-of-Independent-Director.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


public function specialResolutionForStrikeOff()
{
    return view('tools.specialResolutionForStrikeOff');
}

public function specialResolutionForStrikeOffDownloadDoc(Request $request)
{
    $data = [
        'company_name'           => $request->company_name,
        'cin'                    => $request->cin,
        'registered_office'      => $request->registered_office,
        'meeting_date'           => $request->meeting_date,
        'meeting_time'           => $request->meeting_time,
        'meeting_venue'          => $request->meeting_venue,
        'director_title'         => $request->director_title,
        'authorized_director'    => $request->authorized_director,
        'designation'            => $request->designation,
        'din'                    => $request->din,
        'place'                  => $request->place,
        'resolution_date'        => $request->resolution_date,
        'strike_off_reason'      => $request->strike_off_reason,
        'last_financial_year'    => $request->last_financial_year,
        'compliance_checked'     => true, // All checkboxes were validated in JS
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? 
        date('d.m.Y', strtotime($data['meeting_date'])) : '';
    
    $data['formatted_resolution_date'] = $data['resolution_date'] ? 
        date('d.m.Y', strtotime($data['resolution_date'])) : '';

    // Set strike off reason text
    $reasonText = '';
    switch ($data['strike_off_reason']) {
        case 'not_carried_business':
            if ($data['last_financial_year']) {
                $reasonText = "and considering that the Company has not been carrying on any business or operations since {$data['last_financial_year']} (for a period of more than two immediately preceding financial years)";
            } else {
                $reasonText = "and considering that the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years";
            }
            break;
        case 'not_commenced_business':
            $reasonText = "and considering that the Company has not commenced business within one year of incorporation";
            break;
        case 'defunct_inoperative':
            $reasonText = "and considering that the Company has become defunct/inoperative";
            break;
        default:
            $reasonText = "and considering that the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years";
    }
    $data['strike_off_reason_text'] = $reasonText;

    // Set full director name
    $data['full_director_name'] = $data['director_title'] . ' ' . $data['authorized_director'];

    $html = view('doc.specialResolutionForStrikeOff', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Special-Resolution-for-Strike-Off-of-Company.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

public function egmResolutionForNameChange()
{
    return view('tools.egmResolutionForNameChange');
}

public function egmResolutionForNameChangeDownloadDoc(Request $request)
{
    $data = [
        'company_name'        => $request->company_name,
        'cin'                 => $request->cin,
        'registered_office'   => $request->registered_office,
        'meeting_date'        => $request->meeting_date,
        'meeting_time'        => $request->meeting_time,
        'meeting_venue'       => $request->meeting_venue,
        'existing_name'       => $request->existing_name,
        'proposed_new_name'   => $request->proposed_new_name,
        'change_reason'       => $request->change_reason,
        'authorized_director' => $request->authorized_director,
        'designation'         => $request->designation,
        'din'                 => $request->din,
        'place'               => $request->place,
        'resolution_date'     => $request->resolution_date,
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? 
        date('d.m.Y', strtotime($data['meeting_date'])) : '';
    
    $data['formatted_resolution_date'] = $data['resolution_date'] ? 
        date('d.m.Y', strtotime($data['resolution_date'])) : '';

    // Set reason text
    $reasonText = '';
    switch ($data['change_reason']) {
        case 'rebranding':
            $reasonText = 'Rebranding - Change to reflect new brand identity';
            break;
        case 'business_diversification':
            $reasonText = 'Business Diversification - Change due to expansion into new business areas';
            break;
        case 'merger_acquisition':
            $reasonText = 'Merger/Acquisition - Change following merger or acquisition';
            break;
        case 'other':
            $reasonText = 'Other - Any other valid reason for name change';
            break;
        default:
            $reasonText = 'Rebranding - Change to reflect new brand identity';
    }
    $data['change_reason_text'] = $reasonText;

    $html = view('doc.egmResolutionForNameChange', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'EGM-Resolution-for-Change-of-Name-of-Company.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

public function egmNoticeForStrikeOff()
{
    return view('tools.egmNoticeForStrikeOff');
}

public function egmNoticeForStrikeOffDownloadDoc(Request $request)
{
    $data = [
        'company_name'              => $request->company_name,
        'cin'                       => $request->cin,
        'registered_office'         => $request->registered_office,
        'meeting_date'              => $request->meeting_date,
        'meeting_day'               => $request->meeting_day,
        'meeting_time'              => $request->meeting_time,
        'meeting_venue'             => $request->meeting_venue,
        'notice_date'               => $request->notice_date,
        'strike_off_reason'         => $request->strike_off_reason,
        'last_financial_year'       => $request->last_financial_year,
        'additional_explanation'    => $request->additional_explanation,
        'authorized_director'       => $request->authorized_director,
        'designation'               => $request->designation,
        'din'                       => $request->din,
        'place'                     => $request->place,
        'compliance_checked'        => true, // Checkboxes validated
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? 
        date('d F Y', strtotime($data['meeting_date'])) : '';
    
    $data['formatted_notice_date'] = $data['notice_date'] ? 
        date('d F Y', strtotime($data['notice_date'])) : '';

    // Format time
    if ($data['meeting_time']) {
        $timeParts = explode(':', $data['meeting_time']);
        $hours = (int)$timeParts[0];
        $minutes = $timeParts[1];
        $ampm = $hours >= 12 ? 'PM' : 'AM';
        $formattedHours = $hours % 12 ?: 12;
        $data['formatted_meeting_time'] = sprintf('%d:%02d %s', $formattedHours, $minutes, $ampm);
    } else {
        $data['formatted_meeting_time'] = '';
    }

    // Set strike off reason text
    $reasonText = '';
    $explanatoryText = '';
    
    switch ($data['strike_off_reason']) {
        case 'not_carried_business':
            if ($data['last_financial_year']) {
                $reasonText = "the Company has not been carrying on any business or operations since {$data['last_financial_year']} (for a period of more than two immediately preceding financial years)";
                $explanatoryText = "The Company has not been carrying on any business operations since {$data['last_financial_year']}. Even in the earlier years, the Company could not achieve the desired business results. Further, the Company continues to incur annual compliance costs without any corresponding business activity.";
            } else {
                $reasonText = "the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years";
                $explanatoryText = "The Company has not been carrying on any business operations for more than two immediately preceding financial years. Even in the earlier years, the Company could not achieve the desired business results. Further, the Company continues to incur annual compliance costs without any corresponding business activity.";
            }
            break;
        case 'not_commenced_business':
            $reasonText = "the Company has not commenced business within one year of incorporation";
            $explanatoryText = "The Company has not commenced business operations within one year of its incorporation. Further, the Company continues to incur annual compliance costs without any corresponding business activity.";
            break;
        case 'defunct_inoperative':
            $reasonText = "the Company has become defunct/inoperative";
            $explanatoryText = "The Company has become defunct/inoperative and has not been carrying on any business operations. Further, the Company continues to incur annual compliance costs without any corresponding business activity.";
            break;
        default:
            $reasonText = "the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years";
            $explanatoryText = "The Company has not been carrying on any business operations for more than two immediately preceding financial years. Even in the earlier years, the Company could not achieve the desired business results. Further, the Company continues to incur annual compliance costs without any corresponding business activity.";
    }
    
    $data['strike_off_reason_text'] = $reasonText;
    $data['explanatory_text'] = $explanatoryText;

    $html = view('doc.egmNoticeForStrikeOff', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Notice-of-EGM-for-Strike-Off-of-Company.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


public function boardResolutionForSharesNonCash()
{
    return view('tools.boardResolutionForSharesNonCash');
}

public function boardResolutionForSharesNonCashDownloadDoc(Request $request)
{
    // Helper functions for number to words conversion
    function numberToWords($num) {
        if ($num == 0) return 'Zero';
        
        $ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 
                'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
        $tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
        
        if ($num < 20) {
            return $ones[$num];
        } elseif ($num < 100) {
            return $tens[floor($num / 10)] . ($num % 10 != 0 ? ' ' . $ones[$num % 10] : '');
        } elseif ($num < 1000) {
            return $ones[floor($num / 100)] . ' Hundred' . ($num % 100 != 0 ? ' ' . numberToWords($num % 100) : '');
        } elseif ($num < 100000) {
            return numberToWords(floor($num / 1000)) . ' Thousand' . ($num % 1000 != 0 ? ' ' . numberToWords($num % 1000) : '');
        } elseif ($num < 10000000) {
            return numberToWords(floor($num / 100000)) . ' Lakh' . ($num % 100000 != 0 ? ' ' . numberToWords($num % 100000) : '');
        } else {
            return numberToWords(floor($num / 10000000)) . ' Crore' . ($num % 10000000 != 0 ? ' ' . numberToWords($num % 10000000) : '');
        }
    }
    
    function amountToWords($amount) {
        if ($amount == 0) return 'Zero Rupees Only';
        
        $rupees = floor($amount);
        $paise = round(($amount - $rupees) * 100);
        
        $words = numberToWords($rupees) . ' Rupees';
        
        if ($paise > 0) {
            $words .= ' and ' . numberToWords($paise) . ' Paise';
        }
        
        return $words . ' Only';
    }

    // Get data from request with null safety
    $data = [
        'company_name'           => $request->company_name ?? '',
        'cin'                    => $request->cin ?? '',
        'registered_office'      => $request->registered_office ?? '',
        'meeting_date'           => $request->meeting_date ?? '',
        'meeting_time'           => $request->meeting_time ?? '11:00',
        'meeting_venue'          => $request->meeting_venue ?? 'Registered Office of the Company',
        'transferor_name'        => $request->transferor_name ?? '',
        'business_name'          => $request->business_name ?? '',
        'business_nature'        => $request->business_nature ?? '',
        'allottee_name'          => $request->allottee_name ?? '',
        'pan'                    => $request->pan ?? '',
        'allottee_address'       => $request->allottee_address ?? '',
        'share_quantity'         => $request->share_quantity ? intval($request->share_quantity) : 0,
        'face_value'             => $request->face_value ? intval($request->face_value) : 0,
        'total_value'            => $request->total_value ? intval($request->total_value) : 0,
        'valuer_name'            => $request->valuer_name ?? '',
        'consideration_type'     => $request->consideration_type ?? 'business_acquisition',
        'authorized_director'    => $request->authorized_director ?? '',
        'designation'            => $request->designation ?? '',
        'din'                    => $request->din ?? '',
        'place'                  => $request->place ?? '',
        'resolution_date'        => $request->resolution_date ?? date('Y-m-d'),
    ];

    // Calculate total value if not provided
    if ($data['total_value'] == 0 && $data['share_quantity'] > 0 && $data['face_value'] > 0) {
        $data['total_value'] = $data['share_quantity'] * $data['face_value'];
    }

    // Format dates safely
    $data['formatted_meeting_date'] = !empty($data['meeting_date']) ? 
        date('d.m.Y', strtotime($data['meeting_date'])) : '__.__.______';
    
    $data['formatted_resolution_date'] = !empty($data['resolution_date']) ? 
        date('d.m.Y', strtotime($data['resolution_date'])) : '__.__.______';

    // Convert numbers to words safely
    try {
        $data['share_quantity_words'] = numberToWords($data['share_quantity']);
    } catch (\Exception $e) {
        $data['share_quantity_words'] = 'Zero';
    }
    
    try {
        $data['total_value_words'] = amountToWords($data['total_value']);
    } catch (\Exception $e) {
        $data['total_value_words'] = 'Zero Rupees Only';
    }

    // Format currency values with comma separators
    $data['formatted_share_quantity'] = $data['share_quantity'] > 0 ? 
        number_format($data['share_quantity']) : '________________';
    
    $data['formatted_face_value'] = $data['face_value'] > 0 ? 
        number_format($data['face_value']) : '________________';
    
    $data['formatted_total_value'] = $data['total_value'] > 0 ? 
        number_format($data['total_value']) : '________________';

    // Set consideration type text
    $considerationText = '';
    switch ($data['consideration_type']) {
        case 'business_acquisition':
            $considerationText = 'acquisition of proprietorship/partnership business';
            break;
        case 'asset_acquisition':
            $considerationText = 'acquisition of specific assets/property';
            break;
        case 'debt_settlement':
            $considerationText = 'settlement of outstanding debts/liabilities';
            break;
        case 'other':
            $considerationText = 'other non-cash consideration';
            break;
        default:
            $considerationText = 'acquisition of proprietorship/partnership business';
    }
    $data['consideration_type_text'] = $considerationText;

    // Generate HTML
    try {
        $html = view('doc.boardResolutionForSharesNonCash', $data)->render();
    } catch (\Exception $e) {
        // Fallback if view fails
        $html = '<div>Error generating document: ' . $e->getMessage() . '</div>';
    }

    // Convert to document
    try {
        $filePath = $this->docService->convert(
            $html,
            'Board-Resolution-for-Issuance-of-Shares-for-Non-Cash-Consideration.docx'
        );

        return response()
            ->download($filePath)
            ->deleteFileAfterSend(true);
    } catch (\Exception $e) {
        return back()->with('error', 'Failed to generate document: ' . $e->getMessage());
    }
}


public function boardResolutionForLoan2(){
    return view('tools.boardResolutionForLoan');
}

public function boardResolutionForLoanDownloadDoc2(Request $request){
    $data = [
        'company_name'         => $request->business_name??'',
        'cin'                  => $request->cin??'',
        'registered_office'    => $request->register_address??'',
        'meeting_date'         => $request->meeting_date??'',
        'meeting_time'         => $request->meeting_time??'',
        'loan_amount'          => $request->loan_amount??'',
        'bank_name'            => $request->bank_name??'',
        'bank_branch'          => $request->bank_branch??'',
        'branch_address'       => $request->branch_address??'',
        'loan_purpose'         => $request->loan_purpose??'',
        'sanction_date'        => $request->sanction_date??'',
        'repayment_period'     => $request->repayment_period??'',
        'interest_rate'        => $request->interest_rate??'',
        'authorized_director'  => $request->authorized_person_name??'',
        'din'                  => $request->din??'',
        'designation'          => $request->designation??'',
        'mortgage_property'    => $request->mortgage_property??'',
        'property_area'        => $request->property_area??'',
        'state'                => $request->state??'',
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d.m.Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_sanction_date'] = $data['sanction_date'] ? date('d.m.Y', strtotime($data['sanction_date'])) : null;
    $data['current_date'] = date('d.m.Y');

    $html = view('doc.boardResolutionForLoan', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Loan-from-Bank.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}


// Controller code
public function boardResolutionForChangeOfName(){
    return view('tools.boardResolutionForChangeOfName');
}

public function boardResolutionForChangeOfNameDownloadDoc(Request $request){
    $data = [
        // Company Details
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        
        // Meeting Details
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        
        // Name Details
        'existing_name' => $request->existing_name,
        'proposed_name' => $request->proposed_name,
        
        // Signatory Details
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'signatory_din' => $request->signatory_din,
        'place' => $request->place,
    ];
    
    // Format the meeting date
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    
    $html = view('doc.boardResolutionForChangeOfName', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Change-of-Name-of-Company.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// Controller code
public function boardResolutionForRelatedPartyTransactions(){
    return view('tools.boardResolutionForRelatedPartyTransactions');
}

public function boardResolutionForRelatedPartyTransactionsDownloadDoc(Request $request){
    $data = [
        // Company Details
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        
        // Meeting Details
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        
        // Related Party Details
        'related_party_name' => $request->related_party_name,
        'nature_of_relationship' => $request->nature_of_relationship,
        'nature_of_transaction' => $request->nature_of_transaction,
        'transaction_value_number' => $request->transaction_value_number,
        'transaction_value_words' => $request->transaction_value_words,
        'duration' => $request->duration,
        
        // Authorised Person
        'authorized_name' => $request->authorized_name,
        'authorized_designation' => $request->authorized_designation,
        
        // Interested Directors (optional)
        'interested_directors' => $request->interested_directors,
        
        // Signatory Details
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'signatory_din' => $request->signatory_din,
        'place' => $request->place,
    ];
    
    // Format the meeting date
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    
    $html = view('doc.boardResolutionForRelatedPartyTransactions', $data)->render();
    
    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Approval-of-Related-Party-Transactions.docx'
    );
    
    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// Controller code
public function auditorResignationLetter(){
    return view('tools.auditorResignationLetter');
}

public function auditorResignationLetterDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'letter_date' => $request->letter_date,
        'resignation_date' => $request->resignation_date,
        'reason' => $request->reason,
        'firm_name' => $request->firm_name,
        'frn' => $request->frn,
        'partner_name' => $request->partner_name,
        'membership_no' => $request->membership_no,
        'udin' => $request->udin,
        'contact' => $request->contact,
        'email' => $request->email,
        'place' => $request->place,
    ];

    // Format dates
    $data['formatted_letter_date'] = $data['letter_date'] ? date('d F Y', strtotime($data['letter_date'])) : null;
    $data['formatted_resignation_date'] = $data['resignation_date'] ? date('d F Y', strtotime($data['resignation_date'])) : null;

    $html = view('doc.auditorResignationLetter', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Resignation-Letter-of-Statutory-Auditor.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// Controller code
public function iecGuide(){
    return view('tools.iecGuide');
}

public function iecGuideDownloadDoc(Request $request){
    $data = [
        'holder_name' => $request->holder_name,
        'iec_number' => $request->iec_number,
        'pan' => $request->pan,
        'gst' => $request->gst,
        'address' => $request->address,
        'bank_account' => $request->bank_account,
        'bank_name' => $request->bank_name,
        'signatory_name' => $request->signatory_name,
        'place' => $request->place,
        'issue_date' => $request->issue_date,
    ];

    // Format dates
    $data['formatted_issue_date'] = $data['issue_date'] ? date('d F Y', strtotime($data['issue_date'])) : null;

    $html = view('doc.iecGuide', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'IEC-Certificate-Download-and-Print-Guide.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller code
public function makeInIndiaCertification(){
    return view('tools.makeInIndiaCertification');
}

public function makeInIndiaCertificationDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->company_name,
        'bid_no' => $request->bid_no,
        'local_content_percent' => $request->local_content_percent,
        'place' => $request->place,
        'signatory_name' => $request->signatory_name,
        'designation' => $request->designation,
        'seal' => $request->seal,
        'cert_date' => $request->cert_date,
        // Table rows (up to 3)
        'location1' => $request->location1,
        'nature1' => $request->nature1,
        'percent1' => $request->percent1,
        'location2' => $request->location2,
        'nature2' => $request->nature2,
        'percent2' => $request->percent2,
        'location3' => $request->location3,
        'nature3' => $request->nature3,
        'percent3' => $request->percent3,
    ];

    // Format date
    $data['formatted_cert_date'] = $data['cert_date'] ? date('d F Y', strtotime($data['cert_date'])) : null;

    $html = view('doc.makeInIndiaCertification', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Self-Certification-under-Make-in-India.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller code
public function rentAgreement(){
    return view('tools.rentAgreement');
}

public function rentAgreementDownloadDoc(Request $request){
    $data = [
        'lessor_name' => $request->lessor_name,
        'lessor_address' => $request->lessor_address,
        'company_name' => $request->company_name,
        'director_name' => $request->director_name,
        'premises_address' => $request->premises_address,
        'agreement_date' => $request->agreement_date,
        'commencement_date' => $request->commencement_date,
        'expiry_date' => $request->expiry_date,
        'term_duration' => $request->term_duration,
        'rent_amount' => $request->rent_amount,
        'rent_words' => $request->rent_words,
        'deposit_amount' => $request->deposit_amount,
        'deposit_words' => $request->deposit_words,
        'payable_day' => $request->payable_day,
        'notice_period' => $request->notice_period,
        'jurisdiction' => $request->jurisdiction,
        'lessor_signatory' => $request->lessor_signatory,
        'company_signatory' => $request->company_signatory,
        'signatory_designation' => $request->signatory_designation,
        'place' => $request->place,
        'witness1_name' => $request->witness1_name,
        'witness1_address' => $request->witness1_address,
        'witness2_name' => $request->witness2_name,
        'witness2_address' => $request->witness2_address,
    ];

    // Format dates for display
    $data['formatted_agreement_date'] = $data['agreement_date'] ? date('d F Y', strtotime($data['agreement_date'])) : null;
    $data['formatted_commencement_date'] = $data['commencement_date'] ? date('d F Y', strtotime($data['commencement_date'])) : null;
    $data['formatted_expiry_date'] = $data['expiry_date'] ? date('d F Y', strtotime($data['expiry_date'])) : null;

    // Extract day, month, year components for agreement date
    if ($data['agreement_date']) {
        $dateObj = new DateTime($data['agreement_date']);
        $data['agreement_day'] = $dateObj->format('j');
        $data['agreement_month'] = $dateObj->format('F');
        $data['agreement_year'] = $dateObj->format('Y');
    } else {
        $data['agreement_day'] = '_______';
        $data['agreement_month'] = '_______';
        $data['agreement_year'] = '_______';
    }

    $html = view('doc.rentAgreement', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Rent-Agreement-for-Private-Limited-Company.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller code
public function directorResignationLetter(){
    return view('tools.directorResignationLetter');
}

public function directorResignationLetterDownloadDoc(Request $request){
    $data = [
        'company_name' => $request->company_name,
        'registered_office' => $request->registered_office,
        'director_name' => $request->director_name,
        'din' => $request->din,
        'effective_date' => $request->effective_date,
        'letter_date' => $request->letter_date,
        'reason' => $request->reason,
        'place' => $request->place,
    ];

    // Format dates
    $data['formatted_effective_date'] = $data['effective_date'] ? date('d F Y', strtotime($data['effective_date'])) : null;
    $data['formatted_letter_date'] = $data['letter_date'] ? date('d F Y', strtotime($data['letter_date'])) : null;

    $html = view('doc.directorResignationLetter', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Company-Director-Resignation-Letter.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Controller code
public function ordinaryResolutionAuthorisedCapital(){
    return view('tools.ordinaryResolutionAuthorisedCapital');
}

public function ordinaryResolutionAuthorisedCapitalDownloadDoc(Request $request){
    $data = [
        // Company details
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        // Meeting details
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        // Existing capital
        'existing_capital_number' => $request->existing_capital_number,
        'existing_capital_words' => $request->existing_capital_words,
        'existing_shares' => $request->existing_shares,
        'existing_face_value' => $request->existing_face_value,
        // New capital
        'new_capital_number' => $request->new_capital_number,
        'new_capital_words' => $request->new_capital_words,
        'new_shares' => $request->new_shares,
        'new_face_value' => $request->new_face_value,
        // Additional shares
        'additional_shares' => $request->additional_shares,
        'additional_face_value' => $request->additional_face_value,
        // Signatory
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'signatory_din' => $request->signatory_din,
        'place' => $request->place,
    ];

    // Format meeting date
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.ordinaryResolutionAuthorisedCapital', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Ordinary-Resolution-for-Increase-in-Authorised-Share-Capital.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// Controller code
public function gstInvoice(){
    return view('tools.gstInvoice');
}

public function gstInvoiceDownloadDoc(Request $request){
    // Process items from the dynamic array
    $items = $request->input('items', []);
    $itemList = [];
    foreach ($items as $item) {
        if (!empty($item['desc'])) {
            $itemList[] = [
                'desc' => $item['desc'],
                'hsn' => $item['hsn'],
                'qty' => $item['qty'],
                'unit' => $item['unit'],
                'rate' => $item['rate'],
                'cgst_percent' => $item['cgst_percent'],
                'sgst_percent' => $item['sgst_percent'],
                'igst_percent' => $item['igst_percent'],
            ];
        }
    }

    $data = [
        // Supplier
        'supplier_name' => $request->supplier_name,
        'supplier_address' => $request->supplier_address,
        'supplier_state' => $request->supplier_state,
        'supplier_state_code' => $request->supplier_state_code,
        'supplier_gstin' => $request->supplier_gstin,
        'supplier_pan' => $request->supplier_pan,
        'supplier_contact' => $request->supplier_contact,
        'supplier_email' => $request->supplier_email,
        // Invoice
        'invoice_number' => $request->invoice_number,
        'invoice_date' => $request->invoice_date,
        'place_of_supply' => $request->place_of_supply,
        'supply_state_code' => $request->supply_state_code,
        'due_date' => $request->due_date,
        'reverse_charge' => $request->reverse_charge,
        // Recipient
        'recipient_name' => $request->recipient_name,
        'recipient_address' => $request->recipient_address,
        'recipient_state' => $request->recipient_state,
        'recipient_state_code' => $request->recipient_state_code,
        'recipient_gstin' => $request->recipient_gstin,
        // Items
        'items' => $itemList,
        // Bank
        'bank_name' => $request->bank_name,
        'account_number' => $request->account_number,
        'ifsc' => $request->ifsc,
        'branch' => $request->branch,
        // Terms
        'jurisdiction' => $request->jurisdiction,
        'signatory_name' => $request->signatory_name,
    ];

    // Format dates
    $data['formatted_invoice_date'] = $data['invoice_date'] ? date('d F Y', strtotime($data['invoice_date'])) : null;
    $data['formatted_due_date'] = $data['due_date'] ? date('d F Y', strtotime($data['due_date'])) : null;

    // Calculate totals
    $totalTaxable = 0;
    $totalCGST = 0;
    $totalSGST = 0;
    $totalIGST = 0;
    $grandTotal = 0;

    foreach ($data['items'] as &$item) {
        $taxable = $item['qty'] * $item['rate'];
        $cgst = $sgst = $igst = 0;
        if ($item['cgst_percent'] > 0 && $item['sgst_percent'] > 0) {
            $cgst = $taxable * $item['cgst_percent'] / 100;
            $sgst = $taxable * $item['sgst_percent'] / 100;
            $totalCGST += $cgst;
            $totalSGST += $sgst;
        } elseif ($item['igst_percent'] > 0) {
            $igst = $taxable * $item['igst_percent'] / 100;
            $totalIGST += $igst;
        }
        $item['taxable'] = $taxable;
        $item['cgst'] = $cgst;
        $item['sgst'] = $sgst;
        $item['igst'] = $igst;
        $item['total'] = $taxable + $cgst + $sgst + $igst;

        $totalTaxable += $taxable;
        $grandTotal += $item['total'];
    }

    $data['total_taxable'] = $totalTaxable;
    $data['total_cgst'] = $totalCGST;
    $data['total_sgst'] = $totalSGST;
    $data['total_igst'] = $totalIGST;
    $data['grand_total'] = $grandTotal;
    $data['amount_in_words'] = $this->numberToWords($grandTotal);

    $html = view('doc.gstInvoice', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'GST-Invoice.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

 public function llpAgreement()
    {
        return view('tools.llpAgreement');
    }

    public function llpAgreementDownloadDoc(Request $request)
    {
        // Helper to convert input to float (or null if empty)
        $toFloat = function ($value) {
            return $value !== null && $value !== '' ? (float) $value : 0.0;
        };

        // Partner 1
        $partner1 = [
            'name' => $request->partner1_name ?? '',
            'father' => $request->partner1_father ?? '',
            'age' => $request->partner1_age ?? '',
            'address' => $request->partner1_address ?? '',
            'pan' => $request->partner1_pan ?? '',
            'dpin' => $request->partner1_dpin ?? '',
            'capital' => $toFloat($request->partner1_capital),
            'profit_share' => $toFloat($request->partner1_profit_share),
        ];

        // Partner 2
        $partner2 = [
            'name' => $request->partner2_name ?? '',
            'father' => $request->partner2_father ?? '',
            'age' => $request->partner2_age ?? '',
            'address' => $request->partner2_address ?? '',
            'pan' => $request->partner2_pan ?? '',
            'dpin' => $request->partner2_dpin ?? '',
            'capital' => $toFloat($request->partner2_capital),
            'profit_share' => $toFloat($request->partner2_profit_share),
        ];

        // Partner 3 (optional)
        $partner3 = [];
        if ($request->partner3_name) {
            $partner3 = [
                'name' => $request->partner3_name,
                'father' => $request->partner3_father ?? '',
                'age' => $request->partner3_age ?? '',
                'address' => $request->partner3_address ?? '',
                'pan' => $request->partner3_pan ?? '',
                'dpin' => $request->partner3_dpin ?? '',
                'capital' => $toFloat($request->partner3_capital),
                'profit_share' => $toFloat($request->partner3_profit_share),
            ];
        }

        // Build partners array for iteration
        $partners = [$partner1, $partner2];
        if (!empty($partner3)) {
            $partners[] = $partner3;
        }

        // Calculate total capital
        $totalCapital = array_sum(array_column($partners, 'capital'));

        // Prepare data array for view
        $data = [
            // Agreement date
            'agreement_day' => $request->agreement_day,
            'agreement_month' => $request->agreement_month,
            'agreement_year' => $request->agreement_year,
            'place' => $request->place,

            // Partner 1
            'partner1_name' => $partner1['name'],
            'partner1_father' => $partner1['father'],
            'partner1_age' => $partner1['age'],
            'partner1_address' => $partner1['address'],
            'partner1_pan' => $partner1['pan'],
            'partner1_dpin' => $partner1['dpin'],
            'partner1_capital' => $partner1['capital'],
            'partner1_profit_share' => $partner1['profit_share'],

            // Partner 2
            'partner2_name' => $partner2['name'],
            'partner2_father' => $partner2['father'],
            'partner2_age' => $partner2['age'],
            'partner2_address' => $partner2['address'],
            'partner2_pan' => $partner2['pan'],
            'partner2_dpin' => $partner2['dpin'],
            'partner2_capital' => $partner2['capital'],
            'partner2_profit_share' => $partner2['profit_share'],

            // Partner 3 (optional)
            'partner3_name' => $partner3['name'] ?? null,
            'partner3_father' => $partner3['father'] ?? null,
            'partner3_age' => $partner3['age'] ?? null,
            'partner3_address' => $partner3['address'] ?? null,
            'partner3_pan' => $partner3['pan'] ?? null,
            'partner3_dpin' => $partner3['dpin'] ?? null,
            'partner3_capital' => $partner3['capital'] ?? 0,
            'partner3_profit_share' => $partner3['profit_share'] ?? 0,

            // LLP details
            'llp_name' => $request->llp_name,
            'llpin' => $request->llpin,
            'inc_date' => $request->inc_date,
            'reg_office' => $request->reg_office,
            'business_nature' => $request->business_nature,
            'commencement_date' => $request->commencement_date,
            'designated_partners' => $request->designated_partners,
            'notice_period' => $request->notice_period,

            // Witnesses
            'witness1_name' => $request->witness1_name,
            'witness1_address' => $request->witness1_address,
            'witness2_name' => $request->witness2_name,
            'witness2_address' => $request->witness2_address,

            // Computed
            'partners' => $partners,
            'total_capital' => $totalCapital,
        ];

        // Format dates
        $data['formatted_inc_date'] = $data['inc_date'] ? date('d F Y', strtotime($data['inc_date'])) : null;
        $data['formatted_commencement_date'] = $data['commencement_date'] ? date('d F Y', strtotime($data['commencement_date'])) : null;

        // Render the doc view
        $html = view('doc.llpAgreement', $data)->render();

        // Convert to DOCX
        $filePath = $this->docService->convert(
            $html,
            'Limited-Liability-Partnership-Agreement.docx'
        );

        return response()
            ->download($filePath)
            ->deleteFileAfterSend(true);
    }

  public function noticeEgmAuthorisedCapital()
    {
        return view('tools.noticeEgmAuthorisedCapital');
    }

    public function noticeEgmAuthorisedCapitalDownloadDoc(Request $request)
    {
        // Helper to convert string to float (or default to 0)
        $toFloat = function ($value) {
            return $value !== null && $value !== '' ? (float) $value : 0.0;
        };

        $data = [
            'company_name' => $request->company_name,
            'cin' => $request->cin,
            'registered_office' => $request->registered_office,
            'meeting_date' => $request->meeting_date,
            'meeting_time' => $request->meeting_time,
            'venue' => $request->venue,

            // Existing capital
            'existing_capital_number' => $request->existing_capital_number,
            'existing_capital_words' => $request->existing_capital_words,
            'existing_shares' => $request->existing_shares,
            'existing_face_value' => $request->existing_face_value,
            // optional word field for shares
            'existing_shares_words' => $request->existing_shares_words ?? $request->existing_shares,

            // Proposed capital
            'proposed_capital_number' => $request->proposed_capital_number,
            'proposed_capital_words' => $request->proposed_capital_words,
            'proposed_shares' => $request->proposed_shares,
            'proposed_face_value' => $request->proposed_face_value,
            'proposed_shares_words' => $request->proposed_shares_words ?? $request->proposed_shares,

            // Additional shares
            'additional_shares_number' => $request->additional_shares_number,
            'additional_shares_words' => $request->additional_shares_words,
            'additional_face_value' => $request->proposed_face_value, // same as proposed face value

            'reason' => $request->reason,

            'signatory_name' => $request->signatory_name,
            'signatory_designation' => $request->signatory_designation,
            'place' => $request->place,
            'notice_date' => $request->notice_date,
        ];

        // Format dates for display
        $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
        $data['formatted_notice_date'] = $data['notice_date'] ? date('d F Y', strtotime($data['notice_date'])) : null;

        $html = view('doc.noticeEgmAuthorisedCapital', $data)->render();

        $filePath = $this->docService->convert(
            $html,
            'Notice-of-EGM-for-Increase-in-Authorised-Share-Capital.docx'
        );

        return response()
            ->download($filePath)
            ->deleteFileAfterSend(true);
    }

    public function boardMeetingAgenda()
{
    return view('tools.boardMeetingAgenda');
}

public function boardMeetingAgendaDownloadDoc(Request $request)
{
    // Get agenda items as array (split by newline)
    $agendaText = $request->agenda_items;
    $agendaItems = [];
    if ($agendaText) {
        $lines = explode("\n", $agendaText);
        foreach ($lines as $line) {
            $trimmed = trim($line);
            if ($trimmed !== '') {
                $agendaItems[] = $trimmed;
            }
        }
    }

    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'venue' => $request->venue,
        'mode' => $request->mode,
        'agenda_items' => $agendaItems,
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'place' => $request->place,
        'agenda_date' => $request->agenda_date,
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_agenda_date'] = $data['agenda_date'] ? date('d F Y', strtotime($data['agenda_date'])) : null;

    $html = view('doc.boardMeetingAgenda', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Meeting-Agenda.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
public function nocGstRegistration()
{
    return view('tools.nocGstRegistration');
}

public function nocGstRegistrationDownloadDoc(Request $request)
{
    $data = [
        'owner_name' => $request->owner_name,
        'owner_father' => $request->owner_father,
        'owner_pan' => $request->owner_pan,
        'owner_contact' => $request->owner_contact,
        'property_address' => $request->property_address,
        'business_name' => $request->business_name,
        'authorised_person' => $request->authorised_person,
        'relationship' => $request->relationship,
        'consideration' => $request->consideration,
        'proof_document' => $request->proof_document,
        'additional_enclosures' => $request->additional_enclosures,
        'place' => $request->place,
        'date' => $request->date,
    ];

    // Format date
    $data['formatted_date'] = $data['date'] ? date('d F Y', strtotime($data['date'])) : null;

    $html = view('doc.nocGstRegistration', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'No-Objection-Certificate-for-GST-Registration.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

public function boardResolutionPrivateToPublic()
{
    return view('tools.boardResolutionPrivateToPublic');
}

public function boardResolutionPrivateToPublicDownloadDoc(Request $request)
{
    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'email' => $request->email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'director_name' => $request->director_name,
        'proposed_name' => $request->proposed_name,
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'din' => $request->din,
        'place' => $request->place,
    ];

    // Format meeting date
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.boardResolutionPrivateToPublic', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Conversion-Private-to-Public-Company.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
public function boardResolutionAllotmentShares()
{
    return view('tools.boardResolutionAllotmentShares');
}

public function boardResolutionAllotmentSharesDownloadDoc(Request $request)
{
    // Get allottees array
    $allottees = $request->input('allottees', []);
    $allotteesList = [];
    foreach ($allottees as $allottee) {
        if (!empty($allottee['name'])) {
            $allotteesList[] = [
                'name' => $allottee['name'],
                'shares' => $allottee['shares'],
                'type' => $allottee['type'],
                'from' => $allottee['distinctive_from'],
                'to' => $allottee['distinctive_to'],
            ];
        }
    }

    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'email' => $request->email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'shares_number' => $request->shares_number,
        'face_value' => $request->face_value,
        'total_consideration' => $request->total_consideration,
        'consideration_words' => $request->consideration_words,
        'allottees' => $allotteesList,
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'din' => $request->din,
        'place' => $request->place,
    ];

    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.boardResolutionAllotmentShares', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Allotment-of-Shares.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
public function boardResolutionPreIncorporation()
{
    return view('tools.boardResolutionPreIncorporation');
}

public function boardResolutionPreIncorporationDownloadDoc(Request $request)
{
    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'email' => $request->email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'director_name' => $request->director_name,
        'expense_amount' => $request->expense_amount,
        'expense_words' => $request->expense_words,
        'expense_statement' => $request->expense_statement,
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'din' => $request->din,
        'place' => $request->place,
        'resolution_date' => $request->resolution_date,
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;

    // Process expense statement: split lines and format for table
    $expenseLines = [];
    if ($data['expense_statement']) {
        $lines = explode("\n", $data['expense_statement']);
        foreach ($lines as $line) {
            $trimmed = trim($line);
            if ($trimmed !== '') {
                $parts = array_map('trim', explode('|', $trimmed));
                // If at least 5 parts, treat as table row; else just store as text
                if (count($parts) >= 5) {
                    $expenseLines[] = [
                        'date' => $parts[0],
                        'nature' => $parts[1],
                        'paid_to' => $parts[2],
                        'amount' => $parts[3],
                        'reference' => $parts[4],
                    ];
                } else {
                    $expenseLines[] = ['raw' => $trimmed];
                }
            }
        }
    }
    $data['expense_lines'] = $expenseLines;

    $html = view('doc.boardResolutionPreIncorporation', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Reimbursement-of-Pre-Incorporation-Expenses.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
public function panTanCancellation()
{
    return view('tools.panTanCancellation');
}

public function panTanCancellationDownloadDoc(Request $request)
{
    $data = [
        'entity_name' => $request->entity_name,
        'pan' => $request->pan,
        'tan' => $request->tan,
        'entity_type' => $request->entity_type,
        'roc_jurisdiction' => $request->roc_jurisdiction,
        'strike_off_date' => $request->strike_off_date,
        'tax_jurisdiction' => $request->tax_jurisdiction,
        'reason' => $request->reason == 'Other reasons' ? $request->other_reason : $request->reason,
        'confirm_legal' => $request->confirm_legal,
        'confirm_business' => $request->confirm_business,
        'confirm_returns' => $request->confirm_returns,
        'confirm_dues' => $request->confirm_dues,
        'enclose_strike_order' => $request->enclose_strike_order,
        'enclose_pan' => $request->enclose_pan,
        'enclose_tan' => $request->enclose_tan,
        'enclose_other' => $request->enclose_other,
        'enclose_other_text' => $request->enclose_other_text,
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'din_dpin' => $request->din_dpin,
        'place' => $request->place,
        'letter_date' => $request->letter_date,
    ];

    // Format dates
    $data['formatted_strike_off_date'] = $data['strike_off_date'] ? date('d F Y', strtotime($data['strike_off_date'])) : null;
    $data['formatted_letter_date'] = $data['letter_date'] ? date('d F Y', strtotime($data['letter_date'])) : null;

    // Prepare confirmations array
    $confirmations = [];
    if ($data['confirm_legal']) $confirmations[] = '1. All legal proceedings for the closure/strike off have been duly completed.';
    if ($data['confirm_business']) $confirmations[] = '2. The entity is no longer carrying on any business or operations.';
    if ($data['confirm_returns']) $confirmations[] = '3. All pending income tax returns have been filed (if applicable).';
    if ($data['confirm_dues']) $confirmations[] = '4. There are no outstanding tax dues or pending assessments (if applicable).';
    $data['confirmations'] = $confirmations;

    // Prepare enclosures array
    $enclosures = [];
    if ($data['enclose_strike_order']) $enclosures[] = '1. Copy of Strike Off Order from Registrar of Companies';
    if ($data['enclose_pan']) $enclosures[] = '2. Copy of PAN Card';
    if ($data['enclose_tan']) $enclosures[] = '3. Copy of TAN Allotment Letter';
    if ($data['enclose_other']) {
        if ($data['enclose_other_text']) {
            $enclosures[] = '4. ' . $data['enclose_other_text'];
        } else {
            $enclosures[] = '4. Other relevant documents';
        }
    }
    $data['enclosures'] = $enclosures;

    $html = view('doc.panTanCancellation', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'PAN-and-TAN-Cancellation-Request-Letter.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
public function llpClosureResolution()
{
    return view('tools.llpClosureResolution');
}

public function llpClosureResolutionDownloadDoc(Request $request)
{
    // Collect partner data
    $partners = [];
    for ($i = 1; $i <= 5; $i++) {
        $name = $request->input("partner{$i}_name");
        $dpin = $request->input("partner{$i}_dpin");
        if (!empty($name)) {
            $partners[] = [
                'name' => $name,
                'dpin' => $dpin,
            ];
        }
    }

    $data = [
        'llp_name' => $request->llp_name,
        'llpin' => $request->llpin,
        'registered_office' => $request->registered_office,
        'email' => $request->email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'roc_jurisdiction' => $request->roc_jurisdiction,
        'partners' => $partners,
        'place' => $request->place,
        'resolution_date' => $request->resolution_date,
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_resolution_date'] = $data['resolution_date'] ? date('d F Y', strtotime($data['resolution_date'])) : null;

    $html = view('doc.llpClosureResolution', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Designated-Partners-Resolution-for-Closure-of-LLP.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
public function shareholderConsentStrikeOff()
{
    return view('tools.shareholderConsentStrikeOff');
}

public function shareholderConsentStrikeOffDownloadDoc(Request $request)
{
    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'roc_jurisdiction' => $request->roc_jurisdiction,
        'shareholder_name' => $request->shareholder_name,
        'parent_name' => $request->parent_name,
        'shareholder_address' => $request->shareholder_address,
        'shareholder_pan' => $request->shareholder_pan,
        'shares_number' => $request->shares_number,
        'shares_words' => $request->shares_words,
        'face_value' => $request->face_value,
        'total_value' => $request->total_value,
        'consent_date' => $request->consent_date,
        'witness_name' => $request->witness_name,
        'witness_address' => $request->witness_address,
    ];

    // Format date
    $data['formatted_consent_date'] = $data['consent_date'] ? date('d F Y', strtotime($data['consent_date'])) : null;

    $html = view('doc.shareholderConsentStrikeOff', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Shareholder-Consent-for-Striking-Off-Company.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
public function noticeBoardMeeting()
{
    return view('tools.noticeBoardMeeting');
}

public function noticeBoardMeetingDownloadDoc(Request $request)
{
    // Process agenda items
    $agendaText = $request->agenda_items;
    $agendaItems = [];
    if ($agendaText) {
        $lines = explode("\n", $agendaText);
        foreach ($lines as $line) {
            $trimmed = trim($line);
            if ($trimmed !== '') {
                $agendaItems[] = $trimmed;
            }
        }
    }

    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'meeting_number' => $request->meeting_number,
        'day' => $request->day,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'venue' => $request->venue,
        'agenda_items' => $agendaItems,
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'place' => $request->place,
        'notice_date' => $request->notice_date,
    ];

    // Format dates
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('jS F Y', strtotime($data['meeting_date'])) : null;
    $data['formatted_notice_date'] = $data['notice_date'] ? date('jS F Y', strtotime($data['notice_date'])) : null;

    $html = view('doc.noticeBoardMeeting', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Notice-of-Board-Meeting.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

public function boardResolutionInternalAuditor()
{
    return view('tools.boardResolutionInternalAuditor');
}

public function boardResolutionInternalAuditorDownloadDoc(Request $request)
{
    $data = [
        'company_name' => $request->company_name,
        'cin' => $request->cin,
        'registered_office' => $request->registered_office,
        'email' => $request->email,
        'meeting_date' => $request->meeting_date,
        'meeting_time' => $request->meeting_time,
        'auditor_name' => $request->auditor_name,
        'membership_no' => $request->membership_no,
        'qualification' => $request->qualification,
        'auditor_address' => $request->auditor_address,
        'financial_year' => $request->financial_year,
        'signatory_name' => $request->signatory_name,
        'signatory_designation' => $request->signatory_designation,
        'din' => $request->din,
        'place' => $request->place,
    ];

    // Format meeting date
    $data['formatted_meeting_date'] = $data['meeting_date'] ? date('d F Y', strtotime($data['meeting_date'])) : null;

    $html = view('doc.boardResolutionInternalAuditor', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Board-Resolution-for-Appointment-of-Internal-Auditor.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}
// Controller code
public function trademarkRegistrationGuide(){
    return view('tools.trademarkRegistrationGuide');
}

public function trademarkRegistrationGuideDownloadDoc(Request $request){
    $data = [
        'applicant_name' => $request->applicant_name,
        'pan' => $request->pan,
        'applicant_category' => $request->applicant_category,
        'business_type' => $request->business_type,
        'address' => $request->address,
        'gst' => $request->gst,
        'msme' => $request->msme,
        'trademark_name' => $request->trademark_name,
        'trademark_class' => $request->trademark_class,
        'goods_description' => $request->goods_description,
        'additional_spec' => $request->additional_spec,
        'attachments' => $request->attachments,
        'signatory_name' => $request->signatory_name,
        'designation' => $request->designation,
        'signatory_id' => $request->signatory_id,
        'place' => $request->place,
        'date' => $request->date,
    ];

    // Determine fee based on category
    $category = $data['applicant_category'];
    if (in_array($category, ['individual', 'startup', 'small'])) {
        $data['fee_info'] = 'For Individuals, Startups, and Small Enterprises: Rs. 4,500/- (Online) or Rs. 5,000/- (Offline)';
    } else {
        $data['fee_info'] = 'For Other Entities (Companies, Trusts, Partnerships): Rs. 9,000/- (Online) or Rs. 10,000/- (Offline)';
    }

    $data['formatted_date'] = $data['date'] ? date('d F Y', strtotime($data['date'])) : null;

    $html = view('doc.trademarkRegistrationGuide', $data)->render();

    $filePath = $this->docService->convert(
        $html,
        'Trademark-Class-9-Registration-Guide.docx'
    );

    return response()
        ->download($filePath)
        ->deleteFileAfterSend(true);
}

// Helper function to convert number to words (if not already present in controller)
private function convertNumberToWords($number) {
    $ones = array(
        0 => '', 1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four',
        5 => 'Five', 6 => 'Six', 7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
        10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve', 13 => 'Thirteen',
        14 => 'Fourteen', 15 => 'Fifteen', 16 => 'Sixteen', 17 => 'Seventeen',
        18 => 'Eighteen', 19 => 'Nineteen'
    );
    $tens = array(
        2 => 'Twenty', 3 => 'Thirty', 4 => 'Forty', 5 => 'Fifty',
        6 => 'Sixty', 7 => 'Seventy', 8 => 'Eighty', 9 => 'Ninety'
    );
    
    if ($number < 20) {
        return $ones[$number];
    } elseif ($number < 100) {
        return $tens[floor($number / 10)] . ($number % 10 ? ' ' . $ones[$number % 10] : '');
    } elseif ($number < 1000) {
        return $ones[floor($number / 100)] . ' Hundred' . ($number % 100 ? ' ' . $this->convertNumberToWords($number % 100) : '');
    } elseif ($number < 100000) {
        return $this->convertNumberToWords(floor($number / 1000)) . ' Thousand' . ($number % 1000 ? ' ' . $this->convertNumberToWords($number % 1000) : '');
    } elseif ($number < 10000000) {
        return $this->convertNumberToWords(floor($number / 100000)) . ' Lakh' . ($number % 100000 ? ' ' . $this->convertNumberToWords($number % 100000) : '');
    } else {
        return $this->convertNumberToWords(floor($number / 10000000)) . ' Crore' . ($number % 10000000 ? ' ' . $this->convertNumberToWords($number % 10000000) : '');
    }
}

// Helper function for number to words
private function numberToWords($num) {
    if ($num == 0) return 'Zero';
    $ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
    $tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
    $teens = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];

    $convert = function($n) use ($ones, $tens, $teens, &$convert) {
        if ($n < 10) return $ones[$n];
        if ($n < 20) return $teens[$n - 10];
        if ($n < 100) return $tens[floor($n / 10)] . ($n % 10 ? ' ' . $ones[$n % 10] : '');
        if ($n < 1000) return $ones[floor($n / 100)] . ' Hundred' . ($n % 100 ? ' ' . $convert($n % 100) : '');
        if ($n < 100000) return $convert(floor($n / 1000)) . ' Thousand' . ($n % 1000 ? ' ' . $convert($n % 1000) : '');
        if ($n < 10000000) return $convert(floor($n / 100000)) . ' Lakh' . ($n % 100000 ? ' ' . $convert($n % 100000) : '');
        return $convert(floor($n / 10000000)) . ' Crore' . ($n % 10000000 ? ' ' . $convert($n % 10000000) : '');
    };

    $rupees = floor($num);
    $paise = round(($num - $rupees) * 100);
    $words = $convert($rupees);
    if ($rupees == 1) $words .= ' Rupee';
    else $words .= ' Rupees';
    if ($paise > 0) {
        $words .= ' and ' . $convert($paise);
        if ($paise == 1) $words .= ' Paise';
        else $words .= ' Paise';
    }
    return ucfirst($words);
}

}