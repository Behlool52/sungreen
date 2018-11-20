<?php 
session_start();
include '../config/config.php'; ?>

<?php

$uid      = $_POST['userid'];
$name     = $_POST['name'];
$address  = $_POST['address'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$portal    = $_POST['portal'];
$role    = $_POST['role'];
$active    = $_POST['active'];




if($uid !=''){
$cateditsql = "UPDATE electricians SET name = '".$name."', address = '".$address."', email = '".$email."', phone = '".$phone."', username = '".$username."', password = '".$password."', portal = '".$portal."', role = '".$role."', active = '".$active."' WHERE id = '".$uid."'";
$cateditquery = mysql_query($cateditsql);		
}






?>