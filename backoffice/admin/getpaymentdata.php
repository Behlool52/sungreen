<?php include '../config/config.php';

$invorows = array();
//$invoprorowsw = array();

$pay_id      = $_POST['paymentid'];

$invosql = "SELECT payment.*, customer_info.* FROM payment join customer_info on payment.customer_id = customer_info.id WHERE payment.id = '".$pay_id."'";

$invoque = mysql_query($invosql);
$invorowsw = mysql_fetch_row($invoque);

$ary = $invorowsw[3];
$myArray = explode(',', $ary);

foreach($myArray as $newrow){
	
	$invoprosql = "SELECT * FROM payment WHERE invoice_no = '".$newrow."'";
	$invoproque = mysql_query($invoprosql);
	while($row = mysql_fetch_array($invoproque)){
	
	//$invoprorowsw[]= array("invoice_no"=>$row['invoice_no'],"invoice_date"=>$row['created_date'],"paymentt"=>$row['amount'],"total"=>$row['total'],"payment"=>$row['balance_due']);
	
	$invoprorowsw[]= array("invoice_no"=>$row['invoice_no'],"invoice_date"=>$row['created_date'],"total"=>$row['payment'],"payment"=>$row['payment_mode']);
	}
}

$invorows['general'] = $invorowsw;
$invorows['products'] = $invoprorowsw;

	echo json_encode($invorows);

/*

$invoprosql = "SELECT * FROM invoice WHERE invoice_no = '".$invorowsw[3]."'";
$invoproque = mysql_query($invoprosql);

while($row = mysql_fetch_array($invoproque)){
	
	
$invoprorowsw[]= array("id"=>$row['id'],"product_id"=>$prodrow['product_name'],"product_qty"=>$row['product_qty'],"product_rate"=>$row['product_rate'],"total_amount"=>$row['total_amount']);
}

$invorows['general'] = $invorowsw;
$invorows['products'] = $invoprorowsw;

	echo json_encode($invorows);
die;
*/
?>