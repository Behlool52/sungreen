<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?> 


<style>
	
*,
*:after,
*:before {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
	
.emailcombo .modal-content{
	min-width:500px!important;
		width:50%;
	}	

.js .inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.inputfile + label {
    font-size: 1.25rem;
    /* 20px */
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    padding: 0.625rem 1.25rem;
    /* 10px 20px */
}

.no-js .inputfile + label {
    display: none;
}

.inputfile:focus + label,
.inputfile.has-focus + label {
    outline: 1px dotted #000;
    outline: -webkit-focus-ring-color auto 5px;
}

.inputfile + label * {
    /* pointer-events: none; */
    /* in case of FastClick lib use */
}

.inputfile + label svg {
    /*width: 1em;
    height: 1em;*/
    vertical-align: middle;
    fill: currentColor;
    margin-top: -0.25em;
    /* 4px */
    margin-right: 0.25em;
    /* 4px */
}

/* style 6 */

.inputfile-6 + label {
    color: #333333;
}

.inputfile-6 + label {
    background-color: #f9f8f8;
    padding: 0;
}

.inputfile-6:focus + label,
.inputfile-6.has-focus + label,
.inputfile-6 + label:hover {
    /*border-color: #722040;*/
}

.inputfile-6 + label span,
.inputfile-6 + label strong {
    padding: 0.625rem 1.25rem;
    /* 10px 20px */
}

.inputfile-6 + label span {
    width: 165px;
    min-height: 2em;
    display: inline-block;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    vertical-align: top;
}

.inputfile-6 + label strong {
    height: 100%;
    color: #fff;
    background-color: #807c7c;
    display: inline-block;
}

.inputfile-6:focus + label strong,
.inputfile-6.has-focus + label strong,
.inputfile-6 + label:hover strong {
    background-color: #4e4b4b;
}
	
@media screen and (max-width: 50em) {
	.inputfile-6 + label strong {
		display: block;
	}
}
	
#form-bp2 table td{
padding:4px;	
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

#form-bp2 h3{
margin-top:0px;
font-weight:400;	
}

#form-bp2 label{
margin-top:8px;
margin-bottom:0px;	
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
	
</style>
      
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">New Invoice</h2>

        </div>
        <div class="main-content container-fluid">


          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">New Invoice</div>
                <div class="panel-body">
                 
					

					
					
 <form action="" method="post" id="add_invoice" enctype="multipart/form-data">
  <div class="form-horizontal txn-form-horizontal ">
    <div class="primary-info grey-bg">
      <div class="zb-txn-form">
        <div class="form-group">
			
					
			
			
          <label class="control-label col-md-2 required"> Customer Name </label>
          <div class="col-md-4">
			
			  
          <select class="form-control input-xs" id="customer_idd">
                          <option>Select Customer</option>
			   <?php 
			   $customerlistcon = "SELECT * FROM customer_info";	
               $custque = mysql_query($customerlistcon);
               while($cust = mysql_fetch_array($custque)){
			   ?>
			    <option value="<?php echo $cust['id']; ?>"><?php echo $cust['first_name'].'&nbsp'.$cust['last_name']; ?></option>
			   <?php } ?>
			   
			   
                         
                        </select>
          </div>
			
			
			
			
			
			
			
        </div>
       
		  
		  
		  
      </div>
    </div>
    <div class="zb-txn-form">
      <div id="primary-content" class="primary-content">
        <div class="form-group row">
          <label class="control-label col-md-2 required">Invoice# </label>
          <div class="col-md-4 table-container">
            <input type="text"  class="form-control input-xs" id="invoice_no">
          </div>
          <i id="ember3188" class="popovercontainer form-control-help text-primary ember-view" data-original-title="" title=""> </i>
          <div> </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-2">Payment Mode </label>
          <div class="col-md-4">
            
            <select class="form-control input-xs" id="payment_mode">
			               <option value="">Select Payment Mode</option>			    
                           <option value="cash">Cash</option>
                           <option value="company_finance">Company Finance</option>
                        
                        </select>
            
            
          </div>
        </div>
        
         <div class="form-group row">
          <label class="control-label col-md-2">Finance Company</label>
          <div class="col-md-4">
            <input type="text" class="form-control input-xs" id="finance_company">
          </div>
        </div>


          <div class="form-group row">
              <label class="control-label col-md-2">STC Platform</label>
              <div class="col-md-4">

                  <select class="form-control input-xs" id="stc_platform">
                      <option value="">Select Payment Mode</option>
                      <option value="green_deal">Green Deal</option>
                      <option value="achievers_energy">Achievers Energy</option>
                      <option value="emerging_energy">Emerging Energy</option>

                  </select>


              </div>
          </div>
        
        
        <div class="form-group row">
          <label class="control-label col-md-2 required">Invoice Date</label>
          <div class="col-md-4">
            
			  <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                  <input type="text" value="" class="form-control input-xs" id="invoice_date"><span class="input-group-addon btn"><i class="icon-th mdi mdi-calendar"></i></span>
                        </div>
			  
			  
          </div>
			
			<!--
          <div class="col-md-1">
            <p class="form-control-static">Terms</p>
          </div>
          <div class="col-md-2">
            
			  
           <select class="form-control input-xs" id="invoice_terms">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          
                        </select>
          
          </div>
          <div class="col-md-1">
            <p class="form-control-static">Due Date</p>
          </div>
			
			
			<div class="col-md-2">
                 <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                  <input type="text" value="" id="due_date" class="form-control input-xs"><span class="input-group-addon btn"><i class="icon-th mdi mdi-calendar"></i></span>
                        </div>
             </div>
