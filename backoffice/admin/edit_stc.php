<?php include 'includes/header.php'; ?>
<?php
header("Content-type: image/jpeg");



$editby     		 = $_POST['editby'];
$invoice_no 		 = $_POST['invoice_no'];
$first_name 		 = $_POST['first_name'];
$last_name  		 = $_POST['last_name'];
$postal_address 	 = $_POST['postal_address'];
$suburb 	         = $_POST['suburb'];
$state    	         = $_POST['state'];
$postcode   	     = $_POST['postcode'];
$phone   	         = $_POST['phone'];
$mobile   	         = $_POST['mobile'];
$email 	             = $_POST['email'];

$first_name_detail = $_POST['first_name_detail'];
$last_name_detail  = $_POST['last_name_detail'];
$install_address   = $_POST['install_address'];
$suburb_detail     = $_POST['suburb_detail'];
$state_detail      = $_POST['state_detail'];
$postcode_detail   = $_POST['postcode_detail'];
$phone_detail      = $_POST['phone_detail'];
$mobile_detail     = $_POST['mobile_detail'];	   
$one_year          = $_POST['one_year'];
$five_years        = $_POST['five_years'];
$fourteen_years    = $_POST['fourteen_years'];

$single= $_POST['single'];
$multi= $_POST['multi'];
$replacement_panel = $_POST['replacement_panel'];
$single_2= $_POST['single_2'];
$multi_2= $_POST['multi_2'];
$existing_panel = $_POST['existing_panel'];
$single_3= $_POST['single_3'];
$multi_3= $_POST['multi_3'];
$specific_location = $_POST['specific_location'];
$additional_comment= $_POST['additional_comment'];
$ref= $_POST['ref'];
$pvd= $_POST['pvd'];
$panel_brand= $_POST['panel_brand'];
$panel_mode= $_POST['panel_mode'];
$inverter_brand= $_POST['inverter_brand'];
$inverter_model= $_POST['inverter_model'];
$inverter_series= $_POST['inverter_series'];
$no_of_panels= $_POST['no_of_panels'];
$rpo= $_POST['rpo'];
$resd= $_POST['resd'];
$school= $_POST['school'];
$commer= $_POST['commer'];
$other= $_POST['other'];
$property_other= $_POST['property_other'];
$single_storey= $_POST['single_storey'];
$multiple_storey= $_POST['multiple_storey'];
$certs= $_POST['certs'];
$stc_nos= $_POST['stc_nos'];
$installer_name= $_POST['installer_name'];
$installer_phone= $_POST['installer_phone'];
$installer_address= $_POST['installer_address'];
$installer_accred_no= $_POST['installer_accred_no'];
$electrician_name= $_POST['electrician_name'];
$electrician_phone= $_POST['electrician_phone'];
$electrician_address= $_POST['electrician_address'];
$electrician_accred_no= $_POST['electrician_accred_no'];
$designer_name= $_POST['designer_name'];
$designer_phone= $_POST['designer_phone'];
$designer_address= $_POST['designer_address'];
$designer_accred_no= $_POST['designer_accred_no'];
$installer_name_main= $_POST['installer_name_main'];
$installed_place= $_POST['installed_place'];
$grid_connected= $_POST['grid_connected'];
$battery_storage= $_POST['battery_storage'];
$off_grid= $_POST['off_grid'];
$sgu_installer_signature= $_POST['sgu_installer_signature'];
$cec_installer_no= $_POST['cec_installer_no'];
$print_installer_name= $_POST['print_installer_name'];
$sgu_inst_sig_date= $_POST['sgu_inst_sig_date'];			   
$sgu_designer_signature= $_POST['sgu_designer_signature'];
$cec_designer_no= $_POST['cec_designer_no'];
$print_designer_name= $_POST['print_designer_name'];
$sgu_desig_sig_date= $_POST['sgu_desig_sig_date'];			   
$stc_eligible= $_POST['stc_eligible'];
$owner_signature= $_POST['owner_signature'];
$owner_signature_date= $_POST['owner_signature_date'];			   
$agent_signature= $_POST['agent_signature'];
$agent_signature_date= $_POST['agent_signature_date'];



