<?php
require_once 'classes/DatabaseHelper.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Vacancies</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="row"><h2 style="padding-left: 1%;">Vacancies</h2></div>
<!--            <script src="js/searchfilter.js" type="text/javascript"></script>-->
<!--            <input type="text" id="search" onkeyup="Search()" placeholder="Search vacancy" class="form-control">-->
<!--            <table id="table" cellpadding="0" cellspacing="0" border="0"-->
<!--                   class="table table-striped">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th>Vacancy</th>-->
<!--                    <th>Description</th>-->
<!--                    <th>Attachment</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                --><?php
//
                $db_helper = new DatabaseHelper();
                $db_helper->get_vacancies();
//
//                ?>
<!--                </tbody>-->
<!--            </table>-->
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