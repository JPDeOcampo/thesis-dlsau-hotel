<?php include('head.php');?>

<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php
 include('connect.php');
 date_default_timezone_set('Asia/Manila');
 $current_date = date('Y-m-d');

if(isset($_POST["edit_roomtype"]))
{
    extract($_POST);
      $room_type = $_POST['room_type'];			
      $sq1="UPDATE `room_type` SET `room_type` = '$room_type' WHERE `roomtype_id` = '".$_GET['roomtype_id']."'";
	  
      if ($conn->query($sq1) === TRUE) {
      $_SESSION['success']=' Record Successfully Updated';
?>
       <script type="text/javascript">
       window.location="view_roomtype.php";
       </script>
   <?php
        } else {
        $_SESSION['error']='Something Went Wrong';
    ?>
        <script type="text/javascript">
        window.location="view_roomtype.php";
        </script>
<?php
}
}
?>