if($invoice_no != ''){
	
	
$sel = "SELECT * FROM stc WHERE invoice_no = '".$invoice_no."'";	
$stccheckquery = mysql_query($sel);	
$stcfech = mysql_num_rows($stccheckquery);

	if($stcfech!=0){	
	
if($editby!=''){
$updateinvoicestatus = "UPDATE invoice SET stc_status = 'Updated by Electrician' WHERE invoice_no = '".$invoice_no."'";	
$stcupdatequerystatus = mysql_query($updateinvoicestatus);	
}	

$stcupdatesql = "UPDATE stc SET first_name = '".$first_name."',last_name = '".$last_name."',postal_address = '".$postal_address."',suburb = '".$suburb."',state = '".$state."',postcode = '".$postcode."',phone = '".$phone."',mobile = '".$mobile."',email = '".$email."',first_name_detail = '".$first_name_detail."',last_name_detail = '".$last_name_detail."',install_address = '".$install_address."',suburb_detail = '".$suburb_detail."',state_detail = '".$state_detail."',postcode_detail = '".$postcode_detail."',phone_detail = '".$phone_detail."',mobile_detail = '".$mobile_detail."',one_year = '".$one_year."',five_years = '".$five_years."',fourteen_years = '".$fourteen_years."',single = '".$single."',multi = '".$multi."',replacement_panel = '".$replacement_panel."',single_2 = '".$single_2."',multi_2 ='".$multi_2."',existing_panel = '".$existing_panel."',single_3 = '".$single_3."',multi_3 = '".$multi_3."',specific_location = '".$specific_location."',additional_comment = '".$additional_comment."',ref = '".$ref."',pvd = '".$pvd."',panel_brand = '".$panel_brand."',panel_mode = '".$panel_mode."',inverter_brand = '".$inverter_brand."',inverter_model = '".$inverter_model."',inverter_series = '".$inverter_series."',no_of_panels = '".$no_of_panels."',rpo = '".$rpo."',resd = '".$resd."',school = '".$school."',commer = '".$commer."',other = '".$other."',property_other = '".$property_other."',single_storey = '".$single_storey."',multiple_storey = '".$multiple_storey."',certs = '".$certs."',stc_nos = '".$stc_nos."',installer_name = '".$installer_name."',installer_phone = '".$installer_phone."',installer_address = '".$installer_address."',installer_accred_no = '".$installer_accred_no."',electrician_name = '".$electrician_name."',electrician_phone = '".$electrician_phone."',electrician_address = '".$electrician_address."',electrician_accred_no = '".$electrician_accred_no."',designer_name = '".$designer_name."',designer_phone = '".$designer_phone."',designer_address = '".$designer_address."',designer_accred_no = '".$designer_accred_no."',installer_name_main = '".$installer_name_main."',installed_place = '".$installed_place."',grid_connected = '".$grid_connected."',battery_storage = '".$battery_storage."',off_grid = '".$off_grid."',sgu_installer_signature = '".$sgu_installer_signature."',cec_installer_no = '".$cec_installer_no."',print_installer_name = '".$print_installer_name."',sgu_inst_sig_date = '".$sgu_inst_sig_date."',sgu_designer_signature = '".$sgu_designer_signature."',cec_designer_no = '".$cec_designer_no."',print_designer_name = '".$print_designer_name."',sgu_desig_sig_date = '".$sgu_desig_sig_date."',stc_eligible = '".$stc_eligible."',owner_signature = '".$owner_signature."',owner_signature_date = '".$owner_signature_date."',agent_signature = '".$agent_signature."',agent_signature_date = '".$agent_signature_date."' WHERE invoice_no = '".$invoice_no."'";

$stcupdatequery = mysql_query($stcupdatesql);
		
	}	else{
		
		
	$pageinsertsql = "INSERT INTO stc(invoice_no,first_name,last_name,postal_address,suburb,state,postcode,phone,mobile,email,first_name_detail,last_name_detail,install_address,suburb_detail,state_detail,postcode_detail,phone_detail,mobile_detail,one_year,five_years,fourteen_years,single,multi,replacement_panel,single_2,multi_2,existing_panel,single_3,multi_3,specific_location,additional_comment,ref,pvd,panel_brand,panel_mode,inverter_brand,inverter_model,inverter_series,no_of_panels,rpo,resd,school,commer,other,property_other,single_storey,multiple_storey,certs,stc_nos,installer_name,installer_phone,installer_address,installer_accred_no,electrician_name,electrician_phone,electrician_address,electrician_accred_no,designer_name,designer_phone,designer_address,designer_accred_no,installer_name_main,installed_place,grid_connected,battery_storage,off_grid,sgu_installer_signature,cec_installer_no,print_installer_name,sgu_inst_sig_date,sgu_designer_signature,cec_designer_no,print_designer_name,sgu_desig_sig_date,stc_eligible,owner_signature,owner_signature_date,agent_signature,agent_signature_date)
VALUES('".$invoice_no."','".$first_name."','".$last_name."','".$postal_address."','".$suburb."','".$state."','".$postcode."','".$phone."','".$mobile."','".$email."','".$first_name_detail."','".$last_name_detail."','".$install_address."','".$suburb_detail."','".$state_detail."','".$postcode_detail."','".$phone_detail."','".$mobile_detail."','".$one_year."','".$five_years."','".$fourteen_years."','".$single."','".$multi."','".$replacement_panel."','".$single_2."','".$multi_2."','".$existing_panel."','".$single_3."','".$multi_3."','".$specific_location."','".$additional_comment."','".$ref."','".$pvd."','".$panel_brand."','".$panel_mode."','".$inverter_brand."','".$inverter_model."','".$inverter_series."','".$no_of_panels."','".$rpo."','".$resd."','".$school."','".$commer."','".$other."','".$property_other."','".$single_storey."','".$multiple_storey."','".$certs."','".$stc_nos."','".$installer_name."','".$installer_phone."','".$installer_address."','".$installer_accred_no."','".$electrician_name."','".$electrician_phone."','".$electrician_address."','".$electrician_accred_no."','".$designer_name."','".$designer_phone."','".$designer_address."','".$designer_accred_no."','".$installer_name_main."','".$installed_place."','".$grid_connected."','".$battery_storage."','".$off_grid."','".$sgu_installer_signature."','".$cec_installer_no."','".$print_installer_name."','".$sgu_inst_sig_date."','".$sgu_designer_signature."','".$cec_designer_no."','".$print_designer_name."','".$sgu_desig_sig_date."','".$stc_eligible."','".$owner_signature."','".$owner_signature_date."','".$agent_signature."','".$agent_signature_date."')";
$pagequery = mysql_query($pageinsertsql);	
		
		
		
	}
		
		
		
	
}


?>