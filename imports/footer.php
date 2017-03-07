<style type="text/css">
    div {
        /*border: 1px solid #ff0000;*/
    }

    .footer-title {
        padding-left: 10%;
        font-size: 140%;
        color: #FFFFFF;
    }

    .footer {
        background: #a57f30;
        padding-top: 3%;
        color: #ffffff;
    }

    .footer-copyright {
        text-align: center;
        background: #765615;
        color: #ffffff;
        margin-top: 1%;
        padding-top: 1%;
        padding-bottom: 1%;
    }

    .footer-list > li {
        margin-bottom: 4%;
        list-style-type: none;
        color: #ffffff !important;
    }

    .footer-list a {
        color: #ffffff !important;
    }

    #mailing-form {
        padding-right: 2%;
    }
</style>
<script src="js/page.js" type="text/javascript"></script>
<div class="row footer">
    <div class="row">
        <div class="col-md-2">
            <p class="footer-title">Join Mailing List</p>
        </div>
        <form id="mailing-form" role="form" action="" method="post">
            <div class="form-group col-md-3">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                       required>
            </div>
            <div class="form-group col-md-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                       required>
            </div>
<!--            <div class="form-group col-md-2">-->
<!--                <img src="--><?php // echo $_SESSION['captcha']['image_src'];?><!--">-->
<!--            </div>-->
<!---->

            <div class="form-group col-md-3">
                <input type="submit" value="Subscribe" class="form-control btn-danger">
            </div>
        </form>
    </div>

    <div class="row">
        <ul style="padding-left: 4%;">
            <div class="col-md-2">
                <li><a href="faqs.php" style="color: #ffffff">FAQs</a></li>
            </div>
            <div class="col-md-2">
                <li><a href="glossary.php" style="color: #ffffff">Glossary</a></li>
            </div>
        </ul>

    </div>
    <div class="col-md-12 footer-copyright">Copyright &copy; 2016. All Rights Reserved. Uganda Retirement Benefits
        Regulatory
        Authority
    </div>
</div>
<div class="loader"><!-- Place at bottom of page --></div>
