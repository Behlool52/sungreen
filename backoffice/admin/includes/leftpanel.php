<?php session_start(); ?>
<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
					
				 <?php 	if($_SESSION["userrole"]=='Admin' || $_SESSION["userrole"]=='Director'){?>	
				<!--	
                  <li class="active"><a href="listing.php"><i class="icon mdi mdi-home"></i><span>Pages</span></a></li>                  
                  <li><a href="featured_listing.php"><i class="icon mdi mdi-star-outline"></i><span>Featured Categories</span></a>                  
                  <li><a href="category_gallery.php"><i class="icon mdi mdi-collection-image-o"></i><span>Category Gallery</span></a>
                  
                  -->
                 <?php }?>

                  </li>
                  <!--
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                    <ul class="sub-menu">
                      <li><a href="ui-alerts.html">Alerts</a>
                      </li>
                      <li><a href="ui-buttons.html">Buttons</a>
                      </li>
                      <li><a href="ui-panels.html">Panels</a>
                      </li>
                      <li><a href="ui-general.html">General</a>
                      </li>
                      <li><a href="ui-modals.html">Modals</a>
                      </li>
                      <li><a href="ui-notifications.html">Notifications</a>
                      </li>
                      <li><a href="ui-icons.html">Icons</a>
                      </li>
                      <li><a href="ui-grid.html">Grid</a>
                      </li>
                      <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                      </li>
                      <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                      </li>
                      <li><a href="ui-typography.html">Typography</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                    <ul class="sub-menu">
                      <li><a href="charts-flot.html">Flot</a>
                      </li>
                      <li><a href="charts-sparkline.html">Sparklines</a>
                      </li>
                      <li><a href="charts-chartjs.html">Chart.js</a>
                      </li>
                      <li><a href="charts-morris.html">Morris.js</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                    <ul class="sub-menu">
                      <li><a href="form-elements.html">Elements</a>
                      </li>
                      <li><a href="form-validation.html">Validation</a>
                      </li>
                      <li><a href="form-multiselect.html">Multiselect</a>
                      </li>
                      <li><a href="form-wizard.html">Wizard</a>
                      </li>
                      <li><a href="form-masks.html">Input Masks</a>
                      </li>
                      <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                      </li>
                      <li><a href="form-upload.html">Multi Upload</a>
                      </li>
                      <li><a href="form-editable.html">X-editable</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                    <ul class="sub-menu">
                      <li><a href="tables-general.html">General</a>
                      </li>
                      <li><a href="tables-datatables.html">Data Tables</a>
                      </li>
                      <li><a href="tables-filters.html"><span class="label label-primary pull-right">New</span>Table Filters</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                    <ul class="sub-menu">
                      <li><a href="pages-blank.html">Blank Page</a>
                      </li>
                      <li><a href="pages-blank-header.html">Blank Page Header</a>
                      </li>
                      <li><a href="pages-login.html">Login</a>
                      </li>
                      <li><a href="pages-login2.html">Login v2</a>
                      </li>
                      <li><a href="pages-404.html">404 Page</a>
                      </li>
                      <li><a href="pages-sign-up.html">Sign Up</a>
                      </li>
                      <li><a href="pages-forgot-password.html">Forgot Password</a>
                      </li>
                      <li><a href="pages-profile.html">Profile</a>
                      </li>
                      <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                      </li>
                      <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                      </li>
                      <li><a href="pages-timeline.html">Timeline</a>
                      </li>
                      <li><a href="pages-timeline2.html">Timeline v2</a>
                      </li>
                      <li><a href="pages-invoice.html"><span class="label label-primary pull-right">New</span>Invoice</a>
                      </li>
                      <li><a href="pages-calendar.html">Calendar</a>
                      </li>
                      <li><a href="pages-gallery.html">Gallery</a>
                      </li>
                      <li><a href="pages-code-editor.html"><span class="label label-primary pull-right">New    </span>Code Editor</a>
                      </li>
                      <li><a href="pages-booking.html"><span class="label label-primary pull-right">New</span>Booking</a>
                      </li>
                      <li><a href="pages-loaders.html"><span class="label label-primary pull-right">New</span>Loaders</a>
                      </li>
                    </ul>
                  </li>
                  <li class="divider">Features</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                    <ul class="sub-menu">
                      <li><a href="email-inbox.html">Inbox</a>
                      </li>
                      <li><a href="email-read.html">Email Detail</a>
                      </li>
                      <li><a href="email-compose.html">Email Compose</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                    <ul class="sub-menu">
                      <li><a href="layouts-primary-header.html">Primary Header</a>
                      </li>
                      <li><a href="layouts-success-header.html">Success Header</a>
                      </li>
                      <li><a href="layouts-warning-header.html">Warning Header</a>
                      </li>
                      <li><a href="layouts-danger-header.html">Danger Header</a>
                      </li>
                      <li><a href="layouts-search-input.html"><span class="label label-primary pull-right">New</span>Search Input</a>
                      </li>
                      <li><a href="layouts-offcanvas-menu.html"><span class="label label-primary pull-right">New</span>Off Canvas Menu</a>
                      </li>
                      <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                      </li>
                      <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                      </li>
                      <li><a href="pages-blank-aside.html">Page Aside</a>
                      </li>
                      <li><a href="layouts-collapsible-sidebar.html">Collapsible Sidebar</a>
                      </li>
                      <li><a href="layouts-sub-navigation.html"><span class="label label-primary pull-right">New</span>Sub Navigation</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                    <ul class="sub-menu">
                      <li><a href="maps-google.html">Google Maps</a>
                      </li>
                      <li><a href="maps-vector.html">Vector Maps</a>
                      </li>
                    </ul>
                  </li>
