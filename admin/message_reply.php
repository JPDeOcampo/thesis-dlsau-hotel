<?php require_once('check_login.php');?>
<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
 <?php include('connect.php');?>


<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Message From Main Page Contact Form</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Message From Main Page Contact Form</li>
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
					    $sql = "SELECT * FROM `contact` WHERE `contact_id` = '$_REQUEST[contact_id]'";
                        $result = $conn->query($sql);
						
						
						while($row = $result->fetch_assoc()) { 
						
				?>
                                    <form class="form-valide"  method="POST" action = "message_query.php?contact_id=<?php echo $row['contact_id']?>" enctype="multipart/form-data">
                                        <div class="form-group row">
                                          <label class="col-lg-4 col-form-label" for="val-username">Full Name: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" name="contact_fullname" id="val-username" value="<?php echo $row['contact_firstname']." ".$row['contact_lastname']?>" >
                                            </div>
                                        </div>
										  <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Email Address: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input readonly class="form-control" id="val-username" name="contact_email" value="<?php echo $row['contact_email']?>">
                                            </div>
                                        </div>
										  <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Position: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" value="<?php echo $row['contact_position']?>" disabled = "disabled">
                                            </div>
                                        </div>
										  <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Guest Subject: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" value="<?php echo $row['contact_subject']?>" disabled = "disabled">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Guest Message: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <textarea  id="val-username" disabled = "disabled" rows="4" cols="50"><?php echo $row['contact_message']?></textarea>
                                            </div>
                                        </div>
										
                                         <div class="form-group row">
										 <label class="col-lg-4 col-form-label" for="val-username">Subject: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" name="contact_subject" class="form-control" id="val-username" value="De La Salle Hotel School">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                       <label class="col-lg-4 col-form-label" for="val-username">Reply Message: <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <textarea  id="val-username" name="contact_message" value="" rows="4" cols="50">This is the De La Salle Hotel School Admin, Thank you for getting in touch with us! </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" name= "reply_message">Reply</button>
												<button type="" class="btn btn-primary" name="cancel"><a href="index.php">Cancel</a></button>
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