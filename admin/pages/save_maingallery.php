
<?php
date_default_timezone_set('Asia/Manila');
$current_date = date('Y-m-d');
include('../connect.php');
if(isset($_POST["save_maingallery"]))
{
extract($_POST);
    
$photo_description = $_POST['photo_description'];
		
		 $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
		 ""
         );
    $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$photo1 = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$photo2 = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
	$photo3 = addslashes(file_get_contents($_FILES['photo3']['tmp_name']));
	$photo4 = addslashes(file_get_contents($_FILES['photo4']['tmp_name']));

	
	$photo_name = addslashes($_FILES['photo']['name']);
		$photo_namee = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
		
		$photo_name1 = addslashes($_FILES['photo1']['name']);
		$photo_namee1 = pathinfo($_FILES['photo1']['name'], PATHINFO_EXTENSION);
		
	    $photo_name2 = addslashes($_FILES['photo2']['name']);
		$photo_namee2 = pathinfo($_FILES['photo2']['name'], PATHINFO_EXTENSION);
		
	    $photo_name3 = addslashes($_FILES['photo3']['name']);
		$photo_namee3 = pathinfo($_FILES['photo3']['name'], PATHINFO_EXTENSION);
		
	    $photo_name4 = addslashes($_FILES['photo4']['name']);
		$photo_namee4 = pathinfo($_FILES['photo4']['name'], PATHINFO_EXTENSION);
		
	
    if (! in_array($photo_namee, $allowed_image_extension)) {
        echo "<script type='text/javascript'>alert('Upload valid images. Only PNG and JPEG are allowed in Main Gallery Preview.');history.go(-1);</script>";
    }elseif (! in_array($photo_namee1, $allowed_image_extension)) {
        echo "<script type='text/javascript'>alert('Upload valid images. Only PNG and JPEG are allowed in Main Gallery Preview 1.');history.go(-1);</script>";
	}elseif (! in_array($photo_namee2, $allowed_image_extension)) {
       echo "<script type='text/javascript'>alert('Upload valid images. Only PNG and JPEG are allowed in Main Gallery Preview 2.');history.go(-1);</script>";
	}elseif (! in_array($photo_namee3, $allowed_image_extension)) {
       echo "<script type='text/javascript'>alert('Upload valid images. Only PNG and JPEG are allowed in Main Gallery Preview 3.');history.go(-1);</script>";
    }elseif (! in_array($photo_namee4, $allowed_image_extension)) {
       echo "<script type='text/javascript'>alert('Upload valid images. Only PNG and JPEG are allowed in Main Gallery Preview 4.');history.go(-1);</script>";
    }else{
	$photo_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES['photo']['tmp_name'],"../../photo/" . $_FILES['photo']['name']);
	move_uploaded_file($_FILES['photo1']['tmp_name'],"../../photo/" . $_FILES['photo1']['name']);
	move_uploaded_file($_FILES['photo2']['tmp_name'],"../../photo/" . $_FILES['photo2']['name']);
	move_uploaded_file($_FILES['photo3']['tmp_name'],"../../photo/" . $_FILES['photo3']['name']);
	move_uploaded_file($_FILES['photo4']['tmp_name'],"../../photo/" . $_FILES['photo4']['name']);
	
   $sql = $conn->query("INSERT INTO `gallery`(`photo_description`,`photo`,`photo1`,`photo2`,`photo3`,`photo4`) VALUES ('$photo_description', '$photo_name', '$photo_name1', '$photo_name2', '$photo_name3', '$photo_name4')")or die(mysqli_error());
   echo "<script type='text/javascript'>alert('Succesfully Add Photo In Gallery!');</script>";
   echo '<script type="text/javascript">window.location="../view_maingallery.php";</script>';
}  
}
?>