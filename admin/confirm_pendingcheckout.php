<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>
<?php date_default_timezone_set('Asia/Manila');?>

<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Check Out</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Check Out</li>
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
                                    <form class="form-valide"  method="post" action="pendingcheckout_query.php?transaction_id=<?php echo $row['transaction_id']?>&guest_id=<?php echo $row['guest_id']?>" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Name: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="fullname" value="<?php echo $row['firstname']." ". $row['lastname']?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Email: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="email_address" value="<?php echo $row['email_address']?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Address: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="address" value="<?php echo $row['address']?>" >
                                            </div>
                                        </div><div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Contact No: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="contact_no" value="<?php echo $row['contact_no']?>" >
                                            </div>
                                        </div>
										  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Position: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="position" value="<?php echo $row['position']?>" >
                                            </div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Purpose Of Stay: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="purposeofstay" value="<?php echo $row['purposeofstay']?>">
                                            </div>
                                        </div>
                                     
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Adults: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="adults" value="<?php echo $row['adults']?>">
                                            </div>
                                        </div>
                                       	<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Children: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="children" value="<?php echo $row['children']?>">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room No: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="room_no" value="<?php echo $row['room_no']?>" >
                                            </div>
                                        </div>
                                     	<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Room Type: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="room_type" value="<?php echo $row3['room_type']?>">
                                            </div>
                                        </div>
									
										<div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Room Price: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="room" name="room_price" value="<?php echo $row2['price']?>">
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Check In: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="checkin" value="<?php echo $row['checkin']?>" >
                                            </div>
                                        </div>
										<div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Check In Time: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
												<input readonly class="form-control" id="val-username" name="checkin_time" value="<?php echo $row['checkin_time']?>" >
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Nights: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="days" value="<?php echo $days?>">
                                            </div>
                                        </div>
									
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Check Out: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="checkout" value="<?php echo $row['checkout']?>" >
                                            </div>
                                        </div>
											 <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Extended Nights: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
												<input readonly class="form-control" id="val-username" name="extend_days" value="<?php echo $row['extend_days']?>" >
                                            </div>
                                        </div>
									
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Early Check In? <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <!--<select class="form-control" id="val-skill" name="early_checkin" value="<?phpecho $row['early_checkin']?>">
													<option value = "0" <?phpif($row['early_checkin'] == "0"){echo "selected";} ?>>No</option>
													<option value = "500" <?phpif($row['early_checkin'] == "500"){echo "selected";} ?>>Yes<?phpif($row['early_checkin'] == "0"){echo "No";}else{echo "Yes",;}?></option>
                                                </select>-->
												<input readonly class="form-control" id="val-digits" name="early_checkin" value="<?php echo $row["early_checkin"]?>" required="">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Extra Towel: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="extra_towel" value="<?php if($row['extra_towel'] == "0" || $row['extra_towel'] == ""){ echo "0";}else{echo $row['extra_towel'];}?>" placeholder="Extratowel... " onKeyDown="return false" min="0" max="5">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Extra bed: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="extra_bed" value="<?php if($row['extra_bed'] == "0" || $row['extra_bed'] == ""){ echo "0";}else{echo $row['extra_bed'];}?>" placeholder="Extrabed... " onKeyDown="return false" min="0" max="5">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Lost Key: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="lost_key" value="<?php if($row['lost_key'] == "0" || $row['lost_key'] == ""){ echo "0";}else{echo $row['lost_key'];}?>" onKeyDown="return false" min="0" max="5">
                                            </div>
                                        </div>
										   <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Reference Code: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="generate_code" value="<?php echo $row['generate_code']?>" >
                                            </div>
                                        </div>
											 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Advance Payment: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="payment_reservation" value="<?php if($row['deposit'] == 50){ echo "Advance 50% Payment";}else{echo "Advance Full Payment";}?>">
                                            </div>
                                        </div>
											 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Reservation Total: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="deposit_total" value="<?php echo $row['deposit_total']?>.00">
                                            </div>
                                        </div>
											 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Discount: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="discount" value="<?php echo $row['discount']?>">
                                            </div>
                                        </div>
											 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Discount Total: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="discount_total" value="<?php echo $row['discount_total']?>.00">
                                            </div>
                                        </div>
										 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Previous Balance: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="previous_balance" value="<?php echo $row['previous_balance']?>.00">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"><mark>Late Check Out? </mark><span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="late_checkout">
													<option value = "0">No</option>
													<option value = "500">Yes</option>
                                                </select>
                                            </div>
                                        </div>
											 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Payment Method : <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" onchange="if (this.selectedIndex==3){this.form['Bank'].style.visibility='visible'}else {this.form['Bank'].style.visibility='hidden'};" name="payment_method" required="">
                                                    <option value="">Please select</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Salary Deduction">Salary Deduction</option>
													 <option value="Bank">Bank</option>
                                                </select>
												<input type="textbox" class="form-control" id="val-digits" name="Bank" Value="Account Number : 088-7-08851563-0" minlength="16" maxlength="16" style="visibility:hidden;" required="">
                                            </div>
                                        </div>
										
										
										 <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Payment Status : <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="payment_status" required="">
                                                    <option value="Unpaid">Unpaid</option>
													  <!--<option value="Paid">Paid</option>-->
                                                </select>
                                            </div>
                                        </div>
											  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits"><mark>Total Amount:</mark><span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="total_amount" value="<?php echo $total_bill?>.00">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-success" name="pendingcheckout_query">Check Out</button>
												<button class="btn btn-danger" name="cancel"><a href="checkin.php">Cancel</a></button>
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