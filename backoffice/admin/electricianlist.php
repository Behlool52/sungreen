<?php 
session_start();
include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?>      
      
      
<div class="be-content">	
	
	
        <div class="main-content container-fluid">


          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
					<?php
						if($userrole=='electrician'){
						?>
					Electricians List
					<?php }else if($userrole=='saleperson'){?>
					Sale Person List
					<?php }else if($userrole=='leadperson'){?>
					Lead Person List
					<?php }?>
					
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
                        <th style="width:20%;">Address</th>
                        <th style="width:20%;">Email</th>
                        <th style="width:20%;">Phone</th>
						<th style="width:10%;">Portal Access</th>
						<th style="width:10%;"></th>
                      </tr>
                      </thead>
                      <tbody>
                      
					<?php while($pagerow = mysql_fetch_array($electque)){ ?>	  
					  <tr>
                        <td class="user-avatar cell-detail user-info"><?php echo $pagerow['name']; ?></td>
                        <td class="cell-detail"> <span><?php echo $pagerow['address']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['email']; ?></span></td> 
						  <td class="cell-detail"><span><?php echo $pagerow['phone']; ?></span></td>
						  <td class="cell-detail"><span><?php echo $pagerow['portal']; ?></span></td>
                        <td class="actions">
                         <!-- <a href="clientedit.php?pageid=<?php echo $pagerow['id']; ?>" class="icon"><i class="mdi mdi-edit"></i></a>-->
							
							<a href="#0" class="icon cd-btn userdatafetch" id="<?php echo $pagerow['id']; ?>"><i class="mdi mdi-edit"></i></a>
							
                           <a href="#" class="icon userdatadel" id="<?php echo $pagerow['id']; ?>"><i class="mdi mdi-close-circle-o text-danger"></i></a>
							
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
					
				<div style="float:left; margin-left:20px; position:relative;"><h3>Edit</h3></div>
				<div style="float:right">
					
					
					<a href="#0" class="cd-panel-close">X</a>
				</div>			
				
			</div>
			
			<div style="clear:both"></div>
			
				
				<div class="row">          
					<div class="col-sm-12">	
						
						
						
						
					<form action="#" method="post" id="edituser" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">Name</label>
                      <div class="col-sm-6">
						  <input type="text" placeholder="First Name" id="name" class="form-control input-sm" name="title">
						  <input type="hidden" id="userid">
						  <input type="hidden" id="userrole" value="<?php echo $_SESSION['userroles'];?>">
						 </div>
                     
                      </div>
                    
					  
					<div class="form-group">
                      <label class="col-sm-2 control-label ">Address</label>
                      <div class="col-sm-6"><input type="text" placeholder="First Name" id="address" class="form-control input-sm" name="title"></div>
                     
                      </div>
					 
					  <div class="form-group">
                      <label class="col-sm-2 control-label ">Email</label>
                      <div class="col-sm-6"><input type="text" placeholder="First Name" id="email" class="form-control input-sm" name="title"></div>
                     
                      </div>
					 
					  <div class="form-group">
                      <label class="col-sm-2 control-label ">Phone</label>
                      <div class="col-sm-6"><input type="text" placeholder="First Name" id="phone" class="form-control input-sm" name="title"></div>
                     
                      </div>
					 
					 <div class="form-group">
                      <label class="col-sm-2 control-label ">Username</label>
                      <div class="col-sm-6"><input type="text" placeholder="First Name" id="username" class="form-control input-sm" name="title"></div>
                     
                      </div>
					 
					  <div class="form-group">
                      <label class="col-sm-2 control-label ">Password</label>
                      <div class="col-sm-6"><input type="text" placeholder="First Name" id="password" class="form-control input-sm" name="title"></div>
                     
                      </div>
					 
					 <div class="form-group">
                      <label class="col-sm-2 control-label">Portal</label>
                      <div class="col-sm-6">
                        <div class="be-radio inline">
                          <input type="radio" name="portal" class="portal" id="portalyes" value="1">
                          <label for="portalyes">Yes</label>
                        </div>
                        <div class="be-radio inline">
                          <input type="radio" name="portal" class="portal" id="portalno" value="0">
                          <label for="portalno">No</label>
                        </div>
                      </div>
                    </div>
					 
					 
					<div class="form-group">
                      <label class="col-sm-2 control-label">Active</label>
                      <div class="col-sm-6">
                        <div class="be-radio inline">
                          <input type="radio" class="active" name="active" id="activeyes" value="1">
                          <label for="activeyes">Yes</label>
                        </div>
                        <div class="be-radio inline">
                          <input type="radio" name="active" class="active" id="activeno" value="0">
                          <label for="activeno">No</label>
                        </div>
                      </div>
                    </div>
					 
						
						
						
						
						
						
						
						
					  
				             
            
       

                    <div class="form-group">
                    <div class="col-sm-6">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary btn-lg">Update</button>
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