<?php include 'config/config.php';

$formedit   = $_POST['formedit'];    //===  Check for Edit

$product_name   = $_POST['product_name'];
$product_rate   = $_POST['product_rate'];
$in_stock       = $_POST['in_stock'];
$prod_desc      = $_POST['prod_desc'];
$active        = $_POST['active'];



if($formedit == 'add'){

$prodinsertsql = "INSERT INTO products(product_name, rate, in_stock, description, active)
VALUES('".$product_name."','".$product_rate."','".$in_stock."','".$prod_desc."','".$active."')";
$productinsertquery = mysql_query($prodinsertsql);
	
}


?>