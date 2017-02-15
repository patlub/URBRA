<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Application Form for License of a Custodian</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <h3 style="text-transform: uppercase;">Application Form for License of a Custodian</h3>
    </div>
    <form role="form" action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <p style="color: #ff0000; font-size: 150%;">A. Particulars of Applicant</p>

            <div class="form-group col-md-4">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="poi">Place of Incorporation</label>
                <input type="text" id="poi" name="poi" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="tin">Tax Identification Number</label>
                <input type="text" id="tin" name="tin" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="address">Physical Address of Business</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="tel">Telephone</label>
                <input type="text" id="tel" name="tel" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="fax">Fax</label>
                <input type="text" id="fax" name="fax" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
        </div>
        <div class="row">

            <p style="color: #ff0000; font-size: 150%;">B. Management</p>

            <div class="form-group col-md-4">
                <label for="name">Particulars of Directors of applicant</label>
                <input type="file" id="pod" name="pod" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Particulars of Key officer of applicant</label>
                <input type="file" id="pok" name="pok" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Particulars of Auditors</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">List the retirement benefits schemes worked with in last 3 years</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>
        </div>
        <div class="row">

            <p style="color: #ff0000; font-size: 150%;">C. Attachments</p>

            <div class="form-group col-md-4">
                <label for="name">Certified copies of latest audited report and accounts</label>
                <input type="file" id="pod" name="pod" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Certified copy of the applicant’s licence as a financial institution
                    issued under the Financial Institutions Act, 2004</label>
                <input type="file" id="pok" name="pok" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Certified copies of memos and articles of incorporation</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>
        </div>

        <div class="form-group col-md-4" style="">
            <label for="name">Evidence of the ability of the applicant to perform the functions of a
                custodian</label>
            <input type="file" id="bau" name="bau" class="form-control" required>
        </div>


        <div class="form-group col-md-4">
            <label for="name">a certified copy of a No objection letter issued by the Bank of
                Uganda to offer custodial services</label>
            <input type="file" id="bau" name="bau" class="form-control" required>
        </div>

        <div class="form-group col-md-4">
            <label for="name">A statutory declaration supporting the application</label>
            <input type="file" id="bau" name="bau" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="form-control btn btn-success">
        </div>

    </form>
    <?php include_once 'imports/contact.php'; ?>

    <a href="#" data-toggle="modal" data-target="#contactModal">
        <div id="qbtn">
            Questions/<br>Comments
        </div>
    </a>
</div>
</body>
</html>