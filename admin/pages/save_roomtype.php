
<?php
date_default_timezone_set('Asia/Manila');
$current_date = date('Y-m-d');
include('../connect.php');

extract($_POST);
   $sql1 = $conn->query("SELECT * FROM `room_type` WHERE `room_type` = '$room_type'") or die(mysqli_error());
   $row = $sql1->num_rows;
 
  if($row >=1){
    echo "<script type='text/javascript'>alert('Room Type Is Already Exist');history.go(-1);</script>";
  
  }else{
 
   $sql1 = $conn->query("INSERT INTO `room_type`(`room_type`) VALUES ('$room_type')")or die(mysqli_error());
   echo "<script type='text/javascript'>alert('Succesfully Add Room Type');</script>";
   echo "<script type='text/javascript'>window.location='../view_roomtype.php';</script>";
}
  ?>