<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?>      
      
      
<div class="be-content">	
	
	
        <div class="main-content container-fluid">


          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Product List
                  <div class="tools dropdown">
					  <span class="icon mdi mdi-download"></span>
					  <a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle">
						  <span class="icon mdi mdi-more-vert"></span></a>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="homepage.php">Add New Page</a></li>
                     
                      
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
                  <div class="table-responsive noSwipe">
                    <table class="table table-striped table-hover">
                      <thead>
                      <tr>

                        <th style="width:20%;">Name</th>                       
                        <th style="width:55%;">Description</th>
                        <th style="width:10%;">Rate</th>
                        <th style="width:15%;"></th>
                      </tr>
                      </thead>
                      <tbody>
                      
					<?php while($pagerow = mysql_fetch_array($productsque)){ ?>	  
					  <tr>
                        <td class="user-avatar cell-detail user-info"><?php echo $pagerow['product_name']; ?></td>
                        <td class="cell-detail"> <span><?php echo $pagerow['description']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['rate']; ?></span></td>                       
                        <td class="actions">
                         <!-- <a href="clientedit.php?pageid=<?php echo $pagerow['id']; ?>" class="icon"><i class="mdi mdi-edit"></i></a>-->
							
							<a href="#0" class="icon cd-btn dataproductfetch" id="<?php echo $pagerow['id']; ?>"><i class="mdi mdi-edit"></i></a>
							
                           <a href="#" class="icon productdatadel" id="<?php echo $pagerow['id']; ?>"><i class="mdi mdi-close-circle-o text-danger"></i></a>
							
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
			
				
				<div class="row">          
					<div class="col-sm-12">	
						
						
						
						
					<form action="#" method="post" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    <input type="hidden" name="product_id" value="<?php echo $pagerow['id']; ?>" id="product_id">
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">Product Name</label>
                      <div class="col-sm-6"><input value="<?php echo $pagerow['product_name']; ?>" type="text" placeholder="First Name" id="product_name" class="form-control input-sm" name="title"></div>
                     
                      </div>
                    
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Rate</label>
                      <div class="col-sm-6">
						<div class="input-group">
			<span class="input-group-addon">AUD</span>
			<input type="text" id="product_rate" class="form-control input-sm" value="<?php echo $pagerow['rate']; ?>">
		</div>
						</div>                     
                    </div>
						
						
						 <div class="form-group">
                      <label class="col-sm-2 control-label ">Description</label>
                      <div class="col-sm-6"><textarea id="descrip" class="form-control input-sm" name="title"><?php echo $pagerow['description']; ?></textarea></div>
                     
                      </div>
						
						
						
						
						
					  
				             
            
       

                    <div class="form-group">
                    <div class="col-sm-6">
                      <p class="text-right">
                        <button type="button" id="product_update_form" class="btn btn-space btn-primary btn-lg">Save</button>
                        <button class="btn btn-space btn-default btn-lg">Cancel</button>
                      </p>
                    </div>
                    </div>



                  </form>
						
						
						
						
						
						
						
						
						
					</div>
				</div>
			
			
			
			
			
		</div> <!-- cd-panel-container -->
	</div> <!-- cd-panel --> 
			  
			  
			  
			  
			  
          </div>


        </div>
      </div>
      
      
<?php include 'includes/footer.php'; ?>