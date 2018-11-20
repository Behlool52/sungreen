<?php include 'includes/header.php'; ?>
<?php
header("Content-type: image/jpeg");

$invoice_id  		 = $_POST['invoice_no'];
$first_name  		 = $_POST['name'];
$contact     		 = $_POST['contact'];
$address      		 = $_POST['address'];
$install_type        = $_POST['install_type'];
$system_panels       = $_POST['system_panels'];
$system_inverter     = $_POST['system_inverter'];
$system_size_kw      = $_POST['system_size_kw'];
$panel_layout        = $_POST['panel_layout'];
$inverter_location   = $_POST['inverter_location'];
$meterbox_upgrade    = $_POST['meterbox_upgrade'];
$in_stock            = $_POST['in_stock'];
$time_day_prefer     = $_POST['time_day_prefer'];			       
$housetype_sing_doub = $_POST['housetype_sing_doub'];
$housetype_roof_material  = $_POST['housetype_roof_material'];
$lagging                 = $_POST['lagging'];
$reference_no           = $_POST['reference_no'];
$other_notes           = $_POST['other_notes'];
$installer_details     = $_POST['installer_details'];
$prepared_by           = $_POST['prepared_by'];
$approved_by           = $_POST['approved_by'];
$pickup                = $_POST['pickup'];
			   		

$chkinvo = "SELECT * FROM work_order WHERE invoice_id = '".$invoice_id."'";
$chkqy = mysql_query($chkinvo);
$numchk = mysql_num_rows($chkqy);


if($invoice_id != '' && $numchk == 0){

$pageinsertsql = "INSERT INTO work_order(invoice_id,name,contact,address,install_type,system_panels,system_inverter,system_size_kw,panel_layout,inverter_location,meterbox_upgrade,in_stock, time_day_prefer,housetype_sing_doub,housetype_roof_material,lagging,reference_no,other_notes,installer_details,prepared_by,approved_by,pickup)
VALUES('".$invoice_id."','".$first_name."','".$contact."','".$address."','".$install_type."','".$system_panels."','".$system_inverter."','".$system_size_kw."','".$panel_layout."','".$inverter_location."','".$meterbox_upgrade."','".$in_stock."','".$time_day_prefer."','".$housetype_sing_doub."','".$housetype_roof_material."','".$lagging."','".$reference_no."','".$other_notes."','".$installer_details."','".$prepared_by."','".$approved_by."','".$pickup."')";
$pagequery = mysql_query($pageinsertsql);
	
}


?>