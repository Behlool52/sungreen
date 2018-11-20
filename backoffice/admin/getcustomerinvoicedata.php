<?php include '../config/config.php';

$invorows = array();
$invoprorowsw = array();

$customer_invo_id      = $_POST['customerinvoicesid'];
$invosql = "SELECT invoice.* , customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE customer_info.id = '".$customer_invo_id."' AND invoice.balance_due!=0";
$invoque = mysql_query($invosql);

while($row = mysql_fetch_array($invoque)){	
	$invoprorowsw[] = array("invoice_date"=>$row['invoice_date'],"invoice_no"=>$row['invoice_no'],"sub_total"=>$row['sub_total'],"balance_due"=>$row['balance_due']);
}

$customersuminvoicesql = "SELECT SUM(sub_total), SUM(balance_due) FROM invoice WHERE customer_id = '".$customer_invo_id."'";
$customersuminvoproque = mysql_query($customersuminvoicesql);
$suminvorowsw = mysql_fetch_row($customersuminvoproque);

$invorows['invoices'] = $invoprorowsw;
$invorows['sumofinvoices'] = $suminvorowsw;


	echo json_encode($invorows);


?>