<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `cancel_reservation` WHERE id='".$_GET["id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "cancel_reservation_details.php";
</script>

