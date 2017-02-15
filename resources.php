<?php
require_once 'classes/DatabaseHelper.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->

    <title>Resources</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>
    <div class="row">
        <div class="row" style="background-color: #ffffff;">
            <div class="row" style="padding-left: 1%;"><h2>Resources</h2></div>


            <div class="row">

                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Acts</a></li>
                        <li><a href="#tabs-2">Regulations</a></li>
                        <li><a href="#tabs-3">Compliance</a></li>
                        <li><a href="#tabs-4">Others</a></li>
                    </ul>
                    <div id="tabs-1">

                        <script src="js/searchfilter.js" type="text/javascript"></script>
                        <input type="text" id="search" onkeyup="Search()" placeholder="Search Resource"
                               class="form-control">
                        <table id="table" cellpadding="0" cellspacing="0" border="0"
                               class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Resource</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $db_helper = new DatabaseHelper();
                            $db_helper->get_acts();

                            ?>
                            </tbody>
                        </table>


                    </div>
                    <div id="tabs-2">
                        <script src="js/searchfilter.js" type="text/javascript"></script>
                        <input type="text" id="search" onkeyup="Search()" placeholder="Search Resource"
                               class="form-control">
                        <table id="table" cellpadding="0" cellspacing="0" border="0"
                               class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Resource</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $db_helper = new DatabaseHelper();
                            $db_helper->get_regulations();

                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="tabs-3">
                        <script src="js/searchfilter.js" type="text/javascript"></script>
                        <input type="text" id="search" onkeyup="Search()" placeholder="Search Resource"
                               class="form-control">
                        <table id="table" cellpadding="0" cellspacing="0" border="0"
                               class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Resource</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $db_helper = new DatabaseHelper();
                            $db_helper->get_compliances();

                            ?>
                            </tbody>
                        </table>
                    </div>

                    <div id="tabs-4">
                        <script src="js/searchfilter.js" type="text/javascript"></script>
                        <input type="text" id="search" onkeyup="Search()" placeholder="Search Resource"
                               class="form-control">
                        <table id="table" cellpadding="0" cellspacing="0" border="0"
                               class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Resource</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $db_helper = new DatabaseHelper();
                            $db_helper->get_other_resources();

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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