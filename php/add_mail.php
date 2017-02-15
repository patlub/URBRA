<?php
/**
 * Created by PhpStorm.
 * User: PATRICK
 * Date: 2/14/2017
 * Time: 4:46 AM
 */

include('../classes/DatabaseHelper.php');


$name = $_POST['name'];
$email = $_POST['email'];

$dbh = new DatabaseHelper();
$result = $dbh->add_mail($name, $email);
echo $result;