<?php
require_once 'classes/DatabaseHelper.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Board of Directors</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <div class="row">
            <div class="row" style="padding-left: 3%;"><h2>Board of Directors </h2></div>

                <?php

                $db_helper = new DatabaseHelper();
                $db_helper->get_bods();

                ?>
        </div>
    </div>
    <div class="row">
        <?php include_once 'imports/footer.php'; ?>
        <?php include_once 'imports/contact.php'; ?>

        <a href="#" data-toggle="modal" data-target="#contactModal"><div id="qbtn">
                Questions/<br>Comments
            </div></a>
    </div>
</div>
</body>