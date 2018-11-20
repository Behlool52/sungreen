<?php 
session_start();
include '../config/config.php';

$invorows = array();
//$invoprorowsw = array();



$invo_id      = $_POST['invoiceid'];



$invosql = "SELECT invoice.*, customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice.id = '".$invo_id."'";
$invoque = mysql_query($invosql);
$invorowsw = mysql_fetch_row($invoque);

$cutprice = $invorowsw['13']-$invorowsw['15'];

//print_r($invorowsw);


//============ GST
$gstsql = "SELECT SUM(product_rate) as gsttotal FROM order_tbl WHERE invoice_no = '".$invorowsw[3]."' AND gst = 'yes' GROUP BY invoice_no";
$gstque = mysql_query($gstsql);
$gstarray = mysql_fetch_array($gstque);

$invoiceofgst =  $gstarray['gsttotal']*9.09/100;
//================ GST ends



$invoprosql = "SELECT * FROM order_tbl WHERE invoice_no = '".$invorowsw[3]."'";
$invoproque = mysql_query($invoprosql);
while($row = mysql_fetch_array($invoproque)){
	
$invoprod = "SELECT * FROM products WHERE id = '".$row['product_id']."'";
$invoprodque = mysql_query($invoprod);	
$prodrow = mysql_fetch_array($invoprodque);	
	
$invoprorowsw[]= array("id"=>$row['id'],"product_id"=>$prodrow['product_name'],"product_desc"=>$row['product_desc'],"product_qty"=>$row['product_qty'],"product_rate"=>$row['product_rate'],"gst"=>$row['gst'],"total_amount"=>$row['total_amount']);
}







$invorows['cutprice'] = $cutprice;
$invorows['general'] = $invorowsw;
$invorows['products'] = $invoprorowsw;
$invorows['gst'] = $invoiceofgst;

	echo json_encode($invorows);
die;

?>