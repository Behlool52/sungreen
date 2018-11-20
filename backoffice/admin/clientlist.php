<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?>      


<style>
	
	.line-seperator .col:first-child {
    padding-left: 0;
}
.line-seperator .col {
    padding-left: 3px;
    padding-right: 6px;
}
	.line-seperator .col, .seperator-col .col {
    border-right: 1px solid #EEE;
}
</style>
      
<div class="be-content">	
	<!-- Popup -->
	
			<div id="form-bp3" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content work_order_content" style="min-width:0px;">
          <div class="modal-header">
            
		 <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
          
		  <h3 class="modal-title">Edit Client Details</h3>
		  	  
          </div>
         <div class="modal-body">
		<div tabindex="-1" id="ember2922" class="no-outline ember-view"><!----></div>
    <div class="form-group clearfix inline-fields">
			<label class="control-label col-md-3">Name</label>
			
  	  <div class="col-md-4">
    	  <input type="text" placeholder="First Name" autofocus="" id="first_name" class="form-control input-xs">
		  <input type="hidden" id="clid">
			</div>
			<div class="col-md-4">
        <input type="text" placeholder="Last Name" id="last_name" class="form-control input-xs">
			</div>
		</div>

		<div class="form-group clearfix inline-fields">
			<label class="control-label col-md-3">Email</label>
			<div class="col-md-8">
        <input type="text" placeholder="Email Address" id="email" class="form-control input-xs">
			</div>
    </div>

		<div class="form-group clearfix inline-fields">
			<label class="control-label col-md-3">Contact info</label>
			<div class="col-md-4">
        <input type="text" placeholder="Work Phone" id="phone" class="form-control input-xs">
			</div>
			<div class="col-md-4">
        <input type="text" placeholder="Mobile" id="mobile" class="form-control input-xs">
			</div>
    </div>
		
		
		<div>
	    <div class="form-group clearfix">
				<div class="col-md-offset-3 col-md-9">
					<div class="checkbox">
							<label>
									<input type="checkbox" id="ember2934" class="ember-checkbox ember-view">
									Enable portal access
							</label>
							<small class="help-block">Your clients will be able to see all the transactions with your company through this portal by logging with their email id. <a target="_blank" href="https://zoho.com/us/invoice/help/client-portal/index.html" rel="noreferrer noopener">Learn more</a></small>
					</div>
				</div>
	    </div>
			
			
			
			<div class="form-group clearfix">
				<div class="col-md-offset-3 col-md-9">
					<button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            			<button type="button" data-dismiss="modal" class="btn btn-primary md-close editclient">Edit</button>
				</div>
	    </div>

<!---->

		</div>
  </div>
			
          <!--<div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close editclient">Edit</button>
          </div>-->
			
        </div>
      </div>
    </div>
	
<!-- end -->	
	
        <div class="main-content container-fluid">


          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Client List
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="homepage.php">Add New Page</a></li>
                     
                      
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="table-responsive noSwipe">
                    <!--<table class="table table-striped table-hover">-->
						<table id="table1" class="table table-striped table-hover table-fw-widget">
                      <thead>
                      <tr>

                        <th style="width:20%;">Name</th>
                        <th style="width:17%;">Address</th>
                        <th style="width:15%;">Email</th>
                        <th style="width:10%;">Work Phone</th>
                        <th style="width:10%;">Receivables</th>
                        <th style="width:15%;"></th>
                      </tr>
                      </thead>
                      <tbody>
                      
					<?php while($pagerow = mysql_fetch_array($custque)){ ?>	  
					  <tr>
                        <td class="user-avatar cell-detail user-info"><?php echo $pagerow['first_name']; ?></td>
                        <td class="cell-detail"> <span><?php echo $pagerow['billing_address']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['email']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['phone']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['active']; ?></span></td>
                        <td class="actions">
                         <!-- <a href="clientedit.php?pageid=<?php echo $pagerow['id']; ?>" class="icon"><i class="mdi mdi-edit"></i></a>-->
							
							<a href="#0" class="icon cd-btn datafetch" id="<?php echo $pagerow['id']; ?>"><i class="mdi mdi-edit"></i></a>
							
                           <a href="#" class="icon clientdatadel" id="<?php echo $pagerow['id']; ?>"><i class="mdi mdi-close-circle-o text-danger"></i></a>
							
                        </td>
                      </tr>
					<?php } ?>  
						  
                    

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
			  
			  
			  
			  
			<div class="cd-panel from-right">
				
				
				
			
				
		
				

		<div class="cd-panel-container">
			
			
			
			
			
			
			
			<div id="slider_header">	
					
				<div style="float:left; margin-left:20px; position:relative;"><h3>Heading</h3></div>
				<div style="float:right">
					
					
					<a href="#0" class="cd-panel-close">X</a>
				</div>			
				
			</div>
			
			<div style="clear:both"></div>
			
			<div class="tab-container">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Overview</a></li>
                    <li><a href="#profile" data-toggle="tab">Comments</a></li>
                    <li><a href="#messages" data-toggle="tab">Mails</a></li>
                  </ul>
                  <div class="tab-content">
                    <div id="home" class="tab-pane active cont">
                      <div class="cd-panel-content">				

				
				<div class="row">
          
					<div class="col-sm-12">
					
					
					<div class="column content-column ">

						
						
						
						



