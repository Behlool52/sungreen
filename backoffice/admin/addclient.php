<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?> 
      
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">New Client</h2>

        </div>
        <div class="main-content container-fluid">


          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">New Client</div>
                <div class="panel-body">
                  <form action="#" method="post" id="addclient" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">Primary Contact</label>
                      <div class="col-sm-3"><input type="text" placeholder="First Name" id="first_name" class="form-control input-sm" name="title"></div>
                      <div class="col-sm-3"><input type="text" placeholder="Last Name" id="last_name" class="form-control input-sm">
                      </div>
                    </div>
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Company Name</label>
                      <div class="col-sm-3"><input type="text" id="company" class="form-control input-sm" name="title"></div>                     
                    </div>
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Contact Email</label>
                      <div class="col-sm-3"><input type="text" id="email" class="form-control input-sm" name="title"></div>                     
                    </div>
					  
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">Contact Phone</label>
                      <div class="col-sm-3"><input type="text" placeholder="Work Phone" id="phone" class="form-control input-sm" name="title"></div>
                      <div class="col-sm-3"><input type="text" placeholder="Mobile" id="mobile" class="form-control input-sm">
                      </div>
                    </div>
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Website</label>
                      <div class="col-sm-3"><input type="text" id="website" class="form-control input-sm" name="title"></div>                     
                    </div>
                  
                     
                  



            
              <div class="panel panel-default">
                <div class="panel-heading">Additional Info</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Address</a></li>
                    <li><a href="#profile" data-toggle="tab">Lead Persons</a></li>
                    <li><a href="#messages" data-toggle="tab">Remarks</a></li>
                  </ul>
                  <div class="tab-content" style="margin-top:20px;">
                    <div id="home" class="tab-pane active cont">
                    
					<div class="row">
						<div class="col-sm-12">
						
					<div class="col-sm-6">
						
						<h4>Billing Address</h4>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Address</label>
                      <div class="col-sm-10"><input type="text" id="billing_address" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">City</label>
                      <div class="col-sm-10"><input type="text" id="billing_city" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">State</label>
                      <div class="col-sm-10"><input type="text" id="billing_state" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Zip Code</label>
                      <div class="col-sm-10"><input type="text" id="billing_zip" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Country</label>
                      <div class="col-sm-10"><input type="text" id="billing_country" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Fax</label>
                      <div class="col-sm-10"><input type="text" id="billing_fax" class="form-control input-sm" name="title"></div>                
                    </div>
						
						
					</div>
							
							
					<div class="col-sm-6">	
						
						<h4>Shipping Address</h4>
						<span id="billing_info" class="btn btn-primary">As Billing</span>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Address</label>
                      <div class="col-sm-10"><input type="text" id="shipping_address" class="form-control input-sm" name="title"></div>                
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label ">City</label>
                      <div class="col-sm-10"><input type="text" id="shipping_city" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">State</label>
                      <div class="col-sm-10"><input type="text" id="shipping_state" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Zip Code</label>
                      <div class="col-sm-10"><input type="text" id="shipping_zip" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Country</label>
                      <div class="col-sm-10"><input type="text" id="shipping_country" class="form-control input-sm" name="title"></div>                
                    </div>
						
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Fax</label>
                      <div class="col-sm-10"><input type="text" id="shipping_fax" class="form-control input-sm" name="title"></div>                
                    </div>
						
					</div>
							
							</div>
						</div>
				
                     
                    </div>
                    <div id="profile" class="tab-pane cont">
						
						
						<div class="row">
						<div class="col-sm-12">			
					
						
					            
                       <div class="col-sm-2">
						   <label class="control-label ">First Name</label>
						  <input type="text" id="page_title" class="form-control input-xs" name="title">
						</div>  
						<div class="col-sm-2">
						   <label class="control-label ">Last Name</label>
						  <input type="text" id="page_title" class="form-control input-xs" name="title">
						</div>  
							 <div class="col-sm-2">
						   <label class="control-label ">Email</label>
						  <input type="text" id="page_title" class="form-control input-xs" name="title">
						</div>  
						<div class="col-sm-2">
						   <label class="control-label ">Phone</label>
						  <input type="text" id="page_title" class="form-control input-xs" name="title">
						</div> 
							 <div class="col-sm-2">
						   <label class="control-label ">Designation</label>
						  <input type="text" id="page_title" class="form-control input-xs" name="title">
						</div>  
						<div class="col-sm-2">
						   <label class="control-label ">Department</label>
						  <input type="text" id="page_title" class="form-control input-xs" name="title">
						</div>  
							
							
							
                  
							
						</div>
						</div>	
						
                      
                      
                    </div>
                    <div id="messages" class="tab-pane">
						
						
					<div class="row">
						<div class="col-sm-12">			
					
						
					<div class="form-group">                     
                      <div class="col-sm-12">
						   <label class="control-label ">Notes: (For internal use)</label>
						  <textarea id="remarks" class="form-control input-sm" name="title"></textarea></div>                
                    </div>	
						</div>
						</div>
						
						
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            
           


                   

                   




                   
					  
					
					  
					  
					 
					  
					  

                  


                    <div class="form-group">
                    <div class="col-sm-7">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary btn-lg">Submit</button>
                        <button class="btn btn-space btn-default btn-lg">Cancel</button>
                      </p>
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