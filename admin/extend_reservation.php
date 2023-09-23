<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Extend Reservation</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Extend Reservation</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->     
                          <?php
					    $sql = "SELECT * FROM `transaction` NATURAL JOIN `guest` WHERE `transaction_id` = '$_REQUEST[transaction_id]'";
                        $result = $conn->query($sql);
						
						
						while($row = $result->fetch_assoc()) { 
						$sql2 = "SELECT * FROM `room` WHERE room_id='".$row['room_id']."'";
                        $result2=$conn->query($sql2);
						$row2=$result2->fetch_assoc();
						
						$room_type = $row2['room_type'];
						$sql3 = "SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row2['room_type']."'";
                        $result3=$conn->query($sql3);						  
						$row3 = $result3->fetch_assoc();
						
						$bill_int = $row['bill'];
						$total_bill = (int)$bill_int;
				              ?>                 
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
							
                         

				                <br />
                                    <form class="form-valide"  method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits"> <h3>GUEST DETAILS:</h3></label>
                                         
                                        </div>
									    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Name: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" value="<?php echo $row['firstname']." ".$row['lastname']?>" disabled = "disabled">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Email: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" value="<?php echo $row['email_address']?>" disabled = "disabled">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Address: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" value="<?php echo $row['address']?>" disabled = "disabled">
                                            </div>
                                        </div><div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Contact No: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" value="<?php echo $row['contact_no']?>" disabled = "disabled">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Position: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" value="<?php echo $row['position']?>" disabled = "disabled">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Purpose Of Stay: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" value="<?php echo $row['purposeofstay']?>" disabled = "disabled">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Adults: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" value="<?php echo $row['adults']?>" disabled = "disabled">
                                            </div>
                                        </div>
                                       	<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Children: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" value="<?php echo $row['children']?>" disabled = "disabled">
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
			  <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                  <form class="form-valide"  method="post" action="extendreservation_roomno_query.php?transaction_id=<?php echo $row['transaction_id']?>&room_id=<?php echo $row2['room_id']?>" enctype="multipart/form-data">
										  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits"> <h3>GUEST ROOM DETAILS:</h3></label>
                                         
                                        </div>
										 	<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room No: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" name="room_no" value="<?php echo $row['room_no']?>" required="" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="change_room" class="btn btn-success" name="change_room_no">Change Room no</button>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="form-valide"  method="post" action="extendreservation_room_query.php?transaction_id=<?php echo $row['transaction_id']?>&room_id=<?php echo $row2['room_id']?>" enctype="multipart/form-data">
                                        <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Room Type: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                  <select class="form-control" id="selectdata" name="room_type" value="<?php echo $row2['room_id']?>"required="">
													<?php
													$sql3 = "SELECT * FROM `room`";
                                                    $result3 = $conn->query($sql3);
													$query6 = $conn->query("SELECT * FROM `transaction` WHERE `room_id` = '".$row2['room_id']."' && `status` = 'Pending Payment Reservation'") or die(mysqli_error());
	                                                $row5 = $query6->fetch_array();
													
													//if($row2 = $row5){
                                                    while($row3 = $result3->fetch_assoc()) { 
													$sql4 = "SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row3[room_type]."'";
                                                    $result4 = $conn->query($sql4);
													$row4 = $result4->fetch_assoc();
													
													?>
													 <option value = "<?php echo $row3['room_id'];?>" <?php if($row4['roomtype_id'] == $row2['room_type']){echo "data-room='".$row3['price']."'"; echo "selected";}else {echo "data-room='".$row3['price']."'";}?>><?php echo $row4['room_type'];?></option>
													<?php
													
													}
													?>
                                                </select>
                                            </div>
                                        </div>
												<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Discount: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                               <input readonly class="form-control" id="val-digits" name="discount" value="<?php if($row['discount'] == "100"){echo "0";}else{echo $row['discount'];} ?>">
                                            </div>
                                        </div>
										<div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Room Price: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                 <input readonly class="form-control" id="room" name="room_price" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="change_room" class="btn btn-success" name="change_room">Change Room Type</button>
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
			  <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">

                                    <form class="form-valide"  method="post" action="extendreservation_date_query.php?transaction_id=<?php echo $row['transaction_id']?>&room_id=<?php echo $row2['room_id']?>" enctype="multipart/form-data">
										 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits"> <h3>GUEST DATE DETAILS:</h3></label>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Check In Date: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="checkin" value="<?php echo $row['checkin']?>">
                                            </div>
                                        </div>
										
										 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Check In Time: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="checkin_time" value="<?php echo date('h:i a', strtotime($row['checkin_time']))?>" required="">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Nights: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="dayss" value="<?php echo $row['days']?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Extended Nights: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="extended_days" value="<?php echo $row['extend_days']?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Check Out Date:<span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="val-digits" name="checkout" value="<?php echo $row['checkout']?>" onkeydown="return false" required="">
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Early Check In: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <!--<select class="form-control" id="val-skill" name="early_checkin" value="<?phpecho $row['early_checkin']?>">
													<option value = "0" <?phpif($row['early_checkin'] == "0"){echo "selected";} ?>>No</option>
													<option value = "500" <?phpif($row['early_checkin'] == "500"){echo "selected";} ?>>Yes<?phpif($row['early_checkin'] == "0"){echo "No";}else{echo "Yes",;}?></option>
                                                </select>-->
												<input readonly class="form-control" id="val-digits" name="early_checkin" value="<?php echo $row["early_checkin"]?>" required="">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="extend_date" class="btn btn-success" name="extend_date">Extend Reservation</button>
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
			 <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">

                                    <form class="form-valide"  method="post" action="extendreservation_query.php?transaction_id=<?php echo $row['transaction_id']?>&room_id=<?php echo $row2['room_id']?>" enctype="multipart/form-data">
										 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits"> <h3>GUEST EXTRA CHARGES DETAILS:</h3></label>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Extra Towel Count: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="extra_towel_count" value="<?php echo $row['extra_towel']?>">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Add Extra Towel: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" name="extra_towel" value="0" onKeyDown="return false" min="0" max="5">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Extra Bed Count: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="extra_bed_count" value="<?php echo $row['extra_bed']?>">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Add Extra bed: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" name="extra_bed" value="0" onKeyDown="return false" min="0" max="5">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Lost Key Count: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="lost_key_count" value="<?php echo $row['lost_key']?>" onKeyDown="return false" min="0" max="5">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Add Lost Key: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" name="lost_key" value="0" onKeyDown="return false" min="0" max="5">
                                            </div>
                                        </div>
											
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-success" name="extend_reservation">Add</button>
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
			
			 <div class="container-fluid">
                <!-- Start Page Content -->
			 <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">

                                    <form class="form-valide"  method="post" enctype="multipart/form-data">
										 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits"><h3>GUEST PAYMENT DETAILS:</h3></label>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits"><mark>Total: </mark><span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="total_bill" value="<?php echo $total_bill?>.00">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button class="btn btn-success" name="done"><a href="checkin.php">Done</a></button>
												<button class="btn btn-danger" name="cancel"><a href="checkin.php">Cancel</a></button>
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
          			<?php
							}
						?>
                                        
                <!-- /# row -->


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
         
     <script type='text/javascript'>
$(document).ready(function(){
$('#room').val($('#selectdata option:selected').data('room'));
$(function(){
    $('#selectdata').change(function(){
        $('#room').val($('#selectdata option:selected').data('room'));
    });
});
});
</script>  
      <script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>  

</body>

</html>
<?php include('footer.php');?>