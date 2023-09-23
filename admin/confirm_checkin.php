<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Confirm Check In Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Confirm Check In Details</li>
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

				                <br />
                                    <form class="form-valide"  method="post" action="confirmcheckin_query.php?transaction_id=<?php echo $row['transaction_id']?>&room_id=<?php echo $row2['room_id']?>" enctype="multipart/form-data">
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
                                                <input readonly class="form-control" id="val-digits" name="contact_no" value="<?php echo $row['contact_no']?>" required="">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Position: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="position" value="<?php echo $row['position']?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Purpose Of Stay: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" value="<?php echo $row['purposeofstay']?>" disabled = "disabled">
                                            </div>
                                        </div>
                                        
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Adult: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="adults" value="<?php echo $row['adults']?>" onKeyDown="return false" min="1" max="5" required="">
                                            </div>
                                        </div>
                                       	<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Children: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="children" value="<?php echo $row['children']?>" onKeyDown="return false" min="0" max="5" required="">
                                            </div>
                                        </div>
                                        	 <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Room Type: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                  <input readonly class="form-control" id="val-username" name="room_type" value="<?php echo $row3['room_type']?>" >
                                            </div>
                                        </div>
										<div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Room Price: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                  <input readonly class="form-control" id="val-username" name="room_price" value="<?php echo $row2['price']?>" >
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Discount: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="discount" value="<?php echo $row['discount']?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Check In: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="checkin" value="<?php echo $row['checkin']?>" required="">
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
                                                <input readonly class="form-control" id="val-digits" name="checkout" value="<?php echo $row['checkout']?>" onkeydown="return false" required="">
                                            </div>
                                        </div>
										
									<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"><mark>Early Check In? </mark><span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="early_checkin" value="<?php echo $row['early_checkin']?>">
													<option value = "0" <?php if($row['early_checkin'] == "0"){echo "selected";} ?>>No</option>
													<option value = "500" <?php if($row['early_checkin'] == "500"){echo "selected";} ?>>Yes</option>
                                                </select>
                                            </div>
                                        </div>
									<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room No: <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" name="room_no" placeholder="Roomno.. " required="">
                                            </div>
                                        </div>
										
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Extra bed: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-digits" name="extra_bed" value="0"  onKeyDown="return false" min="0" max="5">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Reservation Total: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="discount_total" value="<?php echo $row['discount_total']?>.00">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Advance Payment Status: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="advance_payment" value="<?php if($row['deposit'] == "50"){ echo "Advance 50% Payment";}else{ echo "Advance Full Payment";}?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Current Total Balance: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="total_balance" value="<?php echo $total_bill?>.00">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"><mark>Paid Current Balance? </mark><span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="paid_balance" required="">
												
													<option value = "1">No</option>
													<option value = "0" <?php if($total_bill == "0"){echo "selected";} ?>>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-success" name="confirm_checkin">Confirm Check In</button>
												<!--<button class="btn btn-warning" name="change"><a href = "edit_pendingcheckin.php?transaction_id=<?phpecho $row['transaction_id']?>&room_id=<?phpecho $row['room_id']?>">Change</a></button>-->
												<button class="btn btn-danger" name="cancel"><a href="pendingcheckin.php">Cancel</a></button>
												
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
</body>

</html>
<?php include('footer.php');?>