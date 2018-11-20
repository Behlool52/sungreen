<?php include '../config/config.php';

//$invorows = array();
$invoprorowsw = array();

$customer_invo_id      = $_POST['userinvoicesid'];
$invosql = "SELECT invoice.* , electricians.* FROM invoice inner join electricians on invoice.lead_person = electricians.id or invoice.sale_person = electricians.id or invoice.electrician = electricians.id WHERE electricians.id = '".$customer_invo_id."'";
$invoque = mysql_query($invosql);

while($row = mysql_fetch_array($invoque)){	
	$invoprorowsw[] = array("invoice_no"=>$row['invoice_no'],"invoice_date"=>$row['invoice_date'],"order_no"=>$row['order_no'],"customer_name"=>$row['customer_name'],"address"=>$row['address']);
}

//$customersuminvoicesql = "SELECT SUM(sub_total), SUM(balance_due) FROM invoice WHERE customer_id = '".$customer_invo_id."'";
//$customersuminvoproque = mysql_query($customersuminvoicesql);
//$suminvorowsw = mysql_fetch_row($customersuminvoproque);

//$invorows['invoices'] = $invoprorowsw;
$invorows['sumofinvoices'] = $invoprorowsw;


	echo json_encode($invorows);


?>