<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<link rel="stylesheet" href="popup_style.css">
<?php include('sidebar.php');

if(isset($_GET['photo_id']))
{ ?>
<div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Sure
    </h3>
    <p>Are You Sure To Delete This Record?</p>
    <p>
      <a href="del_maingallery.php?photo_id=<?php echo $_GET['photo_id']?>" class="button button--success" data-for="js_success-popup">Yes</a>
      <a href="view_maingallery.php" class="button button--error" data-for="js_success-popup">No</a>
    </p>
  </div>
</div>
<?php } ?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Gallery Details</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Gallery Details</li>
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
                                <h4 class="card-title">View Photo Gallery Details</h4>
                               
                                <div class="table-responsive m-t-40">
                                    <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
											    <th>No.</th>
                                              	<th>Photo Description For Gallery</th>
							                    <th>Main Gallery</th>
												<th>Gallery 1</th>
												<th>Gallery 2</th>
												<th>Gallery 3</th>
												<th>Gallery 4</th>
							                    <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                  <?php
						 include 'connect.php';
                                    $sql = "SELECT * FROM `gallery`";
                                     $result = $conn->query($sql);
						 $i=1;
						 while($row = $result->fetch_assoc()) { 
						 
						  
					?>	
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $row['photo_description']?></td>
							<td><center><img src = "../photo/<?php echo $row['photo']?>" height = "50" width = "50"/></center></td>
							<td><center><img src = "../photo/<?php echo $row['photo1']?>" height = "50" width = "50"/></center></td>
							<td><center><img src = "../photo/<?php echo $row['photo2']?>" height = "50" width = "50"/></center></td>
							<td><center><img src = "../photo/<?php echo $row['photo3']?>" height = "50" width = "50"/></center></td>
							<td><center><img src = "../photo/<?php echo $row['photo4']?>" height = "50" width = "50"/></center></td>
							<td><center><a class = "btn btn-warning" href = "edit_maingallery.php?photo_id=<?php echo $row['photo_id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> 
							<a class = "btn btn-danger" href = "view_maingallery.php?photo_id=<?php echo $row['photo_id']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center>
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