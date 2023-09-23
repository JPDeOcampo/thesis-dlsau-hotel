
<?php
date_default_timezone_set('Asia/Manila');
$current_date = date('Y-m-d');
include('../connect.php');

extract($_POST);

      $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
		 ""
         );
    $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));

	$photo_name = addslashes($_FILES['photo']['name']);
    $photo_namee = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
	
	 if (! in_array($photo_namee, $allowed_image_extension)) {
        echo "<script type='text/javascript'>alert('Upload valid images. Only PNG and JPEG are allowed in Photo For News/Update.');history.go(-1);</script>";
    }else{
	$photo_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES['photo']['tmp_name'],"../../photo/" . $_FILES['photo']['name']);
	
   $sql = $conn->query("INSERT INTO `news`(`news_title`,`news_date`,`photo`,`news_description`) VALUES ('$news_title', '$news_date', '$photo_name', '$news_description')")or die(mysqli_error());
   echo "<script type='text/javascript'>alert('Succesfully Add News/Update!');</script>";
   echo '<script type="text/javascript">window.location="../view_news.php";</script>';
}
?>