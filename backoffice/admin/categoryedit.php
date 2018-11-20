<?php include 'includes/header.php'; ?>
<?php include 'includes/leftpanel.php'; ?> 
      
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Pages</h2>

        </div>
        <div class="main-content container-fluid">


          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Home Page</div>
                <div class="panel-body">
                  <form action="#" method="post" id="editcatform" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
					 <input type="hidden" id="cat_id" class="form-control input-sm" value="<?php echo $cat_id; ?>"> 
					  
                    <div class="form-group">
                      <label class="col-sm-2 control-label ">Category</label>
                      <div class="col-sm-6">
                        <input type="text" id="cat_title" class="form-control input-sm" name="title" value="<?php echo $cat_title; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Category Slug</label>
                      <div class="col-sm-6">
                        <input type="text" id="cat_slug" class="form-control input-sm" value="<?php echo $cat_slug; ?>">
                      </div>
                    </div>



                  




                    <div class="form-group">
                      <label class="col-sm-2 control-label">Page Order</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="cat_order" id="cat_order">
							
							<?php while($pagerow = mysql_fetch_array($catsque)){?>
                          <option value="<?php echo $pagerow['id']; ?>" <?php if($weight==$pagerow['id']) echo "selected='selected'"; ?>><?php echo $pagerow['id']; ?></option>
                         <?php }?>
                        </select>
                      </div>
                    </div>
					  
					
					  
					

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Active</label>
                      <div class="col-sm-6">
                        <div class="be-radio inline">
                          <input type="radio" name="active" id="activeyes" class="catactive" value="1" <?php if($page_active==1){?>checked=checked<?php }?>>
                          <label for="activeyes">Yes</label>
                        </div>
                        <div class="be-radio inline">
                          <input type="radio" name="active" id="activeno" class="catactive" value="0" <?php if($page_active==0){?>checked=checked<?php }?>>
                          <label for="activeno">No</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                    <div class="col-sm-7">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary btn-lg">Edit</button>
                        <button class="btn btn-space btn-default btn-lg">Cancel</button>
                      </p>
                    </div>
                    </div>



                  </form>
                </div>
              </div>
            </div>
          </div>
			
			
			








        </div>
      </div>

<?php include 'includes/footer.php'; ?>