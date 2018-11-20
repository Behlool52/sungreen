<?php include 'includes/header.php'; ?>


     
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="https://sungreen.com.au/dev/backoffice/admin/assets/img/logo3.png" alt="logo" width="20%" class="logo-img">
				
				
				
				</div>
              
				
				
				<div class="panel-body">
					
					<?php if(isset($errormsg)){ ?>				
				
				<div role="alert" class="alert alert-danger alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><?php echo $errormsg; ?>
                  </div>
				
				
				<?php }?>
                <form action="" method="post">
                  <div class="form-group">
                    <input id="username" name="username" type="text" placeholder="Username" autofocus autocomplete="on" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                  </div>
					
				<div class="form-group">
                    <select class="form-control" name="loginrole">
                          <option>Select Role</option>
                          <option value="director">Director</option>
                          <option value="admin">Admin</option>
                          <option value="lead">Lead</option>
                          <option value="electrician">Electrician</option>
						  <option value="saleperson">Sales Person</option>
                        </select>
                  </div>	
                 
                  <div class="form-group login-submit">
                    <button data-dismiss="modal" type="submit" name="adminlogin" class="btn btn-primary btn-xl">Login</button>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      

<?php include 'includes/footer.php'; ?>