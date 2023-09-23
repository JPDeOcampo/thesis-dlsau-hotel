<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<link rel="stylesheet" href="popup_style.css">
<?php include('sidebar.php');

if(isset($_GET['room_id']))
{ ?>
<div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Sure
    </h3>
    <p>Are You Sure To Delete This Record?</p>
    <p>
      <a href="del_room.php?room_id=<?php echo $_GET['room_id']?>" class="button button--success" data-for="js_success-popup">Yes</a>
      <a href="view_room.php" class="button button--error" data-for="js_success-popup">No</a>
    </p>
  </div>
</div>
<?php } ?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">View Room Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Room Details</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Room Details</h4>
                               
                                <div class="table-responsive m-t-40">
                                    <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
											    <th>No.</th>
                                              	<th>Room/Venue Type</th>
							                    <th>Bed</th>
												<th>Max</th>
												<th>Price</th>
							                    <th>Photo</th>
												<th>Photo1</th>
												<th>Photo2</th>
												<th>Photo3</th>
												<th>Photo4</th>
							                    <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                  <?php
						 include 'connect.php';
                       						
						   //$sql = "SELECT * FROM `room` WHERE `room_type`";
                           //$result = $conn->query($sql);
						   
						   $sql2 = "SELECT * FROM `room`";
                           $result2 = $conn->query($sql2);

						   //$room_type3 = $row3['room_type'];
						   //echo $room_type3;
						  // echo $row3['room_type'];
							
						 $i=1;
						 while($row2 = $result2->fetch_assoc()) { 
						 //$row = $result->fetch_assoc();
						 $room_type = $row2['room_type'];
						 $sql3 = "SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row2['room_type']."'";
                         $result3=$conn->query($sql3);
						   						  
						$row3 = $result3->fetch_assoc();

					?>	
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $row3['room_type']?></td>
							<td><?php echo $row2['bed']?></td>
							<td><?php echo $row2['max']?></td>
							<td><?php echo $row2['price']?></td>
							<td><center><img src = "../photo/<?php echo $row2['photo']?>" height = "50" width = "50"/></center></td>
							<td><center><img src = "../photo/<?php echo $row2['photo1']?>" height = "50" width = "50"/></center></td>
							<td><center><img src = "../photo/<?php echo $row2['photo2']?>" height = "50" width = "50"/></center></td>
							<td><center><img src = "../photo/<?php echo $row2['photo3']?>" height = "50" width = "50"/></center></td>
							<td><center><img src = "../photo/<?php echo $row2['photo4']?>" height = "50" width = "50"/></center></td>
							<td><center><a class = "btn btn-warning" href = "edit_room.php?room_id=<?php echo $row2['room_id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> 
							<a class = "btn btn-danger" href = "view_room.php?room_id=<?php echo $row2['room_id']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center>
							</td>
						
						</tr>
						<?php $i++;}?>
						
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
    </h3>
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
