<?php
require_once 'classes/DatabaseHelper.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Licensed Individual Trustees</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 style="padding-left: 1%;">Licenced Individual Trustees</h3>
        </div>
        <div class="col-md-8">
            <h4 class="pull-right">Last Updated:
                <?php
                $db_helper = new DatabaseHelper();
                echo $db_helper->get_ind_trustee_stamp();
                ?>
            </h4>
        </div>
        <div class="col-md-10">
            <table id="table" cellpadding="0" cellspacing="0" border="0"
                   class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Scheme</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $db_helper = new DatabaseHelper();
                $db_helper->get_individual_trustees();

                ?>
                </tbody>
            </table>
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