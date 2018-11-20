<?php 
session_start();
include '../config/config.php';

$invorows = array();


$invo_id      = $_POST['invoiceid'];

$invosql = "SELECT * FROM panels WHERE invoice_no = '".$invo_id."'";
$invoque = mysql_query($invosql);
$numrow = mysql_num_rows($invoque);

if($numrow > 0){

$row = mysql_fetch_array($invoque);

$array = explode(',', $row['serials']);
echo $count = count($array);
}

//$_SESSION['panelinvoicenumber'] = $row['invoice_no'];

//echo $invorows['invoiceonlynumber'] = $row;
exit;

//while($row = mysql_fetch_array($invoque)){	
//$invoprorowsw[]= array("id"=>$row['id'],"invoice_no"=>$row['invoice_no'],"serials"=>$row['serials']);	
//}

//$invorows['general'] = $invoprorowsw;


echo json_encode($invorows);
die;

?>