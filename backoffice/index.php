<?php include 'include/header.php'; 

?>

<style>
#flexiselDemo1{
display:none;
	background:#92c938;
	
}

.nbs-flexisel-container {
    position:relative;
    max-width:100%;
}
.nbs-flexisel-ul {
    position:relative;
    width:99999px;
    margin:0px;
    padding:0px;
    list-style-type:none;   
    text-align:center;  
    overflow: auto;
}

.nbs-flexisel-inner {
    position: relative;
    overflow: hidden;
    float:left;
    width:100%;
    background:#fcfcfc;
    background: #fcfcfc -moz-linear-gradient(top, #fcfcfc 0%, #eee 100%); /* FF3.6+ */
    background: #fcfcfc -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcfcfc), color-stop(100%,#eee)); /* Chrome,Safari4+ */
    background: #fcfcfc -webkit-linear-gradient(top, #fcfcfc 0%, #eee 100%); /* Chrome10+,Safari5.1+ */
    background: #fcfcfc -o-linear-gradient(top, #fcfcfc 0%, #eee 100%); /* Opera11.10+ */
    background: #fcfcfc -ms-linear-gradient(top, #fcfcfc 0%, #eee 100%); /* IE10+ */
    background: #fcfcfc linear-gradient(top, #fcfcfc 0%, #eee 100%); /* W3C */
    border:1px solid #ccc;
    border-radius:5px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;  
}

.nbs-flexisel-item {
    float:left;
    margin:0px;
    padding:20px;
    cursor:pointer;
    position:relative;
    /*line-height:0px;*/
}
.nbs-flexisel-item img {
    /*max-width: 100%;*/
    cursor: pointer;
    position: relative;
    margin-top: 10px;
    margin-bottom: 10px;
}

/*** Navigation ***/

.nbs-flexisel-nav-left,
.nbs-flexisel-nav-right {
    padding:3px 12px;
    border-radius:100px;
    -moz-border-radius:15px;
    -webkit-border-radius:15px;      
    position: absolute;
    cursor: pointer;
    z-index: 4;
    top: 50%;
    transform: translateY(-50%);   
    background: rgba(0,0,0,0.5);
    color: #fff;     
}

.nbs-flexisel-nav-left {
    left: 20px;
}

.nbs-flexisel-nav-left:before {
    content: "<"
}

.nbs-flexisel-nav-left.disabled {
    opacity: 0.4;
}

.nbs-flexisel-nav-right {
    right: 20px;    
}

.nbs-flexisel-nav-right:before {
    content: ">"
}

.nbs-flexisel-nav-right.disabled {
    opacity: 0.4;
}
	
</style>	

<?php

$to = "info@earthsave.com.au";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = "From:".$_POST['name'] . "\r\n";

mail($to,$subject,$txt,$headers);



$pagecon = "SELECT * FROM pages WHERE id = $pageid";
$psque = mysql_query($pagecon);
$pgrow = mysql_fetch_array($psque);

$testcon = "SELECT * FROM testimonials ORDER BY weight";
$tstque = mysql_query($testcon);
?>

