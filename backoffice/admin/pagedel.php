<?php 
session_start();
include '../config/config.php';

$page_id      = $_GET['pageid'];

$invosql = "DELETE from pages WHERE id = '".$page_id."'";
$invoque = mysql_query($invosql);
header("Location: https://earthsave.com.au/dev/admin/listing.php");
die();
?>