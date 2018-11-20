<?php include '../config/config.php'; ?>
<?php
//var_dump($_POST);


	//$to_email       = "behlool@gmail.com";	
	
	
 	$idd    		    = $_POST['idd'];
	$orginvo   		    = $_POST['orginvo'];
    $customer_id   		= $_POST['customer_id'];
	$invoice_no    		= $_POST['invoice_no'];	
	$invoice_date  		= $_POST['invoice_date'];
	//$invoice_terms 		= $_POST['invoice_terms'];
    $payment_mode      	= $_POST['payment_mode'];
    $finance_company   	= $_POST['finance_company'];
    $stc_platform   	= $_POST['stc_platform'];
    $application_number = $_POST['application_number'];
	//$due_date     		= $_POST['due_date'];
	$lead_person   		= $_POST['lead_person'];
	$sale_person   		= $_POST['sale_person'];
	$electrician   		= $_POST['electrician'];
	$product_name  		= $_POST['product_name'];
    $product_desc  		= $_POST['product_desc'];
	$product_qtyy   	= $_POST['product_qty'];
	$product_ratee   	= $_POST['product_rate'];
    $gst            	= $_POST['gst'];
	$product_discountt   = $_POST['product_discount'];
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


$delorder   = "DELETE FROM order_tbl WHERE invoice_no = '".$invoice_no."'";
$orderdelquery = mysql_query($delorder);


$arr = explode(',',$product_name);
$i = 0;
foreach ($arr as $product){	
	

$productinsertsql = "INSERT INTO order_tbl(customer_id, invoice_no, order_no, product_id, product_desc, product_qty, product_rate, gst, discount, total_amount, created_date)
VALUES('".$customer_id."','".$invoice_no."','0','".$product."','".$product_dec[$i]."','".$product_qty[$i]."','".$product_rate[$i]."','".$product_gst[$i]."','".$product_discount[$i]."','".$product_amount[$i]."',NOW());";	
$orderquery = mysql_query($productinsertsql);	
$i++;	
}	



$invudpatesql = "UPDATE invoice SET invoice_no = '".$invoice_no."', customer_id = '".$customer_id."', invoice_date = '".$invoice_date."', due_date = '".$due_date."', lead_person = '".$lead_person."', sale_person = '".$sale_person."', electrician = '".$electrician."', sub_total = '".$subtotal."', total = '".$total."', balance_due = '".$total."', customer_notes = '".$customer_notes."', terms_conditions = '".$terms_conditions."', created_date = NOW(), status = 'draft', application_number = '".$application_number."', payment_mode = '".$payment_mode."', finance_company = '".$finance_company."', stc_platform = '".$stc_platform."',  active = 1 WHERE id = '".$idd."'";
$invquery = mysql_query($invudpatesql);	




$invudpatesql = "UPDATE payment SET invoice_no = '".$invoice_no."' WHERE invoice_no = '".$orginvo."'";
$invquery = mysql_query($invudpatesql);	



$response_array['status'] = 'success';  
echo json_encode($response_array);    

?>