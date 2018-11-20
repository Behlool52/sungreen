<?php include '../config/config.php'; ?>
<?php
header("Content-type: image/jpeg");


$customer_id     = $_POST['customer_id'];
$item_amount     = $_POST['item_amount'];
$item_amount_id  = $_POST['item_amount_id'];
$totvalue        = $_POST['totvalue'];
$payment_date    = $_POST['payment_date'];
$payment_mode    = $_POST['payment_mode'];
$totaldues       = $_POST['totdues'];



$tot_invoices = implode(",", $item_amount_id);  // all invoice ids - in string
$sumofinvoices = array_sum($totvalue); // all invoices value - sum of all invoices

foreach ($item_amount as $key => $item){
	
	//echo $item;  //input amount	
	//echo $item_amount_id[$key];     // invoice no
	//echo $unused_amount = $totaldues[$key] - $item;
	
	$totaldues[$key];
	$zoro = $totaldues[$key] - $item;
	
	if($zoro == 0){
		$status = 'Paid';
	}
	
	if($zoro != $totvalue[$key]){
		$status = 'Partially Paid';
	}
	
	$sureon = "SELECT * FROM invoice WHERE invoice_no = '".$item_amount_id[$key]."'";
	$orderquery = mysql_query($sureon);
	$itmerow = mysql_fetch_array($orderquery);	
	
	$paymenttotal = $itmerow['payment'];	
	$surtot = $paymenttotal + $item_amount[$key];	
	

$invoiceupdatesql = "UPDATE invoice SET balance_due = '".$zoro."', status = '".$status."', payment = '".$surtot."' WHERE invoice_no = '".$item_amount_id[$key]."'";
$orderquery = mysql_query($invoiceupdatesql);	
	
	
$paymentinsertsql = "INSERT INTO payment(customer_id, invoice_no, payment_mode, amount, payment, unused_amount, created_date)
VALUES('".$customer_id."','".$item_amount_id[$key]."','".$payment_mode."','".$totvalue[$key]."','".$item."','".$zoro."','".$payment_date."')";
$payquery = mysql_query($paymentinsertsql);	
	
	
}

//return false;


//$sumofalldues = array_sum($totaldues); // all invoices value - sum of all invoices
//$totalofitemamount = array_sum($item_amount);
//$unused_amount = $sumofalldues - $totalofitemamount;


/*	
	

foreach ($item_amount as $key => $item){
	
	$totaldues[$key];     // total duess	
	$zoro = $totaldues[$key] - $item;
	
	//$totvalue[$key]; //original amount
	
	//$grandtot = $totvalue[$key] - $zoro;	
	
	if($zoro == 0){
		$status = 'Paid';
	}
	
	if($zoro != $sumofinvoices[$key]){
		$status = 'Partially Paid';
	}
	
	
$sureon = "SELECT * FROM invoice WHERE invoice_no = '".$item_amount_id[$key]."'";
$orderquery = mysql_query($sureon);
$itmerow = mysql_fetch_array($orderquery);	
	
	$paymenttotal = $itmerow['payment'];	
	
	$surtot = $paymenttotal + $item_amount[$key];	
	

$invoiceupdatesql = "UPDATE invoice SET balance_due = '".$zoro."', status = '".$status."', payment = '".$surtot."' WHERE invoice_no = '".$item_amount_id[$key]."'";
$orderquery = mysql_query($invoiceupdatesql);	
	
}


$paymentinsertsql = "INSERT INTO payment(customer_id, invoice_no, payment_mode, amount, unused_amount, created_date)
VALUES('".$customer_id."','".$tot_invoices."','".$payment_mode."','".$sumofinvoices."','".$unused_amount."','".$payment_date."')";
$payquery = mysql_query($paymentinsertsql);	
//}	

*/

?>