<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!--    <script src="http://www.w3schools.com/lib/w3data.js"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <title>URBRA2</title>
    <style type="text/css">
        body {
            background: #f9f3e7;
            overflow-x: hidden;
            padding-bottom: 0;
        }

        html {
            font-family: 'Roboto Condensed', sans-serif !important;
        }

        div {
            /*border: 1px solid red;*/
        }

        /*#logo {*/
        /*padding-top: 8% !important;*/
        /*padding-left: 5%;*/
        /*}*/

        #page-head {
            background: #000000;
            text-align: center;
            color: #c9cdc8;
            padding: 1%;
        }

        /*#logo-image {*/
        /*padding: 0 !important;*/
        /*display: inline-block !important;*/
        /*width: auto;*/
        /*}*/

        #logo-text {
            font-size: 200%;
            padding-top: 9%;
            /*padding-right: 0!important;*/
            width: auto;
            padding-left: 0;
            color: #A57F30;
        }

        #menu-box {
            margin-right: 0;
            margin-left: 0;
            padding-left: 0;
        }

        .desc-text {
            padding: 5%;
            color: #000000;
            font-size: 115%;
        }

        .page-thumb {
            /*border: 3px solid #A57F30;*/
            /*border: 1px solid #ff0000;*/
            padding-top: 2%;
            box-shadow: 5px 5px 5px #A57F30;
            color: #000000;
        }

        .service-image {
            width: 250px;
            height: 250px;
        }

        .service-box {
            padding: 4%;
            padding-bottom: 3%!important;
        }

        .service-title {
            font-size: 200%;
            padding: 3%;
        }

        .service-btn {
            margin-top: 5%;
            background: #d88f07;
            color: #ffffff;
            border: 1px solid #ffffff;
        }
        .row{
            margin-left: -6.5px!important;
            margin-right: -6.5px!important;
        }
        .container {
            width: 1250px!important;
        }
        .navbar {
            margin-bottom: 10px!important;
        }
        .container {
            padding-right: 0!important;
            padding-left: 0!important;
        }
        #services-row .thumbnail {
            margin-bottom: 0!important;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row" style="">
        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/Strategic%20Plan%20Launch2.jpg" alt="...">

                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/Strategic%20Plan%20Launch2.jpg" alt="...">

                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/Strategic%20Plan%20Launch2.jpg" alt="...">

                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <!--...-->
                </div>

                <!-- Controls -->
                <!--                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
                <!--                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
                <!--                    <span class="sr-only">Previous</span>-->
                <!--                </a>-->
                <!--                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
                <!--                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
                <!--                    <span class="sr-only">Next</span>-->
                <!--                </a>-->
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-5 thumbnail page-thumb" style="margin-right: 10%;">
                <div class="row" align="center">
                    <img src="img/trustee2.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Trustees
                </div>
            </div>
            <div class="col-md-5 thumbnail page-thumb" style="">
                <div class="row" align="center">
                    <img src="img/complaint2.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Complaint
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="col-md-5 thumbnail page-thumb" style="margin-right: 10%;">
                <div class="row" align="center">
                    <img src="img/resources2.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Resouces
                </div>
            </div>
            <div class="col-md-5 thumbnail page-thumb" style="">
                <div class="row" align="center">
                    <img src="img/events2.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Events
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-5 thumbnail page-thumb" style="margin-right: 10%;">
                <div class="row" align="center">
                    <img src="img/vacancy.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Vacancies
                </div>
            </div>
            <div class="col-md-5 thumbnail page-thumb" style="">
                <div class="row" align="center">
                    <img src="img/government2.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Public Service
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="col-md-5 thumbnail page-thumb" style="margin-right: 10%;">
                <div class="row" align="center">
                    <img src="img/biz.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Business Advisors
                </div>
            </div>
            <div class="col-md-5 thumbnail page-thumb" style="">
                <div class="row" align="center">
                    <img src="img/contact.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Help desk
                </div>
            </div>
        </div>
    </div>


    <div id="services-row" class="row" style="margin-top: 2%;" align="center">
        <div class="col-md-4 thumbnail service-box">
            <img src="img/licenses.jpg" class="service-image img-circle">

            <div class="row service-title">Workshops</div>
            <div class="row">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
            </div>
            <div class="row">
                <input type="button" value="Workshops" class="btn btn-warning btn-lg service-btn">
            </div>

        </div>
        <div class="col-md-4 thumbnail service-box">
            <img src="img/media.jpg" class="service-image img-circle">

            <div class="row service-title">Media Releases</div>
            <div class="row">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
            </div>
            <div class="row">
                <input type="button" value="Media Releases" class="btn btn-warning btn-lg service-btn">
            </div>
        </div>
        <div class="col-md-4 thumbnail service-box">
            <img src="img/report2.jpg" class="service-image img-circle">

            <div class="row service-title">Reports</div>
            <div class="row">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
            </div>
            <div class="row">
                <input type="button" value="Reports" class="btn btn-warning btn-lg service-btn">
            </div>
        </div>
    </div>
    <?php include_once 'imports/footer.php'; ?>

</div>
<?php include_once 'imports/contact.php'; ?>

</body>
</html>