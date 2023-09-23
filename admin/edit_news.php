<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit News</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit News</li>
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
                                <div class="form-validation">
                                      <?php
					    $query = $conn->query("SELECT * FROM `news` WHERE `news_id` = '$_REQUEST[news_id]'") or die(mysqli_error());
					    $fetch = $query->fetch_array();
						?>
                                    <form class="form-valide"  method="post" action="edit_query_news.php?news_id=<?php echo $fetch['news_id']?>" enctype="multipart/form-data">
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Title News/Update: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="news_title" placeholder="Title" value="<?php echo $fetch['news_title']?>" required="" >
                                            </div>
                                        </div>
										  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Date: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                               <input readonly class="form-control" name="news_date" value="<?php echo $fetch['news_date']?>" required="" >
                                            </div>
                                        </div>
                                       
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Photo For News/Update: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <label>News Photo </label>
                                               <div id = "preview" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/> 
											  </div>
											  <input type = "file" id = "photo" name = "photo" />
                                            </div>
                                        </div>
                                     <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">News/Update Description: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea name="news_description" placeholder="Description" required="" rows="4" cols="50"><?php echo $fetch['news_description']?></textarea>
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-success" name="edit_news">Update</button>
												<button class="btn btn-danger" name="cancel"><a href="view_news.php">Cancel</a></button>
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