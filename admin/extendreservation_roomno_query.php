<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {"Poppins", Arial, sans-serif}

/* Modal Content */
.modal-contentdate {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 20%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
</html>
<?php
	require_once 'connect.php';
	    if(ISSET($_POST['change_room_no'])){
		
		$room_no = $_POST['room_no'];

		
		$transid = $_GET['transaction_id'];
		$roomid = $_GET['room_id'];
		
		
		$query_transid = $conn->query("SELECT * FROM `transaction` WHERE `transaction_id` = '$transid'") or die(mysqli_error($conn));
		$row_transid = $query_transid->fetch_array();
		
	
	    $query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `room_id` = '$roomid' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		

	
	    if($row >= 2){
			echo "<script>alert('Room not available');history.go(-1);</script>";
		}else{
		$conn->query("UPDATE `transaction` SET `room_no` = '$room_no' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error($conn));
		//header("location:checkin.php");
				echo "<script>
	alert('Successfully Room no!');history.go(-1);
    </script>";
		}
		}
?>
