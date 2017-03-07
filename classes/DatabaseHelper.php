<?php

/**
 * Created by PhpStorm.
 * User: PATRICK
 * Date: 1/12/2017
 * Time: 1:12 AM
 */
class DatabaseHelper

{
    protected $url;

    public function __construct()
    {
        $this->url = 'localhost/UrbraCMS/';
    }

    function get_schemes()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM rbs ORDER BY name ASC");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($scheme = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $scheme['name'];
                $address = $scheme['address'];
                $web_link = $scheme['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td style="padding-left: 2%;">
                        <a href="<?php echo $web_link;?>"><?php echo $name; ?></a>
                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo false;
        }
    }


    function get_corporate_trustees()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM corporate_trustees ORDER BY name ASC");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($trustee = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $trustee['name'];
                $address = $trustee['address'];
                $web_link = $trustee['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <a href="<?php echo $web_link;?>"><?php echo $name; ?></a>

                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo false;
        }
    }

    function get_individual_trustees()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM individual_trustees  ORDER BY name ASC");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($trustee = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $trustee['name'];
                $scheme = $trustee['scheme'];

                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $scheme; ?>
                    </td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo false;
        }
    }

    function get_custodians()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM custodians ORDER BY name ASC");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($custodian = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $custodian['name'];
                $address = $custodian['address'];
                $web_link = $custodian['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <a href="<?php echo $web_link;?>"><?php echo $name; ?></a>
                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo false;
        }
    }

    function get_administrators()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM administrators ORDER BY name ASC");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($custodian = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $custodian['name'];
                $address = $custodian['address'];
                $web_link = $custodian['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                      <a href="<?php echo $web_link;?>"><?php echo $name; ?></a>
                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo false;
        }
    }

    function get_fund_managers()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM fund_managers ORDER BY name ASC");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($fund_managers = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $fund_managers['name'];
                $address = $fund_managers['address'];
                $web_link = $fund_managers['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <a href="<?php echo $web_link;?>"><?php echo $name; ?></a>
                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo false;
        }
    }


    function get_vacancies()
    {
        $dbh = $this->connectDB();
//        $statementHandler = $dbh->prepare("SELECT * FROM vacancies WHERE start_date >= :cur_date AND end_date > :cur_date");
        $statementHandler = $dbh->prepare("SELECT * FROM vacancies WHERE start_date <= NOW() AND end_date >= NOW()");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($vacancy = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $title = $vacancy['title'];
                $desc = $vacancy['description'];
                $attachment = $vacancy['attachment'];

                ?>

                <div class="panel panel-default" style="margin-bottom: 1px!important;">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                               href="<?php echo '#' . $i; ?>"
                               aria-expanded="true" aria-controls="collapseTwo">
                                Job Title: <?php echo $title; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="<?php echo $i; ?>" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Description: <?php echo $desc; ?>

                            <div style="padding-left: 3%" class="pull-right">
                                Download: <a href="--><?php echo 'http://' . $this->url . 'docs/' . $attachment ?><!--"
                                   target="_blank"><img
                                        src="img/pdf.png"></a>
                            </div>
                        </div>

                    </div>
                </div>

                <?php
                $i++;
            }


        } else {
            echo false;
        }
    }

    function get_faqs()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM faqs");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($faq = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $question = $faq['question'];
                $answer = $faq['answer'];

                ?>

                <div class="panel panel-default" style="margin-bottom: 1px!important;">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                               href="<?php echo '#' . $i; ?>"
                               aria-expanded="true" aria-controls="collapseTwo">
                                Question: <?php echo $question; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Answer: <?php echo $answer; ?>
                        </div>
                    </div>
                </div>

                <?php
                $i++;
            }
        } else {
            echo false;
        }
    }


    function get_bods()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM bod");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($bod = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $bod['name'];
                $details = $bod['details'];
                $image = $bod['image'];

                if($i == 3){echo '<br>';}
                ?>

                <div class="col-md-4 col-sm-4" align="center" style="margin-bottom: 5%;">
                    <div><img src="<?php echo 'http://' . $this->url . 'img/' . $image ?>" class="img-responsive"></div>
                    <div class="col-md-12" style="font-weight: bold;"><?php echo $name ?></div>
                    <div class="col-md-12" style=""><?php echo $details ?></div>
                </div>

            <?php
            $i++;}
        } else {
            echo false;
        }
    }


    function get_tenders()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM tenders");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($tender = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $desc = $tender['desc'];
                $dp = $tender['date_pub'];
                $award = $tender['date_awarded'];
                $attachment = $tender['attachment'];

                ?>
                <tr>
                    <td>
                        <?php echo $desc; ?>
                    </td>
                    <td>
                        <?php echo $dp; ?>
                    </td>
                    <td>
                        <?php echo $award; ?>
                    </td>
                    <td>
                        <a href="<?php echo 'http://' . $this->url . 'docs/' . $attachment ?>" target="_blank"><img
                                src="img/pdf.png"></a>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }

    function get_acts()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM resources WHERE category = 'act'");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($resource = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $resource['name'];
                $attachment = $resource['pdf'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <a href="<?php echo 'http://' . $this->url . 'docs/' . $attachment ?>" target="_blank"><img
                                src="img/pdf.png"></a>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }

    function get_regulations()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM resources WHERE category = 'regulation'");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($resource = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $resource['name'];
                $attachment = $resource['pdf'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <a href="<?php echo 'http://' . $this->url . 'docs/' . $attachment ?>" target="_blank"><img
                                src="img/pdf.png"></a>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }

    function get_compliances()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM resources WHERE category = 'compliance'");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($resource = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $resource['name'];
                $attachment = $resource['pdf'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <a href="<?php echo 'http://' . $this->url . 'docs/' . $attachment ?>" target="_blank"><img
                                src="img/pdf.png"></a>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }

    function get_other_resources()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM resources WHERE category = 'other'");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($resource = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $resource['name'];
                $attachment = $resource['pdf'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <a href="<?php echo 'http://' . $this->url . 'docs/' . $attachment ?>" target="_blank"><img
                                src="img/pdf.png"></a>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }

    function get_articles()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM articles");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($article = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $title = $article['title'];
                ?>
                <div>
                    <li><span><a href="#"><?php echo $title; ?></a></span></li>
                </div>
            <?php
            }
        } else {
            echo false;
        }
    }

    public function get_workshops()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM workshops");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($workshops = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $workshops['id'];
                $title = $workshops['title'];
                $date = $workshops['dateheld'];
                $description = $workshops['desc'];


                $sth = $dbh->prepare("SELECT * FROM workshop_docs WHERE workshop_id = :id ");
                $sth->bindParam(':id', $id);
                $sth->execute();

                ?>
                <tr>
                    <td>
                        <?php echo $title; ?>
                    </td>
                    <td>
                        <?php echo $date; ?>
                    </td>
                    <td>
                        <?php echo $description; ?>
                    </td>
                    <td>
                        <?php
                        while ($workshop_docs = $sth->fetch(PDO::FETCH_ASSOC)) {
                            $attachment = $workshop_docs['attachment'];
                            ?>
                            <a href="<?php echo 'docs/' . $attachment ?>" target="_blank"><img src="img/pdf.png"></a>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }

    public function get_departments()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM departments");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $department = $statementHandler->fetch(PDO::FETCH_ASSOC);
            $id = $department['id'];
            $image = $department['image'];

            ?>
            <tr>
                <td>
                    <img src="<?php echo 'http://' . $this->url . 'img/' . $image; ?>" class="img-responsive">
                </td>
            </tr>
        <?php

        } else {
            echo false;
        }
    }


    public function get_reports()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM reports");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            $i = 1;
            while ($report = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $report['id'];
                $title = $report['title'];
                $date = $report['date_realesed'];
                $description = $report['desc'];
                $attachment = $report['attachment'];

                ?>
                <tr>

                    <td>
                        <?php echo $title; ?>
                    </td>
                    <td>
                        <?php echo $date; ?>
                    </td>
                    <td>
                        <?php echo $description; ?>
                    </td>
                    <td>
                        <a href="<?php echo 'docs/' . $attachment ?>" target="_blank"><img src="img/pdf.png"></a>
                    </td>

                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }


    public function get_media()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM internal_media");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($emedia = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $title = $emedia['title'];
                $source = $emedia['source'];
                $date = $emedia['date_realesed'];
                $link = $emedia['attachment'];

                ?>
                <div class="media">
                    <a href="<?php echo 'http://' . $this->url . 'docs/' . $link; ?>" target="_blank">
                        <dt><?php echo $title; ?></dt>

                        <dd><img src="img/news_icon.png" width="15" height="15"
                                 style="margin-right: 1%;"><?php echo $source; ?>
                            <img src="img/clock_icon.png" width="15" height="15"
                                 style="margin-left: 2%;margin-right: 2%;"><?php echo $date; ?></dd>
                    </a>
                </div>
            <?php
            }
        }

        $statementHandler = $dbh->prepare("SELECT * FROM external_media");
        $statementHandler->execute();

        if ($statementHandler->rowCount() > 0) {
            while ($emedia = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $title = $emedia['title'];
                $source = $emedia['source'];
                $date = $emedia['date_realesed'];
                $link = $emedia['link'];

                ?>
                <div class="media">
                    <a href="<?php echo 'http://' . $link; ?>" target="_blank">
                        <div>
                            <dt><?php echo $title; ?></dt>

                            <dd><img src="img/news_icon.png" width="15" height="15"
                                     style="margin-right: 1%;"><?php echo $source; ?>
                                <img src="img/clock_icon.png" width="15" height="15"
                                     style="margin-left: 2%;margin-right: 2%;"><?php echo $date; ?></dd>

                        </div>
                    </a>
                </div>
            <?php
            }
        }
    }

    public function fetch_trustee_law()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM trustee_law');
        $stmt->execute();
        while ($law = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tab = $law['tab'];
            $detail = $law['details'];

            ?>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $tab; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="headingOne">
                    <div class="panel-body">
                        <?php echo $detail; ?>
                    </div>
                </div>
            </div>
        <?php

        }
    }

    public function fetch_scheme_law()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM scheme_law');
        $stmt->execute();
        while ($law = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tab = $law['tab'];
            $detail = $law['details'];

            ?>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $tab; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="headingOne">
                    <div class="panel-body">
                        <?php echo $detail; ?>
                    </div>
                </div>
            </div>
        <?php

        }
    }

    public function fetch_admin_law()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM admin_law');
        $stmt->execute();
        while ($law = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tab = $law['tab'];
            $detail = $law['details'];

            ?>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $tab; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="headingOne">
                    <div class="panel-body">
                        <?php echo $detail; ?>
                    </div>
                </div>
            </div>
        <?php

        }
    }

    public function fetch_custodian_law()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM custodian_law');
        $stmt->execute();
        while ($law = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tab = $law['tab'];
            $detail = $law['details'];

            ?>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $tab; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="headingOne">
                    <div class="panel-body">
                        <?php echo $detail; ?>
                    </div>
                </div>
            </div>
        <?php

        }
    }

    public function fetch_fund_manager_law()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM fund_manager_law');
        $stmt->execute();
        while ($law = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tab = $law['tab'];
            $detail = $law['details'];

            ?>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $tab; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="headingOne">
                    <div class="panel-body">
                        <?php echo $detail; ?>
                    </div>
                </div>
            </div>
        <?php

        }
    }

    public function fetch_who_we_are()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM who_we_are');
        $stmt->execute();
        while ($law = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tab = $law['tab'];
            $detail = $law['details'];

            ?>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $tab; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="headingOne">
                    <div class="panel-body">
                        <?php echo $detail; ?>
                    </div>
                </div>
            </div>
        <?php

        }
    }

    public function fetch_functions()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM functions');
        $stmt->execute();
        while ($law = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tab = $law['tab'];
            $detail = $law['details'];

            ?>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $tab; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="headingOne">
                    <div class="panel-body">
                        <?php echo $detail; ?>
                    </div>
                </div>
            </div>
        <?php

        }
    }

    public function add_mail($name, $email)
    {
        $id = '';
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('INSERT INTO mailing_list VALUES (:id, :_name, :email)');
        $result = $stmt->execute(array('id' => $id, '_name' => $name, 'email' => $email));
        return $result;
    }

    public function send_mail($name, $sender, $message)
    {
        $id = '';
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('INSERT INTO mail VALUES (:id, :_name, :sender, :email)');
        $result = $stmt->execute(array('id' => $id, '_name' => $name, 'sender' => $sender, 'email' => $message));
        if ($result) {
            $to = 'urbra@urbra.go.ug';
            $subject = 'Website Comment';
            $result = mail($to, $subject, $message);
            return $result;
        }
    }

    public function custom_page($page_name)
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM content INNER JOIN pages ON pages.id = content.page_id WHERE pages.name = :page_name');
        $stmt->execute(array('page_name' => $page_name));
        $content = $stmt->fetch(PDO::FETCH_ASSOC);
        return $content['content'];
    }

    public function get_corp_trustee_stamp()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM time_stamps WHERE licences = :licence');
        $stmt->execute(array('licence' => 'Corporate_Trustees'));
        $last_updated = $stmt->fetch(PDO::FETCH_ASSOC);
        return $last_updated['last_updated'];
    }

    public function get_ind_trustee_stamp()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM time_stamps WHERE licences = :licence');
        $stmt->execute(array('licence' => 'Individual_Trustees'));
        $last_updated = $stmt->fetch(PDO::FETCH_ASSOC);
        return $last_updated['last_updated'];
    }

    public function get_admin_stamp()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM time_stamps WHERE licences = :licence');
        $stmt->execute(array('licence' => 'Administrators'));
        $last_updated = $stmt->fetch(PDO::FETCH_ASSOC);
        return $last_updated['last_updated'];
    }

    public function get_custodian_stamp()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM time_stamps WHERE licences = :licence');
        $stmt->execute(array('licence' => 'Custodians'));
        $last_updated = $stmt->fetch(PDO::FETCH_ASSOC);
        return $last_updated['last_updated'];
    }

    public function get_fund_manager_stamp()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM time_stamps WHERE licences = :licence');
        $stmt->execute(array('licence' => 'Fund_Managers'));
        $last_updated = $stmt->fetch(PDO::FETCH_ASSOC);
        return $last_updated['last_updated'];
    }

    public function get_scheme_stamp()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM time_stamps WHERE licences = :licence');
        $stmt->execute(array('licence' => 'Schemes'));
        $last_updated = $stmt->fetch(PDO::FETCH_ASSOC);
        return $last_updated['last_updated'];
    }

    public function search($search_term)
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM resources WHERE `name` LIKE :search_term');
        $stmt->execute(array('search_term' => $search_term));
        if ($stmt->rowCount() > 0) {
            while ($resource = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $name = $resource['name'];
                $attachment = $resource['pdf'];
                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <a href="<?php echo 'http://' . $this->url . 'docs/' . $attachment ?>" target="_blank"><img
                                src="img/pdf.png"></a>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }

    public function get_you_tube_link()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM youtube');
        $result = $stmt->execute();
        if($result){
            $you_tube = $stmt->fetch(PDO::FETCH_ASSOC);
            $link = $you_tube['link'];
            return $link;
        }
        return false;
    }

    public function connectDB()
    {
        $DB_HOST = "localhost";
        $DB_NAME = "urbra";
        $DB_USER = "root";
        $DB_PASSWORD = "";
        try {
            return new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
} 