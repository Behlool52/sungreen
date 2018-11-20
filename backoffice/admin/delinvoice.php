<?php 
session_start();
include '../config/config.php';

$invo_id      = $_POST['invoiceid'];

$invosql = "DELETE from invoice WHERE id = '".$invo_id."'";
$invoque = mysql_query($invosql);
?>