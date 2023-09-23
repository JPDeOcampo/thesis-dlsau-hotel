<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');

 date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');?>

<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Guest Report</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Guest Report</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <form class="form-horizontal" method="POST" name="bookingreportform" enctype="multipart/form-data">

                  <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $current_date;?>">

                  <div class="form-group">
                      <div class="row">
                         <label class="col-sm-3 control-label">Position  :</label>
                            <div>
                               
								<label>Search Position Report:</label>
                                <select name="position" class="form-control" placeholder="Position">
                               <option value="Guest">Guest</option>
                               <option value="Alumni">Alumni</option>
							    <option value="Employee">Employee</option>
                               <option value="Student">Student</option>
                                 </select>
                            </div>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <div class="row">
                         
                            <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              &nbsp;<input type="submit" name="search" value="Search">  
                            </div>
                      </div>
                  </div>

                  
                </form>
                <!-- /# row -->
              <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Guest Report</h4>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="2990px">               
											  
					 <thead>
						<tr>
						     <th>No.</th>
							<th>Name</th>
							<th>Email Address</th>
							<th>Address</th>
							<th>Contact No</th>
							<th>Position</th>
							<th>Pupose Of Stay</th>
							<th>Room Type</th>
							<th>Room Price</th>
							<th>Guest Adults</th>
							<th>Guest Children</th>
							<th>Reserved Date Check In</th>
							<th>Reserved Date Check Out</th>
							<th>Reference Code</th>
							<th>Status</th>
							<th>Bill</th>
							<th>Payment Method</th>
							<th>Payment Status</th>
						</tr>
					</thead>
                                        <tbody>
                                    <?php 
                                    include 'connect.php';
                                    if(isset($_POST['search']))
                                    {
                                      $position = $_POST['position'];
                                      $sql = "SELECT * FROM `guest` NATURAL JOIN `transaction` WHERE `position` = '$position'";
                                      $result = $conn->query($sql);
                                      $i=1;
                                      while($row = $result->fetch_assoc()) { 
                                      $sql2 = "SELECT * FROM `room` WHERE room_id='".$row['room_id']."'";
                                      $result2=$conn->query($sql2);
							          $row2=$result2->fetch_assoc();
                                      ?>
                                            <tr>
                                              <td><?php echo $i;?></td>
                                              <td><?php echo $row['firstname']." ".$row['lastname']?></td>
							                  <td><?php echo $row['email_address']?></td>
							                  <td><?php echo $row['address']?></td>
							                  <td><?php echo $row['contact_no']?></td>
							                  <td><?php echo $row['position']?></td>
							                  <td><?php echo $row['purposeofstay']?></td>
							                  <td><?php echo $row2['room_type']?></td>
											  <td><?php echo $row2['price']?></td>
											  <td><?php echo $row['adults']?></td>
							                  <td><?php echo $row['children']?></td>
											  <td><?php echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($row['checkin']))."</label>"." @ "."<label>".date("h:i a", strtotime($row['checkin_time']))."</label>"?></td>
											  <td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($row['checkin']."+".$row['days']."DAYS"))."</label>"." @ "."<label>".date("h:i A", strtotime($row['checkout_time']))."</label>"?></td>
											  <td><?php echo $row['generate_code']?></td>
											  <td><?php echo $row['status']?></td>
											  <td><?php echo $row['bill']?></td>
                                              <td><center><?php echo $row['payment_method']?></center></td>
											  <td><center><?php echo $row['payment_status']?></center></td>
                                            </tr>
                                          <?php $i++; } ?>
                                        </tbody> <?php  } ?>
                                    </table>
                                </div>
                            </div>
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