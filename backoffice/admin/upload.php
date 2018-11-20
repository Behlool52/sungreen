<?php include 'includes/header.php'; ?>
<?php

    $targetDir = "https://earthsave.com.au/dev/admin/assets/img/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir.$fileName;
    
    //if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
		move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
        //insert file information into db table
			
        //$uploadsql = "INSERT INTO library_tbl (file_name, uploaded) VALUES('".$fileName."','".date("Y-m-d H:i:s")."')";
		$uploadsql = "INSERT INTO library_tbl (file_name, uploaded) VALUES('".$fileName."',NOW())";
		$uploadque = mysql_query($uploadsql);
   //}
?>     