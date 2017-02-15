<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Application Form for License of a Administrator</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <h3 style="text-transform: uppercase;">Application Form for License of an Administrator</h3>
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
                <label for="name">Particulars of Directors in case of administrator</label>
                <input type="file" id="pod" name="pod" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Particulars of Key officer of administrator</label>
                <input type="file" id="pok" name="pok" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Particulars of Auditors</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                List the retirement benefits schemes
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body">
                            The retirement benefits schemes the trustee has provided administrative
                            services to within the period of three years ending as at the date of
                            application.
                        </div>
                    </div>
                </div>
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
                <label for="name">Certified copies of certificate of incorporation (if applicant is a
                    body corporate)</label>
                <input type="file" id="pok" name="pok" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Certified copies of memos and articles of incorporation (if
                    applicant is a body corporate)</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>
            <div class="row">

            <div class="form-group col-md-4">
                <label for="name">Proof that the applicant holds capital in the sum determined by the
                    Authority</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">A certifed copy of an insurance policy to cover the operational risks
                    which the administrator may be expossed to</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Evidence of the ability of the applicant to perform the functions of
                    an administrator</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="name">A statutory declaration supporting the application</label>
                    <input type="file" id="bau" name="bau" class="form-control" required>
                </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="form-control btn btn-success">
            </div>
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