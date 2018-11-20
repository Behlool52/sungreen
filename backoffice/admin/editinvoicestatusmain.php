<?php include '../config/config.php';

$invo_no   = $_POST['invoid'];
$invostatus = $_POST['invostatus'];

$updateprogress = "UPDATE invoice SET invoice_status = '".$invostatus."' WHERE invoice_no = '".$invo_no."'";
$invoemailque = mysql_query($updateprogress);

?>