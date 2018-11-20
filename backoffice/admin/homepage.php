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
                  <form action="#" method="post" id="idForm" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-2 control-label ">Title</label>
                      <div class="col-sm-6">
                        <input type="text" id="page_title" class="form-control input-sm" name="title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Slug</label>
                      <div class="col-sm-6">
                        <input type="text" id="page_slug" class="form-control input-sm">
                      </div>
                    </div>






                    <div class="form-group">
                      <label class="col-sm-2 control-label">Slider</label>
                      <div class="col-sm-6">
                        <div class="be-radio inline">
                          <input type="radio" name="slider" class="pageslider" id="slider_yes" value="1">
                          <label for="slider_yes">Yes</label>
                        </div>
                        <div class="be-radio inline">
                          <input type="radio" name="slider" class="pageslider" id="slider_no" value="0">
                          <label for="slider_no">No</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Featured Image</label>
                      <div class="col-sm-6">
                        <div class="be-radio inline">
                          <input type="radio" name="featured" id="fea_yes" value="1" class="featuredimge">
                          <label for="fea_yes">Yes</label>
                        </div>
                        <div class="be-radio inline">
                          <input type="radio" name="featured" id="fea_no" value="0" class="featuredimge">
                          <label for="fea_no">No</label>
                        </div>
                      </div>
                    </div>
					  
					  
					  
					 <div class="form-group">
                      <label class="col-sm-2 control-label">Header Image</label>
                      <div class="col-sm-6">
                        <input type="file" name="headerpic" id="headerpic" class="inputfile">
                        <label for="headerpic" class="btn-primary"> <i class="mdi mdi-upload"></i>
							<span>Browse files...</span></label>
                      </div>
						 
						 
						 
                    </div>  




                    <div class="form-group">
                      <label class="col-sm-2 control-label">Page Order</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="page_order" id="page_order">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
					  
					 <div class="form-group">
                      <label class="col-sm-2 control-label">Parent</label>
                      <div class="col-sm-3">
                        <select class="form-control" name="parentpage" id="parentpage">
							
							 <option value="">---------Select--------</option>
							
							<?php while($pagerow = mysql_fetch_array($pagesque)){?>
							
                          <option value="<?php echo $pagerow['id']; ?>"><?php echo $pagerow['page_title']; ?></option>
							<?php }?>
                        </select>
                      </div>
                    </div>
					  
					  
					   <div class="form-group">
                      <label class="col-sm-2 control-label">Child</label>
                      <div class="col-sm-3">
                        <div class="be-radio inline">
                          <input type="radio" name="childpage" id="childyes" class="childpage" value="1">
                          <label for="childyes">Yes</label>
                        </div>
                        <div class="be-radio inline">
                          <input type="radio" name="childpage" id="childno" class="childpage" value="0">
                          <label for="childno">No</label>
                        </div>
                      </div>
                    </div>
					  
					  

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content</label>
                    <div class="col-md-9">
                      <div class="panel panel-default">
                          <div id="editor1"></div>
                      </div>
                    </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Active</label>
                      <div class="col-sm-6">
                        <div class="be-radio inline">
                          <input type="radio" name="active" id="activeyes" class="pageactive" value="1">
                          <label for="activeyes">Yes</label>
                        </div>
                        <div class="be-radio inline">
                          <input type="radio" name="active" id="activeno" class="pageactive" value="0">
                          <label for="activeno">No</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                    <div class="col-sm-7">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary btn-lg">Submit</button>
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