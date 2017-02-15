<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include_once 'imports/menu.php'; ?>
    </div>
    <div class="row">
        <h4 style="text-transform: uppercase;">Contact Page</h4>
    </div>
    <form role="form" action="" method="post">
        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                               aria-expanded="true" aria-controls="collapseTwo">
                                Contact Information
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p>4th-6th Floor</p>

                            <p>Plot 1 Clement Hill Rd.</p>

                            <p>P.O.Box 7561, Kampala</p>

                            <p>Tel: +256 417 304 500</p>

                            <p>Email: urbra@urbra.go.ug</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname">Name</label><input type="text" id="firstname" name="firstname"
                                                              class="form-control"
                                                              required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label><input type="email" id="email" name="email" class="form-control"
                                                           required>
                </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="SEND" class="form-control btn btn-primary">
                </div>

            </div>
            <div class="col-md-7">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.50933960299!2d32.57968037284619!3d0.32364037774993426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb83a3290fb1%3A0x3f8068d1956e65f3!2sUganda+Retirements+Benefits+Regulatory+Authority+URBRA!5e0!3m2!1sen!2sug!4v1486409148063"
                    width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </form>
    <div class="row">
        <?php include_once 'imports/footer.php'; ?>
        <?php include_once 'imports/contact.php'; ?>
        <a href="#" data-toggle="modal" data-target="#contactModal"><div id="qbtn">
                Questions/<br>Comments
            </div></a>
    </div>
</div>
</body>
</html>