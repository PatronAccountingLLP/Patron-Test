
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Board Resolution Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .preview-box {
            border: 1px solid #ccc;
            padding: 20px;
            background: white;
            height: 90vh;
            overflow-y: auto;
            white-space: pre-line;
        }
    </style>
</head>

<body class="bg-light">

<div class="container py-4">
    <div class="row shadow bg-white py-4 rounded">

        <!-- LEFT FORM -->
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-header bg-primary text-white">
                    <h5>Board Resolution Form</h5>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('br.generate') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">First Director's Full Name (Authorised) *</label>
                            <input type="text" class="form-control" id="first_director" name="first_director" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Second Director's Full Name (Not Authorised) *</label>
                            <input type="text" class="form-control" id="second_director" name="second_director" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Company/LLP Name *</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Complete Address of Company *</label>
                            <textarea class="form-control" id="company_address" name="company_address"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">City *</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date on which BR will be signed *</label>
                            <input type="date" class="form-control" id="br_date" name="br_date" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Download Board Resolution
                        </button>
                    </form>

                </div>
            </div>
        </div>

        <!-- RIGHT PREVIEW -->
        <div class="col-md-6 preview-text">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white">
                    <h5>Live Preview</h5>
                </div>

                <div class="card-body preview-box" id="previewBox" style="font-size:.9rem;background:#f9f9f9;"></div>
            </div>
        </div>

    </div>
</div>
<div class="container pb-4">
    <div class="row shadow bg-white p-4 rounded">
        <div class="col-lg-12">
            <p>  CERTIFIED TRUE COPY OF THE RESOLUTION PASSED AT THE MEETING OF THE BOARD OF DIRECTORS OF HELD ON 13 Dec 2025 AT 11:00 A.M. AT THE REGISTERED OFFICE OF THE COMPANY</p>
        </div>
        <div class="col-lg-12 card card-body" style="background:#f9f9f9;">
            <div style="font-family: Times New Roman, serif; font-size: 14px; line-height: 1.6; color: #000;">

    <p style="text-align: center; font-weight: bold; text-transform: uppercase; margin-bottom: 20px;">
        CERTIFIED TRUE COPY OF THE RESOLUTION PASSED AT THE MEETING OF THE BOARD OF DIRECTORS OF
        <span style="font-weight: bold;">_________________</span>
        HELD ON ___________________ AT 11:00 A.M. AT THE REGISTERED OFFICE OF THE COMPANY,
        ______________, __________.
    </p>

    <p style="margin-bottom: 15px; text-align: justify;">
        <strong>RESOLVED THAT</strong> the Board of Directors do hereby appoint
        <strong>________________</strong>, Director of the Company as Authorised Signatory for
        registration of the Company on the Goods and Service Tax (GST) System Portal and to sign and
        submit various documents electronically and/or physically on behalf of the Company before
        GST authorities.
    </p>

    <p style="margin-bottom: 15px; text-align: justify;">
        <strong>FURTHER RESOLVED THAT</strong>
        <strong>________________</strong>, Director of the Company be and is hereby authorized
        to represent the Company and take necessary actions on all GST-related issues.
    </p>

    <p style="margin-bottom: 25px; text-align: justify;">
        <strong>FURTHER RESOLVED THAT</strong>
        <strong>________________</strong>, Director of the Company be and is hereby authorized
        on behalf of the Company to sign returns, documents, letters and to represent the Company
        for assessments, appeals, or any GST matters.
    </p>

    <p style="margin-bottom: 30px;">
        <strong>For:</strong> ________________
    </p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 40px;">
        <tr>
            <td style="width: 50%; vertical-align: top;">
                <p style="margin-bottom: 40px;">
                    <strong>Director Name:</strong> ________________
                </p>
                <p>
                    <strong>Signature:</strong> ______________________
                </p>
            </td>

            <td style="width: 50%; vertical-align: top;">
                <p style="margin-bottom: 40px;">
                    <strong>Director Name:</strong> ________________
                </p>
                <p>
                    <strong>Signature:</strong> ______________________
                </p>
            </td>
        </tr>
    </table>

</div>
        </div>
    </div>
</div>

<script>
    const ids = [
        "first_director", "second_director", "company_name",
        "company_address", "city", "br_date"
    ];

    ids.forEach(id => {
        document.getElementById(id).addEventListener("input", updatePreview);
    });

    function updatePreview() {
        let d = {};
        ids.forEach(id => d[id] = document.getElementById(id).value);

        document.getElementById("previewBox").innerText =
`CERTIFIED TRUE COPY OF THE RESOLUTION PASSED AT THE MEETING OF THE BOARD OF DIRECTORS OF ${d.company_name} HELD ON ${d.br_date} AT 11:00 A.M. AT THE REGISTERED OFFICE OF THE COMPANY.

RESOLVED THAT the Board of Directors do hereby appoint ${d.first_director}, Director of the Company as Authorised Signatory for registration of the Company on the Goods and Service Tax (GST) System Portal and to sign and submit various documents electronically and/or physically on behalf of the Company before GST authorities.

FURTHER RESOLVED THAT ${d.first_director}, Director of the Company be and is hereby authorized to represent the Company and take necessary actions on all GST-related issues.

FURTHER RESOLVED THAT ${d.first_director}, Director of the Company be and is hereby authorized on behalf of the company to sign returns, documents, letters and to represent the Company for assessments, appeals, or any GST matters.

For: ${d.company_name}

Director Name: ${d.first_director}
Signature:

Director Name: ${d.second_director}
Signature:
`;
    }
      window.onload = updatePreview;
</script>

</body>
</html>
