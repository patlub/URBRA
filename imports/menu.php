<?php include_once'classes/DatabaseHelper.php'; ?>
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<link rel="icon" href="logos/logo_pic.png">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/ticker.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="css/media-news.css" type="text/css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<style type="text/css">
    /*@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);*/

    .dropdown-menu > li > a:hover {
        color: orange;
    }

    .mega-dropdown-menu > li > ul > li > a:hover {
        color: orange;
    }
    .modal-backdrop {
        z-index: 0!important;
    }
</style>
<div class="row col-md-12 col-lg-12 col-sm-12 row" style="padding-left: 0!important;padding-right: 0!important;margin-right: 0!important;">
    <div id="logo-box" class="row">
        <div class="col-md-4" align="center">
            <div id="value1" class="values">Innovativeness</div>
            <div id="value2" class="values">Protection</div>
            <div id="value3" class="values">Transparency</div>
            <div id="value4" class="values">Integrity</div>
        </div>
        <div class="col-md-4" align="center"><img src="img/logo_urbra.png"></div>
        <div class="col-md-4" align="center">
             <img src="logos/zabbulife.png" class="img img-responsive" width="120" height="120">
        </div>
    </div>
    <div id="page-head" class="row">
        <div class="col-md-3"></div>
        <div id="full-name" class="col-md-6">UGANDA RETIREMENT BENEFITS REGULATORY AUTHORITY</div>
        <div class="col-md-3">
            <a href="https://www.facebook.com/pages/Uganda-Retirement-Benefits-Regulatory-Authority/634342546684712"><img src="img/facebook.png"></a>
            <a href="https://twitter.com/urbraUg"><img src="img/twitter.png"></a>
            <a href="https://www.linkedin.com/company/uganda-retirement-benefits-regulatory-authority"><img src="img/linkedin.png"></a>
            <a href="https://www.youtube.com/channel/UCJvRJbQxaSStkBzNSRR1oSg"><img src="img/youtube.png"></a>
        </div>
    </div>
    <nav class="navbar navbar-inverse" style="font-size: 110%;margin-right: 0!important;padding-right: 0!important;">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="">
                    <a href="index.php">Home <span class=""></span></a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trustees <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header" style="font-size: 130%;color: #ff0000;padding-bottom: 5%;">
                            Trustees
                        </li>
                        <li><a href="law_of_trustees.php">Law of Trustees</a></li>
                        <li><a href="licensed_corporate_trustees.php">Licensed Corporate Trustees</a></li>
                        <li><a href="licensed_individual_trustees.php">Licensed Individual Trustees</a></li>
<!--                        <li><a href="trustees_application.php">Online Application Form</a></li>-->
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Retirement Benefit
                        Schemes <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header" style="font-size: 130%;color: #ff0000;padding-bottom: 5%;">Benefit
                            Schemes
                        </li>
                        <li><a href="law_of_schemes.php">Law of Retirement Benefit
                                Schemes</a></li>
                        <li><a href="licensed_schemes.php">Licensed Retirement Benefit Schemes</a></li>
<!--                        <li><a href="scheme_application.php">Online Application Form</a></li>-->
                    </ul>
                </li>


                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service Providers <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-4">
                            <ul>
                                <li class="dropdown-header">Custodians</li>
                                <li><a href="law_of_custodians.php">Law of Custodians</a></li>
                                <li><a href="licensed_custodians.php">List of licenced Custodians</a></li>
<!--                                <li><a href="custodian_application.php">Online Application Form</a></li>-->
                            </ul>
                        </li>
                        <li class="col-sm-4">
                            <ul>
                                <li class="dropdown-header">Administrators</li>
                                <li><a href="law_of_administrators.php">Law of Administrators</a></li>
                                <li><a href="licensed_administrators.php">List of licenced Administrators</a></li>
