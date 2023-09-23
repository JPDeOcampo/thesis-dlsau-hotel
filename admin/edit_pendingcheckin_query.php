<?php
	require_once 'connect.php';
	    date_default_timezone_set('Asia/Manila');
	    if(ISSET($_POST['change_pendingcheckin'])){
		//$contact_no = $_POST['contact_no'];
		$adults = $_POST['adults'];
		$children = $_POST['children'];

		$conn->query("UPDATE `transaction` SET `adults` = '$adults', `children` = '$children' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
		//header("location:pendingcheckin.php");
		echo "<script>
	alert('Successfully Change a Guest Details!');history.go(-1);
	
    </script>";
		
		}
?>