-->
                  
					
					
					<?php if($_SESSION["userrole"]=='Admin' || $_SESSION["userrole"]=='Director'){?>	
					<li class="parent"><a href="#"><i class="icon mdi mdi-accounts-alt"></i><span>Users</span></a>
                    <ul class="sub-menu">
					
					
						
					<li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Electricians</span></a>
                        <ul class="sub-menu">
                          <li><a href="addelectrician.php"><i class="icon mdi mdi-undefined"></i><span>Add Electrician</span></a></li>
                          <li><a href="electricianlist.php?role=electrician"><i class="icon mdi mdi-undefined"></i><span>View Electricians</span></a></li>
                        </ul>
                      </li>
						
						
						
						<li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Sales Persons</span></a>
                        <ul class="sub-menu">
                          <li><a href="addsaleperson.php"><i class="icon mdi mdi-undefined"></i><span>Add Sales Person</span></a></li>
                          <li><a href="electricianlist.php?role=saleperson"><i class="icon mdi mdi-undefined"></i><span>View Sales Persons</span></a></li>
                        </ul>
                      </li>
						
						
						
						<li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Lead Generators</span></a>
                        <ul class="sub-menu">
                          <li><a href="addlead.php"><i class="icon mdi mdi-undefined"></i><span>Add Lead</span></a></li>
                          <li><a href="electricianlist.php?role=leadperson"><i class="icon mdi mdi-undefined"></i><span>View Leads</span></a></li>
                        </ul>
                      </li>
						
						
						</ul>
					</li>
					<?php }?>
					
					
					
					<li class="parent"><a href="#"><i class="icon mdi mdi-assignment-o"></i><span>Invoicing</span></a>
                    <ul class="sub-menu">
                      
						<?php if($_SESSION["userrole"]=='Admin'  || $_SESSION["userrole"]=='Director'){?>
						<li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Clients</span></a>
                        <ul class="sub-menu">
                          <li><a href="addclient.php"><i class="icon mdi mdi-undefined"></i><span>Add Client</span></a></li>
                          <li><a href="clientlist.php"><i class="icon mdi mdi-undefined"></i><span>View Clients</span></a></li>
                        </ul>
                      </li>
						<?php }?>
						
						
						<?php if($_SESSION["userrole"]=='Admin'  || $_SESSION["userrole"]=='Director'){?>
						<li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Products</span></a>
                        <ul class="sub-menu">
                          <li><a href="addproduct.php"><i class="icon mdi mdi-undefined"></i><span>Create Product</span></a></li>
                          <li><a href="productlist.php"><i class="icon mdi mdi-undefined"></i><span>View Products</span></a></li>
                        </ul>
                      </li>
						<?php }?>
						
                      <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Invoices</span></a>
                        <ul class="sub-menu">
                           <?php if($_SESSION["userrole"]=='Admin'  || $_SESSION["userrole"]=='Director'){?>
							<li><a href="create_invoice.php"><i class="icon mdi mdi-undefined"></i><span>Create Invoice</span></a></li>
							<?php }?>
                          <li><a href="invoicelist.php"><i class="icon mdi mdi-undefined"></i><span>View Invoices</span></a></li>
                        </ul>
                      </li>
						
						<?php if($_SESSION["userrole"]=='Admin'  || $_SESSION["userrole"]=='Director'){?>
						<li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Payments</span></a>
                        <ul class="sub-menu">
                            <li><a href="payment_new.php"><i class="icon mdi mdi-undefined"></i><span>Enter Payment</span></a></li>
                          <li><a href="paymentlist.php"><i class="icon mdi mdi-undefined"></i><span>View Payments</span></a></li>
                        </ul>
                      </li>
						<?php }?>
					
						
						
						
                    </ul>
                  </li>
                  
                  
                  <?php if($_SESSION["userrole"]=='Admin' || $_SESSION["userrole"]=='Director'){?>	
					<li class="parent"><a href="#"><i class="icon mdi mdi-accounts-alt"></i><span>Reports</span></a>
                    <ul class="sub-menu">					
				
						
						
						
						<li><a href="userreport.php"><i class="icon mdi mdi-undefined"></i><span>User Statistics</span></a>
                        
                      </li>
						
						
						</ul>
					</li>
					<?php }?>
					
                  


                </ul>
              </div>
            </div>
          </div>
			
         <!-- <div class="progress-widget">
            <div class="progress-data"><span class="name">Developed by Designsintellect.com</span></div>
          </div>
-->
			
        </div>
      </div>