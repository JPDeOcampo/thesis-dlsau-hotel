<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `transaction` WHERE transaction_id='".$_GET["transaction_id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "pendingreservation.php";
</script>