<?php if($pageid == 1){ ?>
<?php if($pgrow['slider']!=0){ ?>

<!-- Slider Starts here   -->

<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner ">
      <div class="wpb_wrapper">
        <section class="slider-container">
          <div class="slider-grids">
            <ul>
            
            
            <?php 
			$pslidercon = "SELECT * FROM slider";
			$pslique = mysql_query($pslidercon);
			while($slirow = mysql_fetch_array($pslique)){				
			?>
             	<li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="SOLAR ENERGY SERVICE PROVIDER"> 
                
                <!-- MAIN IMAGE --> 
				
									
                <img src="images/10/<?php echo $slirow['header_image']; ?>" alt="SOLAR ENERGY SERVICE PROVIDER" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
                
               
               
               <?php if($slirow['id']==2){ ?>
               
                <div class="tp-caption tt-slider-title  sft" data-x="420" data-y="500" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 997; width:60%; height:auto; left:0px!important;">
                              <img src="images/10/big-18-solar-panel-package.png" alt="SOLAR ENERGY SERVICE PROVIDER" width="25%">
				</div>
             
                
              <div class="tp-caption tt-slider-title  sft" data-x="850" data-y="200" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999; width:100%; height:auto;">
                              <img src="images/10/right_panel.png" alt="SOLAR ENERGY SERVICE PROVIDER">
               </div>
               
               
             <div class="tp-caption tt-slider-title  sft" data-x="580" data-y="400" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999; width:100%; height:auto;">
                              <img src="images/10/inverter.png" alt="SOLAR ENERGY SERVICE PROVIDER">
              </div>
               
               <div class="tp-caption tt-slider-title  sft" data-x="10" data-y="200" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999; width:100%; height:auto;">
                              <img src="images/10/left_panel.png" alt="SOLAR ENERGY SERVICE PROVIDER">
               </div>
					
					<div class="tp-caption tt-slider-title  sft" data-x="89" data-y="415" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999; width:100%; height:auto;">
                              <img src="images/10/lg_rec_sun_logo.png" alt="SOLAR ENERGY SERVICE PROVIDER">
               </div>
					
               <?php } else if($slirow['id']==1){?>	
					
					
					
				<div class="tp-caption tt-slider-title  sft" data-x="680" data-y="150" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999; width:100%; height:auto;">
                              <img src="images/10/hybridproduct.png" alt="SOLAR ENERGY SERVICE PROVIDER" width="40%">
               </div>
					
				  <div class="tp-caption tt-slider-title  sft" data-x="10" data-y="200" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999; width:100%; height:auto;">
                              <img src="images/10/phonezip.png" alt="SOLAR ENERGY SERVICE PROVIDER" width="17%">
               </div>	
					
					
				
                
					
					<?php } else { ?>
               
                
                <div class="tp-caption tt-slider-title  sft" data-x="20" data-y="200" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><?php echo $slirow['title_one']; ?></div>
                
          <?php }?>
					
					
                
             
             
              <?php if($slirow['id']==2){ ?>   
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tt-slider-subtitle  sft" data-x="370" data-y="200" data-speed="1000" data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><span style="color:#1e203a; font-family:century gothic; font-weight:bold; font-size:1.3em;">AUSTRALIA'S LEADING</span></div>
					
				<div class="tp-caption tt-slider-subtitle  sft" data-x="470" data-y="250" data-speed="1000" data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><span style="color:#2f2f31; font-family:Levenim MT; font-size:0.9em; font-weight:normal">SOLAR RETAILER</span></div>
                
                
                 <?php } else if($slirow['id']==1){?>
					
					<div class="tp-caption tt-slider-subtitle  sft" data-x="360" data-y="270" data-speed="1000" data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><span style="color:#1e203a; font-family:century gothic; font-weight:bold; font-size:1.4em;">X-HYBRID BATTERY</span></div>
					
				<div class="tp-caption tt-slider-subtitle  sft" data-x="360" data-y="320" data-speed="1000" data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><span style="color:#2f2f31; font-family:Levenim MT; font-size:0.9em; font-weight:normal">STORAGE</span></div>
					
					
					<?php } else {?>
                 
                   <div class="tp-caption tt-slider-subtitle  sft" data-x="20" data-y="300" data-speed="1000" data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><?php echo $slirow['title_two']; ?></div>
                   
                   <?php } ?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                   
                   
                   
                   <?php if($slirow['id']==2){ ?>                   	
                
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tt-slider-small-text sft" data-x="460" data-y="300" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><span style="color:#444;"><?php echo wordwrap($slirow['title_three'],150,"<br>\n");?><span></div>
                
                 <div class="tp-caption tt-slider-small-text sft" data-x="420" data-y="300" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><img src="images/10/tick_icon.png" alt="SOLAR ENERGY SERVICE PROVIDER"></div>
					
					<div class="tp-caption tt-slider-small-text sft" data-x="420" data-y="330" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><img src="images/10/tick_icon.png" alt="SOLAR ENERGY SERVICE PROVIDER"></div>
					
					<div class="tp-caption tt-slider-small-text sft" data-x="420" data-y="360" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><img src="images/10/tick_icon.png" alt="SOLAR ENERGY SERVICE PROVIDER"></div>
                
                
                
                <?php } else if($slirow['id']==1){?>
					
					
					
				<div class="tp-caption tt-slider-small-text sft" data-x="410" data-y="370" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><span style="color:#444;"><?php echo wordwrap($slirow['title_three'],150,"<br>\n");?><span></div>
                
                 <div class="tp-caption tt-slider-small-text sft" data-x="370" data-y="370" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><img src="images/10/tick_icon.png" alt="SOLAR ENERGY SERVICE PROVIDER"></div>
					
					<div class="tp-caption tt-slider-small-text sft" data-x="370" data-y="400" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><img src="images/10/tick_icon.png" alt="SOLAR ENERGY SERVICE PROVIDER"></div>
					
					<div class="tp-caption tt-slider-small-text sft" data-x="370" data-y="430" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><img src="images/10/tick_icon.png" alt="SOLAR ENERGY SERVICE PROVIDER"></div>	
					
					<div class="tp-caption tt-slider-small-text sft" data-x="370" data-y="460" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><img src="images/10/tick_icon.png" alt="SOLAR ENERGY SERVICE PROVIDER"></div>	
                
                
                
                
                <?php } else {?>
               
                <div class="tp-caption tt-slider-small-text sft" data-x="20" data-y="370" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><?php echo wordwrap($slirow['title_three'],150,"<br>\n");?></div>
                
                 <?php } ?>
					
					
					
               
                <?php if($slirow['id']!=2){ ?>
               
                <!-- LAYER NR. 4 -->
                <!--<div class="tp-caption sft" data-x="20" data-y="450" data-speed="1000" data-start="1100" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"> <a href="#" class="tt-btn btn-bordered light"><?php echo $slirow['button_link']; ?></a> </div>-->
                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme sfr" 
                            data-x="right" data-hoffset="10"
                            data-y="100" 
                            data-speed="800"
                            data-start="1900"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 999;"> </div>
					
					<?php }?>
					
					
					
              </li>              
             <?php }?>                
              
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>  <!-- Slider Starts here   -->


<?php }?>

<?php }else{?>





<section class="slider-container">
             <div class="slider-grids grid2">
            <ul style="padding:0px;">
            
            
           
             	<li data-transition="random" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="SOLAR ENERGY SERVICE PROVIDER"> 
                
                <!-- MAIN IMAGE --> 
                <img src="https://sungreen.com.au/dev/backoffice/admin/assets/img/headers/<?php echo $pgrow['featured_pic']; ?>" alt="SOLAR ENERGY SERVICE PROVIDER" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
					
										
					<div class="tp-caption tt-slider-title  sft headertext" data-x="20" data-y="200" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999"><?php echo $pgrow['page_title'];?></div>
					
					
					
               
                
              </li>              
                     
              
            </ul>
          </div>
        </section>



<?php }?>
		
		
		
		

