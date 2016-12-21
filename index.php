<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>URBRA2</title>
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
                        <a href="#"><img src="img/Strategic%20Plan%20Launch2.jpg" alt="..."></a>

                        <div class="carousel-caption">
                            <span style="font-size: 150%;background-color: #222222;">The Launch of the strategic plan from 2015 to 2020</span>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="img/Strategic%20Plan%20Launch2.jpg" alt="..."></a>

                        <div class="carousel-caption">
                            <span style="font-size: 150%;background-color: #222222;">The Launch of the strategic plan from 2015 to 2020</span>

                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="img/Strategic%20Plan%20Launch2.jpg" alt="..."></a>

                        <div class="carousel-caption">
                            <span style="font-size: 150%;background-color: #222222;">The Launch of the strategic plan from 2015 to 2020</span>
                        </div>
                    </div>
                    <!--...-->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#">
                <div class="col-md-5 thumbnail page-thumb" style="margin-right: 10%;" tabindex="0" role="button"
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

            <a href="http://complaints.urbra.co.ug">
                <div class="col-md-5 thumbnail page-thumb" style="">
                    <div class="row" align="center">
                        <img src="img/complaint2.png" width="50" height="48">
                    </div>
                    <div class="row desc-text" align="center">
                        Complaints
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="#">
                <div class="col-md-5 thumbnail page-thumb" style="margin-right: 10%;" tabindex="0" role="button"
                     data-toggle="popover"
                     data-trigger="focus" title="Retirement Benefits Schemes"
                     data-html="true"
                     data-content="<a href='law_of_schemes.php'>Law of Schemes</a><br><a href='licensed_schemes.php'>List of licensed schemes</a><br><a href='scheme_application.php'>Application for RBS</a>">
                    <div class="row" align="center">
                        <img src="img/ben_scheme.png" width="50" height="48">
                    </div>
                    <div class="row desc-text" align="center">
                        Retirement Benefits Scheme
                    </div>
                </div>
            </a>

            <div class="col-md-5 thumbnail page-thumb">
                <div class="row" align="center">
                    <img src="img/resources2.png" width="50" height="48" style="margin-top: 10%;">
                </div>
                <div class="row desc-text" align="center" style="padding-bottom: 10%;">
                    Resouces
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#">
                <div class="col-md-5 thumbnail page-thumb" style="margin-right: 10%;" tabindex="0" role="button"
                     data-toggle="popover"
                     data-trigger="focus" title="Custodians"
                     data-html="true"
                     data-content="<a href='law_of_custodians.php'>Law of Custodians</a><br><a href='licensed_custodians.php'>List of licensed custodians</a><br><a href='custodian_application.php'>Application for Custodians</a>">
                    <div class="row" align="center">
                        <img src="img/government2.png" width="50" height="48">
                    </div>
                    <div class="row desc-text" align="center">
                        Custodians
                    </div>
                </div>
            </a>

            <div class="col-md-5 thumbnail page-thumb" style="">
                <div class="row" align="center">
                    <img src="img/vacancy.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Vacancies
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <a href="#">
                <div class="col-md-5 thumbnail page-thumb" style="margin-right: 10%;" tabindex="0" role="button"
                     data-toggle="popover"
                     data-trigger="focus" title="Administrators"
                     data-html="true"
                     data-content="<a href='law_of_administrators.php'>Law of Administrators</a><br><a href='licensed_administrators.php'>List of licensed administrators</a><br><a href='administrator_application.php'>Application for Administrators</a>">
                    <div class="row" align="center">
                        <img src="img/admin.png" width="50" height="48">
                    </div>
                    <div class="row desc-text" align="center">
                        Administrators
                    </div>
                </div>
            </a>

            <div class="col-md-5 thumbnail page-thumb" style="">
                <div class="row" align="center">
                    <img src="img/events2.png" width="50" height="48">
                </div>
                <div class="row desc-text" align="center">
                    Events
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
    <?php include_once 'imports/contact.php'; ?>

    <?php include_once 'imports/footer.php'; ?>
    <?php include_once 'imports/contact.php'; ?>

    <a href="#" data-toggle="modal" data-target="#contactModal"><div id="qbtn">
        Questions/Comments
    </div></a>
</div>

</body>
<script type="text/javascript">
    //    $(document).ready(function () {
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
    //    });

    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
</html>