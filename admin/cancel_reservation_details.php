<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<link rel="stylesheet" href="popup_style.css">
<?php include('sidebar.php');

if(isset($_GET['id']))
{ ?>
<div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Sure
    </h3>
    <p>Are You Sure To Delete This Record?</p>
    <p>
      <a href="del_cancelreservation.php?id=<?php echo $_GET['id']?>" class="button button--success" data-for="js_success-popup">Yes</a>
      <a href="cancel_reservation_details.php" class="button button--error" data-for="js_success-popup">No</a>
    </p>
  </div>
</div>
<?php } ?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Cancelled Reservation Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Cancelled Reservation Details</li>
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
                           <h4 class="card-title">Cancelled Reservation Details</h4>
                      <?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `pendingcheckout_report` WHERE `status` = 'Pending Check Out'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
			?>
                 <div class="table-responsive m-t-40">
				
				<br />
				<br />
                   <!--<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="3990px">-->
				   <table id="example23" class="newTable" cellspacing="0">
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
							<th>Status</th>
							<th>Cancellation Fee</th>
							<th>Payment Status</th>
							<!--<th>Action</th>-->
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM `cancel_reservation`";
                            $result = $conn->query($sql);
							 $i=1;
							while($row = $result->fetch_assoc()) { 
							//$sql2 = "SELECT * FROM `room` WHERE room_id='".$row['room_id']."'";
                            //$result2=$conn->query($sql2);
							//$row2=$result2->fetch_assoc();
						?>
						<tr>
						    <td><?php echo $i;?></td>
							<td><?php echo $row['firstname'].' '.$row['lastname']?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $row['address']?></td>
							<td><?php echo $row['contact']?></td>
							<td><?php echo $row['position']?></td>
							<td><?php echo $row['purposeofstay']?></td>
							<td><?php echo $row['adults']?></td>
							<td><?php echo $row['children']?></td>
							<td><?php echo $row['room_type']?></td>
							<td>Php <?php echo $row['room_price']?>.00</td>
							<td><?php echo "<label style = 'color:#0d9a00;'>".date("M d, Y", strtotime($row['checkin']))."</label>"?></td>
							<td><?php echo $row['days']?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($row['checkout']))."</label>"?></td>
							<td><?php echo "<label style = 'color:#dc9109;'>".($row['status'])."</label>"?></td>
							<td><center><?php echo $row['cancellation_fee']?></center></td>
							<td><center><?php echo $row['payment_method']?></center></td>
							<!--<td><center><a class = "btn btn-danger" href = "cancel_reservation_details.php?id=<?phpecho $row['id']?>"><i class = "glyphicon glyphicon-check"></i> Delete Record</a></center></td>-->
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