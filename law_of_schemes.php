<?php
include_once 'classes/DatabaseHelper.php';
$dbh = new DatabaseHelper();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Law of Schemes</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php $dbh->fetch_scheme_law(); ?>
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