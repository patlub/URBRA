<?php
require_once 'classes/DatabaseHelper.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Search Results</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <div class="pull-right">
            <form id="search-form" role="form" method="get" action="search.php">
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search resources">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Go!</button>
                                </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </form>
        </div>


        <div class="row" style="padding-left: 2%;">
            <h2>Search Results</h2>
        </div>
        <div class="col-md-10">
            <div id="tabs-1">
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
                    $search_term = $_GET['search'];
                    $dbh = new DatabaseHelper();
                    $dbh->search($search_term);
                    ?>
                    </tbody>
                </table>


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