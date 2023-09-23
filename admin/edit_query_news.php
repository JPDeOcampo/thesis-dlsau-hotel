<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php
 include('connect.php');
 date_default_timezone_set('Asia/Manila');
 $current_date = date('Y-m-d');

if(isset($_POST["edit_news"]))
{ 
    extract($_POST);
	  $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
		 ""
         );
        $news_description = $_POST['news_description'];
		
		
		
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		 $photo_namee = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
	
	 if (! in_array($photo_namee, $allowed_image_extension)) {
        echo "<script type='text/javascript'>alert('Upload valid images. Only PNG and JPEG are allowed in Photo For News/Update.');history.go(-1);</script>";
    }else{
		
		$photo_name = addslashes($_FILES['photo']['name']);
	
	
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		
      $sql="UPDATE `news` SET `news_title` = '$news_title', `news_date` = '$current_date', `news_description` = '$news_description'";
      if(!empty($photo_name)) $sql.=", `photo` = '$photo_name' ";
      $sql.="WHERE `news_id` = '".$_GET['news_id']."'";
}	  
      if ($conn->query($sql) === TRUE) {
      $_SESSION['success']=' Record Successfully Updated';
?>
       <script type="text/javascript">
       window.location="view_news.php";
       </script>
   <?php
        } 
}
?>