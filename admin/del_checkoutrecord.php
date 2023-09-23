<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `checkout_report` WHERE checkout_id='".$_GET["checkout_id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "checkout.php";
</script>

