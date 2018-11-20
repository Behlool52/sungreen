<?php 
session_start();

if($_SESSION['userrole']==''){
header("Location: http://designsintellect.com.au/invoice/admin");
}

if((time() - $_SESSION['last_login_timestamp']) > 900) // 900 = 15 * 60  
           {  
                header("Location: http://designsintellect.com.au/invoice/admin");  
           }  

include 'includes/header.php';



?>
<?php include 'includes/leftpanel.php'; ?> 

<style>
	
	.emailcombo .modal-content{
	min-width:500px!important;
		width:50%;
	}
	
	.tick{
	color: green;
    font-size: 1.6em;
    text-align: center;	
	}
	
	.crossicon{
	color: red;
    font-size: 1.6em;
    text-align: center;	
	}
	
	.workorderfetch, .stcfetch{
	padding: 0 0px;
    color: #646464;
    /*font-size: 18px;*/	
	}
	
	.hdstyler{
padding:5px;
background:#393;
color:#fff;	
}

.inputnobdr{
border-left:0px;
border-top:0px;
border-right:0px;
}

.smtab span{
	min-height: 6px;
    max-height: 60px;
    display: inline-block;	
}

.paneltextarea textarea{
height:94px;
padding:3px;
font-size:0.9em;	
}
	
	.smtab{
	background:#efefef!important;
	padding:10px;
	border-right: 2px solid #fff;
}
	
	.bdrcol{
	margin:15px 0px 15px 0px;
	overflow:auto;
	}
	
.bdrcol div{
	border-top:1px solid #ccc;
	border-left:1px solid #ccc;
	border-bottom:1px solid #ccc;
	padding:10px;
	min-height:260px;
	
}
	
	.bdrcol div:nth-child(3){	
	border-right:1px solid #ccc;
	padding:10px
	
}
	
	.col3hd h4{
		padding: 0px 0px 5px 0px;
    	margin: 0px;
    	font-weight: 500;	
	}
	
	.h4tag{
		padding: 0px 0px 10px 0px;
    	margin: 0px;
    	font-weight: 500;
	}
	
	.col3hd ul{
		padding:0px;
		margin:0px;
	}
	
	.col3hd ul li{
		list-style:none;
	}
	
	#form-bp4 label {
    margin-top: 8px;
    margin-bottom: 0px;
}
	
	#form-bp4 h3{
margin-top:0px;
font-weight:400;	
}

</style>
      
      
<div class="be-content">
		
	
	
        <div class="main-content container-fluid">
			 
			
			
			<?php if(!empty($succssmsg) && $succssmsg == 'success'){ ?>
			
			<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span>Invoice has been updated successfully!</div>
			<?php }?>
			
			
			<?php if(!empty($succssmsg) && $succssmsg == 'error'){ ?>
			
			<div role="alert" class="alert alert-danger alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span>Invoice already exist!</div>
			<?php }?>
			
			
			
			

          <div class="row">
			  
			  
		<div id="form-bp3" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">Work Order</h3>
		  	  
          </div>
          <div class="modal-body">
			  
            <div class="form-group col-md-12">
				
			<div class="col-md-6">	
              <label>Name</label>
              <input type="text" id="name" placeholder="John" class="form-control input-xs">
				 <input type="hidden" id="workorder_invoice" class="form-control input-xs">
				
			</div>	
				
			
			<div class="col-md-6">		
			<label>Contact No.</label>
            <input type="text" id="contact" placeholder="0033123456976" class="form-control input-xs">	
			</div>	
				
            </div>
			  
			  
			 <div class="form-group col-md-12">
				
			<div class="col-md-6">	
              <label>Address</label>
              <input type="text" id="address" class="form-control input-xs">
			</div>	
				
			
			<div class="col-md-6">		
			  <label>Install Type</label>
              <input type="text" id="install_type" class="form-control input-xs">	
			</div>	
				
            </div>  
			  
			  
           
			 
			  
			 
          
            <div class="form-group col-md-12">
				
                <label class="col-md-12">System</label><br>
				<div class="col-md-6"> <input type="text" id="system_panels" placeholder="Panels" class="form-control input-xs col-md-6"></div>
				<div class="col-md-6"> <input type="text" id="system_inverter" placeholder="Inverter" class="form-control input-xs col-md-6"></div>
				 
				
            </div>


           
           
			

			<div class="form-group col-md-12">
				
			<div class="col-md-6">	
              <label>System Size</label>
              <input type="text" id="system_size_kw" placeholder="KW" class="form-control input-xs">
			</div>	
				
			
			<div class="col-md-6">		
			  <label>Panel Layout</label>
              <input type="text" id="panel_layout" class="form-control input-xs">
			</div>	
				
            </div>    
			  
			  
		<div class="form-group col-md-12">
				
			<div class="col-md-6">	
              <label>Inverter Location</label>
              <input type="text" id="inverter_location" class="form-control input-xs">
			</div>	
				
			
			<div class="col-md-6">		
			  <label>Meter Box Upgrade</label>
              <input type="text" id="meterbox_upgrade" class="form-control input-xs">
			</div>	
				
            </div> 
			  
			  
			  
			<div class="form-group col-md-12">
				
			<div class="col-md-6">	
              <label>Orderd / In Stock</label>
              <input type="text" id="in_stock" class="form-control input-xs">
			</div>	
				
			
			<div class="col-md-6">		
			  <label>Time &amp; Day Preferences</label>
              <input type="text" id="time_day_prefer" class="form-control input-xs">
			</div>	
				
            </div> 
			  
			  
			  
			 
			 
			  
			  
			  
			 <div class="form-group col-md-12">
				
                <label class="col-md-12">House Type</label><br>
				<div class="col-md-6"> <input type="text" id="housetype_sing_doub" placeholder="Single/Double Storey" class="form-control input-xs col-md-6"></div>
				<div class="col-md-6"> <input type="text" id="housetype_roof_material" placeholder="Roof Material" class="form-control input-xs col-md-6"></div>
				 
				
            </div>
			  
			  
			  <div class="form-group col-md-12">
				
			<div class="col-md-6">	
              <label>Lagging from ERGON/ENERGEX</label>
              <input type="text" id="lagging" class="form-control input-xs">
			</div>	
				
			
			<div class="col-md-6">		
			  <label>ERGON/ENERGEX Reference No.</label>
              <input type="text" id="reference_no" class="form-control input-xs">
			</div>	
				
            </div> 
			  
			  
			  
			  
			  
			  
			   <div class="form-group col-md-12">
				
			<div class="col-md-6">	
              <label>Other Notes</label>
              <input type="text" id="other_notes" class="form-control input-xs">
			</div>	
				
			
			<div class="col-md-6">		
			  <label>Installer Detail</label>
              <input type="text" id="installer_details" class="form-control input-xs">
			</div>	
				
            </div> 
			  
			   <div class="form-group col-md-12">
				
			<div class="col-md-6">	
              <label>Prepared By</label>
              <input type="text" id="prepared_by" class="form-control input-xs">
			</div>	
				
			
			<div class="col-md-6">		
			  <label>Approved By</label>
              <input type="text" id="approved_by" class="form-control input-xs">
			</div>	
				
            </div> 
			  
			  
			<div class="form-group col-md-12">
				<div class="col-md-12">	
              <label>Instructions for stock and pickup location</label>
					<textarea class="form-control input-xs" id="pickup"></textarea>
					
			</div> 
				 
			  </div>  
			  
			  
           
			  <div style="clear:both;"></div>
			  
          </div>
			<!--
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" id="workorderbtn" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
          </div>
			-->
        </div>
      </div>
    </div>
			  


			  
<!-- STC FORM POPUP-->

