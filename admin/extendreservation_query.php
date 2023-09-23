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
	    if(ISSET($_POST['extend_reservation'])){
		//$checkin = $_POST['checkin'];
		//$checkout = $_POST['checkout'];
		//$room_no = $_POST['room_no'];
		//$room_type = $_POST['room_type'];
		//$room_price = $_POST['room_price'];
		
		//$early_checkin = $_POST['early_checkin'];
		
		$extra_towel = $_POST['extra_towel'];
		//$extratowel_count = $_POST['extratowel_count'];
		
		//$extrabed_count = $_POST['extrabed_count'];
		$extra_bed = $_POST['extra_bed'];
		
		//$lostkey_count = $_POST['lostkey_count'];
		$lost_key = $_POST['lost_key'];
		
		//$total_bill = $_POST['total_bill'];
		
		
		
		$transid = $_GET['transaction_id'];
		$roomid = $_GET['room_id'];
		
		
		$query_transid = $conn->query("SELECT * FROM `transaction` WHERE `transaction_id` = '$transid'") or die(mysqli_error($conn));
		$row_transid = $query_transid->fetch_array();

		//$total = $room_price * $extend;
		$total2 = 500 * $extra_bed;
		$total3 = 100 * $extra_towel;
		$total4 = 300 * $lost_key;
		//$total5 = ($total / 100) * $discount;
		//$total6 = $total - $total5;
		//$total7 = $extended_days + $extend;
		$total8 = $row_transid['bill'] + $total2 + $total3 + $total4;
		$total9 = $extra_towel + $row_transid['extra_towel'];
		$total10 = $extra_bed + $row_transid['extra_bed'];
		$total11 = $lost_key + $row_transid['lost_key'];
	
		$conn->query("UPDATE `transaction` SET `extra_towel` = '$total9', `extra_bed` = '$total10', `lost_key` = '$total11', `bill` = '$total8' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error($conn));
		//header("location:checkin.php");
				echo "<script>
	alert('Successfully Add Extra Charge!');history.go(-1);
	
    </script>";
		
		}
?>