<div id="ember1797" class="scroll-y noscroll-x fill body scrollbox contacts ember-view">
	<div id="ember1806" class="ember-view">
		<!---->
<div class="details fill-container noscroll-x">

	<div class="details-info" style="border-right: 1px solid #eee; background: #fbfbfb; width: 32%; vertical-align: top; padding: 10px 20px 0; word-wrap: break-word; float:left;">
		
<div class="group panel-body">
					<div>abc</div>
					<hr>
				<div class="person row">
					<div class="col-md-2">
						  <img src="https://secure.gravatar.com/avatar/5b171bd31e79fdc119cb08bbbea529f9?&amp;d=mm" class="cp-pic" style="width: 35px;
    height: 35px;
    border: 1px solid #ddd;
    border-radius: 50%;
    float: left;">

					</div>
					<div class="col-md-10">
						<strong><span id="client_name">Mr. Behlool Fakhruddin</span></strong> <br>
						<span id="client_email">behlool@gmail.com</span><br>
						<!---->
						<!---->
						<!---->
						<!---->
						<!---->
<!---->						<div class="line-seperator">
							<small class="col">
								 <a href="#" data-toggle="modal" data-target="#form-bp3" id="<?php echo $invorow['invoice_id']; ?>" class="workorderfetch">Edit</a>	
								
								
						
						</small>							
<!---->							<small class="col"><a data-ember-action="" data-ember-action-2163="2163">Delete</a></small>
						</div>
					</div>
				</div>
	

	
	
	
	<div id="accordion1" class="panel-group accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="false" class="collapsed"><i class="icon mdi mdi-chevron-down"></i> ADDRESS</a></h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
						<h5>Billing Address</h5>
						<span id="client_billing_address"></span><br>
						<span id="client_billing_city"></span><br>
						<span id="client_billing_state"></span><br>
						<span id="client_billing_zip"></span><br>
						<span id="client_billing_country"></span>
					  
					  
					  </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" class="collapsed" aria-expanded="false"><i class="icon mdi mdi-chevron-down"></i>REMARKS</a></h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed vestibulum quam. Pellentesque non feugiat neque, non volutpat orci. Integer ligula lacus, ornare eget lobortis ut, molestie quis risus. </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" class="collapsed" aria-expanded="false"><i class="icon mdi mdi-chevron-down"></i> CONTACT PERSON</a></h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed vestibulum quam. Pellentesque non feugiat neque, non volutpat orci. Integer ligula lacus, ornare eget lobortis ut, molestie quis risus. </div>
                  </div>
                </div>
		<!--
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseFour" class="collapsed" aria-expanded="false"><i class="icon mdi mdi-chevron-down"></i> Collapsible Group Item #4</a></h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed vestibulum quam. Pellentesque non feugiat neque, non volutpat orci. Integer ligula lacus, ornare eget lobortis ut, molestie quis risus.</div>
                  </div>
                </div>
		-->
		
		
              </div>
	
	
	
			</div>
		
		
		
		
		

	</div>

	<div class="prim-info" style="width: 68%; padding: 20px 20px 50px; vertical-align: top; float:left;">