<div id="form-bp4" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width" style="width:900px;">
        <div class="modal-content work_order_content" style="min-width:900px;">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">STC FORM</h3>
          </div>
          <div class="modal-body">
			  
         	 <div class="row">
			  <div class="col-md-12">
                  <div class="col-md-10">
                  
                  <div class="col-md-3"><img src="assets/img/emerging_logo.png"></div>
                  <div class="col-md-7"><h3>STC Assignment Form -  PV Solar</h3></div>
                  <div style="clear:both; margin-bottom:20px;"></div>                  
                  <div>Emerging Energy Solutions Group Pty Ltd. Suit 407/517 Flinders Lnae Melbourne VIC 3000
				</div>
                
                <div class="col-md-6" style="margin-left:-15px;">
                <strong style="line-height:44px;">Installation Date</strong>
                <div class="hdstyler">Owner Details</div>
                
                    <div>	
                            <label>First Name</label>
                            <input type="text" id="first_name" class="form-control input-xs">
						    <input type="hidden" id="stc_invoice" class="form-control input-xs">
						   
						    
						
						    <?php if($_SESSION['userrole']=='electrician'){?>
						    <input type="hidden" id="stc_edit_by" value="electrician">
						    <?php } ?>
						    	
						
                    </div>
                    <div>	
                            <label>Last Name</label>
                            <input type="text" id="last_name" class="form-control input-xs">
                    </div>
                    <div>	
                            <label>Postal Address</label>
                            <input type="text" id="postal_address" class="form-control input-xs">
                    </div>
                    <div>	
                            <label>Suburb</label>
                            <input type="text" id="suburb" class="form-control input-xs">
                    </div>
                    <div>	
						  <div class="col-md-6" style="margin-left:-15px; padding-right:0px;">
                            <label>State</label>
                            <input type="text" id="state" class="form-control input-xs">
						</div>
						
						 <div class="col-md-6" style="padding-right:0px;">
                            <label>Postcode</label>
                            <input type="text" id="postcode" class="form-control input-xs">
						</div>
                    </div>
					 <div>	
						  <div class="col-md-6" style="margin-left:-15px; padding-right:0px;">
                            <label>Home</label>
                            <input type="text" id="phone" class="form-control input-xs">
						</div>
						
						 <div class="col-md-6" style="padding-right:0px;">
                            <label>Mobile</label>
                            <input type="text" id="mobile" class="form-control input-xs">
						</div>
                    </div>
					 <div>	
                            <label>Email</label>
                            <input type="text" id="email" class="form-control input-xs">
                    </div>
                
                </div>
                <div class="col-md-6">
                <strong>STC Deeming Period:</strong>                       
                        <div class="be-checkbox inline">
                          <input id="one_year" type="checkbox" value="1">
                          <label for="one_year">1 Yr</label>
                        </div>
                        <div class="be-checkbox inline" style="margin-left:0px;">
                          <input id="five_years" type="checkbox" value="1">
                          <label for="five_years">5 Yrs</label>
                        </div>
                         <div class="be-checkbox inline" style="margin-left:0px;">                          
                          <input id="fourteen_years" type="checkbox" value="1">
                          <label for="fourteen_years">13 Yrs</label>
                         
                        </div>
                     
                
                
                <div class="hdstyler">Installation Details</div>
                
                 
					 <div class="be-checkbox inline">
                          <input id="samedt" type="checkbox">
                          <label for="samedt">Same as Onwer Details</label>
                        </div> 
					
					<div>	
                            <label>First Name</label>
                            <input type="text" id="first_name_detail" class="form-control input-xs">
                    </div>
                    <div>	
                            <label>Last Name</label>
                            <input type="text" id="last_name_detail" class="form-control input-xs">
                    </div>                   
					
					<div>	
                            <label>Install Address</label>
                            <input type="text" id="install_address" class="form-control input-xs">
                    </div>
                    <div>	
                            <label>Suberb</label>
                            <input type="text" id="suburb_detail" class="form-control input-xs">
                    </div>
					
					
                  <div>	
						  <div class="col-md-6" style="margin-left:-15px; padding-right:0px;">
                            <label>State</label>
                            <input type="text" id="state_detail" class="form-control input-xs">
						</div>
						
						 <div class="col-md-6" style="padding-right:0px;">
                            <label>Postcode</label>
                            <input type="text" id="postcode_detail" class="form-control input-xs">
						</div>
                    </div>
					 <div>	
						  <div class="col-md-6" style="margin-left:-15px; padding-right:0px;">
                            <label>Home</label>
                            <input type="text" id="phone_detail" class="form-control input-xs">
						</div>
						
						 <div class="col-md-6" style="padding-right:0px;">
                            <label>Mobile</label>
                            <input type="text" id="mobile_detail" class="form-control input-xs">
						</div>
                    </div>
                   
                   
                   
                </div>
                
                
                <div class="row">
                
                <div class="col-md-12" style="margin-top:20px;">
                
                <div class="col-md-3 smtab">
                <span>Are you replacing panels to a system as a result of damage or faults</span>
                
                        
                        <div class="">
                        <div class="be-checkbox inline">
                          <input id="single" type="checkbox" checked="" value="1">
                          <label for="single">Yes</label>
                        </div>
                        <div class="be-checkbox inline" style="margin-left:0px;">
                          <input id="multi" type="checkbox" value="1">
                          <label for="multi">No</label>
                        </div>
                        </div>
                        
                         <div style="text-align:center; font-size:0.9em; padding:8px 0px 8px 0px; min-height:48px; max-height:48px;"># of replacement panels?</div>	
                
                <div><input type="text" id="replacement_panel" class="form-control input-xs"></div>
                
               
                
                </div>
                <div class="col-md-3 smtab">
                <span>Are you installing additional panels to an existing system?</span>
                
                 <div class="">
                        <div class="be-checkbox inline">
                          <input id="single_2" type="checkbox" checked="" value="1">
                          <label for="single_2">Yes</label>
                        </div>
                        <div class="be-checkbox inline" style="margin-left:0px;" value="1">
                          <input id="multi_2" type="checkbox">
                          <label for="multi_2">No</label>
                        </div>
                        </div>
                        
                         <div style="text-align:center; font-size:0.9em; padding:8px 0px 8px 0px; min-height:48px; max-height:48px;"># of existing panels?</div>	
                        
                <div><input type="text" id="existing_panel" class="form-control input-xs"></div>	
                </div>
                <div class="col-md-3 smtab">
                <span>Is there currently more than one system installed at this address?</span>
                
                 <div class="">
                        <div class="be-checkbox inline">
                          <input id="single_3" type="checkbox" checked="" value="1">
                          <label for="single_3">Yes</label>
                        </div>
                        <div class="be-checkbox inline" style="margin-left:0px;" value="1">
                          <input id="multi_3" type="checkbox">
                          <label for="multi_3">No</label>
                        </div>
                        </div>
                        
                        <div style="text-align:center; font-size:0.9em; padding:8px 0px 8px 0px; min-height:48px; max-height:48px;">Please specify location of other system.</div>
                        
                <div><input type="text" id="specific_location" class="form-control input-xs"></div>	
                </div>
                <div class="col-md-3 smtab">
                <span>Are there any additional comments relating to this installation?</span>
                <div><textarea id="additional_comment" class="form-control input-xs" style="height:122px;"></textarea></div>	
                </div>
                
                
                </div>
                
                </div>
                
                
