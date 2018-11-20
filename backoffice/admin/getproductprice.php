<?php 
header('Access-Control-Allow-Origin: *');
include 'config/config.php';
$prodid     = $_POST['prodid'];
$clinsertsql = "SELECT rate, description FROM products WHERE id = '".$prodid."'";
$cliqe = mysql_query($clinsertsql);
$clirows = mysql_fetch_row($cliqe);
echo json_encode($clirows);
die;

?>