<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Confirm Reservation</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Confirm Reservation</li>
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
						
				
						//dates interval//
					    $date1=date_create($row['checkin']);
                        $date2=date_create($row['checkout']);
                        $diff=date_diff($date1,$date2);
						$days=$diff->format("%a");
				?>
                                    <form class="form-valide"  method="POST" action = "confirmreservation_query.php?transaction_id=<?php echo $row['transaction_id']?>" enctype="multipart/form-data">
                                        <div class="form-group row">
                                          <label class="col-lg-4 col-form-label" for="val-username">Firstname: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="firstname" value="<?php echo $row['firstname']?>">
                                            </div>
                                        </div>
										  <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Lastname: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="lastname" value="<?php echo $row['lastname']?>">
                                            </div>
                                        </div>
										  <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Email Address: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="email" value="<?php echo $row['email_address']?>">
                                            </div>
                                        </div>
										  <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Address: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="address" value="<?php echo $row['address']?>" >
                                            </div>
                                        </div>
										  <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Contact No: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="contact" value="<?php echo $row['contact_no']?>" >
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
                                                <input readonly class="form-control" id="val-username" name="purposeofstay" value="<?php echo $row['purposeofstay']?>" >
                                            </div>
                                        </div>
                                         
										  <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Adults: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="adults" value="<?php echo $row['adults']?>">
                                            </div>
                                        </div>
										  <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Children: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="children" value="<?php if($row['children'] == "0" || $row['children'] == ""){ echo "0";}else{echo $row['children'];}?>" >
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
										 <label class="col-lg-4 col-form-label" for="val-username">Room Price: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                 <input readonly class="form-control" id="room" name="room_price" required="">
                                            </div>
                                        </div>
                                      <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Check In: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="checkin" value="<?php echo $row['checkin']?>" >
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Nights: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-digits" name="days" value="<?php echo $days?>">
                                            </div>
                                        </div>
										  <div class="form-group row">
                                       <label class="col-lg-4 col-form-label" for="val-username">Check Out: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="checkout" value="<?php echo $row['checkout']?>" >
                                            </div>
                                        </div>
									
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Discount: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="discount">
                                                    <option value="0">No Discount</option>
                                                    <option value="5">5%</option>
                                                    <option value="10">10%</option>
                                                     <option value="20">20%</option>
                                                      <option value="30">30%</option>
                                                       <option value="40">40%</option>
                                                    <option value="50">50%</option>
                                                     <option value="60">60%</option>
                                                      <option value="70">70%</option>
													 <option value="80">80%</option>
                                                      <option value="90">90%</option>
                                                </select>
                                            </div>
                                        </div>
										  <div class="form-group row">
                                       <label class="col-lg-4 col-form-label" for="val-username">Subject For Email: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="subject" value="De La Salle Hotel School" required="">
                                            </div>
                                        </div>
										<div class="form-group row">
                                           <label class="col-lg-4 col-form-label" for="val-username">Reference Code: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" value="<?php
                                               $Generator = "ABCDEFGHIJKLMOPQRSTUVWXYZabcdeifghiklmnopqrstuvwxyz1234567890?#*@";
	                                            echo substr(str_shuffle($Generator),0,10);?>" name="generate_code" >
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                       <label class="col-lg-4 col-form-label" for="val-username">Confirmation Message: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <textarea id="val-username" name="message" rows="8" cols="48" required="">Thank you for choosing De La Salle Hotel School. We are delighted to "CONFIRM" the following reservation. If you have urgent Queries, please do not hesitate to contact the hotel directly. You can call us at (2 8330 9128) local (2147) or you can Direct Message us on our Facebook Page listed below.</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-success" name= "confirm_form">Confirm Reservation</button>
												<button class="btn btn-danger" name="cancel"><a href="pendingreservation.php">Cancel</a></button>
                                            </div>
                                        </div>
                                    </form>
											<?php
							}
						?>
						 <?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
    <div class="alert alert-info"><?php echo $_SESSION['result']?></div>
    <?php
					}else{
			?>
    <div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
    <?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
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