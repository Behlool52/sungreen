<?php include '../config/config.php'; ?>
<?php //include 'includes/header.php'; ?>
<?php

header("Content-type: image/jpeg");

$invoiceid   = $_POST['invoiceid'];	
$filename = $_FILES['cocpic']['name'];	


	
	        $sourcePath = $_FILES['cocpic']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "assets/img/coc/".$_FILES['cocpic']['name']; // Target path where file is to be stored			
			move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file


$cocinsertsql = "INSERT INTO coc (invoice_no, coc, created_date)
VALUES('".$invoiceid."','".$filename."',NOW())";
$cocquery = mysql_query($cocinsertsql);


?>