<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Application Form for License of a Retirement Benefits Scheme</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <h3 style="text-transform: uppercase;">Application Form for License of a Retirement Benefits Scheme</h3>
    </div>
    <form role="form" action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <p style="color: #ff0000; font-size: 150%;">A. Details of the Scheme</p>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="poi">Place of Incorporation</label>
                    <input type="text" id="poi" name="poi" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="tin">Tax Identification Number</label>
                    <input type="text" id="tin" name="tin" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address">Physical Address of Business</label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="tel">Telephone</label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="text" id="fax" name="fax" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <p style="color: #ff0000; font-size: 150%;">A. Particulars regarding proposed Scheme</p>

                <div class="form-group">
                    <label for="gender">Is it an open scheme that provides individual based pension or
                        provident plans?</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gender">Is it an occupational retirement benefits scheme?</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gender">Is the scheme contributory or non-contributory?</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gender">Is it a scheme that receives mandatory contributions?</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gender">Is it a scheme that receives voluntary contributions?</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">State whether the scheme is a defined contribution a defined
                        benefit, or both.(Describe)</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p style="color: #ff0000; font-size: 150%;">C. Provide the following information regarding the proposed scheme</p>

                <div class="form-group">
                    <label for="name">Names of proposed members and their contributions</label>
                    <input type="file" id="pod" name="pod" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="name">Benefits that accrue to members</label>
                    <textarea id="name" name="name" class="form-control" rows="10" required></textarea>
                </div>

                <div class="form-group">
                    <label for="name">Number of Active members</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="name">Number of Inactive members</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-5">

                <p style="color: #ff0000; font-size: 150%;">D. Management</p>

                <div class="form-group">
                    <label for="name">Particulars of the proposed Trustees or directors of corporate
                        trustee</label>
                    <input type="file" id="pod" name="pod" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="name">Particulars of proposed Custodian, Administrators, Fund
                        managers, Auditors and Actuary</label>
                    <input type="file" id="pok" name="pok" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="name">Particulars of key officers of the retirement benefits scheme</label>
                    <input type="file" id="bau" name="bau" class="form-control" required>
                </div>

                <div class="form-group">
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
                                The retirement benefits schemes the trustee has provided trustee
                                services to within the period of three years ending as at the date of
                                application.
                            </div>
                        </div>
                    </div>
                    <input type="file" id="bau" name="bau" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="form-control btn btn-success">
            </div>
        </div>
    </form>
    <?php include_once 'imports/contact.php'; ?>

    <a href="#" data-toggle="modal" data-target="#contactModal"><div id="qbtn">
            Questions/Comments
        </div></a>
</div>
</body>
</html>