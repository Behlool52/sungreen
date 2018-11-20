<?php include '../config/config.php'; ?>
<?php //include 'includes/header.php'; ?>
<?php






header("Content-type: image/jpeg");

$formedit   = $_POST['formedit'];    //===  Check for Edit

$page_id   = $_POST['page_id'];
$page_title   = $_POST['page_title'];
$page_slug   = $_POST['page_slug'];
$page_content = mysql_real_escape_string($_POST['getdata']);
$slider       = $_POST['slider'];
$featuredimge = $_POST['featuredimge'];



$featured_exist = $_POST['featured_exist'];
$page_order   = $_POST['page_order'];
$parentpage  = $_POST['parentpage'];
$childpage   = $_POST['childpage'];
$pageactive   = $_POST['pageactive'];

//======= catedit


$cat_id      = $_POST['cat_id'];
$cat_title   = $_POST['cat_title'];
$cat_slug    = $_POST['cat_slug'];
$cat_order   = $_POST['cat_order'];
$cat_active  = $_POST['cat_active'];




if($formedit == 'catedit'){
$cateditsql = "UPDATE featured_category SET category = '".$cat_title."', category_slug = '".$cat_slug."', weight = '".$cat_order."', active = '".$cat_active."' WHERE id = '".$cat_id."'";		
$cateditquery = mysql_query($cateditsql);		
}



if($formedit == 'edit'){
	
	
				$filename = $_FILES['headerpic']['name'];       
	
				if(($featured_exist=='') AND ($filename=='')){					
					$filename = '';				   
				}else if (($featured_exist!='') AND ($filename=='')){
					$filename = $featured_exist;	
				}
	        
	
			$sourcePath = $_FILES['headerpic']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "assets/img/headers/".$_FILES['headerpic']['name']; // Target path where file is to be stored			
			move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
	
          
       	
	
	
	
	
$pageeditsql = "UPDATE pages SET page_title = '".$page_title."', page_slug = '".$page_slug."', page_content = '".$page_content."', featured_pic = '".$filename."', page_weight = '".$page_order."', parent = '".$parentpage."', child_element = '".$childpage."', slider = '".$slider."', active = '".$pageactive."'  WHERE id = '".$page_id."'";	
$pageeditquery = mysql_query($pageeditsql);	
	
}else{
	
	
	$filename = $_FILES['headerpic']['name'];
	
	
	        $sourcePath = $_FILES['headerpic']['tmp_name'];       // Storing source path of the file in a variable
			$targetPath = "assets/img/headers/".$_FILES['headerpic']['name']; // Target path where file is to be stored			
			move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file


$pageinsertsql = "INSERT INTO pages (page_title, page_slug, page_content, featured_pic, page_weight, parent, child_element, slider, active)
VALUES('".$page_title."','".$page_slug."','".$page_content."','".$filename."','".$page_order."','".$parentpage."','".$childpage."','".$slider."','".$pageactive."')";
$pagequery = mysql_query($pageinsertsql);
	
}


?>