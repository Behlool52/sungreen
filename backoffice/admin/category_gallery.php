<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?>      
      
      
<div class="be-content">
        <div class="main-content container-fluid">



          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Featured Category
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
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

                        <th style="width:20%;">Category</th>                      
                        <th style="width:15%;">Order</th>                       
                        <th style="width:10%;">Active</th>
                        <th style="width:15%;"></th>
                      </tr>
                      </thead>
                      <tbody>
                      
					<?php 

							while($pagerow = mysql_fetch_array($gallsque)){ 
							
								$cacon = "SELECT * FROM featured_category WHERE id = '".$pagerow['category_id']."'";	
								$catgsque = mysql_query($cacon);
								$catgrow = mysql_fetch_array($catgsque);
					  
						  ?>
						  
					  <tr>
                        <td class="user-avatar cell-detail user-info"><?php echo $catgrow['category']; ?></td>                                         
                        <td class="cell-detail"><span><?php echo $pagerow['weight']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['active']; ?></span></td>
                        <td class="actions">
                          <a href="pagedit.php?pageid=<?php echo $pagerow['id']; ?>" class="icon"><i class="mdi mdi-edit"></i></a>
                          <a href="#" class="icon"><i class="mdi mdi-close-circle-o text-danger"></i></a>
                        </td>
                      </tr>
					<?php } ?>  
						  
                    

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      
      
<?php include 'includes/footer.php'; ?>