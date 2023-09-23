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
	date_default_timezone_set('Asia/Manila');
	if(ISSET($_POST['confirm_checkin'])){
		$room_no = $_POST['room_no'];
		$days = $_POST['days'];
		
		$early_checkin = $_POST['early_checkin'];
		
		$total_balance = $_POST['total_balance'];
		
		
		$extra_bed = $_POST['extra_bed'];
		
		//$position = $_POST['position'];
		//$room_price = $_POST['room_price'];
		
		//$contact_no = $_POST['contact_no'];
		//$adults = $_POST['adults'];
		//$children = $_POST['children'];
		//$room_type = $_POST['room_type'];
		
		$checkin = $_POST['checkin'];
		//$bookcheckin_time = $_POST['bookcheckin_time'];
		$checkin_time = date("H:i:s");
		
		$checkout = $_POST['checkout'];
		//$bookcheckout_time = $_POST['bookcheckout_time'];
		//$extend_reservation = $_POST['extend_reservation'];
		
		$paid_balance = $_POST['paid_balance'];
		
		$extended_days = $_POST['extended_days'];
		
		$discount = $_POST['discount'];
		
		$date1=date_create($checkin);
        $date2=date_create($checkout);
        $diff=date_diff($date1,$date2);
        $days=$diff->format("%a");
		$roomid = $_GET['room_id'];
		
		//$query1 = $conn->query("SELECT * FROM `guest` WHERE `position`='$position'") or die(mysqli_error());
	    //$fetch1 = $query1->fetch_array();
		
		$query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `room_id` = '$roomid' && `checkin` = '$checkout' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+7 HOURS"));
		    if($row > 0){
			echo "<script>alert('Room no is not available');history.go(-1);</script>";
		
			}else{
			//$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			//$fetch2 = $query2->fetch_array();
			//$total = $room_price * $extend_reservation;
			$total2 = 500 * $extra_bed;
			$total3 = $paid_balance * $total_balance;
			//$total4 = ($total / 100) * $discount;
			//$total5 = $total - $total4;
			//$total6 = $extended_days + $extend_reservation;
			$total7 = $total2 + $total3 + $early_checkin;
			$conn->query("UPDATE `transaction` SET `room_no` = '$room_no', `days` = '$days', `extend_days` = '$extended_days', `early_checkin` = '$early_checkin', `extra_bed` = '$extra_bed', `status` = 'Check In', `checkin_time` = '$checkin_time', `previous_balance` = '$total3', `bill` = '$total7' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			//header("location:checkin.php");
			echo "<script>
	        alert('Successfully Confirm Check In!');
	        window.location = 'checkin.php';
            </script>";
	}
	}
?>
 