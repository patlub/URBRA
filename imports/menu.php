<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Mega menu slide down on hover with carousel - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <style type="text/css">
        /*@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);*/
        html {
            font-family: 'Roboto Condensed', sans-serif !important;
        }

        body {
            background: #f9f3e7;
            overflow-x: hidden;
            padding-bottom: 0;
            color: #666 !important;
        }

        .mega-dropdown {
            position: static !important;
        }



        .mega-dropdown-menu {
            padding: 20px 0px;
            width: 100%;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        .quarter-mega-dropdown-menu {
            padding: 20px 0px;
            width: 60%;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        .mega-dropdown-menu > li > ul {
            padding: 0;
            margin: 0;
        }

        .quarter-mega-dropdown-menu {
            padding: 0;
            margin: 0;
        }

        .mega-dropdown-menu > li > ul > li {
            list-style: none;
        }

        .quarter-mega-dropdown-menu  > li > ul > li{
            list-style: none;
        }

        .mega-dropdown-menu > li > ul > li > a {
            display: block;
            color: #222;
            padding: 3px 5px;
        }

        .quarter-mega-dropdown-menu > li > ul > li > a{
            display: block;
            color: #222;
            padding: 3px 5px;
        }


        .quarter-mega-dropdown-menu > li ul > li > a:hover,
        .quarter-mega-dropdown-menu > li ul > li > a:focus {
            text-decoration: none;
        }

        .mega-dropdown-menu > li ul > li > a:hover,
        .mega-dropdown-menu > li ul > li > a:focus {
            text-decoration: none;
        }

        .quarter-mega-dropdown-menu > li ul > li > a:hover,
        .quarter-mega-dropdown-menu > li ul > li > a:focus {
            text-decoration: none;
        }

        .mega-dropdown-menu .dropdown-header {
            font-size: 18px;
            color: #ff3546;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
        }

        .quarter-mega-dropdown-menu .dropdown-header {
            font-size: 18px;
            color: #ff3546;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
        }

        .carousel-control {
            width: 30px;
            height: 30px;
            top: -35px;

        }

        .left.carousel-control {
            right: 30px;
            left: inherit;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right {
            font-size: 12px;
            background-color: #fff;
            line-height: 30px;
            text-shadow: none;
            color: #333;
            border: 1px solid #ddd;
        }

        #logo-box {
            padding-left: 2%;
        }

        .values {
            font-size: 200%;
            color: #aeb6bf;
            text-transform: uppercase;
        }

        #full-name {
            font-size: 130%;
        }

        #page-head {
            background: #A57F30;
            color: #FFFFFF;
            margin-top: 1%;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div id="logo-box" class="row">
        <div class="col-md-4" align="center">
            <div class="values">Trust</div>
            <div class="values">Protection</div>
        </div>
        <div class="col-md-4" align="center"><img src="img/logo_urbra.png"></div>
        <div class="col-md-4" align="center">
            <div class="values">Transparency</div>
            <div class="values">Integrity</div>
        </div>
    </div>
    <div id="page-head" class="row">
        <div class="col-md-3"></div>
        <div id="full-name" class="col-md-6">UGANDA RETIREMENT BENEFITS REGULATORY AUTHORITY</div>
        <div class="col-md-3">
            <img src="img/facebook.png">
            <img src="img/twitter.png">
            <img src="img/googleplus.png">
            <img src="img/linkedin.png">
            <img src="img/youtube.png">
        </div>
    </div>
    <nav class="navbar navbar-inverse">


        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="">
                    <a href="#">Home <span class=""></span></a>
                </li>

                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trustees <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu quarter-mega-dropdown-menu">
                        <li class="col-sm-12">
                            <ul>
                                <li class="dropdown-header">Features</li>
                                <li><a href="#">Law of Trustees</a></li>
                                <li><a href="#">Establisment of Trustees</a></li>
                                <li><a href="#">Licensed Trustees</a></li>
                                <li><a href="#">Application of Trustee License</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Benefit Schemes <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu quarter-mega-dropdown-menu">
                        <li class="col-sm-6">
                            <ul>
                                <li class="dropdown-header">Features</li>
                                <li><a href="#">Law of Retirement Benefit Schemes</a></li>
                                <li><a href="#">Establisment of Retirement Benefit Schemes</a></li>
                                <li><a href="#">Licensed Retirement Benefit Schemes</a></li>
                                <li><a href="#">Application of Retirement Benefit Scheme Licence</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service Providers <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-4">
                            <ul>
                                <li class="dropdown-header">Custodians</li>
                                <li><a href="#">Law of Custodians</a></li>
                                <li><a href="#">List of licenced Custodians</a></li>
                                <li><a href="#">Online Application Form</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-4">
                            <ul>
                                <li class="dropdown-header">Administrators</li>
                                <li><a href="#">Law of Administrators</a></li>
                                <li><a href="#">List of licenced Administrators</a></li>
                                <li><a href="#">Online Application Form</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-4">
                            <ul>
                                <li class="dropdown-header">Fund Managers</li>
                                <li><a href="#">Law of Fund Managers</a></li>
                                <li><a href="#">List of licenced Fund Managers</a></li>
                                <li><a href="#">Online Application Form</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Regulartory Framework <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-12">
                            <ul>
                                <li class="dropdown-header">Features</li>
                                <li><a href="#">The RBS Act</a></li>
                                <li><a href="#">RBS Regulations</a></li>
                                <li><a href="#">Complaints Form</a></li>
                                <li><a href="#">Procedures and Standards</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li><a href="#">Contact</a></li>
                <li><a href="#" style="color: #ff0000!important;">Raise Complaint</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </nav>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                $(this).toggleClass('open');
            }
        );
    });
</script>
</body