<!--                                <li><a href="administrator_application.php">Online Application Form</a></li>-->
                            </ul>
                        </li>
                        <li class="col-sm-4">
                            <ul>
                                <li class="dropdown-header">Fund Managers</li>
                                <li><a href="law_of_fund_managers.php">Law of Fund Managers</a></li>
                                <li><a href="licensed_fund_managers.php">List of licenced Fund Managers</a></li>
<!--                                <li><a href="fund_manager_application.php">Online Application Form</a></li>-->
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">About Us</li>
                                <li><a href="about_who_we_are.php">Who We Are</a></li>
                                <li><a href="about_functions.php">Functions of the Authority</a></li>
                                <li><a href="departments.php">Departments</a></li>
                                <li><a href="bod.php">Board of Directors</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Gallery</li>
                                <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img
                                                    src="img/about1.jpg"
                                                    class="img-responsive" alt="product 1"></a>
                                            <h4>
                                                <small></small>
                                            </h4>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img
                                                    src="img/about2.jpg"
                                                    class="img-responsive" alt="product 2"></a>
                                            <h4>
                                                <small></small>
                                            </h4>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img
                                                    src="img/about3.jpg"
                                                    class="img-responsive" alt="product 2"></a>
                                            <h4>
                                                <small></small>
                                            </h4>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img
                                                    src="img/about4.jpg"
                                                    class="img-responsive" alt="product 2"></a>
                                            <h4>
                                                <small></small>
                                            </h4>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img
                                                    src="img/about5.png"
                                                    class="img-responsive" alt="product 3"></a>
                                            <h4>
                                                <small></small>
                                            </h4>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                    <!-- End Carousel Inner -->

                                </div>
                                <!-- /.carousel -->
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="resources.php">Resources</a></li>
                <li><a href="vacancies.php">Vacancies</a></li>
                <li><a href="tenders.php">Tenders</a></li>
                <li><a href="contact.php">Contact</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Application Forms <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header" style="font-size: 130%;color: #ff0000;padding-bottom: 5%;">
                            Application Forms
                        </li>
                        <li><a href="#">Trustees</a></li>
                        <li><a href="#">Retirement Benefits Schemes</a></li>
                        <li><a href="#">Custodians</a></li>
                        <li><a href="#">Administrators</a></li>
                        <li><a href="#">Fund Managers</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </nav>
    <div class="row" style=" z-index: -10;">
        <div id="jquery-script-menu">
            <div class="ticker-container">
                <div class="ticker-caption" style="margin-right: 0!important;">
                    <p>News</p>
                </div>
                <ul style="margin-left: 0!important;">
                    <?php
                        $dbh  = new DatabaseHelper();
                        $dbh->get_articles();
                    ?>
<!--                    <div>-->
<!--                        <li><span>info 1 &ndash; <a href="#">read more</a></span></li>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <li><span>info 2 &ndash; <a href="#">read more</a></span></li>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <li><span>info 3 &ndash; <a href="#">read more</a></span></li>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <li><span>info 4 &ndash; <a href="#">read more</a></span></li>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <li><span>info 5 &ndash; <a href="#">read more</a></span></li>-->
<!--                    </div>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="success-alert" class="success-alert row" align="center">Added to mailing list</div>
<div id="network-error" class="error row" align="center">Network error</div>


<script type="text/javascript">
    $(document).ready(function () {
//        $(".dropdown").hover(
//            function () {
//                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
//                $(this).toggleClass('open');
//            },
//            function () {
//                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
//                $(this).toggleClass('open');
//            }
//        );

        // run the fade() function every 2 seconds
        setInterval(function(){
            fade();
        },100);

        // toggle between fadeIn and fadeOut with 0.3s fade duration.
        function fade(){
            $('#value1').fadeToggle(4000);
            $('#value2').fadeToggle(3200);
            $('#value3').fadeToggle(2400);
            $('#value4').fadeToggle(1600);
        }
    });
</script>
<script src="js/ticker.js"></script>