-->
			
			
         
        </div>

		  
		  <!-- <hr class="bdr-light xlg">-->
		  
		  <div class="form-group row" style="background:#efefef; margin:0px;">
         
			
           <div class="col-md-5">			  
           <select class="form-control input-sm" id="lead_person">
			    <option>Select Lead</option>
			    <?php 
			   $electriclistcon = "SELECT * FROM electricians WHERE role = 'leadperson'";	
               $elecque = mysql_query($electriclistcon);
               while($elecperson = mysql_fetch_array($elecque)){
			   ?>
                           <option value="<?php echo $elecperson['id']; ?>"><?php echo $elecperson['name']; ?></option>
                         <?php }?>
                        </select>
          </div>
			
			
			
			
           <div class="col-md-3">			  
           <select class="form-control input-sm" id="sale_person">
			    <option>Select Sales Person</option>
			    <?php 
			   $electriclistcon = "SELECT * FROM electricians WHERE role = 'saleperson'";	
               $elecque = mysql_query($electriclistcon);
               while($elecperson = mysql_fetch_array($elecque)){
			   ?>
                           <option value="<?php echo $elecperson['id']; ?>"><?php echo $elecperson['name']; ?></option>
                         <?php }?>
                        </select>
			   
			   
			  
          </div>
          
          
          <div class="col-md-3">			  
           <select class="form-control input-sm" id="electrician">
			    <option>Select Elecrician</option>
			    <?php 
			   $electriclistcon = "SELECT * FROM electricians WHERE role = 'electrician'";	
               $elecque = mysql_query($electriclistcon);
               while($elecperson = mysql_fetch_array($elecque)){
			   ?>
                           <option value="<?php echo $elecperson['id']; ?>"><?php echo $elecperson['name']; ?></option>
                         <?php }?>
                        </select>
			   
			   
			  
          </div>
          
          
          
          
			   <div class="col-md-1">
				   
				  
				   
				  <div class="btn-group btn-hspace workorderform">
                      <button type="button" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false" style="padding:5px 10px;"><i class="icon icon-left mdi mdi-assignment-o" style="font-size:14px;"></i>  <span class="icon-dropdown mdi mdi-chevron-down" style="font-size: 18px; vertical-align: middle;"></span></button>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#form-bp1">Work Order</a></li>
                          <li class="divider"></li>
						<li id="greendeal"><a href="#" data-toggle="modal" data-target="#pobox">Green Deal</a></li>
                        <li id="achievers"><a href="#" data-toggle="modal" data-target="#pobox2">Acheivers</a></li>
                        <li id="emerging"><a href="#" data-toggle="modal" data-target="#form-bp2">Emerging</a></li>
                        
                      </ul>
                    </div>
                    
                    
