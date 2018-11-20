<?php include '../config/config.php';


$invoice_no    = $_POST['achieversinvoicesid'];
$poid = $_POST['poid'];
$refno    = $_POST['refno'];


$checkinvo = "SELECT * FROM achievers WHERE invoice_no = '".$invoice_no."'";
$checkinvoque = mysql_query($checkinvo);
$invodealarray = mysql_num_rows($checkinvoque);

if($invodealarray==0){

$dealinsertsql = "INSERT INTO achievers(invoice_no, deal_id, deal_reference_no, created_at)
VALUES('".$invoice_no."','".$poid."','".$refno."',NOW())";
$dquery = mysql_query($dealinsertsql);
	
}
else{
	
$dealupdatesql = "UPDATE achievers SET deal_id = '".$poid."', deal_reference_no = '".$refno."' WHERE invoice_no = '".$invoice_no."'";
$dealupdateque = mysql_query($dealupdatesql);	
	
}

	
?>