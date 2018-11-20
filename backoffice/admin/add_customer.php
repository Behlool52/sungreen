<?php include '../config/config.php'; ?>
<?php
header("Content-type: image/jpeg");

$formedit   = $_POST['formedit'];    //===  Check for Edit

$first_name   = $_POST['first_name'];
$last_name    = $_POST['last_name'];
$company      = $_POST['company'];
$email        = $_POST['email'];
$phone        = $_POST['phone'];
$mobile       = $_POST['mobile'];
$website      = $_POST['website'];
$billing_address = $_POST['billing_address'];
$billing_city    = $_POST['billing_city'];
$billing_state   = $_POST['billing_state'];
$billing_zip     = $_POST['billing_zip'];
$billing_country = $_POST['billing_country'];
$billing_fax      = $_POST['billing_fax'];
$shipping_address = $_POST['shipping_address'];
$shipping_city    = $_POST['shipping_city'];
$shipping_state   = $_POST['shipping_state'];
$shipping_zip     = $_POST['shipping_zip'];
$shipping_country = $_POST['shipping_country'];
$shipping_fax     = $_POST['shipping_fax'];
$remarks          = $_POST['remarks'];





if($formedit == 'add'){
	

$chkcus = "SELECT * FROM customer_info WHERE first_name = '".$first_name."' AND last_name = '".$last_name."'";	
$custchkquery = mysql_query($chkcus);
$custchkrow = mysql_num_rows($custchkquery);

if($custchkrow > 0){
echo $dataexist = 1;
return false;
}
	else{
	

$pageinsertsql = "INSERT INTO customer_info(first_name, last_name, company, email, phone, mobile, website, billing_address, shipping_address,
billing_city, shipping_city, billing_state, shipping_state, billing_zip, shipping_zip, billing_country, shipping_country, billing_fax, shipping_fax, lead_person, remarks, active)
VALUES('".$first_name."','".$last_name."','".$company."','".$email."','".$phone."','".$mobile."','".$website."','".$billing_address."','".$shipping_address."','".$billing_city."','".$shipping_city."','".$billing_state."','".$shipping_state."','".$billing_zip."','".$shipping_zip."','".$billing_country."','".$shipping_country."','".$billing_fax."','".$shipping_fax."','','".$remarks."',1)";
$pagequery = mysql_query($pageinsertsql);	
echo $dataexist = 0;
return false;
	
	}
}
	




?>