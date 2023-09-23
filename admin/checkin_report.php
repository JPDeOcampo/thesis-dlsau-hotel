<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');

 date_default_timezone_set('Asia/Manila');
 $current_date = date('Y-m-d');?>

<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Current Check In Report</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Current Check In Report</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <form class="form-horizontal" method="POST" name="bookingreportform" enctype="multipart/form-data">

                  <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">

                  <div class="form-group">
                      <div class="row">
                         <label class="col-sm-3 control-label">From Date  :</label>
                            <div>
                                <input type="date" name="fromDate" class="form-control" placeholder="fromDate" onkeydown="return false" required="">
                            </div>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="row">
                         <label class="col-sm-3 control-label">To Date  :</label>
                            <div>
                                <input type="date" name="toDate" class="form-control" placeholder="toDate" onkeydown="return false" required="">
                            </div>
                      </div>
                  </div>

                  
                  <div class="form-group">
                      <div class="row">
                         
                            <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              &nbsp;<input type="submit" name="Done" value="Done">  
                            </div>
                      </div>
                  </div>

                  
                </form>
                <!-- /# row -->
              <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Current Check In Report</h4>
                                
                                <div class="table-responsive m-t-40">
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
							
							 
						 </tr>
					  </thead>
                     <tbody>
                                    <?php 
                                    include 'connect.php';
                                    if(isset($_POST['Done']))
                                    {
                                      $checkin = $_POST['fromDate'];
                                      $checkout = $_POST['toDate'];
                                      $sql = "SELECT * FROM `transaction` WHERE `status` = 'Check In' AND checkin BETWEEN '".$_POST['fromDate']."' AND '".$_POST['toDate']."' ";
                               
                                     $result = $conn->query($sql);
                                     $i=1;
                                     while($row = $result->fetch_assoc()) { 

                                    $sql2 = "SELECT * FROM `guest` WHERE guest_id='".$row['guest_id']."'";
                                    $result2=$conn->query($sql2);
                                    $row2=$result2->fetch_assoc();
                                    $sql3 = "SELECT * FROM `room` WHERE room_id='".$row['room_id']."'";
                                    $result3=$conn->query($sql3);
                                    $row3=$result3->fetch_assoc();
									
									$room_type = $row3['room_type'];
						            $sql4 = "SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row3['room_type']."'";
                                    $result4=$conn->query($sql4);						  
						            $row4 = $result4->fetch_assoc();
									
                                
                                      ?>
                                            <tr>
                                              <td><?php echo $i;?></td>
                                              <td><?php echo $row2['firstname']." ".$row2['lastname']?></td>
							                  <td><?php echo $row2['email_address']?></td>
							                  <td><?php echo $row2['address']?></td>
							                  <td><?php echo $row2['contact_no']?></td>
							                  <td><?php echo $row2['position']?></td>
							                  <td><?php echo $row2['purposeofstay']?></td>
											  <td><?php echo $row['adults']?></td>
							                  <td><?php echo $row['children']?></td>
											  <td>Room No. <?php echo "<label style = 'color:#6b6e71;'>".($row['room_no'])."</label>"." - "."<label>".($row4['room_type'])."</label>"?></td>
							                  <td>Php <?php echo $row3['price']?></td>
											  <td><?php echo "<label style = 'color:#0d9a00;'>".date("M d, Y", strtotime($row['checkin']))."</label>"." - "."<label style='color:#4a4c50;'>(".date("h:i A", strtotime($row['checkin_time'])).")</label>"?></td>
							                  <td><?php echo $row['days']?></td>
							                  <td><?php echo $row['extend_days']?></td>
							                  <td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($row['checkin']."+".$row['days']."DAYS"))."</label>"?></td>
							                  <!--<td><?phpif($row['deposit'] == "50"){ echo "<label style = 'color:#dc9109;'>".'50% Payment'."</label>";}else{echo "<label style = 'color:#2c8200;'>".'Full Payment'."</label>";}?></td>-->
							                  <td><?php echo "<label style = 'color:#2c8200;'>".($row['status'])."</label>"?></td>
							                  <td><?php if($row['early_checkin'] == "0" || $row['early_checkin'] == ""){ echo "No";}else{echo "Php ". $row['early_checkin'].".00";}?></td>
							                  <td><?php if($row['extra_towel'] == "0" || $row['extra_towel'] == ""){ echo "None";}else{echo $row['extra_towel'];}?></td>
							                  <td><?php if($row['extra_bed'] == "0" || $row['extra_bed'] == ""){ echo "None";}else{echo $row['extra_bed'];}?></td>
							                  <td><?php if($row['lost_key'] == "0" || $row['lost_key'] == ""){ echo "None";}else{echo $row['lost_key'];}?></td>
							                  <td><?php echo "Php ".$row['previous_balance'].".00"?></td>
							                  <td><?php echo "Php ".$row['bill'].".00"?></td>
                                              
                                            </tr>
                                          <?php $i++; } ?>
                                        </tbody><?php  } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
        
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('footer.php');?>

<link rel="stylesheet" href="popup_style.css">
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