<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `gallery` WHERE photo_id='".$_GET["photo_id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "view_maingallery.php";
</script>

