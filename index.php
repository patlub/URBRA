<?php include_once 'classes/DatabaseHelper.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>URBRA2</title>
</head>
<body>
<div class="container-fluid" style="padding-right: 0!important;padding-left: 0!important;">
<div class="row">
    <?php include_once 'imports/menu.php'; ?>
</div>
<div class="row" style="">
    <div class="col-md-8 col-sm-12 col-lg-8" style="padding: 0;">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol id="indicators" class="carousel-indicators"></ol>

            <!-- Wrapper for slides -->
            <div id="carousel-inner" class="carousel-inner" role="listbox"></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <a href="#">
            <div class="col-md-5 col-sm-5 col-xs-5 thumbnail page-thumb" style="margin-right: 10%;" tabindex="0"
                 role="button"
                 data-toggle="popover"
                 data-trigger="focus" title="Trustees"
                 data-html="true"
                 data-content="<a class='pop-link' href='law_of_trustees.php'>Law of Trustees</a><br><a href='licensed_trustees.php'>List of licensed trustees</a><br><a href='trustees_application.php'>Application for Trustees</a>">
                <div class="row" align="center">
                    <img src="img/trustee2.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Trustees
                </div>
            </div>
        </a>

        <a href="#">
            <div class="col-md-5 col-sm-5 col-xs-5 thumbnail page-thumb" tabindex="0" role="button"
                 data-toggle="popover"
                 data-trigger="focus" title="Custodians"
                 data-html="true"
                 data-placement="left"
                 data-content="<a href='law_of_custodians.php'>Law of Custodians</a><br><a href='licensed_custodians.php'>List of licensed custodians</a><br><a href='custodian_application.php'>Application for Custodians</a>">
                <div class="row" align="center">
                    <img src="img/government2.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Custodians
                </div>
            </div>
        </a>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <a href="#">
            <div class="col-md-5 col-sm-5 col-xs-5 thumbnail page-thumb" style="margin-right: 10%;" tabindex="0"
                 role="button"
                 data-toggle="popover"
                 data-trigger="focus" title="Retirement Benefits Schemes"
                 data-html="true"
                 data-content="<a href='law_of_schemes.php'>Law of Schemes</a><br><a href='licensed_schemes.php'>List of licensed schemes</a><br><a href='scheme_application.php'>Application for RBS</a>">
                <div class="row" align="center">
                    <img src="img/ben_scheme.png" width="50" height="48">
                </div>
                <div id="scheme-text" class="row desc-text" align="center">
                    Retirement Benefits Scheme
                </div>
            </div>
        </a>

        <a href="#">
            <div class="col-md-5 col-sm-5 col-xs-5 thumbnail page-thumb" tabindex="0" role="button"
                 data-toggle="popover"
                 data-trigger="focus" title="Administrators"
                 data-html="true"
                 data-placement="left"
                 data-content="<a href='law_of_administrators.php'>Law of Administrators</a><br><a href='licensed_administrators.php'>List of licensed administrators</a><br><a href='administrator_application.php'>Application for Administrators</a>">
                <div class="row" align="center">
                    <img id="admin-icon" src="img/admin.png" width="50" height="48">
                </div>
                <div id="admin-tex" class="row desc-text" align="center">
                    Administrators
                </div>
            </div>
        </a>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <a href="http://complaints.urbra.go.ug">
            <div class="col-md-5 col-sm-5 col-xs-5 thumbnail page-thumb" style="margin-right: 10%;">
                <div class="row" align="center">
                    <img src="img/complaint2.png" width="50" height="48">
                </div>
                <div id="complaint-text" class="row desc-text" align="center">
                    Complaints
                </div>
            </div>
        </a>

        <div class="col-md-5 col-sm-5 col-xs-5 thumbnail page-thumb" tabindex="0" role="button"
             data-toggle="popover"
             data-trigger="focus" title="Administrators"
             data-html="true"
             data-placement="left"
             data-content="<a href='law_of_fun_managers.php'>Law of Fund Managers</a><br><a href='licensed_fund_managers.php'>List of licensed fund managers</a><br><a href='fund_manager_application.php'>Application for Fund Managers</a>">
            <div class="row" align="center">
                <img src="img/fund.png" width="50" height="48">
            </div>
            <div class="row desc-text" align="center">
                Fund Managers
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

        <div class="col-md-5 col-sm-5 col-xs-5 thumbnail page-thumb" style="margin-right: 10%;">
            <div class="row" align="center">
                <img src="img/resources2.png" width="50" height="48">
            </div>
            <div class="row desc-text" align="center">
                Resources
            </div>
        </div>

        <div class="col-md-5 col-sm-5 col-xs-5 thumbnail page-thumb" style="">
            <div class="row" align="center">
                <img src="img/events2.png" width="50" height="48">
            </div>
            <div class="row desc-text" align="center">
                Workshops
            </div>
        </div>
    </div>
</div>

