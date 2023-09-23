<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `room` WHERE room_id='".$_GET["room_id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "view_room.php";
</script>

