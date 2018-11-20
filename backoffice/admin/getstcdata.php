<?php include '../config/config.php';
$stc_id      = $_POST['stcid'];
$clinsertsql = "SELECT * FROM stc WHERE invoice_no = '".$stc_id."'";
$cliqe = mysql_query($clinsertsql);
$clirows = mysql_fetch_row($cliqe);
	echo json_encode($clirows);
die;

?>