<style type="text/css">
    .footer-title {
        padding-left: 10%;
        /*font-weight: bold;*/
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
        /*margin-left: 8%;*/
        /*margin-right: 8%;*/
    }

    .footer-list > li {
        /*margin-top: 3%;*/
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
<div class="row footer">
    <div class="col-md-3">
        <p class="footer-title">Quick Links</p>
        <ul class="footer-list">
            <li><a href="#">Contact US</a></li>
            <li><a href="#">Regulartory Guidance</a></li>
            <li><a href="#">Codes of Practice</a></li>
            <li><a href="#">Automatic Enrollment</a></li>
            <li><a href="#">Consultations</a></li>
            <li><a href="#">Events</a></li>
        </ul>
    </div>

    <div class="col-md-3">
        <p class="footer-title">About Us</p>
        <ul class="footer-list">
            <li><a href="#">About Us</a></li>
            <li><a href="#">How we Regulate</a></li>
            <li><a href="#">Glossary</a></li>
            <li><a href="#">Employment Oppotuniity</a></li>
            <li><a href="#">Website Feedback</a></li>
            <li><a href="#">Website Updates</a></li>
        </ul>
    </div>

    <div class="col-md-3">
        <p class="footer-title">Website Help</p>
        <ul class="footer-list">
            <li><a href="#">Website Policies</a></li>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Copyright</a></li>
            <li><a href="#">Cookie Policy</a></li>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">Freedom of Information</a></li>
        </ul>
    </div>

    <div class="col-md-3">
        <p class="footer-title">Join Mailing List</p>

        <form id="mailing-form" role="form" action="" method="post">
            <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                       required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                       required>
            </div>

            <div class="form-group">
                <input type="submit" value="Subscribe" class="form-control btn-danger">
            </div>
        </form>
    </div>
    <div class="col-md-12 footer-copyright">Copyright &copy; 2016. All Rights Reserved. Uganda Retirement Benefits
        Regulartory
        Authority
    </div>
</div>