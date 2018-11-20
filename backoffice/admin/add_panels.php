<?php include '../config/config.php'; ?>
<?php
	
$invoice_no   =  $_POST['invoice_no'];	
$serialss     =  $_POST['serials'];


$productinsertsql = "INSERT INTO panels(invoice_no, serials, created_date) VALUES('".$invoice_no."','".$serialss."',NOW())";
$orderquery = mysql_query($productinsertsql);


//$invinsertsql = "INSERT INTO invoice(customer_id, invoice_no, order_no, invoice_date, invoice_terms, due_date, lead_person, sale_person, electrician, sub_total, total, balance_due, customer_notes, terms_conditions, created_date, status, active)
//VALUES('".$customer_id."','".$invoice_no."','".$order_no."','".$invoice_date."','".$invoice_terms."','".$due_date."','".$lead_person."','".$sale_person."','".$electrician."','".$subtotal."','".$total."','".$total."','".$customer_notes."','".$terms_conditions."',NOW(),'draft',1)";
//$invquery = mysql_query($invinsertsql);	


$response_array['status'] = 'success';  
echo json_encode($response_array);    

?>