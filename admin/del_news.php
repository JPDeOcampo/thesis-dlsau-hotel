<?php require_once('check_login.php');?>
<?php
include 'connect.php';


$sql = "DELETE FROM `news` WHERE news_id='".$_GET["news_id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "view_news.php";
</script>

