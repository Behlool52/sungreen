<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?>      
      
      
<div class="be-content">
        
	
	<aside class="page-aside">
          <div class="be-scroller nano ps-container ps-theme-default" data-ps-id="c30b741a-717b-3a92-48b2-74dd58326bfe">
            <div class="nano-content">
              <div class="content">
                <h2>Aside Element</h2>
                <p>This is the <b>aside</b> content, you can easily add content and components to this element.</p>
                <p>Add the (<code>be-aside</code>) class to your main wrapper (<code>be-wrapper</code>) element for proper content spacing.</p>
              </div>
            </div>
          <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </aside>
	
	
	<div class="main-content container-fluid" style="margin-left:280px;">



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
                    <table class="table table-striped table-hover">
                      <thead>
                      <tr>

                        <th style="width:20%;">Name</th>
                        <th style="width:17%;">Company Name</th>
                        <th style="width:15%;">Email</th>
                        <th style="width:10%;">Work Phone</th>
                        <th style="width:10%;">Receivables</th>
                        <th style="width:15%;"></th>
                      </tr>
                      </thead>
                      <tbody>
                      
					<?php while($pagerow = mysql_fetch_array($pagesque)){ ?>	  
					  <tr>
                        <td class="user-avatar cell-detail user-info"><?php echo $pagerow['page_title']; ?></td>
                        <td class="cell-detail"> <span><?php echo $pagerow['page_slug']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['page_slug']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['slider']; ?></span></td>
                        <td class="cell-detail"><span><?php echo $pagerow['active']; ?></span></td>
                        <td class="actions">
                          <a href="clientedit.php?pageid=<?php echo $pagerow['id']; ?>" class="icon"><i class="mdi mdi-edit"></i></a>
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