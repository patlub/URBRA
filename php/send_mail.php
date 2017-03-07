<?php
/**
 * Created by PhpStorm.
 * User: PATRICK
 * Date: 2/14/2017
 * Time: 4:46 AM
 */

include('../classes/DatabaseHelper.php');
session_start();

$captcha = $_POST['captcha'];
if($captcha == $_SESSION['captcha']['code']){
    $name = $_POST['name'];
    $sender = $_POST['sender'];
    $message = $_POST['message'];
    $dbh = new DatabaseHelper();
    $result = $dbh->send_mail($name, $sender, $message);
    echo $result;
}
else{
    echo '2';
}
