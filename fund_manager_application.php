<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Application Form for License of a Fund Manager</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <h3 style="text-transform: uppercase;">Application Form for License of a Fund Manager</h3>
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
            <p style="color: #ff0000; font-size: 150%;">B. Capital Structure</p>

            <div class="form-group col-md-4">
                <label for="name">Authorised capital, Ug. Shs</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="poi">Paid up capital, Ug. Shs</label>
                <input type="text" id="poi" name="poi" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="tin">Types of shares issued</label>
                <input type="text" id="tin" name="tin" class="form-control" required>
            </div>
        </div>

        <div class="row">

            <p style="color: #ff0000; font-size: 150%;">C. Management</p>

            <div class="form-group col-md-4">
                <label for="name">Particulars of Directors of applicant</label>
                <input type="file" id="pod" name="pod" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Particulars of Key officer of fund manager</label>
                <input type="file" id="pok" name="pok" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Bankers and Auditors</label>
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
                            The retirement benefits schemes the trustee has provided fund
                            management to within the period of three years ending as at the date of
                            application.
                        </div>
                    </div>
                </div>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>
        </div>
        <div class="row">

            <p style="color: #ff0000; font-size: 150%;">D. Attachments</p>

            <div class="form-group col-md-4">
                <label for="name">Certified copies of latest audited report and accounts</label>
                <input type="file" id="pod" name="pod" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">certified copies of certificate of incorporation</label>
                <input type="file" id="pok" name="pok" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Certified copies of memos and articles of incorporation</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">A certified copy of a licence issued by Capital Market Authority to offer
                    fund manager services</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="name">Evidence of the ability of the applicant to perform the functions of a fund
                    manager of a retirement benefits scheme</label>
                <input type="file" id="bau" name="bau" class="form-control" required>
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