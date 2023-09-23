<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Change Pending Check In Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Change Pending Check In Details</li>
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
						
						//dates interval//
					    $date1=date_create($row['checkin']);
                        $date2=date_create($row['checkout']);
                        $diff=date_diff($date1,$date2);
						$days=$diff->format("%a");
				              ?>

				            
                                    <form class="form-valide"  method="post" action="upgrade_room_query.php?transaction_id=<?php echo $row['transaction_id']?>&room_id=<?php echo $row2['room_id']?>" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Check In: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="checkin" value="<?php echo $row['checkin']?>" onkeydown="return false">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Nights: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="days" value="<?php echo $days?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Extended Nights: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="extended_days" value="<?php echo $row['extend_days']?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Check Out: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="checkout" value="<?php echo $row['checkout']?>" onkeydown="return false">
                                            </div>
                                      </div>
										
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
                                            <label class="col-lg-4 col-form-label" for="val-digits"><mark> Total Balance:</mark><span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="total_balance" value="<?php echo $total_bill?>.00" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="upgrade_room" class="btn btn-success" name="upgrade_room">Confirm Change</button>
												<button class="btn btn-danger" name="cancel"><a href="edit_pendingcheckin.php?transaction_id=<?php echo $row['transaction_id']?>?room_id=<?php echo $row2['room_id']?>">Cancel</a></button>
                                            </div>
                                        </div>
										
                                    </form>
							
									<?php
							}
						?>
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
 <script src="js/modal.js"></script>
</body>

</html>
<?php include('footer.php');?>