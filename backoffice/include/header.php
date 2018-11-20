<?php 
include 'config/config.php'; 

//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//$parts = explode("/index.php?id=", $actual_link);

//if($actual_link == 'https://earthsave.com.au/')
	//{
	//	$pageid = 1;	
	//}
	//else
	//{
	//	$pageid = end($parts); 
	//}

 

$menucon = "SELECT * FROM pages WHERE parent = 0 AND active = 1 ORDER BY page_weight";
$pageque = mysql_query($menucon);

?>



<!doctype html>
<html lang="en-US" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="description" content="Just another WordPress site">
<title>Earth Save</title>

<style type="text/css">
img.wp-smiley, img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
	
</style>
<link rel='stylesheet' id='contact-form-7-css' href='css/styles8686.css?ver=4.5.1' type='text/css' media='all' />


<link rel='stylesheet' id='bootstrap-css' href='css/bootstrape049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='et-line-fonts-css' href='css/et-line-fontse049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min5597.css?ver=5.0' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-css' href='css/flaticone049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-2-css' href='css/flaticon-2e049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css' href='css/owl.carousele049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='crane-owl-style-css' href='css/owl.stylee049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='crane-theme-style-css' href='css/stylee049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css' href='css/animate.mine049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-dropdownhover-css' href='css/bootstrap-dropdownhover.mine049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='crane-custom-css' href='css/custome049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='toastr-css' href='css/toastr.mine049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='crane-woo-css' href='css/woocommercee049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='contact7-css' href='css/contact7e049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='linecons-steadysets-css' href='css/linecons-steadysetse049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css' href='js/magnific-popup/magnific-popupe049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='slider-settings-css' href='js/revolution/css/settingse049.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css' href='wp-content/plugins/js_composer/assets/css/js_composer.min5597.css?ver=5.0' type='text/css' media='all' />
<script type='text/javascript' src='js/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='js/jquery-migrate.min330a.js?ver=1.4.1'></script>


<style type="text/css">
.recentcomments a {
	display: inline !important;
	padding: 0 !important;
	margin: 0 !important;
}
	

@media only screen 
and (max-device-width : 767px) 
and (max-device-width : 676px) {

.pop{	
   overflow: auto;
    position: relative;
    top: 0px;
    right: 0px;
    height: 94px;
    width: 101%;
    display: block;
    margin-bottom: 0px;
	margin-left:0px;
}
	
.newc{
width:100%!important;	
}

	
	
}	
</style>

<noscript>
<style type="text/css">
.wpb_animate_when_almost_visible {
	opacity: 1;
}
</style>
</noscript>
</head>

