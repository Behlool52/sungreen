<?php include '../config/config.php'; ?>

<?php

$product_id     = $_POST['product_id'];
$product_name   = $_POST['product_name'];
$product_rate   = $_POST['product_rate'];
$descrip        = $_POST['descrip'];




if($product_id !=''){
$cateditsql = "UPDATE products SET product_name = '".$product_name."', rate = '".$product_rate."', description = '".$descrip."' WHERE id = '".$product_id."'";	
$cateditquery = mysql_query($cateditsql);		
}






?>