<div class="vc_row wpb_row vc_row-fluid">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner ">
			<div class="container custom-padding">
<?php 
echo $pgrow['page_content'];
?>

<?php if($pgrow['id']==7){?>
<section id="quote" class="section-padding-80">
<div class="container">
            <!-- Row -->
            <div class="row">
                <div class="text-center col-md-8 col-md-offset-2 ">
                    <!-- title-section -->
                    <div class="main-heading text-center">
                        <p class="sub-title">Do you plan to Install our product?</p>
                        <h2>Get a free Quote</h2>

                    </div>
                    <!-- End title-section -->
                    <div class="row margin-top-50">
                        <form method="post" action="#">
                            <div class="col-sm-6">
                                <!-- Name -->
                                <div class="form-group">

                                    <input type="text" placeholder="Name" id="name" name="name" class="form-control" required="">
                                </div>
                            </div>
                            <!-- End col-sm-6 -->

                            <div class="col-sm-6">
                                <!-- Email -->
                                <div class="form-group">

                                    <input type="email" placeholder="Email" id="email" name="email" class="form-control" required="">
                                </div>
                            </div>
                            <!-- End col-sm-6 -->


                            <div class="col-sm-12">
                                <!-- Email -->
                                <div class="form-group">

                                    <input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" required="">
                                </div>
                            </div>
                            <!-- End col-sm-12 -->

                            
                            <!-- End col-sm-6 -->

                            
                            <!-- End col-sm-6 -->
                            <!--Form Group-->
                            


                            <div class="col-sm-12">
                                <!-- Comment -->
                                <div class="form-group">

                                    <textarea placeholder="Write Your Project..." id="message" name="message" class="form-control" rows="6" required=""></textarea>
                                </div>
                            </div>
                            <!-- End col-sm-12 -->

                            <div class="col-sm-12">
                                <input type="submit" name="submit" id="yes" class="btn btn-primary btn-block" value="Send">

                            </div>
                            <!-- End col-sm-6 -->

                        </form>
                    </div>

                </div>


            </div>
            <!-- Row End -->
        </div>
        </section>
<?php }?>

	</div>
	</div>
