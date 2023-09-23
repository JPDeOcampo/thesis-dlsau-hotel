<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `room_type` WHERE roomtype_id='".$_GET["roomtype_id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "view_roomtype.php";
</script>

