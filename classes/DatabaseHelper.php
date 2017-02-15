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
            while ($scheme = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $scheme['id'];
                $name = $scheme['name'];
                $category = $scheme['category'];
                $address = $scheme['address'];
                $web_link = $scheme['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $category; ?></td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                    <td>
                        <?php echo $web_link; ?>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }


    function get_trustees()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM trustees ORDER BY name ASC");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($trustee = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $trustee['id'];
                $name = $trustee['name'];
                $category = $trustee['category'];
                $address = $trustee['address'];
                $web_link = $trustee['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $category; ?></td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                    <td>
                        <?php echo $web_link; ?>
                    </td>

                </tr>
            <?php
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
            while ($custodian = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $custodian['id'];
                $name = $custodian['name'];
                $category = $custodian['category'];
                $address = $custodian['address'];
                $web_link = $custodian['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $category; ?></td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                    <td>
                        <?php echo $web_link; ?>
                    </td>

                </tr>
            <?php
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
            while ($custodian = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $custodian['id'];
                $name = $custodian['name'];
                $category = $custodian['category'];
                $address = $custodian['address'];
                $web_link = $custodian['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $category; ?></td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                    <td>
                        <?php echo $web_link; ?>
                    </td>
                </tr>
            <?php
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
            while ($fund_managers = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $id = $fund_managers['id'];
                $name = $fund_managers['name'];
                $category = $fund_managers['category'];
                $address = $fund_managers['address'];
                $web_link = $fund_managers['web_link'];

                ?>
                <tr>
                    <td>
                        <?php echo $name; ?>
                    </td>
                    <td>
                        <?php echo $category; ?></td>
                    <td>
                        <?php echo $web_link; ?>
                    </td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }


    function get_vacancies()
    {
        $date = date('Y-m-d h-m-s');
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM vacancies WHERE start_date < :cur_date AND end_date > :cur_date");
        $statementHandler->bindParam(':cur_date', $date);
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($vacancy = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $title = $vacancy['title'];
                $desc = $vacancy['description'];
                $attachment = $vacancy['attachment'];

                ?>
                <tr>
                    <td>
                        <?php echo $title; ?>
                    </td>
                    <td>
                        <?php echo $desc; ?>
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

    function get_faqs()
    {
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM faqs");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($faq = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $question = $faq['question'];
                $answer = $faq['answer'];

                ?>
                <tr>
                    <td>
                        <span style="font-weight: bold;">Question: </span><?php echo $question; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 5%;">
                        <span style="font-weight: bold;">Answer: </span><?php echo $answer; ?>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo false;
        }
    }


    function get_bods()
    {
        $date = date('Y-m-d h-m-s');
        $dbh = $this->connectDB();
        $statementHandler = $dbh->prepare("SELECT * FROM bod");
        $statementHandler->execute();
        if ($statementHandler->rowCount() > 0) {
            while ($bod = $statementHandler->fetch(PDO::FETCH_ASSOC)) {
                $name = $bod['name'];
                $details = $bod['details'];
                $image = $bod['image'];

                ?>
                <div class="col-md-6" align="center">
                    <div><img src="<?php echo 'http://' . $this->url . 'img/' . $image ?>" class="img-responsive"></div>
                    <div class="col-md-12"><?php echo $name ?></div>
                    <div class="col-md-12"><?php echo $details ?></div>
                </div>


            <?php
            }
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
                    <li><span>info 1 &ndash; <a href="#"><?php echo $title; ?></a></span></li>
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
                    <a href="<?php echo 'http://'.$this->url . 'docs/' . $link; ?>" target="_blank">
                            <dt><?php echo $title; ?></dt>

                            <dd><?php echo $source.' '.$date; ?></dd>


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
                <div class="media" ">
                    <a href="<?php echo 'http://'.$link; ?>" target="_blank">
                        <div>
                            <dt><?php echo $title; ?></dt>

                            <dd><?php echo $source.' '.$date; ?></dd>

                        </div>
                    </a>
                </div>
            <?php
            }
        }
    }

    public function fetch_trustee_law(){
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM laws WHERE provider = :provider');
        $provider = 'trustee';
        $stmt->bindParam(':provider',$provider);
        $stmt->execute();
        $law = $stmt->fetch(PDO::FETCH_ASSOC);
        return $law;
    }

    public function fetch_scheme_law(){
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM laws WHERE provider = :provider');
        $provider = 'scheme';
        $stmt->bindParam(':provider',$provider);
        $stmt->execute();
        $law = $stmt->fetch(PDO::FETCH_ASSOC);
        return $law;
    }

    public function fetch_admin_law(){
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM laws WHERE provider = :provider');
        $provider = 'admin';
        $stmt->bindParam(':provider',$provider);
        $stmt->execute();
        $law = $stmt->fetch(PDO::FETCH_ASSOC);
        return $law;
    }

    public function fetch_custodian_law(){
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM laws WHERE provider = :provider');
        $provider = 'custodian';
        $stmt->bindParam(':provider',$provider);
        $stmt->execute();
        $law = $stmt->fetch(PDO::FETCH_ASSOC);
        return $law;
    }

    public function fetch_fund_manager_law(){
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM laws WHERE provider = :provider');
        $provider = 'fund_manager';
        $stmt->bindParam(':provider',$provider);
        $stmt->execute();
        $law = $stmt->fetch(PDO::FETCH_ASSOC);
        return $law;
    }

    public function fetch_who_we_are()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM who_we_are');
        $stmt->execute();
        $who_we_are = $stmt->fetch(PDO::FETCH_ASSOC);
        return $who_we_are;
    }

    public function fetch_functions()
    {
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('SELECT * FROM functions');
        $stmt->execute();
        $functions = $stmt->fetch(PDO::FETCH_ASSOC);
        return $functions;
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

    public function add_mail($name, $email)
    {
        $id = '';
        $dbh = $this->connectDB();
        $stmt = $dbh->prepare('INSERT INTO mailing_list VALUES (:id, :_name, :email)');
        $result = $stmt->execute(array('id' => $id, '_name' => $name, 'email' => $email));
        return $result;
    }
} 