</div>
</div>




<?php if($pgrow['id']==1){?>
<!-- Featured Starts here   -->
<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner ">
      <div class="wpb_wrapper">
        <section  class="padding-top-80 parallex" data-stellar-background-ratio="0.1" id="portfolio"  style="background: url(images/10/energy-audit-background.jpg) repeat scroll center center; background-size: cover;">
          <div class="main-heading text-center">
            <p class="sub-title">About Us</p>
            <h2>Featured Work</h2>
           
          </div>
          <div class="container">
            <ul id="filter" class="list-inline filter-square text-center">
				
			 <?php 
				$featcon = "SELECT * FROM featured_category WHERE active = 1 ORDER BY weight";
				$featque = mysql_query($featcon);
				while($featrow = mysql_fetch_array($featque)){				
			?>		
              
              <li data-group="<?php echo $featrow['id']; ?>" <?php if($featrow['category_slug']=='all') {?> class="active" <?php }?>><?php echo $featrow['category']; ?></li>             
				
			 <?php } ?>
				
				
            </ul>
          </div>
          <div class="portfolio-container text-center">
            <ul id="portfolio-grid" class="four-column hover-four">
				
				 <?php 
				$catcon = "SELECT * FROM category_gallery ORDER BY weight";
				$catque = mysql_query($catcon);
				while($catrow = mysql_fetch_array($catque)){				
			?>		
				
				
              <li class="portfolio-item" data-groups='["<?php echo $catrow['category_id']; ?>"]'>
                <div class="portfolio">
                  <div class="tt-overlay"></div>
                  <img src="images/featured/<?php echo $catrow['category_image']; ?>" alt="Project Title">
                  <div class="portfolio-info">
                    <!--<h3 class="project-title">Project Title</h3>-->
                    <ul class="portfolio-details">
                      <li> <a class="tt-lightbox" href="images/featured/<?php echo $catrow['category_image']; ?>"> <i class="fa fa-search"></i> </a> </li>
                      <!--<li><a href="project/project-title-12/index.html"><i class="fa fa-external-link"></i></a></li>-->
                    </ul>
                  </div>
                </div>
              </li>
				
          
            <?php } ?> 
             
             
            
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<!-- Featured Ends here   -->
<?php }?>



