<?php include '../config/config.php';
$cat_id      = $_POST['productid'];
$clinsertsql = "SELECT * FROM products WHERE id = '".$cat_id."'";
$cliqe = mysql_query($clinsertsql);
$clirows = mysql_fetch_row($cliqe);
	echo json_encode($clirows);
die;

?>