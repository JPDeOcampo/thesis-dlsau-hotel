<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Room Type Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Room Type Details</li>
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
							<h4 class="card-title">Add Room Type</h4>
							</br>
                                <div class="form-validation">
                                    
                                    <form class="form-valide"  method="post" action="pages/save_roomtype.php" enctype="multipart/form-data">
                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Room Type List : <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="room_type">
                                                    <option value="">View Room Type List</option>
                                                    	<?php
                                                    $sql = "SELECT * FROM `room_type` order by roomtype_id asc";
                                                    $result = $conn->query($sql);
                                                    while($row = $result->fetch_assoc()) { 
                                                    echo "<option value='".$row['room_type']."'>".$row['room_type']."</option>"; 
                                                    } 
													?>
                                                </select>
                                            </div>
                                        </div>
										
										<div class="form-group row"> 
                                            <label class="col-lg-4 col-form-label" for="val-digits">Add Room Type: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" name="room_type" placeholder="Room Type"  required="">
                                            </div>
                                        </div>
                                       
                       
										
										
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-success">Add</button>
												<button class="btn btn-danger" name="cancel"><a href="view_roomtype.php">Cancel</a></button>
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