<?php if($pgrow['id']==1){?>
<!--Quote Starts here   -->
<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner ">
      <div class="wpb_wrapper">
        <section class="funfacts  parallex section-padding-60" style="
background: rgba(0, 0, 0, 0) url(images/10/energy-audit-background.jpg) repeat scroll center top; background-size: cover;-moz-background-size: cover; -ms-background-size: cover;-o-background-size: cover; -webkit-background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="col-md-8 col-sm-8">
                  <div class="parallex-text">
                    <h4>Not Sure Which Solution Fits Your Business Needs?</h4>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="parallex-button"> <a href="#" class="btn btn-lg btn-clean"> GET A QUOTE <i class="fa fa-angle-double-right "></i> </a> </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>





<!--Quote Ends here   -->
<?php }?>

<?php if($pgrow['id']==1){?>
<!--Testimonials Starts here   -->
<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner ">
      <div class="wpb_wrapper">
        <section class="section-padding-80 testimonials bg-white">
          <div class="container"> 
            <!-- title-section --> 
            
            <!-- End title-section --> 
            
            <!-- Row -->
            <div class="row">
              <div class="col-md-12 ">
                <div id="owl-slider" class="happy-client">
               
					
					<?php while($comrow = mysql_fetch_array($tstque)){ ?>
					
				<div class="item"> <i class="fa fa-quote-left"> </i>
                    <p><?php echo $comrow['comments']; ?></p>
                    <div class="client-info-wrap clearfix">                      
                     <div class="client-info"> <strong> <?php echo $comrow['client_name']; ?> </strong></div>
                    </div>
                  </div>
					
					<?php } ?>
                 
                 
					
					
               
                </div>
              </div>
            </div>
            <!-- Row End --> 
          </div>
          <!-- end container --> 
        </section>
      </div>
    </div>
  </div>
</div>
<!--Testimonials Ends here   -->
<?php }?>

	

<!--Brand Logos Starts here   -->
<div class="vc_row wpb_row vc_row-fluid">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner ">
      <div class="wpb_wrapper">
        <div class="brand-logo-area clients-bg">
          <!--<div class="clients-list">-->
			  
<ul id="flexiselDemo1"> 
    <li><img src="images/10/power-one-inc-logo.png" /></li>
    <li><img src="images/10/Mitsubishi-Air-Conditioning.png" /></li>
    <li><img src="images/10/Growatt.png" /></li>    
    <li><img src="images/10/lg-logo.png" /></li> 
    <li><img src="images/10/canadian-solar-logo.png" /></li>
	<li><img src="images/10/sunpower.png" /></li> 
</ul>	
			  
		  
			<!--  
            <div class="client-logo"> <a href="#"> <img src="images/10/power-one-inc-logo.png" alt="Client Logo" style="width:50%; height:auto;"/> </a> </div>
            <div class="client-logo"> <a href="#"> <img src="images/10/Mitsubishi-Air-Conditioning.png" alt="Client Logo" style="width:50%; height:auto;" /> </a> </div>
            <div class="client-logo"> <a href="#"> <img src="images/10/Growatt.png" alt="Client Logo" style="width:50%; height:auto;" /> </a> </div>
            <div class="client-logo"> <a href="#"> <img src="images/10/lg-logo.png" alt="Client Logo" style="width:50%; height:auto;"/> </a> </div>
            <div class="client-logo"> <a href="#"> <img src="images/10/canadian-solar-logo.png" alt="Client Logo" style="width:60%; height:auto;" /> </a> </div>
            <div class="client-logo"> <a href="#"> <img src="images/10/sunpower.png" alt="Client Logo" style="width:50%; height:auto;" /> </a> </div>
	-->		  
			  
			  
			  
			  
          <!--</div>-->
        </div>
      </div>
    </div>
  </div>
</div>
<!--Testimonials Ends here   -->



<?php include 'include/footer.php';?>