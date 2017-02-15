<?php
include_once 'classes/DatabaseHelper.php';
$dbh = new DatabaseHelper();
$law = $dbh->fetch_trustee_law();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Law of Trustees</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
    <?php include_once 'imports/menu.php'; ?>
</div>
<div class="row">
<div class="col-md-10">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
               aria-expanded="true" aria-controls="collapseOne">
                Application and grant of licence of trustee
            </a>
        </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
         aria-labelledby="headingOne">
        <div class="panel-body">
            <?php echo $law['application']; ?>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                Refusal of licence of trustee
            </a>
        </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
            <?php echo $law['refusal']; ?>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Restrictions on licence of trustee
            </a>
        </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
         aria-labelledby="headingThree">
        <div class="panel-body">
            <?php echo $law['restriction']; ?>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
               href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Validity of licence of trustee
            </a>
        </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
         aria-labelledby="headingFour">
        <div class="panel-body">
            <?php echo $law['validity']; ?>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
               href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Revocation of licence of trustee
            </a>
        </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
         aria-labelledby="headingFive">
        <div class="panel-body">
            <?php echo $law['revocation']; ?>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
               href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Functions of a trustee
            </a>
        </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
         aria-labelledby="headingSix">
        <div class="panel-body">
            <?php echo $law['function']; ?>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-md-1" align="center">
    <a href="pdf/act.pdf">
        <div><img src="img/adobe.png" width="50"></div>
    </a>

    <div>PDF</div>
</div>

</div>
<div class="row">
    <?php include_once 'imports/footer.php'; ?>
    <?php include_once 'imports/contact.php'; ?>

    <a href="#" data-toggle="modal" data-target="#contactModal">
        <div id="qbtn">
            Questions/<br>Comments
        </div>
    </a>
</div>
</div>
</body>