</div>
                  <div class="col-md-2">
                  
                  <div class="row">
                  	 <div class="" style="background:#efefef; padding:8px;">	
             
              <span><strong>Retailer Details</strong></span>
              <input placeholder="NAME" type="text" id="ref" class="form-control input-xs">			 
              <input placeholder="ABN" type="text" id="pvd" class="form-control input-xs">
			</div>	
                  </div>
                  
                  <div class="row paneltextarea" style="background:#efefef; padding:8px;">
                   <span><strong>Solar Panel System</strong></span>
                  <div>
                      <span>Panel Brand</span>
                      <textarea name="panel_brand" id="panel_brand" class="form-control ember-text-area ember-view"></textarea>
                  </div>
                  <div>
                      <span>Pane Mode</span>
                      <textarea name="panel_brand" id="panel_mode" class="form-control ember-text-area ember-view"></textarea>
                  </div>
                  <div>
                      <span>Inverter Brand</span>
                      <textarea name="panel_brand" id="inverter_brand" class="form-control ember-text-area ember-view"></textarea>
                  </div>
                  <div>
                      <span>Inverter Model</span>
                      <textarea name="panel_brand" id="inverter_model" class="form-control ember-text-area ember-view"></textarea>
                  </div> 
                  <div>
                      <span>lnverter Series</span>
                      <textarea name="panel_brand" id="inverter_series" class="form-control ember-text-area ember-view"></textarea>
                  </div> 
                  
                                   
                  </div>
                  
                  <div class="row" style="background:#d4d4d8; padding:3px;">
                  
                  <div>
                      
                      <input placeholder="Number of Panels" type="text" id="no_of_panels" class="form-control input-xs">
                  </div>
                  <div>                     
                     <input placeholder="Rated Power Output(KW)" type="text" id="rpo" class="form-control input-xs">
                  </div>
                 
                  
                                   
                  </div>
                  
                  
                  </div>
              </div>
              </div>
               <div class="row">
               <div class="col-md-12" style="background:#efefef; margin-top:20px;">
               
              		 	<div class="row">
                       
                       <div class="">
                      <label class="col-sm-2 control-label">Property Type</label>
                      <div class="col-sm-8">
                        <div class="be-checkbox inline">
                          <input id="resd" type="checkbox" checked="" value="1">
                          <label for="resd">Residential</label>
                        </div>
                        <div class="be-checkbox inline">
                          <input id="school" type="checkbox" value="1">
                          <label for="school">School</label>
                        </div>
                        <div class="be-checkbox inline">
                          <input id="commer" type="checkbox" value="1">
                          <label for="commer">Commercial</label>
                        </div>
                         <div class="be-checkbox inline">
                          
                          <input id="other" type="checkbox" value="1">
                          <label for="other">Other</label>
                          <input type="text" id="property_other" class="">
                        </div>
                      </div>
                    </div>
               
               			</div>
                        
                        <div class="row">
                       
                       <div class="">
                      <label class="col-sm-2 control-label">Single/Muli Storu:</label>
                      <div class="col-sm-10">
                        <div class="be-checkbox inline">
                          <input id="single_storey" type="checkbox" checked="" value="1">
                          <label for="single_storey">Single</label>
                        </div>
                        <div class="be-checkbox inline">
                          <input id="multiple_storey" type="checkbox" value="1">
                          <label for="multiple_storey">Multi</label>
                        </div>
                        <div class="be-checkbox inline">
                          <input id="certs" type="checkbox" value="1">
                          <label for="certs">Number of small-scale tech certs (Stcs)</label>
                        </div>
                         <div class="be-checkbox inline">
                          
                          <!--<input id="stc_nos" type="checkbox" > -->                        
                          <input type="text" id="stc_nos" class="">
                        </div>
                      </div>
                    </div>
               
               			</div>
               
               </div>
               </div>
               
                <div class="row">
                <div class="col-md-12" style="margin-top:20px;">
                
                
                
                <div style="background:#396; padding:5px; color:#fff;">Accreditation Information</div>
                <div>
                <label>INSTALLER DETAILS</label><br>
              <input type="text" placeholder="Full Name" id="installer_name" class="col-md-3 input-xs">
              <input type="text" placeholder="Phone" id="installer_phone" class="col-md-3 input-xs">
              <input type="text" placeholder="Address" id="installer_address" class="col-md-3 input-xs">
              <input type="text" placeholder="Accreditation Number" id="installer_accred_no" class="col-md-3 input-xs">
                </div>
					<div class="notes">State 'As above' if details are same</div>
                
                 <div>
                <label>ELECTRICIAN DETAILS</label><br>
              <input type="text" placeholder="Full Name" id="electrician_name" class="col-md-3 input-xs">
              <input type="text" placeholder="Phone" id="electrician_phone" class="col-md-3 input-xs">
              <input type="text" placeholder="Address" id="electrician_address" class="col-md-3 input-xs">
              <input type="text" placeholder="Accreditation Number" id="electrician_accred_no" class="col-md-3 input-xs">
                </div>
					<div class="notes">State 'As above' if details are same</div>
                
                <div>
                <label>DESIGNER DETAILS</label><br>
              <input type="text" placeholder="Full Name" id="designer_name" class="col-md-3 input-xs">
              <input type="text" placeholder="Phone" id="designer_phone" class="col-md-3 input-xs">
              <input type="text" placeholder="Address" id="designer_address" class="col-md-3 input-xs">
              <input type="text" placeholder="Accreditation Number" id="designer_accred_no" class="col-md-3 input-xs">
                </div>
                
                <div style="clear:both;"></div>
                
                <div style="border-bottom:5px solid #396; padding-top:10px"></div>
                
                </div>
                </div>
                
                 <div style="clear:both; padding-bottom:10px;"></div>
                
                <div class="row">
                <div class="col-md-12">
					Mandatory written statement by the cec installer and designer:<br>
                <div style="line-height:20px;">I <input type="text" id="installer_name_main" class="inputnobdr"> (name of installer) was the accredited CEC Installer that completed the SGU installation at  <input type="text" id="installed_place" class="inputnobdr"> and verify that i have installed the system, it meets the CEC accreditation guidelines, CEC Accreditation Code of Practice and I am bound by their Code of Conduct, have used panels and inverters approved by the CEC, followed all of the Clean Energy Regulator's Guidelines, have $5m in Public Liability Insurace and the system meets the following Australian Standards, where applicable:-</div>
					
					<div class="bdrcol col3hd">					
						<div class="col-md-4"> 
							<h4>PV &amp; Inverter Standards</h4>
							<ul>
								<li>AS/NZS 5033:2005, Installation of photovoltaic (PV) arrays</li>
								<li>AS/NZS 1170:2002, Structural Design actions, Part 2: Wind Action (PV Array)</li>
							<li>AS/NZS 5033, PV modules are compliant and the product is listed at www.cleanenergycouncil.org.au</li>
							<li>The grid connected inverter used has been tested to Standard AS 4777 and the product is listed at cleanevergycouncil.org.au</li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4>Grid Connected System</h4>
							<ul>
								<li>AS/NZS 3000:2007, Wiring Rules</li>
								<li>AS 4777, this installation complies to this standard</li>
							<li>AS/NZS 51768:2007, Lightning Protection</li>
							<li>AS 4777:2005, Grid connection of energy system via inverters</li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4>Standalone System</h4>
							<ul>
								<li>AS/NZS 4509:2009, Standalone Power systems part 1: Safety &amp; Installation</li>
								<li>AS 4086:2:1997, Secondary batteries for use with standalone power system, Part 2: Installation &amp; maintenace, wind system AS/NZS 3000:2007, Wiring Rules</li>
							
							</ul>
						</div>				
					</div>
					
					<div style="line-height:22px;"><strong>I verify that all local, State or Territory government requirements have been met for. (i) The siting of the unit (ii) The attachment of the unit to the building or sturture. (iii) The grid connection of the system for the SGU installation.</strong> I vefiry that the SGU is <input type="checkbox" id="grid_connected" value="1"> Grid connected <input type="checkbox" id="battery_storage" value="1"> Connected to the grid with battery storage <input type="checkbox" id="off_grid" value="1"> an Off grid installation and an electrical woker holding an unrestricted licence for electrical work issued by the State or Territory authority for the place where the unit was installed undertook all wiring of the unit that involves alternating current of 50 or more volts or direct current of 120. I confirm that the details in the above statement is correct.</div>
					
					
                </div>
                </div>
                
                
                <div class="row">
                <div class="col-md-12"> 
                
                <div class="col-md-6">
                     <div style="margin:20px 0px 20px 0px; overflow:auto;">
                    <div>
       <input type="text" placeholder="Signature of SGUs CEC Installer" id="sgu_installer_signature" class="col-md-8 input-xs inputnobdr">
       <input type="text" placeholder="CEC Number" id="cec_installer_no" class="col-md-4 input-xs inputnobdr">
                    </div>
                    <div>
                    <input type="text" placeholder="Print Name" id="print_installer_name" class="col-md-8 input-xs inputnobdr">
                    <input type="text" placeholder="Date" id="sgu_inst_sig_date" class="col-md-4 input-xs inputnobdr">
                    </div>
                    </div>
                    <div>
						<h4 class="h4tag">Mandatory Declaration</h4>
						<ul>
							<li>I am the legal owner of the above small generation unit (SGU) and assign the right to create STCs to Emerging Energy Solutions Group Pty Ltd for the period stated above, commencing at the date of installation.</li>
							<li>I have not preiously assigned or created any STCs for this system within this period.</li>
							<li>To claim 14 years deeming for SGU. STUs mus be registered within 12 months or installation</li>
							<li>I understand I am under no obligation to assign STCs to Emerging Energy Solutions Group Pty Ltd</li>
							<li>I agree to repay the STC to Energy Solutions Group Pty Ltd should my assignment be invalid</li>
							<li>I understand that an agent of the Clean Energy Regulator or Emerging Energy Solutions Group Pty Ltd may wish to inspect the SGU within the five years of certificate redemption</li>
							<li>I must retain receipts and proof of the installation date for the life of the STCs</li>
							<li>I am aware that penalties can be applied for providing misleading information in the form under the Renewable energy (Electricity) Act 2000</li>
							<li>I further declare that the accredited CEC Installer named on this form physically attended the installation of the unit</li>

							
						</ul>
						
                    </div>
                </div>                
                <div class="col-md-6">
                
                 <div style="margin:20px 0px 20px 0px; overflow:auto;">
                 <div>
                    <input type="text" placeholder="Signature of SGUs CEC Designer" id="sgu_designer_signature" class="col-md-8 input-xs inputnobdr">
                    <input type="text" placeholder="CEC Number" id="cec_designer_no" class="col-md-4 input-xs inputnobdr">
                    </div>
                 <div>
                    <input type="text" placeholder="Print Name" id="print_designer_name" class="col-md-8 input-xs inputnobdr">
                    <input type="text" placeholder="Date" id="sgu_desig_sig_date" class="col-md-4 input-xs inputnobdr">
                    </div>
                    </div>
                    
                    
                    <div>						
					I understand that this system is eligible for <input type="text" id="stc_eligible" class="inputnobdr">  STCs and in exchange for assigning my right to create these STCs, I will receive a point of sale discount from the installers/suppliers.	
						
                    </div>
                    
                    
                     <div style="margin:20px 0px 20px 0px; overflow:auto;">
                    <input type="text" placeholder="Owner Signature" id="owner_signature" class="col-md-4 input-xs inputnobdr">
                    <input type="text" placeholder="Date" id="owner_signature_date" class="col-md-2 input-xs inputnobdr">
                    
                    <input type="text" placeholder="Agent/Installer Sign" id="agent_signature" class="col-md-4 input-xs inputnobdr">
                    <input type="text" placeholder="Date" id="agent_signature_date" class="col-md-2 input-xs inputnobdr">
                    </div>
                    
                     <div>
                    PRIVACY DECLARATION: Emerging Energy Solution Group Pty Ltd will only use this personal information as intended and will not sell or divulge this to any third parties other than the Clean Energy Regulators.
                    </div>
                    
                    
                
                
                </div>
                
               </div>
                </div>
              
			  
			  <div id="stcmodal">
              
              
              





