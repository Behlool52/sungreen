<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?> 
      
      <div class="be-content">
        <!--<div class="page-head">
          <h2 class="page-head-title">Record Payment</h2>

        </div>-->
        <div class="main-content container-fluid">


          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">User Report</div>
                <div class="panel-body">
                  <form action="#" method="post" id="invoice_payment" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">User Name</label>
                     <div class="col-sm-3">
						
						  <select class="form-control input-xs" id="users_id">
                          <option value="">Select Users</option>
							  
							<?php 
			   $customerlistcon = "SELECT * FROM electricians";	
               $custque = mysql_query($customerlistcon);
               while($cust = mysql_fetch_array($custque)){
			   ?>  
                          <option value="<?php echo $cust['id']; ?>"><?php echo $cust['name'].' '.'['.$cust['role'].']'; ?></option>
			   <?php } ?>
							  
							  
                         
                        </select> 
						 
						 
					 </div>
						
						  
                      </div>
                    
					  
					
					<div class="form_mask" id="form_mask"><!--    Start Form Mask -->
					  
					
					  
				
              


            
              <div class="panel panel-default">
               
				  
	<table class="table line-item-table invoice_table">
									<thead>
									<tr>
											<th class="col-md-2">Invoice</th>
											<th class="col-md-2">Date</th>
											<th class="col-md-3">Order#</th>
											<th class="col-md-3"> Customer Name</th>											
											<th class="text-right col-md-2">Address</th>
										</tr>
									</thead>
									 <tbody class="reportBody">
       
		 
   									</tbody>
										
									
								</table>
				  
				  
				  
				  
				 
				  
				  
				  
				  
				  
				  
				  
                </div>
            
           


                   

                   




                   
					  
					
					  
					  
					 
					  
					  

                  


                    
						
					  </div><!--  End Form Mask  -->



                  </form>
                </div>
              </div>
            </div>
          </div>
			
			
			








        </div>
      </div>

<?php include 'includes/footer.php'; ?>