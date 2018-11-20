<?php
session_start();
include 'config/config.php'; 

//error_reporting(0);

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$userrole = $_GET['role'];

$_SESSION['userroles'] = $userrole;


if(isset($_GET['invoid'])){	
	
$invosql = "SELECT invoice.*, customer_info.* FROM invoice join customer_info on invoice.customer_id = customer_info.id WHERE invoice.invoice_no = '".$_GET['invoid']."'";	
$invoque = mysql_query($invosql);
$invorowsw = mysql_fetch_array($invoque);
	
	

$invosqlpp = "SELECT * FROM order_tbl WHERE invoice_no = '".$invorowsw['3']."'";
$invoquepp = mysql_query($invosqlpp);
$invorowswpp = mysql_num_rows($invoquepp);
	
// array("id"=>$row['id'],"product_id"=>$prodrow['product_name'],"product_qty"=>$row['product_qty'],"product_rate"=>$row['product_rate'],"total_amount"=>$row['total_amount']);
	
	

	
	
	
}


if(isset($_GET['msg'])){
	$succssmsg = $_GET['msg'];
}

if(isset($_GET['pageid'])){
	
	$getpagecon = "SELECT * FROM pages WHERE id = '".$_GET['pageid']."' ";		
	$pageinfo = mysql_query($getpagecon);
	$pagerowinfo = mysql_fetch_array($pageinfo);
	
	$page_id = $pagerowinfo['id'];
	$page_title = $pagerowinfo['page_title'];
	$page_slug = $pagerowinfo['page_slug'];
	$slider    = $pagerowinfo['slider'];
	$featured_pic    = $pagerowinfo['featured_pic'];
	$page_weight = $pagerowinfo['page_weight'];
	$parent = $pagerowinfo['parent'];
	$page_content = $pagerowinfo['page_content'];
	$child = $pagerowinfo['child_element'];
	$active = $pagerowinfo['active'];	
	
}

if(isset($_GET['catid'])){
	
	$getcatcon = "SELECT * FROM featured_category WHERE id = '".$_GET['catid']."' ";	
	$catinfo = mysql_query($getcatcon);
	$catrowinfo = mysql_fetch_array($catinfo);
	
	$cat_id      = $catrowinfo['id'];
	$cat_title   = $catrowinfo['category'];
	$cat_slug    = $catrowinfo['category_slug'];
	$weight      = $catrowinfo['weight'];
	$page_active = $catrowinfo['active'];
	
	
}


//================ user login ====================
/*
if (isset($_POST["userlogin"])) {
	
	$userlogin = $_POST['username'];
	$userpass = $_POST['password'];
	
	$usercon = "SELECT * FROM electricians WHERE username = '".$userlogin."' AND password = '".$userpass."' AND portal = 1";	
	$userque = mysql_query($usercon);
	$userarray = mysql_fetch_array($userque);
	$userrow = mysql_num_rows($userque);
	
	if($userrow>0){	
		$_SESSION["userid"] = $userarray['id'];
		$_SESSION["userrole"] = $userarray['role'];
		$_SESSION["user"]= $userlogin;			
		header("Location: invoicelist.php");
		die();	
	}else{
	$errormsg = 'User not exist';	
	}   
}
*/
//============== user login ends ================


//===============  Admin login ====================



if (isset($_POST["adminlogin"])) {
	
	$userlogin = $_POST['username'];
	$userpass = $_POST['password'];
	$userloginrole = $_POST['loginrole'];
	
	if($userloginrole=='director' OR $userloginrole=='admin'){
	
	
	$usercon = "SELECT * FROM users WHERE username = '".$userlogin."' AND password = '".$userpass."'";	
	$userque = mysql_query($usercon);
	$userarray = mysql_fetch_array($userque);
	$userrow = mysql_num_rows($userque);
	
	if($userrow>0){			
		$_SESSION["userrole"] = $userarray['user_role'];
		$_SESSION["user"]= $userlogin;
		$_SESSION['last_login_timestamp'] = time();
		header("Location: invoicelist.php");
		die();	
	}else{
	$errormsg = 'User not exist';	
	} 
	
	}else if($userloginrole=='lead' OR $userloginrole=='electrician' OR $userloginrole=='saleperson'){
		
	$usercon = "SELECT * FROM electricians WHERE username = '".$userlogin."' AND password = '".$userpass."' AND portal = 1";	
	$userque = mysql_query($usercon);
	$userarray = mysql_fetch_array($userque);
	$userrow = mysql_num_rows($userque);
	
	if($userrow>0){	
		$_SESSION["userid"] = $userarray['id'];
		$_SESSION["userrole"] = $userarray['role'];
		$_SESSION["user"]= $userlogin;	
		$_SESSION['last_login_timestamp'] = time();
		header("Location: invoicelist.php");
		die();	
	}else{
	$errormsg = 'User not exist';	
	}   	
		
	}else{
	$errormsg = 'Kindly Select User Role';	
	}
		
}

	//echo $_POST["page_content"];