</div>
			
			 
			  
			 
			  
			  
           
			  <div style="clear:both;"></div>
			  
          </div>
			
			
		<div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" id="stcformedit" data-dismiss="modal" class="btn btn-primary md-close">Update</button>
          </div>	
			
			
			<!--
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" id="stcform" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
          </div>
-->
        </div>
      </div>
    </div>				


<!-- STC FORM POPUP ENDS HERE-->
			  
	  
			  
			<div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary emailcombo">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">Email</h3>
          </div>
          <div class="modal-body">
			  
            <div class="form-group">
				
			<div class="col-md-12">	
             
            	<select class="form-control input-xs" id="subj">
                         <option>Select Customer</option>
				 		  <option value="invoice_only">Invoice</option>
					      <option value="stc_only">STC</option>
					      <option value="workorder_only">Work Order</option>
					<!--<option value="stc_workorder_only">STC/Work Order</option>
					<option value="invoice_stc_workorder">Invoice/STC/Work Order</option>-->
				</select>
			</div>	
            </div><br>
			 <div class="form-group">
             <input type="hidden" id="invoiceidforpopup">
             <?php
			 //$customerlistcone = "SELECT * FROM invoice WHERE invoice_no = ".$pagerow['customer_id']."";	
			 //$custquee = mysql_query($customerlistcone);
	        //$ssu = mysql_fetch_array($custquee);
			 ?>
             
             	
				<div class="col-md-12 usersemail form-group">	             
              
					
					<!--<select class="form-control input-xs" id="senderemail">
                         <option>Select User</option>
				 		  <option value="lead">Lead Person</option>
					      <option value="sale">Sales Person</option>
					      <option value="other" >Other</option>
					
				</select>-->
			</div>	
            
            <div class="col-md-12 compemail"></div>
				
			
				
				
            </div>
			  
			  
           
			  <div style="clear:both;"></div>
			  
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close invoidforpost" id="">SEND</button>
          </div>
        </div>
      </div>
    </div>  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
            <!--Responsive table-->
            <div class="col-sm-12">
				
				
				
				
				<div class="tab-container">
                  <ul role="tablist" class="nav nav-tabs">
                    <li class="nav-item"><a href="#home" data-toggle="tab" role="tab" class="nav-link active show" aria-selected="true">Ongoing</a></li>
                    <li class="nav-item"><a href="#profile" data-toggle="tab" role="tab" class="nav-link" aria-selected="false">Completed</a></li>
                    
                  </ul>
                  <div class="tab-content">
                    <div id="home" role="tabpanel" class="tab-pane active">
                      <p>
					  <div class="panel panel-default panel-table">
                <div class="panel-heading">Invoice List
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="homepage.php">Add New Page</a></li>
                     
                      
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
					
					
					
					<!-- Data table -->
					

					<table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                      
                      
                      
                      
                       <th style="width:5%;">Invoice</th>
						<th style="width:10%;">Date</th>
                        <th style="width:5%;">Pay-Mode</th>
                          <th style="width:5%;">Stc-Mode</th>
                        <th style="width:10%;">Customer</th>
						<th style="width:10%;">Address</th>
                        
                        
						<?php if(($_SESSION["userrole"]!='saleperson') && ($_SESSION["userrole"]!='leadperson')){?>
						<th style="width:5%;">App#</th>
						<?php }?>
						  <?php if($_SESSION["userrole"]!='electrician'){?>
                        <th style="width:5%;">INV-Status</th>
                        <?php if(($_SESSION["userrole"]!='saleperson') && ($_SESSION["userrole"]!='leadperson') && ($_SESSION["userrole"]!='electrician')){?>
						<th style="width:5%;">Installer</th> 
						   <?php }?>
						  
						  <?php }?>
						
						<?php if(($_SESSION["userrole"]!='saleperson') && ($_SESSION["userrole"]!='leadperson')){?>
						<th style="width:5%;">STC-Status</th>
						<?php if($_SESSION["userrole"]!='electrician'){?>  
						<th style="width:5%;">STC</th>
						  <?php }?>
						<?php }?>
						<th style="width:10%;">WO-Status</th>
					
						<?php if(($_SESSION["userrole"]!='saleperson') && ($_SESSION["userrole"]!='leadperson')){?>
						<th style="width:5%;">WO</th>
						<?php }?>
						  <?php if($_SESSION["userrole"]=='Admin' OR $_SESSION["userrole"]=='Director' OR $_SESSION["userrole"]=='electrician'){?>	
                        <th style="width:10%;"></th>
						  <?php }?>
                      
                      
                      
                      
                       
                        
                        
                        
                        
                        
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                    
                    
                    <?php while($pagerow = mysql_fetch_array($invoiceque)){ 
						  
						 $customerlistcone = "SELECT * FROM customer_info WHERE id = ".$pagerow['customer_id']."";	
						 $custquee = mysql_query($customerlistcone);
	                     $ssu = mysql_fetch_array($custquee);
	
						 $invocone = "SELECT * FROM work_order WHERE invoice_id = ".$pagerow['invoice_no']."";	
						 $invoquee = mysql_query($invocone);
	                     $invorow  = mysql_fetch_array($invoquee);
	
	                     $stcinvocone = "SELECT * FROM stc WHERE invoice_no = ".$pagerow['invoice_no']."";	
						 $stcinvoquee = mysql_query($stcinvocone);
	                     $stcinvorow  = mysql_fetch_array($stcinvoquee);
						 
						 $greeninvocone = "SELECT * FROM greendeal WHERE invoice_no = ".$pagerow['invoice_no']."";	
						 $greeninvoquee = mysql_query($greeninvocone);
	                     $greeninvorow  = mysql_fetch_array($greeninvoquee);
				 
				         $electcon = "SELECT * FROM electricians WHERE id = ".$pagerow['electrician']."";	
						 $electque = mysql_query($electcon);
	                     $electrow  = mysql_fetch_array($electque);
				 
				         $panelcon = "SELECT * FROM panels WHERE invoice_no = ".$pagerow['invoice_no']."";	
						 $panelque = mysql_query($panelcon);
	                     $panelrow  = mysql_fetch_array($panelque);
	
						  
						  
						  ?>
                    
                    
                    <tr <?php if($pagerow['application_number']!=''){?>style="background:#dcf3dc" <?php }else{?> style="background:#fddada;"<?php }?>>
                     <!-- <tr class="odd gradeX">-->
                        
                         <td class="cell-detail"> <span>
						 <a href="#0" class="icon cd-btn invoicedatafetch" id="<?php echo $pagerow['id']; ?>">
						 <?php echo $pagerow['invoice_no']; ?></a></span></td>
						<td class="user-avatar cell-detail user-info">
							
							<?php echo $pagerow['invoice_date']; ?>
							
						  </td>
                        
                        <td class="cell-detail"><span>
                                <?php if($pagerow['payment_mode']=='cash'){?>
                                <?php echo $pagerow['payment_mode']; ?></span>
                                <?php }else if($pagerow['payment_mode']=='company_finance'){?>
                                    <?php echo $pagerow['finance_company']; ?></span>
                                <?php }?>

                        </td>

                        <td class="cell-detail"><span>
							
							<?php if($pagerow['stc_platform']=='achievers_energy'){ ?>
							Achievers
							<?php }elseif($pagerow['stc_platform']=='green_deal'){?>
							Greendeal
							<?php }elseif($pagerow['stc_platform']=='emerging_energy'){?>
							Emerging
							<?php }?>
							
							
							</span></td>
                        <td class="cell-detail"><span><?php echo $ssu['first_name'].' '.$ssu['last_name']; ?></span></td>
						<td class="cell-detail"><span><?php echo $ssu['shipping_address'].' '.$ssu['shipping_state']?></span></td>
                       
                       
						
						<?php if(($_SESSION["userrole"]!='saleperson') && ($_SESSION["userrole"]!='leadperson')){?>
						<td class="cell-detail"><span><?php if($pagerow['application_number']!=''){echo $pagerow['application_number'];}else{echo 'Pending';} ?></span></td>
						 <?php }?> 
                        <?php if($_SESSION["userrole"]!='electrician'){?>
						  
						  <td class="cell-detail"><span><?php echo $pagerow['status']; ?></span></td>
                          
                           <?php if(($_SESSION["userrole"]!='saleperson') && ($_SESSION["userrole"]!='leadperson') && ($_SESSION["userrole"]!='electrician')){?>
						  <td class="cell-detail"><span><?php echo $electrow['name']; ?></span></td>
						  <?php }}?>
						  
						   <?php if(($_SESSION["userrole"]!='saleperson') && ($_SESSION["userrole"]!='leadperson')){?>
						   <td class="cell-detail"><span>
							   <?php if($pagerow['stc_status']=='stc_submitted'){							      
							      echo 'STC-Submitted';
						        }								
								elseif($pagerow['stc_status']=='stc_completed'){
								echo 'STC-Completed';	
								}
								else{
							    echo 'Pending';
						         }
							   ?>						   
							   
							   </span></td>
						 <?php if($_SESSION["userrole"]!='electrician'){?>  
						   <td class="cell-detail">
							   
							   <?php if($stcinvorow['invoice_no']!='' && $pagerow['stc_platform']=='emerging_energy'){ ?>
							  <a href="#" data-toggle="modal" data-target="#form-bp4" id="<?php echo $stcinvorow['invoice_no']; ?>" class="stcfetch"><i class="icon mdi mdi-assignment-o"></i></a>
							   <?php }?>
							   
							   <?php if($greeninvorow['invoice_no']!='' && $pagerow['stc_platform']=='green_deal'){ ?>
							  <a href="#" data-toggle="modal" data-target="#popup_green_<?php echo $greeninvorow['invoice_no'];?>" id="<?php echo $greeninvorow['invoice_no']; ?>" class="greenfetch"><i class="icon mdi mdi-assignment-o"></i></a>
							   <?php }?>
						  
						  </td>
						  
						  <!-- Green deal popup -->
<div id="popup_green_<?php echo $greeninvorow['invoice_no'];?>" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary emailcombo" style="padding-right: 17px;">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">Green Deal</h3>
          </div>
          <div class="modal-body">
			  
           <div class="">
              
           	   <div class="col-md-12 table-container">
          	   <input type="text" placeholder="ID" class="form-control input-xs" id="poid" value="<?php echo $greeninvorow['deal_id']; ?>">
                <input type="hidden" id="deal_invoice" class="form-control input-xs">
           </div>
           <br><br>
           
           <div class="">
              
           	   <div class="col-md-12 table-container">
          	   <input type="text" placeholder="Reference No." class="form-control input-xs" id="reference_no" value="<?php echo $greeninvorow['deal_reference_no']; ?>">
           </div>
          
          <div> </div>
        </div>
			 
			  
			  
           
			  <div style="clear:both;"></div>
			  
          </div>
          <!--<div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close addgreendeal">UPDATE</button>
          </div>-->
        </div>
      </div>
    </div>

					
					
			  </div>
<!-- Green deal end -->
						  
					  
						  
						  <?php }?>
						  <?php }?>
						  
						   <td class="cell-detail"><span>
							   <?php 
				              if($pagerow['work_order_status']!=''){
							   echo $pagerow['work_order_status'];
							  }else{
								echo 'Pending';  
							  }
							   ?>							  
							  
							   </span></td>
							   
							   <?php if(($_SESSION["userrole"]!='saleperson') && ($_SESSION["userrole"]!='leadperson')){?>
						   <td class="cell-detail">
							  
							   <?php if(($invorow['invoice_id']!='') && ($_SESSION["userrole"]=='electrician' OR $_SESSION["userrole"]=='Admin')){ ?>
							   <a href="#" data-toggle="modal" data-target="#form-bp3" id="<?php echo $invorow['invoice_id']; ?>" class="workorderfetch"><i class="icon mdi mdi-assignment-o"></i></a>						  
							   <?php }?>
						  
						  </td>
						  <?php }?>						  
						  
						  <?php if($_SESSION["userrole"]=='Admin' OR $_SESSION["userrole"]=='Director' OR $_SESSION["userrole"]=='electrician'){?>                         
						  
						  <td <?php if($_SESSION["userrole"]!='electrician'){?>class=""<?php }?>>                        
							
				
				 <?php if($_SESSION["userrole"]=='electrician'){?>
							
				<div class="btn-group btn-hspace">
                      <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"><i class="icon icon-left mdi mdi-settings"></i><span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="#0" class="icon workorderstatus" id="<?php echo $pagerow['id']; ?>" data-toggle="modal" data-target="#status_popup_<?php echo $pagerow['invoice_no']; ?>">WO Status</a></li>
						
						 <?php if($pagerow['stc_platform']!='green_deal' && $pagerow['stc_platform']!='achievers_energy'){?>
                       
                        <li><a href="#" data-toggle="modal" data-target="#panelpopup_<?php echo $pagerow['invoice_no']; ?>" id="<?php echo $pagerow['invoice_no'] ?>" class="panelfetch">Serialize Panels</a></li>
						
						<li><a href="#0" class="icon cecstatus" id="<?php echo $pagerow['id']; ?>" data-toggle="modal" data-target="#cecstatus_popup_<?php echo $pagerow['invoice_no']; ?>">Attach CES/COC</a></li> 
						
						<?php }?>
						
						
						   <?php if($stcinvorow['invoice_no']!=''){ ?>
                        <li><a href="#" data-toggle="modal" data-target="#form-bp4" id="<?php echo $stcinvorow['invoice_no']; ?>" class="stcfetch">Update STC</a></li>
						  <?php }?>
						  
						  
						  
 						  
						  
						  
						  
                      </ul>
					
					
					
<!-- WORK ORDER STATUS POPUP -->
			  
	  <div id="status_popup_<?php echo $pagerow['invoice_no']; ?>" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">STATUS</h3>
          </div>
          <div class="modal-body">
			  
            <div class="form-group">
				
			<div class="col-md-12">
				<input type="hidden" id="" class="hiddenvalue">
               <select class="form-control input-xs" id="invoice_status" onchange="scheduleA.call(this, event)">
            	<!--<select class="form-control input-xs" id="invoice_status">-->
                          <option value="none">--Select Status--</option>				 		  
					      <option value="work_in_progress">Work In Progress</option>
					      <option value="work_done">Work Done</option>
					
				</select>
			</div>	
            </div>	
			
           
			  <div style="clear:both;"></div>
			  
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close invoidforstatus" id="<?php echo $pagerow['invoice_no']; ?>">SEND</button>
          </div>
        </div>
      </div>
    </div>
			  
<!-- WORK ORDER POPUP ENDS HERE -->						
					
					
					
					
					
					
					
                    </div>
							  
							  
							  
							  
	<!-- PANEL SERIALIZE POPUP -->	
							  
						  
							  
		<div id="panelpopup_<?php echo $pagerow['invoice_no']; ?>" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
			<form id="frm_<?php echo $pagerow['invoice_no']; ?>" action="" name="<?php echo $pagerow['invoice_no']; ?>">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">SERIALIZE PANEL</h3>
		  	  
          </div>
			 
          <div class="modal-body">		  
  
			
			  
			  
			<div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered serialized_table">
      
		 
		<tbody><tr>
       <th width="95%">Serials</th>       
       <th width="5%"><button type="button" name="add" class="mdi mdi-plus-square add3" id="<?php echo $pagerow['invoice_no']; ?>"></button></th>
			<input type="hidden" id="invoiceid_panel" value="<?php echo $pagerow['invoice_no']; ?>">
      </tr> 
		 
		 
		<?php
        //$ji = 1;
        $invoprosql = "SELECT * FROM panels WHERE invoice_no = '".$pagerow['invoice_no']."'";
		$invoproque = mysql_query($invoprosql);
		$row = mysql_fetch_array($invoproque);
		$tab3 = explode(",", $row['serials']);	
																
		$sher = count($tab3);															
				
		for ($i = 0; $i < $sher; $i++) {		
		 ?>
	<tr>  							
  							
  							<td><input type="text" id="serials_<?php echo $i+1; ?>" <?php if(!empty($tab3[$i])){ ?> value="<?php echo $tab3[$i]; ?>" <?php }?> name="serials[]" class="form-control item_rate input-xs"/></td>
							<td><button type="button" name="remove" class="mdi mdi-minus remove"></button></td>
		                  </tr>	
		 
		 <?php    }	?>		 
		 
  							
		 
		 		
		
		 
		 
	 
     </tbody>
				
				</table>
     
    </div> 			    
			  
			  
           
			  <div style="clear:both;"></div>
			 
          </div>
			
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" id="<?php echo $pagerow['invoice_no']; ?>" class="btn btn-primary md-close add_panels">Serialize</button>
          </div>
			  
			
        </div>
      </div>
			</form>
    </div>
						
						  
							  
	<!-- PANEL SERIALIZE POPUP ENDS -->								  
							
							
				
							
							

					  
 						  
							  
	 



 <!-- CEC STATUS POPUP -->
			  
			  <div id="cecstatus_popup_<?php echo $pagerow['invoice_no']; ?>" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">CES/COC</h3>
          </div>
          <div class="modal-body">
			  
             <div class="form-group col-sm-12">
                      <label class="col-sm-3 control-label">Attach CES/COC</label>
                      <div class="col-sm-9">
                        <input type="file" name="cocpic" id="cocpic" class="inputfile">
                        <label for="cocpic" class="btn-primary"> <i class="mdi mdi-upload"></i>
							<span>Browse files...</span></label>
                      </div>
						 
						 
						 
                    </div>  
			
           
			  <div style="clear:both;"></div>
			  
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close cecinvoidforstatus" id="<?php echo $pagerow['invoice_no']; ?>">SUBMIT</button>
          </div>
        </div>
      </div>
    </div>
			  
<!-- WORK ORDER POPUP ENDS HERE -->					
							
							
							
							
				<?php }?>			
				
				
				
							   <div class="btn-group btn-hspace">
                      <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"><i class="icon icon-left mdi mdi-settings"></i><span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                      <ul role="menu" class="dropdown-menu">

                        
						<?php if($_SESSION["userrole"]=='Director'){?>
						<li><a href="#" class="icon delbtn invoicetodel" id="<?php echo $pagerow['id']; ?>">Delete</a></li>
						<?php }?>
						
						
						 <?php if($pagerow['stc_platform']=='green_deal' || $pagerow['stc_platform']=='achievers_energy' && $_SESSION["userrole"]=='Admin'){ ?>
                       
                        <li><a href="#0" class="icon stcworkorderstatus" id="<?php echo $pagerow['id']; ?>" data-toggle="modal" data-target="#stc_status_popup_<?php echo $pagerow['invoice_no']; ?>">STC Status</a></li>
							
						
						  
						 <?php if(($_SESSION["userrole"]=='Admin') && ($pagerow['stc_status']=='stc_completed') && ($pagerow['work_order_status']=='work_done') && ($pagerow['status']=='Paid')){?>  
						  
						  <li><a href="#0" class="icon changeinvoicestatus" id="<?php echo $pagerow['id']; ?>" data-toggle="modal" data-target="#invoice_status_popup_<?php echo $pagerow['invoice_no']; ?>">Invoice Status</a></li>
						
				             <?php }?>      
                    	
							<?php }?>
						
						
						   
                      </ul>
                    </div>
					
					
<?php if($pagerow['stc_platform']=='green_deal' || $pagerow['stc_platform']=='achievers_energy' && $_SESSION["userrole"]=='Admin'){ ?>					
<!-- STC STATUS POPUP -->
			  
	  <div id="stc_status_popup_<?php echo $pagerow['invoice_no']; ?>" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">STC STATUS</h3>
          </div>
          <div class="modal-body">
			  
            <div class="form-group">
				
			<div class="col-md-12">	
             
            	<select class="form-control input-xs" id="stc_status">
                          <option value="none">--Select Status--</option>				 		  
					      <option value="stc_submitted">STC Submitted</option>
					      <option value="stc_completed">STC Completed</option>
					
				</select>
			</div>	
            </div>	
			
           
			  <div style="clear:both;"></div>
			  
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close stcmanualstatus" id="<?php echo $pagerow['invoice_no']; ?>">SEND</button>
          </div>
        </div>
      </div>
    </div>
	
<!-- STC STATUS POPUP ENDS HERE -->						
							  
							  
<!-- INVOICE STATUS POPUP -->
	<!--<form class="invoicestatusm">-->		  
	  <div id="invoice_status_popup_<?php echo $pagerow['invoice_no']; ?>" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">INVOICE STATUS</h3>
          </div>
          <div class="modal-body">
			  
            <div class="form-group">
				
			<div class="col-md-12">	
            
            	<select class="form-control input-xs" id="invo_status">
                          <option value="none">--Select Status--</option>				 		  
					      <option value="yes">Invoice Completed</option>
					      <option value="no">Invoice in Progress</option>
					      
					
				</select>
			</div>	
            </div>	
			
           
			  <div style="clear:both;"></div>
			  
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close invoicemanualstatus" id="<?php echo $pagerow['invoice_no']; ?>">SEND</button>
          </div>
        </div>
      </div>
    </div>
							<!--  </form>-->		  
<!-- INVOICE STATUS POPUP ENDS HERE -->								  
							  
							<?php }?>
							
                        </td>
						  <?php }?> 
                        
                      
                      </tr>
                    
                     <?php } ?>  
                    
                     
                  
                      
                      
                      
                      
                      
                    </tbody>
                  </table>
					
					
					
					<!-- Data table ends here -->
					
					
					
					
					
                  
                </div>
              </div>
					  
					  </p>
                    </div>
                    <div id="profile" role="tabpanel" class="tab-pane">
                      
					  
					 
					  
					  
                    </div>
                    
                  </div>
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
              
            </div>
			  
			  
			  
			  
			<div class="cd-panel from-right">
				
				
				
			
				
		
				

		<div class="cd-panel-container">
			
			
			
			
			
			
			
			<div id="slider_header">	
					
				<div style="float:left; margin-left:20px; position:relative;" class="col-sm-5"><h3 class="invoicedata_id"></h3></div>
				<div style="float:right;" class="col-sm-4">
					<div id="pull-right" style="text-align:center">
						
						
						
						<div class="btn-group">
                        <button type="button" class="btn btn-default"><a href="" class="icon mdi mdi-edit invodit" id="editinvoc"></a></button>
                        <button type="button" class="btn btn-default"><a href="" class="icon mdi mdi-print" id="editinvoc"></a></button>
                      </div>
						
						
						
						
						<!--<a href="" class="mdi mdi-edit invodit" id="editinvoc"></a>
						<a href="" class="mdi mdi-print"></a>			
						
						<a href="#" class="mdi mdi-email invoidforpost" id=""></a>-->
						
						<div class="btn-group btn-hspace emailoptionbtn">
                      <button type="button" id="emailpopup" data-toggle="modal" data-target="#form-bp1" class="btn btn-default dropdown-toggle" aria-expanded="false"><i class="icon icon-left mdi mdi-email"></i> Email <!--<span class="icon-dropdown mdi mdi-chevron-down"></span>--></button>
                      <!--<ul role="menu" class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#form-bp1">Invoice</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#form-bp1">STC</a></li>
                        <li><a href="#" class="workldidforpost" id="">Work Order</a></li>
						<li><a href="#">STC, Work Order</a></li>  
                        <li><a href="#">Invoice, STC, Work Order</a></li>
                      </ul>-->
                    </div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					</div>
					
					<a href="#0" class="cd-panel-close">X</a>
				</div>			
				
			</div>
			
			<div style="clear:both"></div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<div class="scroll-y noscroll-x fill body scrollbox" style="height:100%; overflow:auto;">