<!--  PO Popup -->
<div id="pobox" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary emailcombo">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">Green Deal</h3>
          </div>
          <div class="modal-body">
			  
           <div class="">
              
           	   <div class="col-md-12 table-container">


          	   <input type="text" placeholder="ID" class="form-control input-xs" id="poid">
                <input type="hidden" id="deal_invoice" class="form-control input-xs">
           </div>
           <br><br>
           
           <div class="">
              
           	   <div class="col-md-12 table-container">
          	   <input type="text" placeholder="Reference No." class="form-control input-xs" id="reference_no">
           </div>
          
          <div> </div>
        </div>
			 
			  
			  
           
			  <div style="clear:both;"></div>
			  
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close addgreendeal">SEND</button>
          </div>
        </div>
      </div>
    </div>


					
			  </div>

<!--  End PO Popup -->


 <!--  PO Popup 2 -->
                   <div id="pobox2" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary emailcombo">
                       <div class="modal-dialog custom-width">
                           <div class="modal-content work_order_content">
                               <div class="modal-header">

                                   <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>

                                   <h3 class="modal-title">Achievers Enery</h3>
                               </div>
                               <div class="modal-body">

                                   <div class="">

                                       <div class="col-md-12 table-container">
                                           <input type="text" placeholder="ID" class="form-control input-xs" id="poid">
                                           <input type="hidden" id="achievers_invoice" class="form-control input-xs">
                                       </div>
                                       <br><br>

                                       <div class="">

                                           <div class="col-md-12 table-container">
                                               <input type="text" placeholder="Reference No." class="form-control input-xs" id="reference_no">
                                           </div>

                                           <div> </div>
                                       </div>




                                       <div style="clear:both;"></div>

                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                                       <button type="button" data-dismiss="modal" class="btn btn-primary md-close addachievers">SEND</button>
                                   </div>
                               </div>
                           </div>
                       </div>



                   </div>

                   <!--  End PO Popup -->
			
        </div>
		  
		  
		         

		  
		  
        <div class="row"> </div>
      </div>
    </div>
    <div class="fill-container line-item-section item-table-width">
      <div class="zb-txn-form">
        
		 
		  
		  
		 
		  
		<!--<form method="post" id="insert_form">-->
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      
		 
		<tr>
       <th width="25%">Product Name</th>
       <th width="20%">Product Desc</th>
       <th width="15%">Enter Quantity</th>		  
       <th width="15%">Rate</th>
	   <th width="10%">GST</th>
	   <th width="20%">Discount</th>	
	   <th width="20%">Amount</th>	
       <th width="5%"><button type="button" name="add" class="mdi mdi-plus-square add"></button></th>
      </tr> 
		 
		 
		 
		 
	 
     </table>
     
    </div>
   <!--</form>-->
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        <div class="row ">
         
			
        <div class="total-section pull-right invoice-discount col-md-7">

  <div class="total-row sub-total">
    <div class="total-label">Sub Total
      <br>
<!---->    </div>
    <div class="total-amount" id="subtotal"></div>
  </div>


<!---->

<!----><!---->
    <div class="table-row">
      <div class="total-row">
        <div class="total-label">
          <div class="row">
            <div class="col-md-5 col-xs-5">
              <div class="form-control-static">Shipping Charges</div>
            </div>
            <div class="col-md-4 col-xs-4">
              <input type="text" id="shipping_charges" class="form-control  text-right input-xs">
            </div>
           
          </div>
        </div>
        <div style="line-height: 2" class="total-amount">0.00</div>
      </div>
    </div>

   

<!---->
  <div class="total-row gross-total ">
    <div class="total-label">
      Total
      ( $ ) 
    </div>
    <div class="total-amount" id="total">
       
    </div>
  </div>
