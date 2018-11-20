<?php include 'includes/header.php'; ?>


     
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="https://earthsave.com.au/dev/admin/assets/img/logo.png" alt="logo" width="50%" class="logo-img">
				
				
				
				</div>
              
				
				
				<div class="panel-body">
					
					<?php if(isset($errormsg)){ ?>				
				
				<div role="alert" class="alert alert-danger alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><?php echo $errormsg; ?>
                  </div>
				
				
				<?php }?>
                <form action="" method="post">
                  <div class="form-group">
                    <input id="username" name="username" type="text" placeholder="Username" autocomplete="off" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                  </div>
                 
                  <div class="form-group login-submit">
                    <button data-dismiss="modal" type="submit" name="userlogin" class="btn btn-primary btn-xl">Sign me in</button>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      

<?php include 'includes/footer.php'; ?>