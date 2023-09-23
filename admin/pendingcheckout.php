<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<link rel="stylesheet" href="popup_style.css">
<?php include('sidebar.php');

if(isset($_GET['id']))
{ ?>

<?php } ?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Check Out Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Check Out Details</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                                        
                 <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                           <h4 class="card-title">Pending Check Out Details</h4>
                      <?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `pendingcheckout_report` WHERE `status` = 'Pending Check Out'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
			?>
                 <div class="table-responsive m-t-40">
				<a class = "btn btn-success disabled"><span class = "badge"><?php echo $f_p['total']?></span> Pendings Check Out</a>
				<br />
				<br />
                   <!--<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="3990px">-->
				   <table id="example24" class="newTable" cellspacing="0">
                  <thead>
						<tr>
						   <th>No.</th>
							<th>Name</th>
							<th>Email Address</th>
							<th>Address</th>
							<th>Contact No</th>
							<th>Position</th>
							<th>Pupose Of Stay</th>
							<th>Adults</th>
							<th>Children</th>
							<th>Room Type</th>
							<th>Room Price</th>
							<th>Booking Check In Date</th>
							<th>Nights</th>
							<th>Extended Nights</th>
							<th>Booking Check Out Date</th>
							<th>Reference Code</th>
							<th>Advance Payment Status</th>
							<th>Reservation Total</th>
							<th>Discount</th>
							<th>Discount Total</th>
							<th>Status</th>
							<th>Early Check In</th>
							<th>Extra Towel</th>
							<th>Extra Bed</th>
							<th>Lost Key</th>
							<th>Late Checkout</th>
							<th>Total Amount</th>
							<th>Payment Method</th>
							<th>Payment Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM `pendingcheckout_report` WHERE `status` = 'Pending Check Out'";
                            $result = $conn->query($sql);
							 $i=1;
							while($row = $result->fetch_assoc()) { 
							//$sql2 = "SELECT * FROM `room` WHERE room_id='".$row['room_id']."'";
                            //$result2=$conn->query($sql2);
							//$row2=$result2->fetch_assoc();
						?>
						<tr>
						    <td><?php echo $i;?></td>
							<td><?php echo $row['fullname']?></td>
							<td><?php echo $row['email_address']?></td>
							<td><?php echo $row['address']?></td>
							<td><?php echo $row['contact_no']?></td>
							<td><?php echo $row['position']?></td>
							<td><?php echo $row['purposeofstay']?></td>
							<td><?php echo $row['adults']?></td>
							<td><?php echo $row['children']?></td>
							<td>Room No. <?php echo "<label style = 'color:#6b6e71;'>".($row['room_no'])."</label>"." - "."<label>".($row['room_type'])."</label>"?></td>
							<td>Php <?php echo $row['room_price']?>.00</td>
							<td><?php echo "<label style = 'color:#0d9a00;'>".date("M d, Y", strtotime($row['checkin']))."</label>"." - "."<label style='color:#4a4c50;'>(".date("h:i A", strtotime($row['checkin_time'])).")</label>"?></td>
							<td><?php echo $row['days']?></td>
							<td><?php echo $row['extend_days']?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($row['checkout']))."</label>"." - "."<label style='color:#4a4c50;'>(".date("h:i A", strtotime($row['checkout_time'])).")</label>"?></td>
							<td><?php echo $row['generate_code']?></td>
							<td><?php if($row['deposit'] == "Advance 50% Payment"){ echo "<label style = 'color:#dc9109;'>".($row['deposit'])."</label>";}else{echo "<label style = 'color:#0d9a00;'>".($row['deposit'])."</label>";}?></td>
							<td><?php echo "PHP ".$row['deposit_total'].".00"?></td>
							<td><?php echo $row['discount']?>%</td>
							<td><?php echo "PHP ".$row['discount_total'].".00"?></td>
							<td><?php echo "<label style = 'color:#dc9109;'>".($row['status'])."</label>"?></td>
							<td><?php if($row['early_checkin'] == "0"){ echo "No";}else{echo "Php ". $row['early_checkin'].".00";}?></td>
							<td><?php if($row['extra_towel'] == "0"){ echo "None";}else{echo $row['extra_towel'];}?></td>
							<td><?php if($row['extra_bed'] == "0"){ echo "None";}else{echo $row['extra_bed'];}?></td>
							<td><?php if($row['lost_key'] == "0"){ echo "None";}else{echo $row['lost_key'];}?></td>
							<td><?php if($row['late_checkout'] == "0"){ echo "No";}else{echo "Php ". $row['late_checkout'].".00";}?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>"."PHP ".$row['total_amount'].".00"."</label>"?></td>
							<td><center><?php echo $row['payment_method']?></center></td>
							<td><center><?php echo $row['payment_status']?></center></td>
							<td><center><a class = "btn btn-warning" href = "confirm_checkout.php?pendingcheckout_id=<?php echo $row['pendingcheckout_id']?>" onclick = "confirmationCheckin(); return false;"><i class = "glyphicon glyphicon-check"></i> Update Payment Status</a></center></td>
						</tr>
						<?php $i++;?>
						<?php
							}
						?>
					</tbody>
				</table>
                           
                                </div>
                            </div>
                        </div>
               
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('footer.php');?>


<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>