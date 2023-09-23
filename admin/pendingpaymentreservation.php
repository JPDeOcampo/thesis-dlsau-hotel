<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<link rel="stylesheet" href="popup_style.css">
<?php include('sidebar.php');

if(isset($_GET['transaction_id']))
{ ?>
<div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Sure
    </h1>
    <p>Are You Sure To Delete This Record?</p>
    <p>
      <a href="declinereservation.php?transaction_id=<?php echo $_GET['transaction_id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
      <a href="view_customer.php" class="button button--error" data-for="js_success-popup">No</a>
    </p>
  </div>
</div>
<?php } ?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Reservation Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Reservation Details</li>
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
                                <h4 class="card-title">Pending Payment Reservation Details</h4>
                                <?php
			    $q_pr = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending Payment Reservation'") or die(mysqli_error());
				$f_pr = $q_pr->fetch_array();
				
			?>
                 <div class="table-responsive m-t-40">
				 <a class = "btn btn-success disabled"><span class = "badge"><?php echo $f_pr['total']?></span> Pending Payment Reservation</a>
			
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
							<th>Booking Check Out Date</th>
							<th>Reference</th>
							<th>Status</th>
							<th>Reservation Total</th>
							<th>Discount</th>
							<th>Total Balance</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM `guest` NATURAL JOIN `transaction` WHERE `status` = 'Pending Payment Reservation'";
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
						
							$date1=date_create($row['checkin']);
                            $date2=date_create($row['checkout']);
                            $diff=date_diff($date1,$date2);
						    $days=$diff->format("%a");
							
							//$bill_int = $row['discount_total'];
						    //$discount_bill = (int)$bill_int;	
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
							<td><?php if($row['children'] == "0" || $row['children'] == ""){ echo "0";}else{echo $row['children'];}?></td>
							<td><?php echo $row3['room_type']?></td>
							<td>Php <?php echo $row2['price']?></td>
							<td><strong><?php if($row['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))){echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($row['checkin']))."</label>";}else{echo "<label style = 'color:#0d9a00;'>".date("M d, Y", strtotime($row['checkin']))."</label>";}?></strong></td>
							<td><?php echo $days?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($row['checkout']))."</label>"?></td>
							<td><?php echo $row['generate_code']?></td>
							<td><?php echo "<label style = 'color:#dc9109;'>".($row['status'])."</label>"?></td>
							<td>PHP <?php echo $row['deposit_total']?>.00</td>
							<td><?php echo $row['discount']?>%</td>
							<td>PHP <?php echo $row['discount_total']?>.00</td>
							<td><center><a class = "btn btn-success" href = "confirm_paymentreservation.php?transaction_id=<?php echo $row['transaction_id']?>"><i class = "glyphicon glyphicon-check"></i> Confirm</a> <a class = "btn btn-warning" onclick = "confirmationDelete(); return false;" href = "cancel_pendingpaymentreservation.php?transaction_id=<?php echo $row['transaction_id']?>&guest_id=<?php echo $row['guest_id']?>"><i class = "glyphicon glyphicon-trash"></i> Cancel</a> </td>
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