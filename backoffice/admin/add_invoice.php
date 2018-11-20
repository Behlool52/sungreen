<?php include '../config/config.php'; ?>
<?php
//var_dump($_POST);


	$to_email       = "behlool@gmail.com";	
	
	
	$customer_id   		= $_POST['customer_id'];
	$invoice_no    		= $_POST['invoice_no'];
	$order_no      		= $_POST['order_no'];
	$payment_mode      	= $_POST['payment_mode'];
	$finance_company   	= $_POST['finance_company'];
    $stc_platform   	= $_POST['stc_platform'];
	$invoice_date  		= $_POST['invoice_date'];
	$invoice_terms 		= $_POST['invoice_terms'];
	$due_date     		= $_POST['due_date'];
	$lead_person   		= $_POST['lead_person'];
	$sale_person   		= $_POST['sale_person'];
	$electrician   		= $_POST['electrician'];
	$product_name  		= $_POST['product_name'];
    $product_desc  		= $_POST['product_desc'];
	$product_qtyy   	= $_POST['product_qty'];
    $product_ratee   	= $_POST['product_rate'];
	$gst            	= $_POST['gst'];
	$product_discountt  = $_POST['product_discount'];
	$product_amountt    = $_POST['product_amount'];
	$customer_notes     = $_POST['customer_notes'];
	$terms_conditions   = $_POST['terms_conditions'];
	$subtotal   		= $_POST['subtotal'];
	$total     			= $_POST['total'];



$product_dec = explode(',',$product_desc);
$product_qty = explode(',',$product_qtyy);
$product_rate = explode(',',$product_ratee);
$product_gst = explode(',',$gst);
$product_amount = explode(',',$product_amountt);
$product_discount = explode(',',$product_discountt);



$arr = explode(',',$product_name);
$i = 0;
foreach ($arr as $product){	
	
$productinsertsql = "INSERT INTO order_tbl(customer_id, invoice_no, order_no, product_id, product_desc, product_qty, product_rate, gst, discount, total_amount, created_date)
VALUES('".$customer_id."','".$invoice_no."','0','".$product."','".$product_dec[$i]."','".$product_qty[$i]."','".$product_rate[$i]."','".$product_gst[$i]."','".$product_discount[$i]."','".$product_amount[$i]."',NOW());";
$orderquery = mysql_query($productinsertsql);	
$i++;	
}	



$stcconchk = "SELECT * FROM stc WHERE invoice_no = '".$invoice_no."'";
$stcquery = mysql_query($stcconchk);
$stcary = mysql_num_rows($stcquery);
$stcquery = mysql_fetch_array($stcquery);

if($stcary!=0){
$stc_status = 'Stc Filled';
}


$invoice_con = "SELECT * FROM invoice WHERE invoice_no = '".$invoice_no."'";
$invoque = mysql_query($invoice_con);	
$invoquerrow = mysql_num_rows($invoque);	

if($invoquerrow>0){
	$response_array['status'] = 'dataduplicate';  
	
}
else{


$invinsertsql = "INSERT INTO invoice(customer_name, customer_id, invoice_no, payment_mode, order_no, invoice_date, invoice_terms, due_date, lead_person, sale_person, electrician, sub_total, total, balance_due, payment, customer_notes, terms_conditions, created_date, status, stc_status, work_order_status, email, application_number, finance_company, stc_platform, invoice_status, active)
VALUES('','".$customer_id."','".$invoice_no."','".$payment_mode."','0','".$invoice_date."','','".$invoice_date."','".$lead_person."','".$sale_person."','".$electrician."','".$subtotal."','".$total."','".$total."','0','".$customer_notes."','".$terms_conditions."',NOW(),'draft','".$stc_status."','','','','".$finance_company."','".$stc_platform."','',1)";
$invquery = mysql_query($invinsertsql);	
$response_array['status'] = 'success'; 


}
echo json_encode($response_array);    

?>