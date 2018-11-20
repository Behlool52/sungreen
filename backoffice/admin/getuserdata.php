<?php include '../config/config.php';
$user_id      = $_POST['userid'];
$clinsertsql = "SELECT * FROM electricians WHERE id = '".$user_id."'";
$cliqe = mysql_query($clinsertsql);
$clirows = mysql_fetch_row($cliqe);
	echo json_encode($clirows);
die;

?>