<?php include '../config/config.php';
$cat_id      = $_POST['clientid'];
$clinsertsql = "SELECT * FROM customer_info WHERE id = '".$cat_id."'";
$cliqe = mysql_query($clinsertsql);
$clirows['customerinfo'] = mysql_fetch_row($cliqe);

$clinsertsql = "SELECT SUM(balance_due) as bal FROM invoice WHERE customer_id = '".$cat_id."'";
$cliqe = mysql_query($clinsertsql);
$clirows['customerinvoiceinfo'] = mysql_fetch_row($cliqe);



echo json_encode($clirows);
die;

?>