<?php include '../config/config.php';
$dealid      = $_POST['dealid'];
$clinsertsql = "SELECT * FROM achievers WHERE invoice_no = '".$dealid."'";
$cliqe = mysql_query($clinsertsql);
$clirows = mysql_fetch_row($cliqe);
	echo json_encode($clirows);
die;

?>