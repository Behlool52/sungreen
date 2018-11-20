<?php 
session_start();
include '../config/config.php';

$invorows = array();

$invo_id      = $_POST['invoiceno'];

$invosql = "SELECT * FROM customer_info WHERE invoice_no = '".$invo_id."'";
$invoque = mysql_query($invosql);
$invorowsw = mysql_fetch_array($invoque);



$invosql = "SELECT * FROM invoice WHERE invoice_no = '".$invo_id."'";
$invoque = mysql_query($invosql);
$invorowsw = mysql_fetch_array($invoque);


$invosqla = "SELECT * FROM customer_info WHERE id = '".$invorowsw['customer_id']."'";
$invoquea = mysql_query($invosqla);
$invorowswa = mysql_fetch_array($invoquea);



$saleperson  = $invorowsw['sale_person'];
$leadperson  =  $invorowsw['lead_person'];
$electrician =  $invorowsw['electrician'];
$company     = $invorowsw['payment_mode'];
//$customerid =  $invorowsw['customer_id'];

if($saleperson!=0){
	$wohajj[] = $invorowsw['sale_person'];
}
if($leadperson!=0){
	$wohajj[] = $invorowsw['lead_person'];
}
if($electrician!=0){
	$wohajj[] = $invorowsw['electrician'];
}
//if($customerid!=0){
//	$wohajj[] = $invorowsw['customer_id'];
//}

//print_r($wohajj);
//exit;
$html = '<select class="form-control input-xs" id="senderemail" onchange="senderemail()"><option>Select</option>';
foreach($wohajj as $norm){
	
$electsql = "SELECT * FROM electricians WHERE electricians.id = '".$norm."'";
	
$elecqe = mysql_query($electsql);
$elerow = mysql_fetch_array($elecqe);	
	
	
	
$html .= '<option value='.$elerow['email'].'>'.$elerow['role'].'</option>';	
}
$html .= '<option value='.$invorowswa['email'].' id="customer">Customer</option>';
if($company=='company_finance'){
$html .= '<option value = "finance_company">Send to Finance Company</option>';
}


$html .='</select>';

echo $html;

//$html = '<select><option></option></select>';

//while($row = mysql_fetch_array($invoproque)){
	
//$invoprod = "SELECT * FROM products WHERE id = '".$row['product_id']."'";
//$invoprodque = mysql_query($invoprod);	
//$prodrow = mysql_fetch_array($invoprodque);	
	
//$invoprorowsw[]= //array("id"=>$row['id'],"product_id"=>$prodrow['product_name'],"product_qty"=>$row['product_qty'],"product_rate"=>$row['product_rate'],"total_a//mount"=>$row['total_amount']);
//}





//$invorows['general'] = $invorowsw;
//$invorows['products'] = $invoprorowsw;


	//echo json_encode($invorows);
//die;

?>