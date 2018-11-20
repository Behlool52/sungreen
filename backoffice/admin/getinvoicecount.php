<?php include '../config/config.php';

$invo_id      = $_POST['invoid'];

$invosql = "SELECT *  FROM order_tbl WHERE invoice_no = '".$invo_id."'";
$invoque = mysql_query($invosql);
$invorowsw = mysql_num_rows($invoque);


	echo $invorowsw;


?>