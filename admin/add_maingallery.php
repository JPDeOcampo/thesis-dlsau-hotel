<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Gallery Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Gallery Details</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->     
                                
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
							<h4 class="card-title">Add Photo On Main Gallery </h4>
                                <div class="form-validation">
                                    
                                    <form class="form-valide"  method="post" action="pages/save_maingallery.php" enctype="multipart/form-data">
                                          
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Photo Description For Gallery: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea name="photo_description" placeholder="Description" required="" rows="4" cols="50"></textarea>
                                            </div>
                                        </div>
                                       
                                       
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Main Gallery Preview: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <label>Photo </label>
                                               <div id = "preview" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <center id = "lbl">
                                                [Photo] 
                                              </center>
											  </div>
											  <input type = "file" required = "required" id = "photo" name = "photo" />
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Gallery Preview 1: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <label>Photo </label>
                                               <div id = "preview1" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <center id = "lbl1">
                                                [Photo] 
                                              </center>
											  </div>
											  <input type = "file"  id = "photo1" name = "photo1" />
                                            </div>
                                        </div>
                                        	<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Gallery Preview 2: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <label>Photo </label>
                                               <div id = "preview2" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <center id = "lbl2">
                                                [Photo] 
                                              </center>
											  </div>
											  <input type = "file"  id = "photo2" name = "photo2" />
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Gallery Preview 3: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <label>Photo </label>
                                               <div id = "preview3" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <center id = "lbl3">
                                                [Photo] 
                                              </center>
											  </div>
											  <input type = "file" id = "photo3" name = "photo3" />
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Gallery Preview 4: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <label>Photo </label>
                                               <div id = "preview4" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <center id = "lbl4">
                                                [Photo] 
                                              </center>
											  </div>
											  <input type = "file"  id = "photo4" name = "photo4" />
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="save_maingallery" class="btn btn-success">Add</button>
												<button class="btn btn-danger" name="cancel"><a href="view_maingallery.php">Cancel</a></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>

                                        
                <!-- /# row -->


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
         
      <script src="js/preview.js"></script>


</body>

</html>
<?php include('footer.php');?>