<div class="transactions-details-band">
<!---->      <div class="grey-bg">
  <div class="comments-history">
<!---->    <ul class="list-unstyled">
          <li id="ember6841" class="ember-view"><div class="clearfix">
  <div class="date-section pull-left">
    <div class="font-xxs text-draft font-light">
        15 Dec 2017 08:19 PM
    </div>
  </div>
  <div class="comment-section pull-left">
    <p class="media">
      <div class="pull-left">
        <div class="txn-comment-icon circle-box">
         
        </div>
      </div>
      <div class="media-body">
        <div class="comment"></div>
      </div>
    </p>
  </div>
</div>
</li>
    </ul>
<!---->     
  </div>
</div>

</div>

<!----><!---->

<!---->
<div class="details-page">

  <!---->
<!---->
<!---->
<div id="ember6843" class="ember-view"><!----></div>


<!---->
<!---->
  <p class="text-right">
<!---->
<!---->  </p>
<!---->
<!---->
<!---->
<div style="" class="details-container clearfix ">

<div id="ember6844" class="ribbon popovercontainer ember-view" data-original-title="" title="">  
	<div class="ribbon-inner ribbon-draft">
    
   </div>
</div>
  
	
	
	


  <div id="ember6850" class="ember-view"><style media="all" type="text/css">
     

  @font-face {
    font-family: 'WebFont-Open Sans';
    src: local(Open Sans), url(https://fonts.gstatic.com/s/opensans/v14/K88pR3goAWT7BTt32Z01m4X0hVgzZQUfRDuZrPvH3D8.woff2);
  }

  
  .pcs-header-content {
    font-size: 9pt;
	color: #333333;
	background-color: #ffffff;
  }
  .pcs-template-body {
  	padding: 0 0.400000in 0 0.550000in;
  }
  .pcs-template-footer {
  	height: 0.700000in;
	font-size: 6pt;
	color: #aaaaaa;
	padding: 0 0.400000in 0 0.550000in;
	background-color: #ffffff;
  }
  .pcs-footer-content {
  word-wrap: break-word;
  color: #aaaaaa;
      border-top: 1px solid #adadad;
  }

  .pcs-label {
    color: #333333;
  }
  .pcs-entity-title {
    font-size: 28pt;
    color: #000000;
  }
  .pcs-orgname {
    font-size: 10pt;
    color: #333333;
  }
  .pcs-customer-name {
    font-size: 9pt;
    color: #333333;
  }
 .pcs-itemtable-header {
    font-size: 9pt;
    color: #ffffff;
    background-color: #3c3d3a;
  }
  .pcs-itemtable-breakword {
    word-wrap: break-word;
  }
  .pcs-taxtable-header {
    font-size: 9pt;
    color: #000;
    background-color: #f5f4f3;
  }
  .itemBody tr {
    page-break-inside: avoid;
    page-break-after:auto;
  }
  .pcs-item-row {
    font-size: 9pt;
    border-bottom: 1px solid #adadad;
    background-color: #ffffff;
    color: #000000;
  }
  .pcs-item-sku {
    margin-top: 2px;
  	font-size: 10px;
  	color: #444444;
  }
  .pcs-item-desc {
      color: #727272;
      font-size: 9pt;
   }
  .pcs-balance {
    background-color: #f5f4f3;
    font-size: 9pt;
    color: #000000;
  }
  .pcs-totals {
    font-size: 9pt;
    color: #000000;
    background-color: #ffffff;
  }
  .pcs-notes {
    font-size: 8pt;
  }
  .pcs-terms {
    font-size: 8pt;
  }
  .pcs-header-first {
	background-color: #ffffff;
	font-size: 9pt;
	color: #333333;
      height: auto;
	}

 .pcs-status {
 	color: ;
	font-size: 15pt;
	border: 3px solid ;
	padding: 3px 8px;
 }


 @page :first {
 	@top-center {
		content: element(header);
	}
    margin-top: 0.700000in;
  }

  .pcs-template-header {
	padding: 0 0.400000in 0 0.550000in;
    height: 0.700000in;
  }

/* Additional styles for RTL compat */

/* Helper Classes */

.inline {
  display: inline-block;
}
.v-top {
  vertical-align: top;
}
.text-align-right {
  text-align: right;
}
.rtl .text-align-right {
  text-align: left;
}
.text-align-left {
  text-align: left;
}
.rtl .text-align-left {
  text-align: right;
}

/* Helper Classes End */

.item-details-inline {
  display: inline-block;
  margin: 0 10px;
  vertical-align: top;
  max-width: 70%;
}

.total-in-words-container {
  width: 100%;
  margin-top: 10px;
}
.total-in-words-label {
  vertical-align: top;
  padding: 0 10px;
}
.total-in-words-value {
  width: 170px;
}
.total-section-label {
  padding: 5px 10px 5px 0;
  vertical-align: middle;
}
.total-section-value {
  width: 120px;
  vertical-align: middle;
  padding: 10px 10px 10px 5px;
}
.rtl .total-section-value {
  padding: 10px 5px 10px 10px;
}

/* Overrides/Patches for RTL compat */
  .rtl th {
    text-align: inherit; /* Specifically setting th as inherit for supporting RTL */
  }
/* Overrides/Patches End */

     .lineitem-header {
       padding: 5px 10px 5px 5px;
       word-wrap: break-word;
     }
     .rtl .lineitem-header {
       padding: 5px 5px 5px 10px;
     }
     .lineitem-column {
       padding: 10px 10px 5px 10px;
       word-wrap: break-word;
       vertical-align: top;
     }
     .lineitem-content-right {
       padding: 10px 10px 10px 5px;
     }
     .rtl .lineitem-content-right {
       padding: 10px 5px 10px 10px;
     }
     .total-number-section {
       width: 45%;
       padding: 10px 10px 3px 3px;
       font-size: 9pt;
       float: left;
     }
     .rtl .total-number-section {
       float: right;
     }
     .total-section {
       width: 50%;
       float: right;
     }
     .rtl .total-section {
       float: left;
     }
</style>



<div class="pcs-template ">
	  <div class="pcs-template-header pcs-header-content" id="header">
    

    

  </div>

	<div class="pcs-template-body">
		<table style="width:100%;table-layout: fixed;">
      <tbody>
        <tr>
          <td style="vertical-align: top; width:50%;">
              <div>
             </div>
                <span class="pcs-orgname"><b>Designsintellect</b></span><br>
                <span class="pcs-label">
                  <span style="white-space: pre-wrap;word-wrap: break-word;" id="tmp_org_address">U.S.A</span>
                </span>
          </td>
          <td style="width:50%;" class="text-align-right v-top">
              
             <span class="pcs-entity-title">INVOICE</span><br>
             <span id="tmp_entity_number" style="font-size: 10pt;" class="pcs-label"><b class="invoicedata_id"></b></span>
             <div style="clear:both;margin-top:20px;">
                 <span style="font-size:8pt;"><b>Balance Due</b></span><br>
                 <span style="font-size:12pt;"><b class="balance_due"></b></span>
             </div>
    </td>
        </tr>
      </tbody>
     </table>

     <table style="clear:both;width:100%;margin-top:30px;table-layout:fixed;">
         <tbody><tr>
         <td style="width:60%;vertical-align:bottom;word-wrap: break-word;">
<div><label style="font-size: 10pt;" class="pcs-label" id="tmp_billing_address_label">Bill To</label>
            <br>
            <span class="customer_name" id="zb-pdf-customer-detail"></span><br>
            <span style="white-space: pre-wrap;" class="billing_address"></span>
            </div> 
         </td>
         <td align="right" style="vertical-align:bottom;width: 40%;">
             <table style="float:right;width: 100%;table-layout: fixed;word-wrap: break-word;" border="0" cellspacing="0" cellpadding="0">
                 <tbody>
                     <tr>
                         <td style="padding:5px 10px 5px 0px;font-size:10pt;" class="text-align-right">
                            <span class="pcs-label">Invoice Date :</span>
                        </td>
                        <td class="text-align-right">
                            <span class="invoice_date"></span>
                        </td>
                    </tr>
                    <tr>
                         <td style="padding:5px 10px 5px 0px;font-size: 10pt;" class="text-align-right">
                            <span class="pcs-label">Terms :</span>
                        </td>
                        <td class="text-align-right">
                            <span id="tmp_payment_terms">Due on Receipt</span>
                        </td>
                    </tr>
                    <tr>
                         <td style="padding:5px 10px 5px 0px;font-size: 10pt;" class="text-align-right">
                            <span class="pcs-label">Due Date :</span>
                        </td>
                        <td class="text-align-right">
                            <span class="due_date"></span>
                        </td>
                    </tr>
                    

                 </tbody>
              </table>
         </td>
         </tr>
     </tbody></table>

  <table style="width:100%;margin-top:20px;table-layout:fixed;" class="pcs-itemtable" border="0" cellspacing="0" cellpadding="0">
    <thead>

        <tr style="height:32px;">
              <td style="padding: 5px 0px 5px 5px;width: 5%;text-align: center;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      #
    </td>
    <td style="padding: 5px 10px 5px 10px;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Product Item
    </td>
	 <td style="padding: 5px 10px 5px 10px;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Description
    </td>		
    <td style="padding: 5px 10px 5px 5px;width: 11%;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Qty
    </td>
    <td style="padding: 5px 10px 5px 5px;width: 11%;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Rate
    </td>
	<td style="padding: 5px 10px 5px 5px;width: 11%;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Gst
    </td>
    <td align="right" style="padding: 5px 10px 5px 5px;width: 15%;" id="" class="pcs-itemtable-header pcs-itemtable-breakword">
      Amount
    </td>

        </tr>
     </thead>
     <tbody class="itemBody">
       
		 
		 
		 
    </tbody>
  </table>
   <div style="width: 100%;margin-top: 1px;">
    <div class="v-top total-number-section">
    <div style="white-space: pre-wrap;"></div>

    </div>
    <div class="v-top total-section">
      <table class="pcs-totals" cellspacing="0" border="0" width="100%">
        <tbody>
          <tr>
                <td class="total-section-label text-align-right">Sub Total</td>
                <td id="" class="total-section-value text-align-right subtotal"></td>
          </tr>


       <tr>
                <td class="total-section-label text-align-right">GST</td>
                <td class="total-section-value text-align-right gsttotal"></td>
          </tr>



          <tr>
            <td class="total-section-label text-align-right"><b>Total</b></td>
            <td id="" class="total-section-value text-align-right"><b class="total"></b></td>               </tr>



          <tr style="height:40px;" class="pcs-balance">
            <td class="total-section-label text-align-right"><b>Balance Due</b></td>
            <td id="balance_due" class="total-section-value text-align-right"><b class="balance_due"></b></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="clear: both;"></div>
  </div>

  

  

    <div style="clear:both;margin-top:50px;width:100%;">
      <label style="font-size: 10pt;" id="tmp_notes_label" class="pcs-label">Notes</label><br>
      <p style="margin-top:7px;white-space: pre-wrap;word-wrap: break-word;" class="pcs-notes">Thanks for your business.</p>
    </div>




  </div>
	
	
	
	
	
	
	
	
	
	
	
	

    <div class="pcs-template-footer">
    <div>
      
    </div>  
  </div>

</div>

</div>

<!---->
</div>
<div style="margin-bottom: 40px;" class="row">
  <div class="col-md-6">
<!---->  </div>
  <div align="right" class="col-md-6">
    Template : 'Standard Template'
    <a data-ember-action="" data-ember-action-6851="6851">Change</a>
  </div>
</div>
<div class="pmt-info">
  <h4>More Information</h4>
  <div class="row info-row">
    <label class="text-muted col-md-3">Salesperson</label>
    <div class="col-md-9">: mustafa</div>
  </div>
<!----><!----><!----></div>
</div>
<!---->
<!---->
<!---->
<!---->
<!----><!----></div>
			
			
			
			
			
			
			
			
			
			
			
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel --> 
			  
			  
			  
			  
			  
          </div>


        </div>
      </div>
      

<?php include 'includes/footer.php'; ?>