<?php 
session_start();
include '../config/config.php'; ?>

<?php

$clientid      = $_POST['clientid'];
$first_name    = $_POST['first_name'];
$last_name     = $_POST['last_name'];
$email         = $_POST['email'];
$phone         = $_POST['phone'];
$mobile        = $_POST['mobile'];





if($clientid !=''){
$cateditsql = "UPDATE customer_info SET first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', phone = '".$phone."', mobile = '".$mobile."' WHERE id = '".$clientid."'";
$cateditquery = mysql_query($cateditsql);		
}






?>