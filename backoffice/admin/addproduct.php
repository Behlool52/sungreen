<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?> 
      
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">New Product</h2>

        </div>
        <div class="main-content container-fluid">


          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">New Product</div>
                <div class="panel-body">
                 <form action="#" method="post" id="addproduct" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">Product Name</label>
                      <div class="col-sm-6"><input type="text" placeholder="First Name" id="product_name" class="form-control input-sm" name="title"></div>
                     
                      </div>
                    
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Rate</label>
                      <div class="col-sm-6">
						<div class="input-group">
			<span class="input-group-addon">AUD</span>
			<input type="text" id="product_rate" class="form-control input-sm">
		</div>
						</div>                     
                    </div>
					 
					 
					  <div class="form-group">
                      <label class="col-sm-2 control-label ">In Stock</label>
                      <div class="col-sm-6">
						   <select class="form-control input-sm" id="in_stock">
                          <option>---Select---</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                         						 
                        </select> 
						 </div>
                     
                      </div>
						
						
						 <div class="form-group">
                      <label class="col-sm-2 control-label ">Description</label>
                      <div class="col-sm-6"><textarea id="product_desc" class="form-control input-sm" name="title"></textarea></div>
                     
                      </div>
						
						
						
						
						
					  
				             
            
       

                    <div class="form-group">
                    <div class="col-sm-6">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary btn-lg">Save</button>
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