<!---->		<div class="col-md-12">
				<ul id="ember1942" class="list-unstyled list-inline row arapdetails ember-view"><li class="col-md-4 text-center">
	<h6 class="text-muted">Unused Credits</h6>
	<div class="cursor-pointer" data-ember-action="" data-ember-action-1943="1943">$0.00</div>
</li>
<li class="col-md-4 text-center">
	<h6 class="text-overdue">Outstanding Receivables</h6>
	<div data-ember-action="" data-ember-action-1944="1944" id="outstanding_receivables"></div>
</li>
<li class="col-md-4 text-center">
		<h6 class="tex-muted">Payment due period</h6>
		<span class="font-xlarge">Due on Receipt</span>
</li>
</ul>
<!---->		</div>
<!----><!---->		<div class="col-md-12 chart">
			<div class="chart-content">
					<div class="clearfix">
	          <span style="margin-right: 10px;" class="font-large text-muted pull-left font-light">Income and Expense</span>
						<div class="pull-right font-xs">
<!---->							<div style="margin-right:10px;" class="dropdown pull-right list-title">
								<a data-toggle="dropdown" class="dropdown-toggle">
									Last 6 Months
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
										<li>
											<a data-ember-action="" data-ember-action-1952="1952">This Fiscal Year</a>
										</li>
										<li>
											<a data-ember-action="" data-ember-action-1954="1954">Previous Fiscal Year</a>
										</li>
										<li>
											<a data-ember-action="" data-ember-action-1956="1956">Last 12 Months</a>
										</li>
										<li>
											<a data-ember-action="" data-ember-action-1958="1958">Last 6 Months</a>
										</li>
								</ul>
							</div>
						</div>
					</div>
	        <div class="panel-body">
	          <div class="row">
	            <div width="570" id="ember1965" class="ember-view"></div>
	          </div>
					</div>
			</div>
		</div>
		<div class="col-md-12 clearfix">
			<!---->    <div class="tree-structure activities">
        <div id="ember1988" class="tree-node right ember-view"><div class="time">
  <small>12 Dec 2017 09:00 PM</small>
</div>
<div class="tree-node-leaf">
  <div class="arrow"></div>
  <p class="font-family-regular">
<!---->    Contact added
  </p>
  <div class="text-muted">
    Contact created
    <strong>by behlool</strong>
    <!---->
    <!---->
  </div>
</div>
</div>
<!---->    </div>

			<div id="ember1993" class="sidebar sidebar-section mail-content ember-view">
    <div class="content-section header-section">
        <button type="button" class="close" data-ember-action="" data-ember-action-1998="1998">
         
        </button>
<!---->      <div style="display: inline-block" class="over-flow font-xxlarge text-bottom"></div>
    </div>
    <div class="email-template-section">
<!---->      <div id="ember2003" class="ember-view"><iframe frameborder="0" srcdoc="" class="email-html-template"></iframe>
</div>
    </div>
</div>
		</div>
	</div>

</div>

</div></div><div class="sidebar sidebar-section ">
<!----></div>

</div>
					
					
					</div>
				</div>
				
				
				
				
				
				
				
				
			</div> <!-- cd-panel-content -->
                    </div>
					  
					   <div id="profile" class="tab-pane cont">
                      <h4>Top Tabs</h4>
                     
                      <p> fffNam aliquet consequat quam sit amet dignissim. Quisque vel massa est. Donec dictum nisl dolor, ac malesuada tellus efficitur non. Pellentesque pellentesque odio neque, eget imperdiet eros vehicula lacinia.</p>
                    </div>
                   
                    
                  </div>
                </div>	
			
			
			
			
			
			
			
			
			
			
			
			
			
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel --> 
			  
			  
			  
			  
			  
          </div>


        </div>
      </div>
      
      
<?php include 'includes/footer.php'; ?>