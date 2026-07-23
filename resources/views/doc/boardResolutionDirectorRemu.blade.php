<div style="padding:32px;font-size:14px;line-height:1.8;">
    <p><strong>{{ $company_name }}</strong></p>
    <p>CIN: {{ $cin ?? '________________' }}</p>
    <p>{{ $registered_office ?? '________________' }}</p>
    <p>Email: {{ $email ?? '________________' }}</p>

    <p style="text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p>
Passed at the Meeting of the Board of Directors held on <strong>{{ \Carbon\Carbon::parse($resolution_date)->format('d-m-Y') }}</strong> at the Registered Office of the Company.
    </p>

    <p>
<strong>Subject:</strong> Revision of Remuneration of Mr./Ms. {{ $director_name }}, DIN: {{ $director_din }}, {{ $director_desig }} of the Company
    </p>

    <p>
RESOLVED THAT pursuant to Section 197 and Schedule V of the Companies Act, 2013, the Board approves payment of revised remuneration to Mr./Ms. {{ $director_name }}, holding DIN {{ $director_din }}, {{ $director_desig }}, on the following terms:
    </p>

    <ul>
<li>Basic Salary: Rs. {{ $basic_salary ?? '__________' }} per month with effect from {{ $basic_salary_effective ?? '__________' }}</li>
<li>Commission: Not exceeding {{ $commission_percent ?? '__________' }}% of net profits, with effect from FY {{ $commission_fy ?? '__________' }}</li>
<li>HRA/Accommodation: {{ $hra ?? 'As per company policy' }}</li>
<li>Medical Benefits: {{ $medical ?? 'As per company rules' }}</li>
<li>Leave Travel Allowance: {{ $lta ?? 'As per company policy' }}</li>
<li>Provident Fund & Gratuity: {{ $pf_gratuity ?? 'As applicable' }}</li>
<li>Vehicle & Communication: {{ $vehicle ?? 'Company car with driver and telephone/mobile for official use' }}</li>
<li>Other Perquisites: {{ $other_perquisites ?? 'As approved by the Board' }}</li>
    </ul>

    <p>
RESOLVED FURTHER THAT Mr./Ms. {{ $authorized_person }}, {{ $authorized_desig }}, be authorised to do all acts, deeds and filings to give effect to this resolution.
    </p>

    <p>For and on behalf of <strong>{{ $company_name }}</strong></p>
    <p>Signature: _______________________________</p>
    <p>Name: {{ $authorized_person }}</p>
    <p>Designation: {{ $authorized_desig }}</p>
    <p>DIN: {{ $director_din }}</p>
    <p>Date: {{ \Carbon\Carbon::parse($resolution_date)->format('d-m-Y') }}</p>
    <p>Place: {{ $place }}</p>
</div>
