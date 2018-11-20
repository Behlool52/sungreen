<?php 
session_start();
include '../config/config.php';

$invo_id      = $_POST['userid'];

$invosql = "DELETE from customer_info WHERE id = '".$invo_id."'";
$invoque = mysql_query($invosql);
?>