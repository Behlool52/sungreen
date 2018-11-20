<?php 
session_start();
include '../config/config.php';

$invo_id      = $_POST['userid'];

$paymentcon = "SELECT * FROM payment WHERE id = '".$invo_id."'";
$payque = mysql_query($paymentcon);
$payrow = mysql_fetch_array($payque);

$vga = $payrow['payment'];



//=========================================

$invoicepaycon = "SELECT * FROM invoice WHERE invoice_no = '".$payrow['invoice_no']."'";
$invopayque = mysql_query($invoicepaycon);
$invopayrow = mysql_fetch_array($invopayque);

$payment = $invopayrow['payment']-$vga;
$bddue   = $invopayrow['balance_due']+$vga;

//=====================================

$upcon = "UPDATE invoice SET balance_due = '".$bddue."', payment = '".$payment."' WHERE invoice_no = '".$payrow['invoice_no']."'";
$quef  = mysql_query($upcon);


$invosql = "DELETE from payment WHERE id = '".$invo_id."'";
$invoque = mysql_query($invosql);
?>