//======================= PAGE LISTING =======================

	$pagelistcon = "SELECT * FROM pages";	
	$pagesque = mysql_query($pagelistcon);

    $pagelistcon2 = "SELECT * FROM pages";	
	$pagesque2 = mysql_query($pagelistcon2);

//======================= PAGE LISTING =======================

	$categorylistcon = "SELECT * FROM featured_category";	
	$catsque = mysql_query($categorylistcon);

//======================= GALLERY LISTING =======================

	$gallerylistcon = "SELECT * FROM category_gallery";	
	$gallsque = mysql_query($gallerylistcon);

//======================= CLIENT LISTING =======================

	$customerlistcon = "SELECT * FROM customer_info";	
	$custque = mysql_query($customerlistcon);

//======================= PRODUCTS LISTING =======================

	$productslistcon = "SELECT * FROM products";	
	$productsque = mysql_query($productslistcon);



function fill_unit_select_box($out)
{ 
 $output = '';
 $queryy = "SELECT * FROM products";
 $statementy = mysql_query($queryy);
 while($resulty = mysql_fetch_array($statementy)){
	 
	$rsr =  $resulty["id"];
	$rww = $row["product_id"];
		
		if($rsr==$rww){
		$sele = 'selected';
	   }
 
  //$output .= '<option value="'.$resulty["id"].'">'.$resulty["product_name"].'</option>';
	 $output .= '<option value="'.$resulty["id"].'"';
	 $output .= $sele.'>'.$resulty["product_name"].'</option>';
	 
 }
 return $output;
}


function fill_unit_select_box_2($product_id)
{ 
 $output = '';
 $queryy = "SELECT * FROM products";	
 $statementy = mysql_query($queryy);
 while($resulty = mysql_fetch_array($statementy)){
	 
	  
	  if($resulty["id"]==$product_id){
		$sele = 'selected';
	   }
	    else
    {
    $sele = '';
    }
 
  
     $output .= '<option value="'.$resulty["id"].'"';
	 $output .= $sele.'>'.$resulty["product_name"].'</option>';
	 
 }
 return $output;
}




//======================= INVOICE LISTING =======================

if(($_SESSION["userrole"]!="Admin") && ($_SESSION["userrole"]!="Director")){

$invoicelistcon = "SELECT invoice.*, work_order.* FROM invoice inner join work_order on invoice.invoice_no = work_order.invoice_id WHERE invoice.lead_person = '".$_SESSION["userid"]."' OR invoice.sale_person = '".$_SESSION["userid"]."' OR (invoice.electrician = '".$_SESSION["userid"]."' AND invoice.invoice_no = work_order.invoice_id)";	
$invoiceque = mysql_query($invoicelistcon);
}else{
$invoicelistcon = "SELECT * FROM invoice WHERE invoice_status=''";	
$invoiceque = mysql_query($invoicelistcon);
	
$invoicelistcon2 = "SELECT * FROM invoice WHERE invoice_status='yes'";	
$invoiceque2 = mysql_query($invoicelistcon2);
	
}



//======================= PAYMENT LISTING =======================

	//$paymentlistcon = "SELECT * FROM payment ORDER BY id GROUP BY invoice_no";	

$paymentlistcon = "SELECT id, customer_id, invoice_no, payment_mode, unused_amount, created_date FROM payment WHERE id IN (SELECT MAX(id)FROM payment GROUP BY invoice_no)";


	$paymentque = mysql_query($paymentlistcon);

//======================= ELECTRICIAN LISTING =======================

	$electriccons = "SELECT * FROM electricians WHERE role = '".$userrole."'";	
	$electque = mysql_query($electriccons);


?>



<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle2/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2017 05:09:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Sungreen - Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">	

    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
      <link rel="stylesheet" type="text/css" href="assets/lib/summernote/summernote.css"/>
	<link rel="stylesheet" type="text/css" href="assets/lib/datatables/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	
	
	
	
	
	<script>
		(function(e,t,n){
		var r=e.querySelectorAll("html")[0];
		r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")
		})
		(document,window,0);
	</script>
 
	
  </head>
  
  
  
          
          
        <body>
            
           <!-- 
            <div style="position: fixed; /* Sit on top of the page content */
    
    width: 100%; /* Full width (cover the whole page) */
    height: 100%; /* Full height (cover the whole page) */
    top: 0; 
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5); /* Black background with opacity */
    z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
    cursor: pointer; /* Add a pointer on hover */"></div>
            -->
            
    <div class="be-wrapper be-collapsible-sidebar">
		
		

		<?php if($actual_link!='https://sungreen.com.au/dev/backoffice/admin/'){ ?>
		
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="http://designsintellect.com.au/invoice/admin/invoicelist.php" class="navbar-brand"></a>
          <a href="#" class="be-toggle-left-sidebar"><span class="icon mdi mdi-menu"></span></a>
          </div>   
          
          
          
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name">Túpac Amaru</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  
                  <li><a href="#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                  <li><a href="logout.php"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Dashboard</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav">
             
				
				
				<!--
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">3</span></div>
                    <div class="list">
                      <div class="be-scroller">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
				
				
				
				
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/slack.png" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
				
				-->
				
				
				
				
            </ul>
          </div>
        </div>
      </nav>
		<?php }?>