<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Room/Venue Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Room Details</li>
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
							<h4 class="card-title">Edit Room </h4>
                                <div class="form-validation">
                                      <?php
						$sql = "SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'";
                        $result = $conn->query($sql);
						
						
						$row = $result->fetch_assoc();
						
						
						?>
                                    <form class="form-valide"  method="post" action="edit_query_room.php?room_id=<?php echo $row['room_id']?>" enctype="multipart/form-data">
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Room Type : <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="selectdata" name="room_type" value="<?php echo $row['room_id']?>"required="">
													<?php
                                                   
							                        $sql2 = "SELECT * FROM `room_type` order by roomtype_id asc";
                                                    $result2 = $conn->query($sql2);
													 
                                                    while($row2 = $result2->fetch_assoc()) { 
												
													?>									
													 <option value = "<?php echo $row2['roomtype_id']; ?>" <?php if($row2['roomtype_id'] == $row['room_type']){echo "selected";}?>><?php echo $row2['room_type']; ?></option>
													<?php
                                                    } 
													?>
                                                </select>
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Bed: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" name="bed" value="<?php echo $row['bed']?>"  onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "1" min="1" max="5" required="">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Max: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" name="max" value="<?php echo $row['max']?>"  onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength = "1" min="1" max="5" required="">
                                            </div>
                                        </div>
                       
                                      
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room Price: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="room" name="price" value="<?php echo $row['price']?>" required="">
                                            </div>
                                        </div>
                                       
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Main Room Preview: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <label>Main Photo </label>
                                               <div id = "preview" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <img src = "../photo/<?php echo $row['photo']?>" id = "lbl" width = "100%" height = "100%"/> 
											  </div>
											  <input type = "file" id = "photo" name = "photo" />
                                            </div>
                                        </div>
                                        	<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room Preview 1: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <label>Photo 1 </label>
                                               <div id = "preview1" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <img src = "../photo/<?php echo $row['photo1']?>" id = "lbl1" width = "100%" height = "100%"/> 
											  </div>
											  <input type = "file"  id = "photo1" name = "photo1" />
                                            </div>
                                        </div>
                                        	<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room Preview 2: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <label>Photo 2 </label>
                                               <div id = "preview2" style = "width:150px; height :150px; border:1px solid #000;"> 
                                                <img src = "../photo/<?php echo $row['photo2']?>" id = "lbl2" width = "100%" height = "100%"/> 
											  </div>
											  <input type = "file"  id = "photo2" name = "photo2" />
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room Preview 3: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <label>Photo 3 </label>
                                               <div id = "preview3" style = "width:150px; height :150px; border:1px solid #000;"> 
                                               <img src = "../photo/<?php echo $row['photo3']?>" id = "lbl3" width = "100%" height = "100%"/> 
											  </div>
											  <input type = "file" id = "photo3" name = "photo3" />
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room Preview 4: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <label>Photo 4 </label>
                                               <div id = "preview4" style = "width:150px; height :150px; border:1px solid #000;"> 
                                               <img src = "../photo/<?php echo $row['photo4']?>" id = "lbl4" width = "100%" height = "100%"/> 
											  </div>
											  <input type = "file"  id = "photo4" name = "photo4" />
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-success" name="edit_room">Update</button>
												<button class="btn btn-danger" name="cancel"><a href="view_room.php">Cancel</a></button>
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
         
     	<script>
  function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
    
  function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[1-5]|\./;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>
     
<script src="js/preview.js"></script>

         <!--<script type='text/javascript'>
$(document).ready(function(){
$('#room').val($('#selectdata option:selected').data('room'));
$(function(){
    $('#selectdata').change(function(){
        $('#room').val($('#selectdata option:selected').data('room'));
    });
});
});
</script>-->
</body>

</html>
<?php include('footer.php');?>
