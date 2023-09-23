<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `contact` WHERE contact_id='".$_GET["contact_id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
alert("Delete Successfully");
window.location = "index.php";
</script>