</div>
        </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
      </div>
    </div>
    <div class="fill-container txn-bottom-form grey-bg">
      <div class="zb-txn-form">
        <div class="form-horizontal txn-form-horizontal clearfix">
          
          
			<div class="col-md-4 col others-sec">
         
				
	            
				<div id="based_on_invoice">
				<div class="form-control-static">
					
					<!-- <button data-toggle="modal" data-target="#form-bp1" type="button" class="btn btn-space btn-primary">Bootstrap Modal</button>-->
					
					
					<div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
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
              <label>Laggging from ERGON/ENERGEX</label>
              <input type="text" id="lagging" class="form-control input-xs">
			</div>	
				
			
			<div class="col-md-6">		
			  <label>ERGON/ENERGEX Reference no.</label>
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
              <input type="text" id="pickup" class="form-control input-xs">
			</div> 
				 
			  </div>
			  
			  
			  
			  
           
			  <div style="clear:both;"></div>
			  
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="submit" id="workorderbtn" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>
					
					
					
					
					
					
					
	<div id="form-bp2" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
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
                            <label>Suburb</label>
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
                        <div class="be-checkbox inline" style="margin-left:0px;">
                          <input id="multi_2" type="checkbox" value="1">
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
                        <div class="be-checkbox inline" style="margin-left:0px;">
                          <input id="multi_3" type="checkbox" value="1">
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
                          
                          <!--<input id="stc_nos" type="checkbox">  -->                       
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
            <button type="submit" id="stcform" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>				
					
					
					
					
					
					
					
					
					
					
					
					
	              
	            </div>	          
				
		
	           
		  </div>
	         	
				
				
	          <div id="ember3278" class="form-group ember-view">
				  <!--
                  <p class="form-control-static">
 
 
	
	
					  
<input type="file" name="attachment1" id="file-7" class="inputfile inputfile-6" />
<label for="file-7"><span></span> 
					<strong>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
					<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>
	
					  
		  
</p>-->
<div>
    
   
</div>
</div>
			
				
				
				
				
						
        </div>
		
		
		
		
			
			
			
			
			<div class="col-md-8 col notes-sec">
            <div class="notes-body">
              <div class="form-group">
                <p>Customer Notes</p>
                <div>
                  <textarea rows="2" id="customer_notes" class="form-control ember-text-area ember-view"></textarea>
                  <div class="checkbox hide">
                    <label class="hide">
                      <input type="checkbox" id="ember3232" class="ember-checkbox ember-view">
                      <span class="hightlight">Use this in future.</span> </label>
                  </div>
                  <small class="help-block  font-light "> Will be displayed on the invoice </small> </div>
              </div>
              <div class="form-group">
                <p> Terms &amp; Conditions </p>
                <div>
                  <textarea rows="5" placeholder="Mention your company's Terms and Conditions." id="terms_conditions" class="form-control ember-text-area ember-view"></textarea>
                  <div class="checkbox">
                    <label class="hide">
                      <input type="checkbox" id="ember3234" class="ember-checkbox ember-view">
                      <span class="hightlight">Use this in future.</span> </label>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="zb-txn-form">
      
      <div class="btn-toolbar fixed-actions fill-container">
        <div class="btn-group ">
          <button type="submit" id="save_invoice" class="btn btn-default ember-view"> Save as Draft </button>
        </div>
        
		 <!--
		  <div class="btn-group dropup">
          <button type="submit" id="ember3236" class="btn btn-primary ember-view"> Save and Send </button>
          <button data-toggle="dropdown" class="btn dropdown-toggle btn-primary"> <span class="caret"></span> </button>
          <ul class="dropdown-menu">
            <li> <a href="#" data-ember-action="" data-ember-action-3238="3238"> &nbsp;&nbsp;&nbsp;&nbsp;
              Save and Send Invoice </a> </li>
            <li> <a href="#" data-ember-action="" data-ember-action-3240="3240"> &nbsp;&nbsp;&nbsp;&nbsp;
               Save and Send Invoice with STC </a> </li>
            <li> <a href="#" data-ember-action="" data-ember-action-3242="3242"> &nbsp;&nbsp;&nbsp;&nbsp;
               Save and Send Invoice with STC &amp; Work Load </a> </li>
           
          </ul>
        </div>
		 --> 
		  
        <div class="btn-group">
          <button type="button" class="btn btn-default" data-ember-action="" data-ember-action-3245="3245">Cancel</button>
        </div>
       
      </div>
    </div>
  </div>
</form>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
              </div>
            </div>
          </div>
			
			
			








        </div>
      </div>

<?php include 'includes/footer.php'; ?>