<body class="home page-template page-template-page-home page-template-page-home-php page page-id-8 solar wpb-js-composer js-comp-ver-5.0 vc_responsive">
<div class="preloader"><span class="preloader-gif"></span></div>
<header class="transparent-header sticky-header"> 
 <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
  <div class="header-top clear">
    <div class="container">
      <div class="row">
        <div class="col-md-7 hidden-sm hidden-xs">
          <div class="header-top-left header-top-info">
            <p> <a href="#" style="font-size:20px;"> <i class="fa fa-phone"></i>1300 00 5253</a></p>
            <p><a href="mailto:info@earthsave.com.au"><i class="fa fa-envelope"></i>info@earthsave.com.au</a></p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="header-top-right pull-right">
            <ul>
              <li class="search-bar"> <a href="admin/" target="_blank"> <i class="fa fa-lock"></i>Staff Login</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Top End  --> 
  <!-- Menu Section -->
  <div class="navigation-2"> 
    <!-- navigation-start -->
    <nav class="navbar navbar-default ">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="https://earthsave.com.au"> <img src="images/logo-energy-white.png" class="img-responsive" alt="Site Logo" id="black_bar"> <img src="images/EnergyLogo.png" class="img-responsive" alt="Site Logo" id="white_bar"> </a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="nav navbar-nav">
            
          
          <?php
		  while($row = mysql_fetch_array($pageque)){
		  ?>
           <li class="dropdown"> 
           <a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$row['id']?>"
	<?php if($row['child_element']==1){ ?>class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp"<?php }?>
			  ><?php echo $row['page_title']; ?></a>
           
            <ul class="dropdown-menu">
              
              <?php 
			  $submenucon = "SELECT * FROM pages WHERE parent = '".$row['id']."' AND active = 1";
			  $subpageque = mysql_query($submenucon);
			  
			  while($submenurow = mysql_fetch_array($subpageque)){
			  ?>  
                
            <li class="dropdown">
				<!--<a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$submenurow['id']?>" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp"><?php echo $submenurow['page_title']; ?></a>-->
				
				<a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$submenurow['id']?>" <?php if($submenurow['child_element']!=0){?>  data-toggle="dropdown" <?php } ?> data-animations="fadeInUp"><?php echo $submenurow['page_title']; ?></a>
				
				
				<!-- 2nd tier -->
				
				<ul class="dropdown-menu">
              
              <?php 
			  $submenucon2 = "SELECT * FROM pages WHERE parent = '".$submenurow['id']."' AND active = 1 ORDER BY page_weight";
			  $subpageque2 = mysql_query($submenucon2);
			  
			  while($submenurow2 = mysql_fetch_array($subpageque2)){
			  ?>  
                
            <li class="dropdown">
				<!--<a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$submenurow2['id']?>" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp"><?php echo $submenurow2['page_title']; ?></a>-->
				
				<a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$submenurow2['id']?>" <?php if($submenurow2['child_element']!=0){?> data-toggle="dropdown" <?php }?> data-animations="fadeInUp"><?php echo $submenurow2['page_title']; ?></a>
				
				
				<!-- 3nd tier -->
				
				<ul class="dropdown-menu">
              
              <?php 
			  $submenucon3 = "SELECT * FROM pages WHERE parent = '".$submenurow2['id']."' AND active = 1";
			  $subpageque3 = mysql_query($submenucon3);
			  
			  while($submenurow3 = mysql_fetch_array($subpageque3)){
			  ?>  
                
            <li class="dropdown">
				<!--<a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$submenurow3['id']?>" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp"><?php echo $submenurow3['page_title']; ?></a>-->
				
				<a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$submenurow3['id']?>" data-animations="fadeInUp"><?php echo $submenurow3['page_title']; ?></a>
				
				
				
				
				<!-- 4nd tier -->
				
				<ul class="dropdown-menu">
              
              <?php 
			  $submenucon4 = "SELECT * FROM pages WHERE parent = '".$submenurow3['id']."' AND active = 1 ORDER BY page_weight";
			  $subpageque4 = mysql_query($submenucon4);
			  
			  while($submenurow4 = mysql_fetch_array($subpageque4)){
			  ?>  
                
            <li class="dropdown">
				<!--<a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$submenurow4['id']?>" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp"><?php echo $submenurow2['page_title']; ?></a>-->
				
				<a href="<?php echo $basepath = 'https://earthsave.com.au/index.php?id='.$submenurow4['id']?>" <?php if($submenurow4['child_element']!=0){?> data-toggle="dropdown" <?php }?> data-animations="fadeInUp"><?php echo $submenurow4['page_title']; ?></a>
				
				
				
				
				
				
				
				
				
				</li>
                <?php }?>
                
              </ul>
				
				<!-- end 4nd tier -->
				
				
				
				
				
				</li>
                <?php }?>
                
              </ul>
				
				<!-- end 3nd tier -->
				
				
				
				
				</li>
                <?php }?>
                
              </ul>
				
				<!-- end 2nd tier -->
				
				
				
				
				
				
				
				
				
				
				
				</li>
                <?php }?>
                
              </ul>
           </li>
          <?php }?>       
          
          <!--
           <li class="dropdown"> 
           <a href="#" class="dropdown-toggle " data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Home</a>
            
              <ul class="dropdown-menu">
                <li class=" dropdown"><a href="index.html" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Home</a> 
                </li>
                
                <li> <a href="#">Home Simple</a> </li>
              </ul>
            </li>
           --> 
           
            
           
           
          
          </ul>
          <a href="https://earthsave.com.au/index.php?id=7" class="btn btn-primary pull-right"> Request a quote </a> </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-end --> 
    </nav>
  </div>
	
	
	
	
	<div class="vc_row wpb_row pop">
	
	<div class="container newc" style="background: #aa2129;
    padding: 0px;
    width: 15%;
								  position:absolute;
								  right:0px;
    color: #fff;
    font-size: 25px;
    text-align: center;
    float: right;">
    <span style="
    display: block;
    padding: 10px;
    background: #000;
				 "><a href="https://earthsave.com.au/index.php?id=7"><i class="fa fa-envelope"></i> Contact us</a></span>
    <span style="
    padding: 10px;
    display: block;
"><i class="fa fa-phone"></i> 1300 00 5253</span>
    
    


</div>
	</div>

	
	
	
  <!-- /.navigation-end --> 
  <!-- Menu  End --> 
</header>
<!--header section end-->