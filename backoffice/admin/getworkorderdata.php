<?php include '../config/config.php';
$work_id      = $_POST['workid'];
$clinsertsql = "SELECT * FROM work_order WHERE invoice_id = '".$work_id."'";
$cliqe = mysql_query($clinsertsql);
$clirows = mysql_fetch_row($cliqe);
	echo json_encode($clirows);
die;

?>