<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `transaction` WHERE transaction_id='".$_GET["transaction_id"]."'";
$res = $conn->query($sql) ;
$sql1 = "DELETE FROM `guest` WHERE guest_id='".$_GET["guest_id"]."'";
$res1 = $conn->query($sql1) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "pendingcheckin.php";
</script>

