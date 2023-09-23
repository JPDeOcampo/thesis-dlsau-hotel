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
                    <h3 class="text-primary">Check In Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Check In Details</li>
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
							<h4 class="card-title">Check In Details</h4>
              <?php
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
                                <div class="table-responsive m-t-40">
				<a class = "btn btn-info disabled"><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
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
							<th>Check In</th>
							<th>Nights</th>
							<th>Extended Nights</th>
							<th>Check Out</th>
							<th>Status</th>
							<th>Early Check In</th>
							<th>Extra Towel</th>
							<th>Extra Bed</th>
							<th>Lost Key</th>
							<th>Previous Balance</th>
							<th>Total Amount</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM `guest` NATURAL JOIN `transaction` WHERE `status` = 'Check In'";
                            $result = $conn->query($sql);
							$i=1;
							
							
							
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
						<tr>
						    <td><?php echo $i;?></td>
							<td><?php echo $row['firstname']." ".$row['lastname']?></td>
							<td><?php echo $row['email_address']?></td>
							<td><?php echo $row['address']?></td>
							<td><?php echo $row['contact_no']?></td>
							<td><?php echo $row['position']?></td>
							<td><?php echo $row['purposeofstay']?></td>
							<td><?php echo $row['adults']?></td>
							<td><?php echo $row['children']?></td>
							<td>Room No. <?php echo "<label style = 'color:#6b6e71;'>".($row['room_no'])."</label>"." - "."<label>".($row3['room_type'])."</label>"?></td>
							<td>PHP <?php echo $row2['price']?></td>
							<td><?php echo "<label style = 'color:#0d9a00;'>".date("M d, Y", strtotime($row['checkin']))."</label>"." - "."<label style='color:#4a4c50;'>(".date("h:i A", strtotime($row['checkin_time'])).")</label>"?></td>
							<td><?php echo $row['days']?></td>
							<td><?php echo $row['extend_days']?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($row['checkin']."+".$row['days']."DAYS"))."</label>"?></td>
							<!--<td><?phpif($row['deposit'] == "50"){ echo "<label style = 'color:#dc9109;'>".'50% Payment'."</label>";}else{echo "<label style = 'color:#2c8200;'>".'Full Payment'."</label>";}?></td>-->
							<td><?php echo "<label style = 'color:#2c8200;'>".($row['status'])."</label>"?></td>
							<td><?php if($row['early_checkin'] == "0" || $row['early_checkin'] == ""){ echo "No";}else{echo "PHP ". $row['early_checkin'].".00";}?></td>
							<td><?php if($row['extra_towel'] == "0" || $row['extra_towel'] == ""){ echo "None";}else{echo $row['extra_towel'];}?></td>
							<td><?php if($row['extra_bed'] == "0" || $row['extra_bed'] == ""){ echo "None";}else{echo $row['extra_bed'];}?></td>
							<td><?php if($row['lost_key'] == "0" || $row['lost_key'] == ""){ echo "None";}else{echo $row['lost_key'];}?></td>
							<td><?php echo "PHP ".$row['previous_balance'].".00"?></td>
							<td><?php echo "PHP ".$total_bill.".00"?></td>
							<td><center><a class = "btn btn-success" href = "extend_reservation.php?transaction_id=<?php echo $row['transaction_id']?>?room_id=<?php echo $row2['room_id']?>"><i class = "glyphicon glyphicon-check"></i> Extend/Change</a> <a class = "btn btn-danger" href = "confirm_pendingcheckout.php?transaction_id=<?php echo $row['transaction_id']?>&guest_id=<?php echo $row['guest_id']?>" onclick = "confirmationCheckin(); return false;"><i class = "glyphicon glyphicon-check"></i> Check Out/Invoice</a> <a class = "btn btn-danger" href = "confirm_pendingcheckout_receipt.php?transaction_id=<?php echo $row['transaction_id']?>&guest_id=<?php echo $row['guest_id']?>" onclick = "confirmationCheckin(); return false;"><i class = "glyphicon glyphicon-check"></i> Check Out/Receipt</a></td>
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
