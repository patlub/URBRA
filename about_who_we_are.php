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
    <title>Who we are</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php $dbh->fetch_who_we_are(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <?php include_once 'imports/footer.php'; ?>
    </div>
</div>
</body>