<div id="services-row" class="row" style="margin-top: 2%;" align="center">
    <div class="col-md-4 col-sm-4 thumbnail service-box">
        <div class="row">
            <img id="sec_img1" src="" class="service-image img-square">
            <a href="workshops.php">
                <div id="sec_head1" class="row service-title"></div>
            </a>

            <div id="sec_text1" class="row"></div>
        </div>
        <div class="row">
            <img id="sec_img3" src="" class="service-image img-square" style="margin-top: 5%;">
            <a href="workshops.php">
                <div id="sec_head3" class="row service-title"></div>
            </a>

            <div id="sec_text3" class="row"></div>
        </div>
        <!--        <div class="row">-->
        <!--            <input id="sec_btn1" type="button" onclick="location.href ='workshops.php'" value=""-->
        <!--                   class="btn btn-warning btn-lg service-btn">-->
        <!--        </div>-->

    </div>
    <!--    <div class="col-md-3 col-sm-3 thumbnail service-box">-->
    <!--        <img id="sec_img3" src="" class="service-image img-square">-->
    <!---->
    <!--        <div id="sec_head3" class="row service-title"></div>-->
    <!--        <div id="sec_text3" class="row"></div>-->
    <!--        <div class="row">-->
    <!--            <input type="button" value="Reports" onclick="location.href ='reports.php'"-->
    <!--                   class="btn btn-warning btn-lg service-btn">-->
    <!--        </div>-->
    <!--    </div>-->
    <div class="col-md-4 col-sm-4 service-box" style="padding-top: 1%;">

        <div><h2>Media Releases</h2></div>

        <dl id="ticker">

            <?php
            $dh = new DatabaseHelper();
            $dh->get_media();

            ?>

        </dl>

        <style type="text/css" scoped="">
            #ticker {
                width: 100%;
                height: 300px;
                /*border: 1px solid #aaaaaa;*/
                background-color: #ffffff;
                overflow: auto;
            }

            #ticker dt {
                font: normal 14px Georgia;
                padding: 0 10px 5px 10px;
                /*background-color: #e5e5e5;*/
                background-color: #ffffff;
                padding-top: 10px;
                border: 1px solid #ffffff;
                border-bottom: none;
                border-right: none;
                position: relative;
            }

            #ticker dd {
                margin-left: 0;
                font: normal 11px Verdana;
                padding: 0 10px 10px 10px;
                border-bottom: 1px solid #aaaaaa;
                /*background-color: #e5e5e5;*/
                background-color: #ffffff;

                border-left: 1px solid #ffffff;
                position: relative;
            }

            #ticker dd.last {
                border-bottom: 1px solid #ffffff;
            }

            #ticker div {
                margin-top: 0;
            }
        </style>
        <script>
            $(function () {

                //cache the ticker
                var ticker = $("#ticker");

                //wrap dt:dd pairs in divs
                ticker.children().filter("dt").each(function () {

                    var dt = $(this),
                        container = $("<div>");

                    dt.next().appendTo(container);
                    dt.prependTo(container);

                    container.appendTo(ticker);
                });

                //hide the scrollbar
                ticker.css("overflow", "hidden");


                //animator function
                function animator(currentItem) {

                    //work out new anim duration
                    var distance = currentItem.height();
                    duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.025;

                    //animate the first child of the ticker
                    currentItem.animate({marginTop: -distance}, duration, "linear", function () {

                        //move current item to the bottom
                        currentItem.appendTo(currentItem.parent()).css("marginTop", 0);

                        //recurse
                        animator(currentItem.parent().children(":first"));
                    });

                };

                //start the ticker
                animator(ticker.children(":first"));

                //set mouseenter
                ticker.mouseenter(function () {

                    //stop current animation
                    ticker.children().stop();

                });

                //set mouseleave
                ticker.mouseleave(function () {

                    //resume animation
                    animator(ticker.children(":first"));
                });
            });

        </script>
    </div>
    <div class="col-md-4 col-sm-4 thumbnail">
        <div><h2>Youtube Channel</h2></div>

        <?php
        $dbh = new DatabaseHelper();
        $link = $dbh->get_you_tube_link();
        ?>
        <iframe width="500" height="350" src="<?php echo 'https://www.youtube.com/embed/' . $link; ?>" frameborder="0"
                allowfullscreen></iframe>
    </div>
</div>

<?php include_once 'imports/footer.php'; ?>
<?php include_once 'imports/contact.php'; ?>

<a href="#" data-toggle="modal" data-target="#contactModal">
    <div id="qbtn">
        Questions/<br>Comments
    </div>
</a>
</div>

</body>
<script type="text/javascript">
    //        $(document).ready(function () {
    //            $(".dropdown").hover(
    //                function () {
    //                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
    //                    $(this).toggleClass('open');
    //                },
    //                function () {
    //                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
    //                    $(this).toggleClass('open');
    //                }
    //            );
    //        });

    $(function () {
        $('[data-toggle="popover"]').popover()
    });
</script>
</html>