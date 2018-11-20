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
                <div class="panel-heading panel-heading-divider">Record Payment</div>
                <div class="panel-body">
                  <form action="#" method="post" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">Customer Name</label>
                     <div class="col-sm-3">
						
						  <select class="form-control input-xs" id="customer_id">
                          <option value="">Select Customer</option>
							  
							<?php 
			   $customerlistcon = "SELECT * FROM customer_info";	
               $custque = mysql_query($customerlistcon);
               while($cust = mysql_fetch_array($custque)){
			   ?>  
                          <option value="<?php echo $cust['id']; ?>"><?php echo $cust['first_name']; ?></option>
			   <?php } ?>
							  
							  
                         
                        </select> 
						 
						 
					 </div>
						
						  
                      </div>
                    
					  
					
					<div class="form_mask" id="form_mask"><!--    Start Form Mask -->
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Amount</label>
                      <div class="col-sm-3">
						
											<div class="input-group">
												<span class="input-group-addon input-xs">AUD </span>
												<input type="text" class="form-control text-left ember-text-field text-left ember-view input-xs">
											</div>
						
						</div>                     
                    </div>
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Payment Date</label>
                      <div class="col-sm-3">
						
						 <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                  <input type="text" value="" class="form-control input-xs" id="payment_date"><span class="input-group-addon btn"><i class="icon-th mdi mdi-calendar"></i></span>
                        </div>
						
						
						</div>                     
                    </div>
					  
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">Payment Mode</label>
                      <div class="col-sm-3">
						   <select class="form-control input-xs" id="payment_mode">
                          <option>---Select---</option>
                          <option value="bank_remittance">Bank Remittacne</option>
                          <option value="bank_tranfer">Bank Transfer</option>
                          <option value="cash">Cash</option>
                          <option value="check">Check</option>							 
                        </select> 
						 </div>
                     
                      </div>
                  
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Reference#</label>
                      <div class="col-sm-3"><input type="text" id="page_title" class="form-control input-xs" name="title"></div>                     
                    </div>
                  
                     
                  



            
              <div class="panel panel-default">
                <div class="panel-heading">Unpaid Invoices</div>
				  
	<table class="table line-item-table invoice_table">
									<thead>
									<tr>
											<th class="col-md-2">Date</th>
											<th class="col-md-2">Invoice Number</th>
											<th class="col-md-3">Invoice Amount</th>
											<th class="col-md-3"> Amount Due</th>											
											<th class="text-right col-md-2">Payment</th>
										</tr>
									</thead>
									 <tbody class="paymentitemBody">
       
		 
   									</tbody>
										
									<tbody>	
									<tr>
										<td colspan="3" style="padding-top: 0px;">
												<small class="text-muted">**List contains only SENT invoices</small>
											</td>
											<td class="text-right">Total</td>											
											<td class="text-right sumofallinvoices"></td>
										</tr>
									</tbody>
								</table>
				  
				  
				  
				  
				 <div class="unused-amount-zero col-md-offset-7 col-md-5 clearfix ">
									<div class="row">
										<p class="col-md-8 text-right">Amount Received :</p>
										<p class="col-md-4 text-right amount_received"></p>
									</div>
									<div class="row">
										<p class="col-md-8 text-right">Amount used for payments :</p>
										<p class="col-md-4 text-right amount_for_payment"></p>
									</div>
									<div class="row">
										<p class="col-md-8 text-right">Amount Refunded :</p>
										<p class="col-md-4 text-right">0.00</p>
									</div>

									<div class="row">
									<p class="col-md-8 text-right">Amount in excess :</p>
										<p class="col-md-4 text-right amount_in_excess"></p>
									</div>
								</div>
				  
				  
				  
				  <div class="form-group">
								<div class="col-md-12">
									<label>Notes (Internal use. Not visible to customer)</label>
									<textarea rows="2" id="ember1167" class="form-control ember-text-area ember-view"></textarea>
								</div>
							</div>
				  
				  
				  
                </div>
            
           


                   

                   




                   
					  
					
					  
					  
					 
					  
					  

                  


                    <div class="form-group">
                    <div class="col-sm-7">
                      <p class="text-right">
                        <button type="button" id="invoice_payment" class="btn btn-space btn-primary btn-md">Save Payment</button>
                        <button class="btn btn-space btn-default btn-md">Cancel</button>
                      </p>
                    </div>
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